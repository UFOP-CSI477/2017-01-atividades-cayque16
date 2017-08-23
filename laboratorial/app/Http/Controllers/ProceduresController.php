<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;

class ProceduresController extends Controller
{    
    public function index()
    {
      $procedures = Procedure::orderBy('name','asc')->get();
      return view('procedures.index')->with('procedures',$procedures);
    }
}
