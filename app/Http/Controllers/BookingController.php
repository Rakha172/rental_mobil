<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle_Package;
class BookingController extends Controller
{
    public function index()
    {
        $vehicle_package =  Vehicle_Package::all();
        return view('booking.index', compact('vehicle_package'));

    }
}
