<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\CompetitionRepositoryInterface;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    private CompetitionRepositoryInterface $competitionRepository;

    public function __construct(CompetitionRepositoryInterface $competitionRepository)
    {
        $this->competitionRepository = $competitionRepository;
    }

    public function index()
    {
        $competitions = $this->competitionRepository->getAllCompetitions();

        return view('pages.landing', compact('competitions'));
    }
}
