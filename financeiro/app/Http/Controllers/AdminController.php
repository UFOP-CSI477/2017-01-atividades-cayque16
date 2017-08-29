<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tran;

class AdminController extends Controller
{
  public function users()
  {
      $user = User::orderBy('name','asc')->get();
      return view('admin.listaUsers')->with('user',$user);
  }

  public function trans()
  {
    $user = User::orderBy('name','asc');
    $trans = Tran::orderBy('data','desc')->get();
    $nCre = Tran::orderBy('data','desc')->where('credito','=','1')->count();
    $nDeb = Tran::orderBy('data','desc')->where('credito','=','0')->count();
    return view('admin.listaTrans')->with('trans',$trans)->with('nCre', $nCre)
                                   ->with('nDeb',$nDeb);
  }
}
