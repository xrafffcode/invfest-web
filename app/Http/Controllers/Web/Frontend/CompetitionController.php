<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\CompetitionRepositoryInterface;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    private CompetitionRepositoryInterface $competitionRepository;

    public function __construct(CompetitionRepositoryInterface $competitionRepository)
    {
        $this->competitionRepository = $competitionRepository;
    }

    public function show($slug)
    {
        $competition = $this->competitionRepository->getCompetitionBySlug($slug);

        return view('pages.frontend.competition.show', compact('competition'));
    }
}
