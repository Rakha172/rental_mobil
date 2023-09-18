<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Vehicle_Package;
use Illuminate\Http\Request;
class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $vehicle =  Vehicle::all();
        $vehicle_package =  Vehicle_Package::all();
        return view('homepage.index', compact('vehicle'))->with([
            'vehicle_package' => Vehicle_Package::all()
        ]);


        // return view('homepage.index')->with([
        //     'vehicle' => Vehicle::all(),
        // ]);
    }

    public function booking(Request $request, $vehicleId)
    {
        $vehicle =  Vehicle::query()->where('id', $vehicleId)->get();

        return view('booking.index', compact('vehicle', 'vehicleId'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
