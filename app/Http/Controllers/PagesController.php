<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use App\Post;
use Carbon\Carbon;

class PagesController extends Controller
{
  public function __construct()
  {
    Carbon::setLocale('es');
  }

  public function getHome () {
    $posts = Post::latest()->simplePaginate(9);
    return view('pages.home')->withPosts($posts);
  }

  public function getAbout () {
    return view('pages.about');
  }

  public function getContact () {
    return view('pages.contact');
  }

  public function postContact (Request $request) {
    $this->validate($request, array(
      'name'    => 'required|max:120',
      'email'   => 'required|email',
      'subject' => 'required|max:120',
      'message' => 'required'
    ));

    $data = array(
      'name'    => $request->name,
      'email'   => $request->email,
      'subject' => $request->subject,
      'bodyMessage' => $request->message
    );

    Mail::send('emails.contact', $data, function($message) use ($data) {
      $message->from($data['email'], $data['name']);
      $message->to('luis_molina@outlook.com', 'Luis Molina');
      $message->subject('Contacto');
    });

    Session::flash('success', 'Correo enviado!');

    return redirect('Contacto');
  }
}
