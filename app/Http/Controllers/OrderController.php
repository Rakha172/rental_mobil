<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Vehicle_Package;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();

        return view('order.index', ['order' => $order]);
    }

    public function show()
    {
        return view('order.index');
    }

    public function create()
    {
        $users = User::all();
        $vehicle_packages = Vehicle_Package::all();

        return view('order.create', ['users' => $users, 'vehicle_packages' => $vehicle_packages]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rental_date' => 'required',
            'retun_date' => 'required',
            'user_id' => 'required|exists:users,id',
            'vehicle_package_id' => 'required|exists:vehicle_packages,id'
        ]);

        Order::create($validated);

        return redirect('/order')->with('berhasil', "$request->rental_date Berhasil ditambahkan!");
    }

    public function edit(Order $order)
    {
        $users = User::all();

        return view('order.edit', compact('order', 'users', 'vehicle_packages'));
    }

    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'rental_date' => 'required',
            'return_date' => 'required',
            'user_id' => 'required|exists:users,id',
            'vehicle_package_id' => 'required|exists:vehicle_packages,id'
        ]);

        $order->update($validated);

        return redirect()->route('order.index')->with('berhasil', "$request->rental_date Berhasil diubah!");
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('order.index')->with('berhasil', "$order->rental_date Berhasil dihapus!");
    }
}
