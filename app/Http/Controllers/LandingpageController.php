<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $settings = Setting::all();

        return view('landingpage.index', ['settings' => $settings]);
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);
    }
}