<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\Vehicle_Package;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function index(Request $request){
        $ordercount = Order::count();
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

          // Ambil daftar kendaraan yang tersedia
          $availableVehicles = Vehicle::where('status_pesanan', 'tersedia')->get();

          return view('order.index')->with([
            'order' => $dataOrder,
            'ordercount' => $ordercount,
            'search' => $search,
            'availableVehicles' => $availableVehicles, //Tambahkan variabel ini ke tampilan Anda
        ]);
}

    public function show()
    {

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
        'rental_date' => 'required|date|after_or_equal:today',
    ]);

    // Cek apakah ada pesanan yang sama yang sudah ada
    $existingOrder = Order::where('vehicle_package_id', $request->vehicle_package_id)
        ->where('rental_date', $request->rental_date)
        ->where('user_id', $request->user_id)
        ->first();

    // Validasi status pesanan kendaraan
    $vehicle = Vehicle::find($request->vehicle_package_id);

    if ($existingOrder) {
        // Pesanan yang sama sudah ada
        return redirect()->back()->with('error', 'Maaf, Anda sudah memesan kendaraan ini pada tanggal yang sama.');
    } elseif ($vehicle && $vehicle->status_pesanan === 'dipesan' && $vehicle->selesai_pemesanan >= $request->rental_date) {
        // Kendaraan sudah dipesan untuk tanggal tersebut
        return redirect()->back()->with('error', 'Maaf, kendaraan ini sudah dipesan pada tanggal tersebut.');
    }

    // Lanjutkan dengan membuat pesanan baru
    $order = new Order;
    $order->user_id = $request->user_id;
    $order->vehicle_package_id = $request->vehicle_package_id;
    $order->rental_date = $request->rental_date;
    $order->save();

    // // Ubah status pesanan kendaraan
    // $vehicle->status_pesanan = 'dipesan';
    // $vehicle->selesai_pemesanan = $request->rental_date;
    // $vehicle->save();

    return redirect()->route('homepage.index');
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
