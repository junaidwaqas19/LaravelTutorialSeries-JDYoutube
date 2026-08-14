<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(){

          $users=User::all();
          return view('adminPanel.user.userList',compact('users'));

    }

    public function create(){
        return view('adminPanel.user.addUser');
    }
    public function store(Request $request){

     $request->validate([
           'username'=> 'required|string|max:255',
           'email'   => 'required|string|max:255|unique:users,email',
     ]);
             User::insert([
                 'name' =>$request->username,
                 'email'=>$request->email,
                 'password'=> Hash::make('pass1234') ,
             ]);
      return redirect()
             ->route('user.list')
              ->with('success','User Recorded Added Successfully!');;

    }
    public function edit($id){
         $user= User::findOrFail($id);

          return view('adminPanel.user.addUser',compact('user'));
    }
    public function update(Request $request,$id){

         $user= User::findOrFail($id);

          $request->validate([
           'username'=> 'required|string|max:255',
           'email'   => 'required|string|max:255|unique:users,email,'.$user->id,
     ]);
            $user->update([
                        'name' =>$request->username,
                        'email'=>$request->email,
                        'password'=> Hash::make('pass1234') ,
            ]);

            return redirect()
            ->route('user.list')
            ->with('success','User Recorded Updated Successfully!');

    }

   public function destroy($id){
        User::findOrFail($id)->delete();
        return redirect()
            ->route('user.list')
            ->with('success','User Recorded deleted Successfully!');

   }


}
