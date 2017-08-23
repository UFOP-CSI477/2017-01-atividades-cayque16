<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\User;
use App\Procedure;


class TestsController extends Controller
{
    public function create()
    {
        $procedures = Procedure::orderBy('name')->get();
        return view('tests.create')->with('procedures', $procedures);
    }

    public function store(Request $request)
    {
      Test::create($request->all());
      return redirect('/listar');
    }
}
