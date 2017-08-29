<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo = Tipo::orderBy('nome','asc')->get();
        return view('tipos.index')->with('tipo',$tipo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
        $tipo = Tipo::orderBy('name','asc')->get();
        return view('tipos.create')->with('tipo',$tipo);
     }

 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {
     Tipo::create($request->all());
     return redirect('/tipos');
 }

 /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function show($id)
 {
     $tipo = Tipo::find($id);
     return view('tipos.show')->with('tipo',$tipo);
 }

 /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function edit($id)
 {
     $tipo = Tipo::find($id);
     return view('tipos.edit')->with('tipo',$tipo);
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
     $tipo = Tipo::find($id);
     $tipo->nome = $request->nome;
     return redirect('/tipos');
 }

 /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function destroy($id)
 {
     $tipo = Tipo::find($id);
     $tipo->delete();
     return redirect('/tipos');
 }
}
