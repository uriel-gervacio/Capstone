<?php

namespace App\Policies;

use App\User;
use App\Music;
use Illuminate\Auth\Access\HandlesAuthorization;

class MusicPolicy
{
    use HandlesAuthorization;

     /**
     * Determine whether the user can view the song.
     *
     * @param  \App\User  $user
     * @param  \App\Music  $music
     * @return mixed
     */
    public function view(User $user, Music $music)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the Music index.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function index(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can create a song.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the song.
     *
     * @param  \App\User  $user
     * @param  \App\Music  $music
     * @return mixed
     */
    public function update(User $user, Music $music)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the song.
     *
     * @param  \App\User $user
     * @param Music $music
     * @return mixed
     */
    public function delete(User $user, Music $music)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the song.
     *
     * @param  \App\User  $user
     * @param  \App\Music  $music
     * @return mixed
     */
    public function restore(User $user, Music $music)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the song.
     *
     * @param  \App\User  $user
     * @param  \App\Music  $music
     * @return mixed
     */
    public function forceDelete(User $user, Music $music)
    {
        return $user->isAdmin();
    }
}
