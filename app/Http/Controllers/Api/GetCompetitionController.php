<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\CompetitionRepositoryInterface;
use Illuminate\Http\Request;

class GetCompetitionController extends Controller
{
    private CompetitionRepositoryInterface $competitionRepository;

    public function __construct(CompetitionRepositoryInterface $competitionRepository)
    {
        $this->competitionRepository = $competitionRepository;
    }

    public function index(Request $request)
    {
        $competitions = $this->competitionRepository->getCompetitionByLevel($request->level);

        return response()->json([
            'status' => 'success',
            'data' => $competitions
        ]);
    }
}
