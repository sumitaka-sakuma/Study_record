<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Study;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){

        $users = DB::table('users')
                  ->join('studies', 'users.id', '=', 'studies.id')
                  ->select('users.name', 'users.id', 'studies.*')
                  ->orderBy('studies.created_at', 'desc')
                  ->get();

        return view('users.index', compact('users'));
    }

    public function show($id){

        
        $users = DB::table('studies')
                 ->select('id', 'content', 'started_date', 'started_time', 'ended_date', 'ended_time', 'remark', 'created_at')
                 ->where('user_id', '=', $id)
                 ->orderBy('id', 'desc')
                 ->get();

        return view('users.show', compact('users'));
    }
}
