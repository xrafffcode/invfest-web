<?php

namespace App\Interfaces;

interface TimelineRepositoryInterface
{
    public function getAllTimeline();
    public function getTimelineById($id);
    public function createTimeline($data);
    public function updateTimeline($data, $id);
    public function deleteTimeline($id);
}
