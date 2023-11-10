<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use HasFactory, UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team_id',
        'name',
        'card',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'team_id' => 'string',
    ];

    /**
     * Get the team that owns the team member.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get card attribute.
     */
    public function getCardAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set card attribute.
     */
    public function setCardAttribute($value)
    {
        $this->attributes['card'] = $value->store('assets/teams', $this->team->team_name . '/card', 'public');
    }
}
