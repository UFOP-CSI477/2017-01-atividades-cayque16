<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedures;

class GeralController extends Controller
{
    public function index()
    {
      $procedures = Procedures::orderBy('name','desc')->get();
      //dd($procedures);
      //return $procedures;
      return view('geral.index')->with('procedures',$procedures);
    }
}
