<?php

namespace App\Repositories;

use App\Interfaces\RegisterTeamRepositoryInterface;
use App\Models\User;
use App\Notifications\OtpTeam;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterTeamRepository implements RegisterTeamRepositoryInterface
{

    public function registerTeam($data)
    {
        $user = $this->createUser($data);

        $user->assignRole('team');

        $team = $this->createTeam($data, $user);

        Auth::login($user);

        $otp = rand(100000, 999999);
        $expiryTime = now()->addMinutes(5);

        $user->otp = $otp;
        $user->otp_expiry_time = $expiryTime;

        $user->save();

        $user->notify(new OtpTeam($otp));

        return $team;
    }

    protected function createUser($data)
    {
        $userData = [
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        return User::create($userData);
    }

    protected function createTeam($data, $user)
    {
        $teamData = [
            'competition_id' => $data['competition_id'],
            'user_id' => $user->id,
            'team_name' => $data['team_name'],
            'institution' => $data['institution'],
            'leader_name' => $data['leader_name'],
            'leader_phone' => $data['leader_phone'],
            'leader_card' => $data['leader_card'],
            'companion_name' => $data['companion_name'] ?? null,
            'companion_card' => $data['companion_card'] ?? null,
            'level' => $data['level'],
            'status' => 'pending',
        ];

        return $user->teams()->create($teamData);
    }

    public function payment($data)
    {
    }
}
