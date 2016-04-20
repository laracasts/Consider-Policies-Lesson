<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * Determine if the team is owned by the given user.
     *
     * @param User $user
     */
    public function isOwnedBy(User $user)
    {
        return $this->owner_id == $user->id;
    }
    
    /**
     * Determine if the team size is maxed out.
     */
    public function isMaxedOut()
    {
        return false; // stub
    }
}
