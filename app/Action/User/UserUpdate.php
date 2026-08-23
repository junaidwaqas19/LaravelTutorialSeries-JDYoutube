<?php

namespace App\Action\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserUpdate
{
    /**
     * Create a new class instance.
     */
    public function update($user,$request)
    {
       return $user->update([
                        'name' =>$request->username,
                        'email'=>$request->email,
                        'password'=> Hash::make('pass1234'),
            ]);
    }
}
