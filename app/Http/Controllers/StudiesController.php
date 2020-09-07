<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;
use Illuminate\Support\Facades\DB;

class StudiesController extends Controller
{
    public function index(){

        $content = Study::all();

        return view('studies.index', compact('content'));
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

}
