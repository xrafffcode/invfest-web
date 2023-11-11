<?php

namespace App\Http\Controllers\Web\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware(['checkTeamStatus']);
    }


    public function index()
    {
        return view('pages.team.member');
    }
}
