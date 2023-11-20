<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebConfiguration extends Model
{
    use HasFactory, UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'favicon',
        'title',
        'slogan',
        'heading',
        'description',
        'nav_logo',
        'footer_logo',
        'footer_description',
        'footer_copyrigth',
        'deadline',
        'email',
        'phone',
        'primary_color',
        'primary_color_hover',
        'secondary_color',
        'secondary_color_hover',
        'twibbon',
        'twibbon_link',
        'mascot',
        'instagram',
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
     * Get nav_logo attribute.
     */
    public function getNavLogoAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set nav_logo attribute.
     */
    public function setNavLogoAttribute($value)
    {
        $this->attributes['nav_logo'] = $value->store('assets/web-configurations', 'public');
    }

    /**
     * Get footer_logo attribute.
     */
    public function getFooterLogoAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set footer_logo attribute.
     */
    public function setFooterLogoAttribute($value)
    {
        $this->attributes['footer_logo'] = $value->store('assets/web-configurations', 'public');
    }

    /**
     * Get twibbon attribute.
     */
    public function getTwibbonAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set twibbon attribute.
     */
    public function setTwibbonAttribute($value)
    {
        $this->attributes['twibbon'] = $value->store('assets/web-configurations', 'public');
    }

    /**
     * Set deadline attribute.
     */
    public function setDeadlineAttribute($value)
    {
        $this->attributes['deadline'] = date('Y-m-d', strtotime($value));
    }

    /**
     * Get mascot attribute.
     */
    public function getMascotAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set mascot attribute.
     */
    public function setMascotAttribute($value)
    {
        $this->attributes['mascot'] = $value->store('assets/web-configurations', 'public');
    }
}
