<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\TeamRepositoryInterface;
use App\Models\User;
use App\Notifications\AprrovedTeam;
use App\Notifications\RejectedTeam;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class TeamController extends Controller
{

    private TeamRepositoryInterface $teamRepository;

    public function __construct(TeamRepositoryInterface $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = $this->teamRepository->getAllTeams();

        return view('pages.admin.teams.index', compact('teams'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = $this->teamRepository->getTeamById($id);

        return view('pages.admin.teams.show', compact('team'));
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
        $this->teamRepository->updateTeamStatus($request->all(), $id);

        $user = User::where('email', $request->email)->first();

        if ($request->status == 'accepted') {
            $user->notify(new AprrovedTeam());
        } else {
            $user->notify(new RejectedTeam());
        }

        Swal::toast('Status tim berhasil diubah', 'success');

        return redirect()->route('admin.team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
