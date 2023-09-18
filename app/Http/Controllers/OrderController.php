<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Vehicle_Package;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(Request $request){
        $search = $request->query('search');
        if(!empty($search)){
            $dataOrder = Order::where('order.name', 'like', '%' . $search . '%')
            ->orWhere('order.package_name', 'like', '%' . $search . '%')
            ->orWhere('order.rental_date', 'like', '%' . $search . '%')
            ->orWhere('order.return_date', 'like', '%' . $search . '%')
            ->paginate(5)->fragment('ord');
        }else {
            $dataOrder = Order::paginate(5)->fragment('ord');
        }
        return view('order.index')->with([
            'order' => $dataOrder,
            'search' => $search
        ]);
    }

    public function show()
    {
        return view('order.index');
    }

    public function create(Request $request)
    {
        $vehicle = Vehicle::find($request->vehicle);
        $users = User::all();
        $vehicle_packages = Vehicle_Package::all();

        return view('order.create', ['users' => $users ,'vehicle_packages' => $vehicle_packages, 'vehicle' => $vehicle]);
    }

    public function store(Request $request)
    {
         $request->validate([
            'user_id' => 'required|exists:users,id',
            'vehicle_package_id' => 'required|exists:vehicle_packages,id',
            'rental_date' => 'required'
        ]);

        $order = new Order;
        $order->user_id = $request->user_id;
        $order->vehicle_package_id = $request->vehicle_package_id;
        $order->rental_date = $request->rental_date;
        $order->save();
        return view('payment.create')->with([
            'users' => User::all(),
            'vehicle_packages' => Vehicle_Package::all()
        ]);
    }


    public function edit(Order $order)
    {
        $users = User::all();
        $vehicle_packages = Vehicle_Package::all();
        $vehicle_packages->package_name;

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
