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
            'users' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'id_card_photo' => 'required',
            'driver_licence_photo' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->id_card_photo = $request->id_card_photo;
        $user->driver_licence_photo = $request->driver_licence_photo;
        $user->email = $request->email;
        $user->password = $request->password;
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
