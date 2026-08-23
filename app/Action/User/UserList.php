<?php

namespace App\Action\User;
use App\Models\User;
class UserList
{
    /**
     * Create a new class instance.
     */
    public function List(){

        return User::all();
    }
}
