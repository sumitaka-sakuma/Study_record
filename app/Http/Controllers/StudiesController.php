<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Study;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StudiesFormValidation;

class StudiesController extends Controller
{
    public function index(){

        $studies = DB::table('studies')
                   ->select('id', 'content', 'created_at')
                   ->orderBy('id', 'desc')
                   ->paginate(10);

        return view('studies.index', compact('studies'));
    }

    public function create(){

        return view('studies.create');
    }

    public function store(StudiesFormValidation $request){
        
        $studies = new Study();

        $studies->user_id = auth()->id();
        $studies->content = $request->input('content');
        $studies->started_date = $request->input('started_date');
        $studies->started_time = $request->input('started_time');
        $studies->ended_date = $request->input('ended_date');
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
        $studies->started_date = $request->input('started_date');
        $studies->started_time = $request->input('started_time');
        $studies->ended_date = $request->input('ended_date');
        $studies->ended_time = $request->input('ended_time');
        $studies->remark = $request->input('remark');
        
        $studies->save();

        return redirect('studies/index');
    }

    public function destroy($id){

        $studies = Study::find($id);

        $studies->delete();

        return redirect('studies/index');
    }

}
