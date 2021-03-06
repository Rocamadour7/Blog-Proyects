<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Session;

class AdminControlController extends Controller
{
    public function __construct() {
      $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::orderBy('name')->paginate(10);
      $admins = Admin::orderBy('name')->paginate(10);
      return view('admin.users.index')->withAdmins($admins)->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
        'name'     => 'required|max:255',
        'email'    => 'required|email|unique:admins',
        'password' => 'required|min:6|confirmed'
      ));

      $admin = new Admin;
      $admin->name = $request->name;
      $admin->email = $request->email;
      $admin->password = bcrypt($request->password);
      $admin->save();

      return redirect()->route('users.index');
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
      $admin = Admin::find($id);
      return view('admin.admins.edit')->withAdmin($admin);
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
      $this->validate($request, array(
        'name'  => 'required|max:255',
        'email' => 'required|email'
      ));

      $admin = Admin::find($id);
      $admin->name = $request->name;
      $admin->email = $request->email;
      $admin->save();

      Session::flash('success', 'Cambios guardados!');

      return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $admin = Admin::find($id);
      $admin->delete();

      Session::flash('success', 'Administrador Eliminado');
      return redirect()->route('users.index');
    }
}
