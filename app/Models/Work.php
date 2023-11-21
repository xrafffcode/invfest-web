<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory, UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team_id',
        'title',
        'zip_file',
        'is_reviewed',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'team_id' => 'string',
        'is_reviewed' => 'boolean',
    ];

    /**
     * Get the team that owns the work.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function setZipFileAttribute($value)
    {
        $this->attributes['zip_file'] = $value->storeAs('assets/works/', $this->team->team_name . "/" . $this->title . '.' . $value->extension(), 'public');
    }

    public function getZipFileAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
