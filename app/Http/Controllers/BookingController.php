<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
class BookingController extends Controller
{
    public function index()
    {
        $vehicle =  Vehicle::all();
        return view('booking.index', compact('vehicle'));

    }
}
