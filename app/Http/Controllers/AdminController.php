<?php

namespace App\Http\Controllers;


use App\Models\User;
use DB;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');

        if(!empty($search)){
            $dataUser = User::where('users.name', 'like', '%' . $search . '%')
            ->orWhere('users.email', 'like', '%' . $search . '%')
            ->orWhere('users.phone_number', 'like', '%' . $search . '%')
            ->orWhere('users.address', 'like', '%' . $search . '%')
            ->paginate(5)->fragment('usr');
        }else {
            $dataUser = User::paginate(5)->fragment('usr');
        }
        return view('admin.infouser')->with([
            'user' => $dataUser,
            'search' => $search
        ]);
    }

    function show (){
        return view('admin.infouser')->with([
            'user' => User::all()
        ]);
    }
}
