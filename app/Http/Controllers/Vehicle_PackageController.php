<?php

namespace App\Http\Controllers;

use App\Models\Vehicle_package;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class Vehicle_packageController extends Controller
{

    public function index()
    {
        $vehicle_package = Vehicle_package::all();

        return view('vehicle_package.index', ['vehicle_package' => $vehicle_package]);
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

        Vehicle_package::create($validated);

        return redirect('/vehicle_package')->with('berhasil', "$request->package_name Berhasil ditambahkan!");
    }

    public function edit($id)
    {
        $vehicle_package = vehicle_package::find($id);
        if (!$vehicle_package)
            return redirect()->route('vehicle_package.index');
        return view('vehicle_package.edit', [
            'vehicle_package' => $vehicle_package,
            'vehicle' => Vehicle::all()
        ]);

    }

    public function update(Request $request, Vehicle_package $vehicle_package)
    {
        $validated = $request->validate([
            'package_name' => 'required',
            'description' => 'required',
            'duration_date' => 'required',
            'price' => 'required',
            'vehicle_id' => 'required|exists:vehicle,id',
        ]);

        $vehicle_package->update($validated);

        return redirect()->route('vehicle_package.index')->with('berhasil', "$request->package_name Berhasil diubah!");
    }

    public function destroy(Vehicle_package $vehicle_package)
    {
        $vehicle_package->delete();

        return redirect()->route('vehicle_package.index')->with('berhasil', "$vehicle_package->package_name Berhasil dihapus!");
    }
}
