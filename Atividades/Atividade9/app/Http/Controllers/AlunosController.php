<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos=\App\Alunos::all();
        return view('alunos.index',compact('alunos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cidades=\App\Cidades::all();
        return view('alunos.create',compact('cidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno= new \App\Alunos;
        $aluno->nome=$request->get('nome');
        $aluno->rua=$request->get('rua');
        $aluno->numero=$request->get('numero');
        $aluno->cidade_id=$request->get('cidade');
        $aluno->bairro=$request->get('bairro');
        $aluno->cep=$request->get('cep');
        $aluno->mail=$request->get('mail');
        $aluno->save();

        return redirect('alunos')->with('success', 'Aluno inserido.');
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
        $aluno = \App\Alunos::find($id);
        $cidades = \App\Cidades::all();

        return view('alunos.edit',compact('aluno','id','cidades'));
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
        $aluno= \App\Alunos::find($id);
        $aluno->nome=$request->get('nome');
        $aluno->rua=$request->get('rua');
        $aluno->numero=$request->get('numero');
        $aluno->cidade_id=$request->get('cidade');
        $aluno->bairro=$request->get('bairro');
        $aluno->cep=$request->get('cep');
        $aluno->mail=$request->get('mail');
        $aluno->save();

        return redirect('alunos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = \App\Alunos::find($id);
        $aluno->delete();
        return redirect('alunos')->with('success','Aluno Excluido');
    }
}
