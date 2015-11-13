<?php

namespace App\Policies;

use App\User;
use App\Word;
use Illuminate\Auth\Access\HandlesAuthorization;

class WordPolicy
{
    use HandlesAuthorization;

    /**
     * Determine if the given user can delete the given word.
     *
     * @param  User  $user
     * @param  Word  $word
     * @return bool
     */
    public function destroy(User $user, Word $word)
    {
        return $user->id === $word->user_id;
    }
}
