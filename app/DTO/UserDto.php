<?php

namespace App\DTO;
use App\Models\User;
class UserDto
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public readonly int $userId,
        public readonly string $userName,
        public readonly string $userEmail,
    )
    {}

    public static function fromUserModel(User $user):self{
         return new self(
            userId:$user->id,
            userName:$user->name,
            userEmail:$user->email,
         );
    }

}
