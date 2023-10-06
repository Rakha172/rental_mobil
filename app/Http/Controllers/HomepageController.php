<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Vehicle_Package;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {

        $vehicle = Vehicle::all();
        $vehicle_package = Vehicle_Package::all();
        return view('homepage.index', compact('vehicle'))->with([
            'vehicle_package' => Vehicle_Package::all()
        ]);
    }

    public function booking(Request $request, $vehicleId)
    {
        $vehicle = Vehicle::query()->where('id', $vehicleId)->get();

        return view('booking.index', compact('vehicle', 'vehicleId'));
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);
    }
}