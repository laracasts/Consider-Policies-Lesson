<?php

namespace App\Policies;

use App\Team;

// This is our home-grown example. 
// Also review Laravel's native
// policy functionality.

class AddTeamMemberPolicy
{
    /**
     * @var Team
     */
    protected $team;
    
    /**
     * Create a new policy instance.
     *
     * @param Team $team
     */
    public function __construct(Team $team)
    {
        $this->team = $team;
    }
    
    /**
     * Check if the policy allows the current action.
     */
    public function allows()
    {
        // Here, you'd place to same logic that 
        // we ultimately put into TeamPolicy@store.
    }
}
