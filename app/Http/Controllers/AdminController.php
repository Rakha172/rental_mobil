<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(User $user){
        return view('admin.infouser')->with([
            'user' => User::all()
        ]);
    }
}
