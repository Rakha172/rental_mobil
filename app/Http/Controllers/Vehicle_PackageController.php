<?php

namespace App\Http\Controllers;

use App\Models\Vehicle_Package;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class Vehicle_PackageController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        if(!empty($search)){
            $dataPackage = Vehicle_Package::where('vehicle_packages.package_name', 'like', '%' . $search . '%')
            ->orWhere('vehicle_packages.description', 'like', '%' . $search . '%')
            ->orWhere('vehicle_packages.duration_date', 'like', '%' . $search . '%')
            ->orWhere('vehicle_packages.price', 'like', '%' . $search . '%')
            ->paginate(5)->fragment('pckg');
        }else {
            $dataPackage = Vehicle_Package::paginate(5)->fragment('pckg');
        }
        return view('vehicle_package.index')->with([
            'vehicle_packages' => $dataPackage,
            'search' => $search
        ]);
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
