<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housekeeping extends Model
{
    use HasFactory;

    // Table name (optional, Laravel auto detect pannum)
    protected $table = 'housekeepings';

    // Mass assignment allow panna
    protected $fillable = [
        'room_id',
        'status',
        'comments',
    ];
}
