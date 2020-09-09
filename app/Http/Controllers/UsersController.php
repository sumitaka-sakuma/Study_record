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

    public function edit($id){

        $users = User::find($id);

        //dd($users);

        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id){

        $users = User::find($id);

        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->birthday = $request->input('birthday');
        $users->gender = $request->input('gender');
        $users->self_introduction = $request->input('self_introduction');
        $users->image_path = $request->input('image_path');

        $users->save();

        return redirect('users/index');
    }
}
