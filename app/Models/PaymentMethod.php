<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory, UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'logo',
        'number',
        'owner',
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
     * Get logo attribute.
     */
    public function getLogoAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set logo attribute.
     */
    public function setLogoAttribute($value)
    {
        $this->attributes['logo'] = $value->store('assets/payment-methods', 'public');
    }

    /**
     * Get the payment that owns the payment method.
     */
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
