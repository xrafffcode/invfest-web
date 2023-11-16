<?php

namespace App\Interfaces;

interface CompetitionRepositoryInterface
{
    public function getAllCompetitions();
    public function getCompetitionBySlug($slug);
    public function getCompetitionById($id);
    public function getCompetitionByLevel(string $level);
    public function createCompetition($data);
    public function updateCompetition($data, $id);
    public function deleteCompetition($id);
}
