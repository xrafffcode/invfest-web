<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory, UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'level',
        'description',
        'poster',
        'guidebook',
        'registration_fee',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
    ];

    /**
     * Get the teams for the competition.
     */
    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    /**
     * Get poster attribute.
     */
    public function getPosterAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set poster attribute.
     */
    public function setPosterAttribute($value)
    {
        $this->attributes['poster'] = $value->store('assets/competitions', 'public');
    }

    /**
     * Get guidebook attribute.
     */
    public function getGuidebookAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set guidebook attribute.
     */
    public function setGuidebookAttribute($value)
    {
        $this->attributes['guidebook'] = $value->storeAs('assets/competitions', 'guidebook_' . $this->name . '.pdf', 'public');
    }

    /**
     * Set the competition's slug.
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = strtolower(str_replace(' ', '-', $value));
    }

    /**
     * Get the registration fee rupiah format.
     */
    public function getRegistrationFeeRupiahAttribute()
    {
        return 'Rp ' . number_format($this->registration_fee, 0, ',', '.');
    }
}
