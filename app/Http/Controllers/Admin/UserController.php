<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
class UserController extends Controller
{
    public function index(){

          $users=User::all();
          return view('adminPanel.user.userList',compact('users'));

    }

    public function create(){
        return view('adminPanel.user.addUser');
    }
    public function store(UserStoreRequest $request){


             User::insert([
                 'name' =>$request->username,
                 'email'=>$request->email,
                 'password'=> Hash::make('pass1234') ,
             ]);
      return redirect()
             ->route('user.list')
              ->with('success','User Recorded Added Successfully!');;

    }
    public function edit(User $user){


          return view('adminPanel.user.addUser',compact('user'));
    }
    public function update(UserUpdateRequest $request, User $user){


            $user->update([
                        'name' =>$request->username,
                        'email'=>$request->email,
                        'password'=> Hash::make('pass1234') ,
            ]);

            return redirect()
            ->route('user.list')
            ->with('success','User Recorded Updated Successfully!');

    }

   public function destroy(User $user){
        $user->delete();
        return redirect()
            ->route('user.list')
            ->with('success','User Recorded deleted Successfully!');

   }


}
