<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\TimelineRepositoryInterface;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    private TimelineRepositoryInterface $timelineRepository;

    public function __construct(TimelineRepositoryInterface $timelineRepository)
    {
        $this->timelineRepository = $timelineRepository;
    }
}
