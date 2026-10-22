<?php

namespace App\Action\User;
use App\Models\User;
use App\DTO\UserDto;
class UserList
{
    /**
     * Create a new class instance.
     */
    public function List(){

        return User::orderby('id','desc')->get()
               ->map(fn(User $user)=>UserDto::fromUserModel($user));
    }
}
