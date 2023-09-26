<?php

namespace App\Http\Controllers;

// use App\Models\Order;
use App\Models\Vehicle_Package;
use App\Models\Payment;
use App\Models\Order;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::all();
        $order = Order::where('user_id', Auth::user()->id)->get();
        return view('payment.index', ['payment' => $payment, 'order' => $order])->with([
            'user' => User::all(),
        ]);
    }

    public function show(string $id){
        $payment = Payment::find($id);
        return view('payment.show', compact('payment'));
    }
    public function create($id)
    {
        $vehicle_package = Vehicle_Package::all();
        $user = User::all();
        $order = Order::where('user_id', Auth::user()->id)->get();
        return view('payment.create', ['vehicle_package' => $vehicle_package, 'order' => $order, 'user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'vehicle_package_id' => 'required',
            'payment_method' => 'required',
            'proof_of_transaction' => 'required|image|mimes:png,jpg|max:2040',

        ]);

       // Hitung total harga dari paket kendaraan yang dipilih
        // $vehicle_packages = $request->input('vehicle_packages');
        // $total_price = 0;

        // foreach ($vehicle_packages as $packageId) {
            // $package = Vehicle_Package::find($packageId);
            // if ($package) {
                // $total_price += $package->price;
            // }
        // }

        // Upload gambar
        $proof_of_transaction = $request->proof_of_transaction;
        $slug = Str::slug($proof_of_transaction->getClientOriginalName());
        $new_proof_of_transaction = time() . '_' . $slug;
        $proof_of_transaction->move('upload/transaction/', $new_proof_of_transaction);

        // Simpan data pembayaran
        $payment = new Payment;
        $payment->user_id = $request->user_id;
        $payment->vehicle_package_id = $request->vehicle_package_id;
        $payment->payment_method = $request->payment_method;
        $payment->proof_of_transaction = 'upload/transaction/' . $new_proof_of_transaction;
        $payment->save();

        // Sisipkan relasi antara pembayaran dan paket kendaraan yang dipilih
        // $payment->vehiclePackages()->attach($vehicle_packages);

        return redirect()->route('homepage.index')->with('success', 'Data ditambah');
    }

    public function edit(Payment $payment)
    {
        // $order = Order::all();
        return view('payment.edit', compact('payment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'total_price' => 'required',
            'payment_method' => 'required',
            'proof_of_transaction' => 'required|image|mimes:png,jpg|max:2040',
            // 'order_id' => 'required|exists:orders,id'
        ]);

        $image = $request->file('proof_of_transaction');
        $slug = Str::slug($image->getClientOriginalName());
        $new_image = time() . '_' . $slug;
        $image->move('upload/vehicle/', $new_image);

        $payment = new Payment;
        $payment->total_price = $request->total_price;
        $payment->payment_method = $request->payment_method;
        $payment->proof_of_transaction = 'upload/vehicle/' . $new_image;
        $payment->save();

       return to_route('payment.index')->with('succes', 'data ditambah');
}


    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();

        return redirect()->route('payment.index')->with('berhasil', "$payment->total_price Berhasil dihapus!");
    }
}
