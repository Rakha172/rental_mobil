<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle_Package;

class PackageController extends Controller
{
    public function index()
    {
        $vehicle_package = Vehicle_Package::all();
        return view('package.index',compact('vehicle_package'));
    }
}
