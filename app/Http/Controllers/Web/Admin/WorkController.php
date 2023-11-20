<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\WorkRepositoryInterface;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    private WorkRepositoryInterface $workRepository;

    public function __construct(WorkRepositoryInterface $workRepository)
    {
        $this->workRepository = $workRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = $this->workRepository->getAllWorks();

        return view('pages.admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
