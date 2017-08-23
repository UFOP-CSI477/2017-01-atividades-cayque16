<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;

class AdminProceduresController extends Controller
{
  public function index()
  {
    $procedures = Procedure::orderBy('name','asc')->get();
    return view('procedimentos.index')->with('procedures',$procedures);
  }

  public function create()
  {
    return view('procedimentos.create');
  }

  public function store(Request $request)
  {
    Procedure::create($request->all());
    return redirect('/procedimentos');
  }

  public function show($id)
  {
    $procedures = Procedure::find($id);
    return view('procedimentos.show')->with('procedures',$procedures);
  }

  public function edit($id)
  {
    $procedures = Procedure::find($id);
    return view('procedimentos.edit')->with('procedures',$procedures);
  }

  public function update(Request $request,$id)
  {
    $procedures = Procedure::find($id);
    $procedures->name = $request->name;
    $procedures->price = $request->price;
    $procedures->save();
    return redirect('/procedimentos');
  }

  public function destroy($id)
  {
    $procedures = Procedure::find($id);
    $procedures->delete();
    return redirect('/procedimentos');
  }
}
