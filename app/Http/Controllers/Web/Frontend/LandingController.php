<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\CompetitionRepositoryInterface;
use App\Interfaces\TimelineRepositoryInterface;
use App\Interfaces\MediaPartnerRepositoryInterface;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    private CompetitionRepositoryInterface $competitionRepository;
    private TimelineRepositoryInterface $timelineRepository;
    private MediaPartnerRepositoryInterface $partnerRepository;

    public function __construct(CompetitionRepositoryInterface $competitionRepository, 
                                TimelineRepositoryInterface $timelineRepository,
                                MediaPartnerRepositoryInterface $partnerRepository)
    {
        $this->competitionRepository    = $competitionRepository;
        $this->timelineRepository       = $timelineRepository;
        $this->partnerRepository        = $partnerRepository;
    }

    public function index()
    {
        $competitions   = $this->competitionRepository->getAllCompetitions();
        $timelines      = $this->timelineRepository->getAllTimeline();
        $partners       = $this->partnerRepository->getAllMediaPartners();

        return view('pages.landing', compact('competitions', 'timelines', 'partners'));
    }
}
