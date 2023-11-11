<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\WebConfigurationRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class WebConfigurationController extends Controller
{
    /**
     * @var WebConfigurationRepositoryInterface
     */
    private WebConfigurationRepositoryInterface $webconfigurationRepository;


    /**
     * WebConfigurationController constructor.
     */
    public function __construct(WebConfigurationRepositoryInterface $webconfigurationRepository)
    {
        $this->webconfigurationRepository = $webconfigurationRepository;
    }

    public function index()
    {
        $webConfiguration = $this->webconfigurationRepository->getWebConfiguration();

        return view('pages.admin.website-configuration.index', compact('webConfiguration'));
    }

    public function update(Request $request, $id)
    {
        $this->webconfigurationRepository->updateWebConfiguration($request->all(), $id);

        Swal::toast('Konfigurasi website berhasil diperbarui', 'success');

        return redirect()->route('admin.website-configuration.index');
    }
}
