<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use Session;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = Category::orderBy('id')->paginate(10);
      $tags = Tag::orderBy('id')->paginate(10);
      return view('admin.categories.index')->withCategories($categories)->withTags($tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array (
        'name'       => 'required|max:255',
      ));

      $tag = new Tag;
      $tag->name = $request->name;
      $tag->save();

      Session::flash('success', 'Etiqueta guardada exitosamente!');

      return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // No need
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tag = Tag::find($id);
      return view('admin.tags.edit')->withTag($tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, array (
        'name'       => 'required|max:255',
      ));

      $tag = Tag::find($id);
      $tag->name = $request->name;
      $tag->save();

      Session::flash('success', 'Cambios guardados!');

      return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $tag = Tag::find($id);
      $tag->posts()->detach();
      $tag->delete();

      Session::flash('success', 'La etiqueta ha sido eliminada!');
      return redirect()->route('categories.index');
    }
}
