<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {

        return view('admin.infoorder');
    }

    public function show()
    {

        return view('order.index');
    }

    public function create()
    {

    }

}
