<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    // table name (optional, but safe)
    protected $table = 'staff';

    // mass assign panna allow panna columns
    protected $fillable = [
        'name',
        'role',
        'department',
        'shift',
        'phone',
        'status'
    ];
}
