<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function create(Request $request)
    {
        return view('login.create')->with([
            'login' => Login::all(),
        ]);
    }
    public function store()
    {
        return view('login.index');
    }
 }
