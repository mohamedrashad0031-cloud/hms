<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;

class PaymentsController extends Controller
{
    // Payment list page
    public function index()
    {
        $paymants = payment::orderBy('created_at', 'desc')->get();
        return view('payment', compact('paymants'));
    }

    // Store new payment (demo purpose)
    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'required',
            'payment_date' => 'required|date',
            'amount' => 'required|numeric',
            'payment_method' => 'required',
            'payment_status' => 'required',
        ]);

        Payment::create([
            'booking_id' => $request->booking_id,
            'payment_date' => $request->payment_date,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'payment_status' => $request->payment_status,
        ]);

        return redirect()->back()->with('success', 'Payment added successfully');
    }
}
