<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory, UUID;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'team_id',
        'payment_method_id',
        'proof',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'string',
        'team_id' => 'string',
        'payment_method_id' => 'string',
    ];

    /**
     * Get proof attribute.
     */
    public function getProofAttribute($value)
    {
        return asset('storage/' . $value);
    }

    /**
     * Set proof attribute.
     */
    public function setProofAttribute($value)
    {
        $this->attributes['proof'] = $value->store('assets/payments', $this->team->team_name . '/proof', 'public');
    }

    /**
     * Get the team that owns the payment.
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * Get the payment method that owns the payment.
     */
    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
