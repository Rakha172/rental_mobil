<?php

namespace App\Http\Controllers;

use App\Models\Items;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $items = Items::all();

        return view('barang.index', ['barang' => $items]);
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
            'vehicle_type' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'passenger_capacity' => 'required',
            'rental_price' => 'required',
        ]);

        $items = new Items;
        $items->mobile = $request->mobile;
        $items->vehicle_type = $request->vehicle_type;
        $items->brand = $request->brand;
        $items->model = $request->model;
        $items->color = $request->color;
        $items->passenger_capacity = $request->passenger_capacity;
        $items->rental_price = $request->rental_price;
        $items->save();

        return to_route('barang.index')->with('succes', 'data ditambah');
    }

    public function edit($id)
    {
        $items = Items::find($id);
        if (!$items)
            return redirect()->route('barang.index')
                ->with('error_message', 'pembeli dengan id = ' . $id . ' tidak ditemukan');
        return view('barang.edit', [
            'items' => $items,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'mobile' => 'required',
            'vehicle_type' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'color' => 'required',
            'passenger_capacity' => 'required',
            'rental_price' => 'required',
        ]);

        $items = Items::find($id);
        $items->mobile = $request->mobile;
        $items->vehicle_type = $request->vehicle_type;
        $items->brand = $request->brand;
        $items->model = $request->model;
        $items->color = $request->color;
        $items->passenger_capacity = $request->passenger_capacity;
        $items->rental_price = $request->rental_price;
        $items->save();

        return to_route('barang.index')->with('succes', 'data ditambah');
    }
    public function destroy($id)
    {
        $items = Items::find($id);
        $items->delete();

        return back()->with('succes', 'data dihapus');
    }


}
