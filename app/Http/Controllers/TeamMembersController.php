<?php

namespace App\Http\Controllers;

use App\Team;

class TeamMembersController extends Controller
{
    /**
     * Add a new member to the given team.
     *
     * @param Team $team
     */
    public function store(Team $team)
    {
        $this->authorize($team);

        return 'Add the user to the team.';
    }
}
