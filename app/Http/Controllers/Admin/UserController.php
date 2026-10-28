<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\{UserStoreRequest,UserUpdateRequest};
use App\Action\User\{UserList,UserCreate,UserUpdate,UserDelete};
use App\DTO\UserDto;

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


          return view('adminPanel.user.addUser')
                  ->with('user',UserDto::fromUserModel($user));


    }
    public function update(UserUpdateRequest $request, User $user,UserUpdate $userUpdate){

            $userUpdate->update($user,$request);


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
