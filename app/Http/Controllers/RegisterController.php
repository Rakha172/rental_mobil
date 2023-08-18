<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function create()
    {
        return view('login.register')->with([
            'user' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);

        $user = new User;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->confirm_password = $request->confirm_password;
        $user->save();

        return to_route('register.index')->with('succes', 'data ditambah');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
