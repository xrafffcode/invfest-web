<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory, UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'competition_id',
        'user_id',
        'team_name',
        'institution',
        'leader_name',
        'leader_phone',
        'leader_card',
        'companion_name',
        'companion_card',
        'level',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'competition_id' => 'string',
        'user_id' => 'string',
    ];

    /**
     * Get the competition that owns the team.
     */
    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    /**
     * Get the user that owns the team.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the payment that owns the team.
     */
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    /**
     * Get the team members for the team.
     */
    public function members()
    {
        return $this->hasMany(TeamMember::class);
    }

    /**
     * Get the works for the team.
     */
    public function works()
    {
        return $this->hasOne(Work::class);
    }

    /**
     * Get leader card attribute.
     */
    public function getLeaderCardAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set leader card attribute.
     */
    public function setLeaderCardAttribute($value)
    {
        $this->attributes['leader_card'] = $value->storeAs('assets/teams/', $this->team_name . "/" . $this->name . '.' . $value->extension(), 'public');
    }

    /**
     * Get companion card attribute.
     */
    public function getCompanionCardAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set companion card attribute.
     */
    public function setCompanionCardAttribute($value)
    {
        if ($value) {
            $this->attributes['companion_card'] =
                $value->storeAs('assets/teams/', $this->team->team_name . "/" . $this->name . '.' . $value->extension(), 'public');
        }

        $this->attributes['companion_card'] = null;
    }
}
