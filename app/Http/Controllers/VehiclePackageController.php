<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehiclePackage;
use Illuminate\Http\Request;

class VehiclePackageController extends Controller
{
    public function index()
    {
        return view('vehiclepackage.index')->with([
            'vehiclepackage' => VehiclePackage::all(),
        ]);
    }

    public function create()
    {
        $vehicle = Vehicle::all();

        return view('vehiclepackage.create', ['vehicle' => $vehicle]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
            'duration_date' => 'required',
            'price' => 'required',
            'vehicle_id' => 'required|exists:vehicle,id',
        ]);

        VehiclePackage::create($validate);

        return redirect('/vehiclepackage')->with('berhasil', "$request->package_name Berhasil ditambahkan!");
    }

    public function edit(VehiclePackage $vehiclepackage)
    {
        $vehicle = Vehicle::all();

        return view('vehiclepackage.edit', compact('vehiclepackage', 'vehicle'));
    }

    public function update(Request $request, VehiclePackage $vehiclepackage)
    {
        $validate = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
            'duration_date' => 'required',
            'price' => 'required',
            'vehicle_id' => 'required|exists:vehicle,id',
        ]);

        $vehiclepackage->update($validate);

        return redirect()->route('vehiclepackage.index')->with('berhasil', "$request->package_name Berhasil diubah!");
    }

    public function destroy(VehiclePackage $vehiclepackage)
    {
        $vehiclepackage->delete();

        return redirect()->route('vehiclepackage.index')->with('berhasil', "$vehiclepackage->package_name Berhasil dihapus!");
    }
}
