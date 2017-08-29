<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tran;
use App\User;
use App\Tipo;
use Auth;

class TransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo = Tipo::orderBy('nome','asc')->get();
        $user = User::all();
        $tran = Tran::orderBy('data','desc')->where('user_id','=',Auth::user()->id)
                                                ->get();
        $nCre = Tran::orderBy('data','desc')->where('user_id','=',Auth::user()->id)
                                                ->where('credito','=','1')->count();
        $nDeb = Tran::orderBy('data','desc')->where('user_id','=',Auth::user()->id)
                                                ->where('credito','=','0')->count();
        return view('trans.index')->with('tipo',$tipo)->with('user',$user)
                                  ->with('tran',$tran)->with('nCre',$nCre)
                                  ->with('nDeb',$nDeb);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = Tipo::all();
        return view('trans.create')->with('tipo',$tipo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tran::create($request->all());
        return redirect('/trans');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipo = Tipo::all();
        $user = User::all();
        $tran = Tran::all();
        return view('trans.show')->with('tipo',$tipo)->with('user',$user)
                                  ->with('tran',$tran);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = Tipo::all();
        $user = User::all();
        $tran = Tran::all();
        return view('trans.edit')->with('tipo',$tipo)->with('user',$user)
                                  ->with('tran',$tran);
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
        $tran = Tran::find($id);
        $tran->user_id = $request->user_id;
        $tran->tipo_id = $request->tipo_id;
        $tran->data = $request->data;
        $tran->valor = $request->valor;
        $tran->credito = $request->credito;
        $tran->save();
        return redirect('/trans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tran = Tran::find($id);
        $tran->delete();
        return redirect('/trans');
    }
}
