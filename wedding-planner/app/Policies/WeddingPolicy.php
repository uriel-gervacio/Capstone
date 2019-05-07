<?php

namespace App\Policies;

use App\User;
use App\Wedding;
use Illuminate\Auth\Access\HandlesAuthorization;

class WeddingPolicy
{
    use HandlesAuthorization;

     /**
     * Determine whether the user can view the weddings index.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function index(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the wedding.
     *
     * @param  \App\User  $user
     * @param  \App\Wedding  $wedding
     * @return mixed
     */
    public function viewRecord(User $user, Wedding $wedding)
    {
        return $user->isAdmin();
    }

    /**
     * Staff and COuple can view their wedding.
     *
     * @param  \App\User  $user
     * @param  \App\Wedding  $wedding
     * @return mixed
     */
    public function viewDetails(User $user, Wedding $wedding)
    {
        return $user->isAdmin() or $user->email === $wedding->brideEmail or $user->email === $wedding->groomEmail;
    }

    /**
     * Determine whether the user can create weddings.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the wedding Details.
     *
     * @param  \App\User  $user
     * @param  \App\Wedding  $wedding
     * @return mixed
     */
    public function update(User $user, Wedding $wedding)
    {
        return $user->isAdmin() or $user->email === $wedding->brideEmail or $user->email === $wedding->groomEmail;
    }

    /**
     * Determine whether the user can update the wedding Record.
     *
     * @param  \App\User  $user
     * @param  \App\Wedding  $wedding
     * @return mixed
     */
    public function updateRecord(User $user, Wedding $wedding)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the wedding.
     *
     * @param  \App\User  $user
     * @param  \App\Wedding  $wedding
     * @return mixed
     */
    public function delete(User $user, Wedding $wedding)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the wedding.
     *
     * @param  \App\User  $user
     * @param  \App\Wedding  $wedding
     * @return mixed
     */
    public function restore(User $user, Wedding $wedding)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the wedding.
     *
     * @param  \App\User  $user
     * @param  \App\Wedding  $wedding
     * @return mixed
     */
    public function forceDelete(User $user, Wedding $wedding)
    {
        return $user->isAdmin();
    }
}
