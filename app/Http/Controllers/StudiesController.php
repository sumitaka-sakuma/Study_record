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

}
