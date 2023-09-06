<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;

class Order_DetailController extends Controller
{
     public function index()
     {
        $order_detail = Order_Detail::all();

        return view('order_detail.index', ['order_detail' => $order_detail]);
     }

     public function show()
     {
        return view('order_detail.index');
     }

     public function create()
     {
        $order = Order::all();

        return view('order_detail.create', ['order' => $order]);
     }

     public function store(Request $request)
     {
        $validated = $request->validate([
            'vehicle_status' => 'required',
            'order_id' => 'required|exists:order,id',
        ]);

        Order_Detail::create($validated);

        return redirect('/order_detail')->with('berhasil', "$request->vehicle_status Berhasil ditambahkan!");
     }

     public function edit(Order_Detail $order_detail)
     {
        $order = Order::all();

        return view('order_detail.edit', compact('order_detail', 'order'));
     }

     public function update(Request $request, Order_Detail $order_detail)
     {
        $validated = $request->validate([
            'vehicle_status' => 'required',
            'order_id' => 'required|exists:order,id',
        ]);

        $order_detail->update($validated);

        return redirect()->route('order_detail.index')->with('berhasil', "$request->vehicle_status Berhasil diubah!");
     }

     public function destroy(Order_Detail $order_detail)
     {
        $order_detail->delete();

        return redirect()->route('order_detail.index')->with('berhasil', "$order_detail->vehicle_status Berhasil dihapus!");
     }
}
