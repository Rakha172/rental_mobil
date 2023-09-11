<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Str;
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
        $order = Order::all();

        return view('payment.create', ['order' => $order]);
    }

    public function store(Request $request)
{
    $request->validate([
        'total_price' => 'required',
        'payment_method' => 'required',
        'proof_of_transaction' => 'required|image|mimes:png,jpg|max:2040',
        'order_id' => 'required|exists:orders,id'
    ]);

    if ($request->hasFile('proof_of_transaction')) {
        $image = $request->file('proof_of_transaction');
        $slug = Str::slug($image->getClientOriginalName());
        $new_image = time() . '_' . $slug;
        $image->move('upload/payment/', $new_image);

        $payment = new Payment;
        $payment->total_price = $request->total_price;
        $payment->payment_method = $request->payment_method;
        $payment->proof_of_transaction = 'upload/payment/' . $new_image;
        $payment->save();

        return redirect()->route('payment.index')->with('success', 'Data ditambah');
    } else {
        return back()->with('error', 'Tidak ada file gambar yang diunggah');
    }
}


    public function edit(Payment $oayment)
    {
        $order = Order::all();

        return view('payment.edit', compact('payment', 'order'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'total_price' => 'required',
            'payment_method' => 'required',
            'proof_of_transaction' => 'required|image|mimes:png,jpg|max:2040',
            'order_id' => 'required|exists:orders,id'
        ]);

        $image = $request->file('proof_of_transaction');
        $slug = Str::slug($image->getClientOriginalName());
        $new_image = time() . '_' . $slug;
        $image->move('upload/payment/', $new_image);

        // Memperbarui entitas Payment yang ada daripada membuat yang baru
        $payment->total_price = $request->total_price;
        $payment->payment_method = $request->payment_method;
        $payment->proof_of_transaction = 'upload/payment/' . $new_image;
        $payment->save();

        return redirect()->route('payment.index')->with('success', 'Data diperbarui');
    }


    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payment.index')->with('berhasil', "$payment->total_price Berhasil dihapus!");
    }
}
