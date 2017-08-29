<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
  public function index()
  {
    $user = User::orderBy('name','asc');
    return view('users.')
  }
}
