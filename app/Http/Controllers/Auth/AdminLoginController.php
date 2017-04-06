<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
      return view('auth.admin-login');
    }

    public function login(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|max:255|email',
        'password' => 'required|min:6',
      ]);

      $credentials = [
        'email' => $request->email,
        'password' => $request->password,
      ];

      if (Auth::guard('admin')->attempt($credentials)) {
        return redirect()->intended(route('posts.index'));
      }

      return redirect()->back()->withInput($request->only('email'));
    }
}
