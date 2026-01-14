<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking_table;

class bookingController extends Controller
{
    public function index()
    {
        return view('bookings');
    }
}
