<?php

namespace App\Interfaces;

interface WorkRepositoryInterface
{
    public function getAllWorks();
    public function getWorkById($id);
    public function createWork(array $data);
    public function reviewedWork($id);
}
