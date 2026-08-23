<?php

namespace App\Action\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserCreate
{
    /**
     * Create a new class instance.
     */
    public function create($request)
    {
         return   User::insert([
                 'name' =>$request->username,
                 'email'=>$request->email,
                 'password'=> Hash::make('pass1234') ,
             ]);
    }
}
