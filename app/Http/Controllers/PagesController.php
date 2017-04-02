<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PagesController extends Controller
{
  public function __construct()
  {
    Carbon::setLocale('es');
  }

  public function getHome () {
    $posts = Post::latest()->simplePaginate(5);
    return view('pages.home')->withPosts($posts);
  }

  public function getAbout () {
    return view('pages.about');
  }

  public function getContact () {
    return view('pages.contact');
  }
}
