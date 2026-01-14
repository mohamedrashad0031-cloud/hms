<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $table = 'guests';

    protected $fillable = [
        'f_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'id_type',
        'id_number',
        'address',
        'nationality',
    ];

    // Optional: Bookings relation if booking table linked
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
