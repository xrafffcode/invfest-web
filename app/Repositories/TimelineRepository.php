<?php

namespace App\Repositories;

use App\Interfaces\TimelineRepositoryInterface;
use App\Models\Timeline;

class TimelineRepository implements TimelineRepositoryInterface
{
    public function getAllTimeline()
    {
        return Timeline::orderByDate()->get();
    }

    public function getTimelineById($id)
    {
        return Timeline::find($id);
    }

    public function createTimeline($data)
    {
        return Timeline::create($data);
    }

    public function updateTimeline($data, $id)
    {
        return Timeline::find($id)->update($data);
    }

    public function deleteTimeline($id)
    {
        return Timeline::find($id)->delete();
    }
}
