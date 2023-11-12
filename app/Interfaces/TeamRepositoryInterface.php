<?php

namespace App\Interfaces;

interface TeamRepositoryInterface
{
    public function getAllTeams();
    public function getTeamById($id);
    public function updateTeamStatus(array $data, $id);
    public function deleteTeam($id);
}
