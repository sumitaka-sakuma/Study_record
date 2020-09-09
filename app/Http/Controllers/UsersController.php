<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Study;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){

        $users = User::all();
        //dd($users);
        
        return view('users.index', compact('users'));
    }

    public function show($id){

        $users = User::find($id);

        return view('users.show', compact('users'));
    }
}
