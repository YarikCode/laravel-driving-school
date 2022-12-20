<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Application;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, Application $app) {
        return $user->id === $app->user_id;
    }
}
