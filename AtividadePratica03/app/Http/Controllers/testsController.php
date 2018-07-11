<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class testsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userType = Auth::user()->type;
        $userId = Auth::user()->id;
        if ($userType==3) {
            $tests = DB::select('SELECT tests.id as id, procedures.name as pnome, users.name as unome, procedures.price as price, tests.date as date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id AND tests.user_id=?  AND users.id=?' ,[$userId, $userId]);
        }else{
            $tests = DB::select('SELECT tests.id as id, procedures.name as pnome, users.name as unome, procedures.price as price, tests.date as date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id AND tests.user_id=users.id');
        }
        return view('tests.index', compact('tests', 'userType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list= \App\Procedures::all();
        return view('tests.create', compact('list', 'userType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $test = new \App\Tests;
        $test->date = $request->get('date');
        $test->procedure_id = $request->get('procedure');
        $test->user_id = $userId;
        $test->save();

        $userType = Auth::user()->type;
        if ($userType==3) {
            $tests = DB::select('SELECT tests.id as id, procedures.name as pnome, users.name as unome, procedures.price as price, tests.date as date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id AND tests.user_id=?  AND users.id=?' ,[$userId, $userId]);
        }else{
            $tests = DB::select('SELECT tests.id as id, procedures.name as pnome, users.name as unome, procedures.price as price, tests.date as date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id AND tests.user_id=users.id');
        }
        return view('tests.index', compact('tests', 'userType'));
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
        $test=\App\Tests::find($id);;;
        $list= \App\Procedures::all();
        return view('tests.edit', compact('test', 'list', 'id'));
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
        $userId = Auth::user()->id;
        $test = \App\Tests::find($id);
        $test->date = $request->get('date');
        $test->procedure_id = $request->get('procedure');
        $test->user_id = $userId;
        $test->save();

        $userType = Auth::user()->type;
        if ($userType==3) {
            $tests = DB::select('SELECT tests.id as id, procedures.name as pnome, users.name as unome, procedures.price as price, tests.date as date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id AND tests.user_id=?  AND users.id=?' ,[$userId, $userId]);
        }else{
            $tests = DB::select('SELECT tests.id as id, procedures.name as pnome, users.name as unome, procedures.price as price, tests.date as date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id AND tests.user_id=users.id');
        }
        return view('tests.index', compact('tests', 'userType'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = \App\Tests::find($id);
        $test->delete();

        $test->user_id = $userId;
        $userType = Auth::user()->type;
        if ($userType==3) {
            $tests = DB::select('SELECT tests.id as id, procedures.name as pnome, users.name as unome, procedures.price as price, tests.date as date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id AND tests.user_id=?  AND users.id=?' ,[$userId, $userId]);
        }else{
            $tests = DB::select('SELECT tests.id as id, procedures.name as pnome, users.name as unome, procedures.price as price, tests.date as date FROM tests, procedures, users WHERE tests.procedure_id = procedures.id AND tests.user_id=users.id');
        }
        return view('tests.index', compact('tests', 'userType'));
    }
}
