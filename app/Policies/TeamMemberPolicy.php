<?php

namespace App\Policies;

use App\User;
use App\Team;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamMemberPolicy
{
    use HandlesAuthorization;
    
    /**
     * The policy for adding a new team member.
     *
     * @param User $user
     * @param Team $team
     */
    public function store(User $user, Team $team)
    {
        if (! $team->isOwnedBy($user)) {
            abort(403, 'You are not the owner of this team.');
        }
    
        // Alternatively, place this in your main Team class, itself,
        // and let it be responsible for throwing an exception at
        // that point, since this represents an important business
        // rule.
        if ($team->isMaxedOut()) {
            abort(403, 'Your team is maxed out.');
        }

        return true;
    }
}
