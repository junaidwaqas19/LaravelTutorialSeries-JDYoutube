<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('adminPanel.user.userList');

    }

    public function create(){
        return view('adminPanel.user.addUser');
    }
    public function store(Request $request){

        return redirect()->route('user.list')->with([
            'username'=> $request->username,
            'email' => $request->email,
        ]);

    }
}
