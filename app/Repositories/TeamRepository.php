<?php

namespace App\Repositories;

use App\Interfaces\TeamRepositoryInterface;
use App\Models\Team;

class TeamRepository implements TeamRepositoryInterface
{
    public function getAllTeams()
    {
        return Team::all();
    }

    public function getTeamById($id)
    {
        return Team::find($id);
    }

    public function updateTeamStatus(array $data, $id)
    {
        return Team::find($id)->update($data);
    }

    public function deleteTeam($id)
    {
        return Team::destroy($id);
    }
}
