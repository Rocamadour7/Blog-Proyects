<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class BlogController extends Controller
{
  public function __construct()
  {
    Carbon::setLocale('es');
  }

  public function getSingle($slug)
  {
    $post = Post::where('slug', $slug)->first();

    return view('blog.single')->withPost($post);
  }
}
