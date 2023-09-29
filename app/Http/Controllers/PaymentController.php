<?php

namespace App\Http\Controllers;

// use App\Models\Order;
use App\Models\Order_Detail;
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
        $payment = Payment::where('user_id', Auth::user()->id)->get();
        $order = Order::all();
        return view('payment.index', compact('payment', 'order'), ['order' => $order])->with([
            'user' => User::all(),
        ]);
    }

   
    public function create($id)
    {

        $user = User::where('name', Auth::user()->name)->get();
        return view('payment.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'order_id' => 'required',
            // 'order_detail_id' => 'nullable',
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
        $payment->order_id = $request->order_id;
        $payment->payment_method = $request->payment_method;
        $payment->proof_of_transaction = 'upload/transaction/' . $new_proof_of_transaction;
        $payment->save();

        // Sisipkan relasi antara pembayaran dan paket kendaraan yang dipilih
        // $payment->vehiclePackages()->attach($vehicle_packages);

        return redirect()->route('homepage.index')->with('success', 'Data ditambah');
    }

    public function edit($id)
    {
        $payment = Payment::find($id);
        $user = User::find($id);
        $order = Order::find($id);
        return view('payment.edit', compact('payment', 'user', 'order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'payment_approved' => 'required',
        ]);

        $payment = Payment::find($id);
        $payment->payment_approved = $request->payment_approved;
        $payment->save();

        return redirect()->route('order.index');
    }


    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();

        return redirect()->route('payment.index')->with('berhasil', "$payment->total_price Berhasil dihapus!");
    }
}