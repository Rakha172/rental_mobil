<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Vehicle_Package;

class BookingController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::all();
        $vehicle_package =  Vehicle_Package::all();
        $payment =  Payment::all();
        return view('booking.index', compact('vehicle_package', 'vehicle', 'payment'));

    }
}
