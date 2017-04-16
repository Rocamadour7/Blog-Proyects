<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Session;
use Carbon\Carbon;

class PostsController extends Controller
{
    // Carbon Constructor
    public function __construct()
    {
      $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::latest('id')->paginate(10);
      return view('admin.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      $tags = Tag::all();
      return view('admin.posts.create')->withCategories($categories)->withTags($tags);
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
        'title'       => 'required|max:255',
        'category_id' => 'required|integer',
        'body'        => 'required',
      ));

      $post = new Post;
      $post->title       = $request->title;
      $post->category_id = $request->category_id;
      $post->body        = $request->body;
      $post->slug        = str_slug($request->title, '-');
      $post->save();
      $post->tags()->sync($request->tags, false);

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
      return view('admin.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categories = Category::all();
      $post = Post::find($id);
      $tags = Tag::all();

      return view('admin.posts.edit')->withPost($post)->withCategories($categories)->withTags($tags);
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
        'title'       => 'required|max:255',
        'category_id' => 'required|integer',
        'body'        => 'required',
      ));

      $post = Post::find($id);
      $post->title       = $request->title;
      $post->category_id = $request->category_id;
      $post->body        = $request->body;
      $post->slug        = str_slug($request->title, '-');
      $post->save();

      if (isset($request->tags)) {
        $post->tags()->sync($request->tags);
      } else {
        $post->tags()->sync(array());
      }

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
      $post->tags()->detach();
      $post->delete();

      Session::flash('success', 'La publicación ha sido eliminada!');
      return redirect()->route('posts.index');
    }
}
