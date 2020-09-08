<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use Illuminate\Support\Facades\DB;

class StudiesController extends Controller
{
    public function index(){

        $studies = DB::table('studies')
                   ->select('content', 'created_at')
                   ->orderBy('created_at', 'asc')
                   ->get();

        return view('studies.index', compact('studies'));
    }

    public function create(){

        return view('studies.create');
    }

    public function store(Request $request){
        
        $studies = new Study();

        $studies->content = $request->input('content');
        $studies->started_time = $request->input('started_time');
        $studies->ended_time = $request->input('ended_time');
        $studies->remark = $request->input('remark');

        $studies->save();

        return redirect('studies/index');
    }

    public function show($id){

        $studies = Study::find($id);

        return view('studies.show', compact('studies'));
    }

    public function edit($id){

        $studies = Study::find($id);

        return view('studies.edit', compact('studies'));
    }

    public function update(Request $request, $id){

        $studies = Study::find($id);
        
        $studies->content = $request->input('content');
        $studies->started_time = $request->input('started_time');
        $studies->ended_time = $request->input('ended_time');
        $studies->remark = $request->input('remark');
        
        $studies->save();

        return redirect('studies/index');
    }

}
