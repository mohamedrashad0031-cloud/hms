<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking_tables';

    protected $fillable = [
        'guest_id',
        'room_id',
        'check_in_date',
        'check_out_date',
        'booking_date',
        'status',
    ];

    // Relation with Guest
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }

    // Relation with Room
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
