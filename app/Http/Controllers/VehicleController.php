<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Vehicle_Package;
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
            'image' => 'required|image|mimes:png,jpg|max:2040',
            'vehicle_type' => 'required',
            'brand' => 'required',
            'color' => 'required',
            'passenger_capacity' => 'required',
            'status_pesanan' => 'required',
        ]);

        $image = $request->image;
        $slug = Str::slug($image->getClientOriginalName());
        $new_image = time() . '_' . $slug;
        $image->move('upload/vehicle/', $new_image);

        $vehicle = new Vehicle;
        $vehicle->image = 'upload/vehicle/' . $new_image;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->brand = $request->brand;
        $vehicle->color = $request->color;
        $vehicle->passenger_capacity = $request->passenger_capacity;
        $vehicle->status_pesanan = $request->status_pesanan;
        $vehicle->save();

        return to_route('vehicle.index')->with('succes', 'data ditambah');
    }


        public function edit($id)
        {
            $vehicle = Vehicle::findOrFail($id);
            return view('vehicle.edit', compact('vehicle'));
        }


    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg|max:2040',
            'vehicle_type' => 'required',
            'brand' => 'required',
            'color' => 'required',
            'passenger_capacity' => 'required',
            'status_pesanan' => 'required',
        ]);

        $image = $request->image;
        $slug = Str::slug($image->getClientOriginalName());
        $new_image = time() . '_' . $slug;
        $image->move('upload/vehicle/', $new_image);

        $vehicle = Vehicle::find($id);
        $vehicle->image = 'upload/vehicle/' . $new_image;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->brand = $request->brand;
        $vehicle->color = $request->color;
        $vehicle->passenger_capacity = $request->passenger_capacity;
        $vehicle->status_pesanan = $request->status_pesanan;
        $vehicle->save();
        return to_route('vehicle.index')->with('succes', 'data ditambah');
    }
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return back()->with('succes', 'data dihapus');
    }


}
