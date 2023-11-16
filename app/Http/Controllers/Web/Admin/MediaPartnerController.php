<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreMediaPartnerRequest;
use App\Http\Requests\Web\Admin\UpdateMediaPartnerRequest;
use App\Interfaces\MediaPartnerRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class MediaPartnerController extends Controller
{
    private MediaPartnerRepositoryInterface $mediaPartnerRepository;

    public function __construct(MediaPartnerRepositoryInterface $mediaPartnerRepository)
    {
        $this->mediaPartnerRepository = $mediaPartnerRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mediaPartners = $this->mediaPartnerRepository->getAllMediaPartners();

        return view('pages.admin.media-partners.index', compact('mediaPartners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.media-partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMediaPartnerRequest $request)
    {
        $this->mediaPartnerRepository->createMediaPartner($request->all());

        Swal::toast('Media partner berhasil ditambahkan', 'success');

        return redirect()->route('admin.media-partner.index');
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
        $mediaPartner = $this->mediaPartnerRepository->getMediaPartnerById($id);

        return view('pages.admin.media-partners.edit', compact('mediaPartner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediaPartnerRequest $request, string $id)
    {
        $this->mediaPartnerRepository->updateMediaPartner($request->all(), $id);

        Swal::toast('Media partner berhasil diperbarui', 'success');

        return redirect()->route('admin.media-partner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->mediaPartnerRepository->deleteMediaPartner($id);

        Swal::toast('Media partner berhasil dihapus', 'success');

        return redirect()->route('admin.media-partner.index');
    }
}
