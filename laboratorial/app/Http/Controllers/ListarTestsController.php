<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Procedure;
use Auth;

class ListarTestsController extends Controller
{
    public function index()
    {
        //$procedures = Procedure::orderBy('name','asc')->get();
        //$tests = Test::orderBy('date','desc')->get();
        $tests = Test::orderBy('date','desc')->where('user_id','=',Auth::user()->id)->get();
        $nTests = Test::orderBy('date','desc')->where('user_id','=',Auth::user()->id)->count();
        $valor = Test::join('procedures','tests.procedure_id','=','procedures.id')
        ->where('tests.user_id','=',Auth::user()->id)->sum('procedures.price');
        //$tests = Test::all();
        return view('listar.index')->with('tests',$tests)->with('nTests',$nTests)
        ->with('valor',$valor);
    }

    public function store(Request $request)
    {
      Test::create($request->all());
      return redirect('/listar');
    }

    public function show($id)
    {
      $tests = Test::find($id);
      return view('listar.show')->with('tests',$tests);
    }

    public function edit($id)
    {
      $tests = Test::find($id);
      $procedures = Procedure::orderBy('name')->get();
      return view('listar.edit')->with('tests',$tests)->with('procedures',$procedures);
    }

    public function update(Request $request,$id)
    {
      $tests = Test::find($id);
      $tests->user_id = $request->user_id;
      $tests->procedure_id = $request->procedure_id;
      $tests->date = $request->date;
      $tests->save();
      return redirect('/listar');
    }

    public function destroy($id)
    {
      $tests = Test::find($id);
      $tests->delete();
      return redirect('/listar');
    }
}
