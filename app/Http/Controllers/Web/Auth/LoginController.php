<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Swal;

class LoginController extends Controller
{

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('pages.auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return $this->redirectTo();
        }

        Swal::toast('Email atau password salah', 'error');

        return redirect()->back();
    }

    private function redirectTo()
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } else if ($user->hasRole('petugas')) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('team.dashboard');
        }
    }

    public function logout()
    {
        auth()->logout();

        Swal::toast('Berhasil logout', 'success');

        return redirect()->route('login');
    }
}
