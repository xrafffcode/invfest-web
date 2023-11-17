<?php

namespace App\Http\Controllers\Web\Team;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Team\StoreWorkRequest;
use App\Interfaces\WorkRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class WorkController extends Controller
{
    private WorkRepositoryInterface $workRepository;

    public function __construct(WorkRepositoryInterface $workRepository)
    {
        $this->workRepository = $workRepository;
    }

    public function index()
    {
        return view('pages.team.work');
    }

    public function store(StoreWorkRequest $request)
    {
        $this->workRepository->createWork($request->all());

        Swal::success('Berhasil', 'Karya berhasil ditambahkan, semoga sukses!');

        return redirect()->back();
    }
}
