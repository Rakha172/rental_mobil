<?php

namespace App\Http\Controllers;

use App\Models\Vehicle_Package;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class Vehicle_PackageController extends Controller
{

    public function index()
    {
        $vehicle_packages = Vehicle_Package::all();

        return view('vehicle_package.index', ['vehicle_packages' => $vehicle_packages]);
    }

    public function show()
    {
        return view('vehicle_package.index');
    }

    public function create()
    {
        $vehicle = Vehicle::all();

        return view('vehicle_package.create', ['vehicle' => $vehicle]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
            'duration_date' => 'required',
            'price' => 'required',
            'vehicle_id' => 'required|exists:vehicle,id',
        ]);

        Vehicle_Package::create($validated);

        return redirect('/vehicle_package')->with('berhasil', "$request->package_name Berhasil ditambahkan!");
    }

    public function edit(Vehicle_Package $vehicle_packages)
    {
        $vehicle = Vehicle::all();

        return view('vehicle_package.edit', compact('vehicle_packages', 'vehicle'));
    }

    public function update(Request $request, Vehicle_Package $vehicle_packages)
    {
        $validated = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
            'duration_date' => 'required',
            'price' => 'required',
            'vehicle_id' => 'required|exists:vehicle,id',
        ]);

        $vehicle_packages->update($validated);

        return redirect()->route('vehicle_package.index')->with('berhasil', "$request->package_name Berhasil diubah!");
    }

    public function destroy(Vehicle_Package $vehicle_packages)
    {
        $vehicle_packages->delete();

        return redirect()->route('vehicle_package.index')->with('berhasil', "$vehicle_packages->package_name Berhasil dihapus!");
    }
}
