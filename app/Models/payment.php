<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'paymants';

    protected $fillable = [
        'booking_id',
        'payment_date',
        'amount',
        'payment_method',
        'payment_status',
    ];

    // Optional: Booking relationship
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
