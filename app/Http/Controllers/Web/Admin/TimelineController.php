<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreTimelineRequest;
use App\Http\Requests\Web\Admin\UpdateTimelineRequest;
use App\Interfaces\TimelineRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class TimelineController extends Controller
{

    /**
     * @var TimelineRepositoryInterface
     */
    private TimelineRepositoryInterface $timelineRepository;

    /**
     * CompetitionController constructor.
     */
    public function __construct(TimelineRepositoryInterface $timelineRepository)
    {
        $this->timelineRepository = $timelineRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timelines = $this->timelineRepository->getAllTimeline();

        return view('pages.admin.timeline.index', compact('timelines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.timeline.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTimelineRequest $request)
    {
        $this->timelineRepository->createTimeline($request->all());

        Swal::toast('Timeline berhasil ditambahkan', 'success');

        return redirect()->route('admin.timeline.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $timeline = $this->timelineRepository->getTimelineById($id);

        return view('pages.admin.timeline.show', compact('timeline'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $timeline = $this->timelineRepository->getTimelineById($id);

        return view('pages.admin.timeline.edit', compact('timeline'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTimelineRequest $request, string $id)
    {
        $this->timelineRepository->updateTimeline($request->all(), $id);

        Swal::toast('Timeline berhasil diperbarui', 'success');

        return redirect()->route('admin.timeline.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->timelineRepository->deleteTimeline($id);

        Swal::toast('Timeline berhasil dihapus', 'success');

        return redirect()->route('admin.timeline.index');
    }
}
