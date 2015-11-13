<?php

namespace App\Repositories;

use App\User;
use App\Word;

class WordRepository
{
    /**
     * Get all of the words for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Word::where('user_id', $user->id)
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}