<?php

namespace App\Repositories;

use App\Interfaces\CompetitionRepositoryInterface;
use App\Models\Competition;

class CompetitionRepository implements CompetitionRepositoryInterface
{
    public function getAllCompetitions()
    {
        return Competition::all();
    }

    public function getCompetitionBySlug($slug)
    {
        return Competition::where('slug', $slug)->first();
    }

    public function getCompetitionById($id)
    {
        return Competition::find($id);
    }

    public function createCompetition($data)
    {
        return Competition::create($data);
    }

    public function updateCompetition($data, $id)
    {
        $competition = Competition::find($id);

        return $competition->update($data);
    }

    public function deleteCompetition($id)
    {
        $competition = Competition::find($id);

        return $competition->delete();
    }
}
