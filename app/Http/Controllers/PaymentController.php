<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
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
        $validated = $request->validate([
            'total_price' => 'required',
            'payment_method' => 'required',
            'proof_of_transaction' => 'required',
            'order_id' => 'required|exists:order,id'
        ]);

        Payment::created($validated);

        return redirect('/payment')->with('berhasil', "$request->total_price Berhasil ditambahkan!");
    }

    public function edit(Payment $oayment)
    {
        $order = Order::all();

        return view('payment.edit', compact('payment', 'order'));
    }

    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([
            'total_price' => 'required',
            'payment_method' => 'required',
            'proof_of_transaction' => 'required',
            'order_id' => 'required|exists:order,id',
        ]);

        $payment->update($validated);

        return redirect()->route('payment.index')->with('berhasil', "$request->total_price Berhasil diubah!");
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payment.index')->with('berhasil', "$payment->total_price Berhasil dihapus!");
    }
}
