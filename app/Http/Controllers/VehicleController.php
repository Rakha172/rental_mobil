<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::all();

        return view('vehicle.index', ['vehicle' => $vehicle]);
    }

    public function create()
    {
        return view('vehicle.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'vehicle_type' => 'required',
            'brand' => 'required',
            'color' => 'required',
            'pasengger_capacity' => 'required',
            'status' => 'required',
        ]);
        $vehicle = new Vehicle;
        $vehicle->image = $request->image;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->brand = $request->brand;
        $vehicle->color = $request->color;
        $vehicle->pasengger_capacity = $request->pasengger_capacity;
        $vehicle->status = $request->status;
        $vehicle->save();

        return to_route('vehicle.index')->with('succes', 'data ditambah');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        if (!$vehicle)
            return redirect()->route('vehicle.index')
                ->with('error_message', 'pembeli dengan id = ' . $id . ' tidak ditemukan');
        return view('vehicle.edit', [
            'vehicle' => $vehicle,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'vehicle_type' => 'required',
            'brand' => 'required',
            'color' => 'required',
            'pasengger_capacity' => 'required',
            'status' => 'required',
        ]);

        $vehicle = Vehicle::find($id);
        $vehicle->image = $request->image;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->brand = $request->brand;
        $vehicle->color = $request->color;
        $vehicle->pasengger_capacity = $request->pasengger_capacity;
        $vehicle->status = $request->status;
        $vehicle->save();

        return to_route('barang.index')->with('succes', 'data ditambah');
    }
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return back()->with('succes', 'data dihapus');
    }


}
