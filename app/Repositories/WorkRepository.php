<?php

namespace App\Repositories;

use App\Interfaces\WorkRepositoryInterface;
use App\Models\Work;

class WorkRepository implements WorkRepositoryInterface
{
    public function getAllWorks()
    {
        return Work::all();
    }

    public function getWorkById($id)
    {
        return Work::find($id);
    }

    public function createWork(array $data)
    {
        return Work::create($data);
    }
}
