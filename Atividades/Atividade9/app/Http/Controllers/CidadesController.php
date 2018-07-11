<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades=\App\cidades::all();
        return view('cidades.index',compact('cidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados=\App\Estados::all();
        return view('cidades.create',compact('estados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cidade= new \App\cidades;
        $cidade->nome=$request->get('nome');
        $cidade->estado_id=$request->get('estado');
        $cidade->save();

        return redirect('cidades')->with('success', 'cidade inserido.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cidade = \App\cidades::find($id);
        $estados=\App\Estados::all();
        return view('cidades.edit',compact('cidade','id','estados'));
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
        $cidade= \App\cidades::find($id);
        $cidade->nome=$request->get('nome');
        $cidade->estado_id=$request->get('estado');
        $cidade->save();

        return redirect('cidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cidade = \App\cidades::find($id);
        $cidade->delete();
        return redirect('cidades')->with('success','cidade Excluido');
    }
}
