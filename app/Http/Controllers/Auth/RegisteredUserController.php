<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'gender' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'id_card_photo' => 'required|image|mimes:png,jpg|max:2040',
            'driver_licence_photo' => 'required|image|mimes:png,jpg|max:2040',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $id_card_photo = $request->id_card_photo;
        $slug = Str::slug($id_card_photo->getClientOriginalName());
        $new_id_card_photo = time() . '_' . $slug;
        $id_card_photo->move('uploads/register/', $new_id_card_photo);
        $driver_licence_photo = $request->driver_licence_photo;
        $slug = Str::slug($driver_licence_photo->getClientOriginalName());
        $new_driver_licence_photo = time() . '_' . $slug;
        $driver_licence_photo->move('uploads/register/', $new_driver_licence_photo);

        $user = User::create([
            'name' => $request->name,
            'gender'=> $request->gender,
            'phone_number'=> $request->phone_number,
            'address'=> $request->address,
            'id_card_photo'=> 'uploads/register/' . $new_id_card_photo,
            'driver_licence_photo'=> 'uploads/register/' . $new_driver_licence_photo,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

