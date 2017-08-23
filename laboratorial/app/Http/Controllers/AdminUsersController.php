<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class AdminUsersController extends Controller
{
  public function index()
  {
      $users = User::orderBy('name','asc')->get();
      return view('users.index')->with('users',$users);
  }

  public function store(Request $request)
  {
    User::create($request->all());
    return redirect('/users');
  }

  public function show($id)
  {
    $users = User::find($id);
    return view('users.show')->with('users',$users);
  }

  public function edit($id)
  {
    $users = User::find($id);
    return view('users.edit')->with('users',$users);
  }

  public function update(Request $request,$id)
  {
    $users = User::find($id);
    $users->name = $request->name;
    $users->email = $request->email;
    $users->type = $request->type;
    $users->save();
    return redirect('/users');
  }

  public function destroy($id)
  {
    $users = User::find($id);
    $users->delete();
    return redirect('/users');
  }
}
