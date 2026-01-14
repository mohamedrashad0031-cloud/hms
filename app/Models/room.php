<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'room_number',
        'room_type',
        'price_per_night',
        'status',
    ];

    // Optional: Bookings relation
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Optional: Housekeeping relation
    public function housekeepings()
    {
        return $this->hasMany(Housekeeping::class);
    }
}
