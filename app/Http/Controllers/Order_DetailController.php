<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Order_Detail;
use Illuminate\Http\Request;

class Order_DetailController extends Controller
{
      public function index(Request $request){
     $search = $request->query('search');
     if(!empty($search)){
         $dataOrder = Order_Detail::where('Order_Detail.name', 'like', '%' . $search . '%')
         ->orWhere('Order_Detail.package_name', 'like', '%' . $search . '%')
         ->orWhere('Order_Detail.rental_date', 'like', '%' . $search . '%')
         ->orWhere('Order_Detail.return_date', 'like', '%' . $search . '%')
         ->paginate(5)->fragment('ord');
     }else {
         $dataOrder = Order_Detail::paginate(5)->fragment('ord');
     }
     return view('order_detail.index')->with([
         'order' => $dataOrder,
         'search' => $search
     ]);

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
