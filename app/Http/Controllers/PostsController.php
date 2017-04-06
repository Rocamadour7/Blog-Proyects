<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;
use Carbon\Carbon;

class PostsController extends Controller
{
    // Carbon Constructor
    public function __construct()
    {
      $this->middleware('auth:admin');
      Carbon::setLocale('es');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::latest('id')->paginate(10);
      return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('posts.create');
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
        'title' => 'required|max:255',
        'body'  => 'required',
      ));

      $post = new Post;
      $post->title = $request->title;
      $post->body  = $request->body;
      $post->slug  = str_slug($request->title, '-');
      $post->save();

      Session::flash('success', 'Publicación guardada exitosamente!');

      return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::find($id);
      return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);
      return view('posts.edit')->withPost($post);
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
        'title' => 'required|max:255',
        'body'  => 'required',
      ));

      $post = Post::find($id);
      $post->title = $request->title;
      $post->body  = $request->body;
      $post->slug  = str_slug($request->title, '-');
      $post->save();

      Session::flash('success', 'Cambios guardados!');

      return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();

      Session::flash('success', 'La publicación ha sido eliminada!');
      return redirect()->route('posts.index');
    }
}
