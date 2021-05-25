<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class administratorPolicy
{
    use HandlesAuthorization;

    public function administrator(User $user)
    {
        return ($user->admin == 0);
    }
}
