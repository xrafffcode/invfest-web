<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreSponsorRequest;
use App\Interfaces\SponsorRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class SponsorController extends Controller
{

    private SponsorRepositoryInterface $sponsorRepository;

    public function __construct(SponsorRepositoryInterface $sponsorRepository)
    {
        $this->sponsorRepository = $sponsorRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsors = $this->sponsorRepository->getAllSponsors();

        return view('pages.admin.sponsors.index', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSponsorRequest $request)
    {
        $this->sponsorRepository->createSponsor($request->all());

        Swal::toast('Sponsor berhasil ditambahkan', 'success');

        return redirect()->route('admin.sponsor.index');
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
        $sponsor = $this->sponsorRepository->getSponsorById($id);

        return view('pages.admin.sponsors.edit', compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->sponsorRepository->updateSponsor($request->all(), $id);

        Swal::toast('Sponsor berhasil diperbarui', 'success');

        return redirect()->route('admin.sponsor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->sponsorRepository->deleteSponsor($id);

        Swal::toast('Sponsor berhasil dihapus', 'success');

        return redirect()->route('admin.sponsor.index');
    }
}
