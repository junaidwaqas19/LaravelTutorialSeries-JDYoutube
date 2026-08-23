<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Action\User\UserList;
use App\Action\User\UserCreate;
use App\Action\User\UserUpdate;
use App\Action\User\UserDelete;
class UserController extends Controller
{
    public function index(UserList $userList){


          return view('adminPanel.user.userList')
                 ->with('users',$userList->list());

    }

    public function create(){
        return view('adminPanel.user.addUser');
    }
    public function store(UserStoreRequest $request, UserCreate $userCreate){

            $userCreate->create($request);

      return redirect()
             ->route('user.list')
              ->with('success','User Recorded Added Successfully!');;

    }
    public function edit(User $user){


          return view('adminPanel.user.addUser',compact('user'));
    }
    public function update(UserUpdateRequest $request, User $user,UserUpdate $userUpdate){

            $userUpdate->update($id);


            return redirect()
            ->route('user.list')
            ->with('success','User Recorded Updated Successfully!');

    }

   public function destroy( $id, UserDelete $userDelete){
            $userDelete->destroy($id);

        return redirect()
            ->route('user.list')
            ->with('success','User Recorded deleted Successfully!');

   }


}
