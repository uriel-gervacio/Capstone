<?php

namespace App\Policies;

use App\User;
use App\Reading;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReadingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the reading.
     *
     * @param  \App\User  $user
     * @param  \App\Reading  $reading
     * @return mixed
     */
    public function view(User $user, Reading $reading)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the readings index.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function index(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create readings.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the reading.
     *
     * @param  \App\User  $user
     * @param  \App\Reading  $reading
     * @return mixed
     */
    public function update(User $user, Reading $reading)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the reading.
     *
     * @param  \App\User $user
     * @param Reading $reading
     * @return mixed
     */
    public function delete(User $user, Reading $reading)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the reading.
     *
     * @param  \App\User  $user
     * @param  \App\Reading  $reading
     * @return mixed
     */
    public function restore(User $user, Reading $reading)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the reading.
     *
     * @param  \App\User  $user
     * @param  \App\Reading  $reading
     * @return mixed
     */
    public function forceDelete(User $user, Reading $reading)
    {
        return $user->isAdmin();
    }
}
