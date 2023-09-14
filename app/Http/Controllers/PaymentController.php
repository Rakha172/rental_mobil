<?php

namespace App\Http\Controllers;

// use App\Models\Order;
use App\Models\Vehicle_Package;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::all();

        return view('payment.index', ['payment' => $payment]);
    }

    public function create()
    {
        // $order = Order::all();

        return view('payment.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'payment_method' => 'required',
            'proof_of_transaction' => 'required|image|mimes:png,jpg|max:2040',
            'vehicle_packages' => 'required|array',
            'vehicle_packages.*' => 'exists:vehicle_packages,id', // Validasi untuk setiap item dalam array
        ]);

        // Hitung total harga dari paket kendaraan yang dipilih
        $selectedPackages = $request->input('vehicle_packages');
        $totalPrice = 0;

        foreach ($selectedPackages as $packageId) {
            $package = Vehicle_Package::find($packageId);
            if ($package) {
                $totalPrice += $package->price;
            }
        }

        // Upload gambar
        $image = $request->file('proof_of_transaction');
        $slug = Str::slug($image->getClientOriginalName());
        $new_image = time() . '_' . $slug;
        $image->move('upload/vehicle/', $new_image);

        // Simpan data pembayaran
        $payment = new Payment;
        $payment->name = $request->name;
        $payment->total_price = $totalPrice;
        $payment->payment_method = $request->payment_method;
        $payment->proof_of_transaction = 'upload/vehicle/' . $new_image;
        $payment->save();

        // Sisipkan relasi antara pembayaran dan paket kendaraan yang dipilih
        $payment->vehiclePackages()->attach($selectedPackages);

        return redirect()->route('payment.index')->with('success', 'Data ditambah');
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
