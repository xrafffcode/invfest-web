<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\StoreCompetitionRequest;
use App\Http\Requests\Web\Admin\UpdateCompetitionRequest;
use App\Interfaces\CompetitionRepositoryInterface;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class CompetitionController extends Controller
{

    /**
     * @var CompetitionRepositoryInterface
     */
    private CompetitionRepositoryInterface $competitionRepository;

    /**
     * CompetitionController constructor.
     */
    public function __construct(CompetitionRepositoryInterface $competitionRepository)
    {
        $this->competitionRepository = $competitionRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $competitions = $this->competitionRepository->getAllCompetitions();

        return view('pages.admin.competition.index', compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.competition.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompetitionRequest $request)
    {
        $this->competitionRepository->createCompetition($request->all());

        Swal::toast('Kompetisi berhasil ditambahkan', 'success');

        return redirect()->route('admin.competition.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $competition = $this->competitionRepository->getCompetitionById($id);

        return view('pages.admin.competition.show', compact('competition'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $competition = $this->competitionRepository->getCompetitionById($id);

        return view('pages.admin.competition.edit', compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompetitionRequest $request, string $id)
    {
        $this->competitionRepository->updateCompetition($request->all(), $id);

        Swal::toast('Kompetisi berhasil diperbarui', 'success');

        return redirect()->route('admin.competition.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->competitionRepository->deleteCompetition($id);

        Swal::toast('Kompetisi berhasil dihapus', 'success');

        return redirect()->route('admin.competition.index');
    }
}
