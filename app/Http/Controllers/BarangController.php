<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
     public function index()
     {
        $barang = Barang::all();

        return view('barang.index', ['barang' => $barang]);
     }

     public function create()
     {
        return view('barang.create');
     }
}
