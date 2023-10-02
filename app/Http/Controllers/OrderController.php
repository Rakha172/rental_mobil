<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use App\Models\Order;
use App\Models\Vehicle;
use Session;
use Illuminate\Http\Request;
use App\Models\Vehicle_Package;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        $ordercount = Order::count();
        $payment = Payment::all();
        $search = $request->query('search');
        if (!empty($search)) {
            $dataOrder = Order::where('order.name', 'like', '%' . $search . '%')
                ->orWhere('order.package_name', 'like', '%' . $search . '%')
                ->orWhere('order.rental_date', 'like', '%' . $search . '%')
                ->orWhere('order.return_date', 'like', '%' . $search . '%')
                ->paginate(5)->fragment('ord');
        } else {
            $dataOrder = Order::paginate(5)->fragment('ord');
        }
        return view('order.index', compact('payment'))->with([
            'order' => $dataOrder,
            'ordercount' => $ordercount,
            'search' => $search
        ]);
    }

    public function show()
    {

    }

    public function create(Request $request)
    {
        $vehicle = Vehicle::find($request->vehicle);
        $user = User::where('name', Auth::user()->name)->get();
        $vehicle_packages = Vehicle_Package::all();
        $order = Order::all();
        return view('order.create', compact('user', 'order'), ['vehicle_packages' => $vehicle_packages, 'vehicle' => $vehicle]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'vehicle_package_id' => 'required|exists:vehicle_packages,id',
            'rental_date' => 'required|date|after_or_equal:today',
        ]);

        // Lanjutkan dengan membuat pesanan baru
        $order = new Order;
        $order->user_id = $request->user_id;
        $order->vehicle_package_id = $request->vehicle_package_id;
        $order->rental_date = $request->rental_date;
        $order->save();

        $user = User::where('id', '!=', 1)->get();
        $order = Order::all();
        // Session::flash('sukses','checkout berhasil dilakukan, segera lakukan pembayaran untuk mengyelesaikan order');
        return view('payment.create')->with(['user' => $user, 'order' => $order]);

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