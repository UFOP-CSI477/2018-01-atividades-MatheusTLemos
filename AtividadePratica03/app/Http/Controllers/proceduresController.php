<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class proceduresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userType = Auth::user()->type;
        $procedures= \App\Procedures::all();
        return view('procedures.index', compact('procedures', 'userType')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procedures.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $procedure = new \App\Procedures;
        $procedure->name = $request->get('name'); 
        $procedure->price = $request->get('price');
        $procedure->user_id = Auth::user()->id;

        $procedure->save();

        $userType = Auth::user()->type;
        $procedures= \App\Procedures::all();
        return view('procedures.index', compact('procedures', 'userType')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //   
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $userType = Auth::user()->type;
        $procedures=\App\Procedures::Where('name', 'like', '%' . $request->name . '%')->get();
        return view('procedures.index', compact('procedures', 'userType'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $procedure=\App\Procedures::find($id);;;
        return view('procedures.edit', compact('procedure', 'id'));
    }

    public function editPrice($id)
    {
        $procedure=\App\Procedures::find($id);;;
        return view('procedures.editPrice', compact('procedure', 'id'));
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
        $procedure = \App\Procedures::find($id);
        $procedure->name = $request->get('name'); 
        $procedure->price = $request->get('price');
        $procedure->user_id = Auth::user()->id;

        $procedure->save();

        $userType = Auth::user()->type;
        $procedures= \App\Procedures::all();
        return view('procedures.index', compact('procedures', 'userType')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $procedure = \App\Procedures::find($id);
        $procedure->delete();

        $userType = Auth::user()->type;
        $procedures= \App\Procedures::all();
        return view('procedures.index', compact('procedures', 'userType')); 
    }
}
