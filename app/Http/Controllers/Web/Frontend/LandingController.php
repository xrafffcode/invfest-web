<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\CompetitionRepositoryInterface;
use App\Interfaces\TimelineRepositoryInterface;
use App\Interfaces\MediaPartnerRepositoryInterface;
use App\Interfaces\SponsorRepositoryInterface;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    private CompetitionRepositoryInterface $competitionRepository;
    private TimelineRepositoryInterface $timelineRepository;
    private MediaPartnerRepositoryInterface $partnerRepository;
    private SponsorRepositoryInterface $sponsorRepository;

    public function __construct(
        CompetitionRepositoryInterface $competitionRepository,
        TimelineRepositoryInterface $timelineRepository,
        MediaPartnerRepositoryInterface $partnerRepository,
        SponsorRepositoryInterface $sponsorRepository
    ) {
        $this->competitionRepository    = $competitionRepository;
        $this->timelineRepository       = $timelineRepository;
        $this->partnerRepository        = $partnerRepository;
        $this->sponsorRepository        = $sponsorRepository;
    }

    public function index()
    {
        $competitions   = $this->competitionRepository->getAllCompetitions();
        // sort by colomn date in table timelines (ascending)
        $timelines      = $this->timelineRepository->getAllTimeline()->orderBy('date', 'asc')->get();
        $partners       = $this->partnerRepository->getAllMediaPartners();
        $sponsors       = $this->sponsorRepository->getAllSponsors();

        return view('pages.landing', compact('competitions', 'timelines', 'partners', 'sponsors'));
    }
}
