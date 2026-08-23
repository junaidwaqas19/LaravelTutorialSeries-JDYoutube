<?php

namespace App\Action\User;
use App\Models\User;
class UserDelete
{
    /**
     * Create a new class instance.
     */
    public function destroy($id)
    {
        return User::findOrFail($id)->delete();
    }
}
