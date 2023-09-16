<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();

        return view('setting.index', ['settings' => $settings]);
    }

    public function create()
    {

        return view('setting.create');
    }
    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required',
            'history' => 'required',
            'image' => 'required|image|mimes:png,jpg|max:2040',
            'visi_misi' => 'required',
        ]);

    $image = $request->image;
    $slug = Str::slug($image->getClientOriginalName());
    $new_image = time() . '_' . $slug;
    $image->move('upload/vehicle/', $new_image);

    $settings = new Setting;
    $settings->image = 'upload/vehicle/' . $new_image;
    $settings->name = $request->name;
    $settings->history = $request->history;
    $settings->visi_misi = $request->visi_misi;
    $settings->save();

    return redirect('setting.index')->with('succes', 'data ditambah');
}

public function edit($id)
{
    $settings = Setting::findOrFail($id);
    return view('setting.edit', compact('settings'));
}


public function update(Request $request, $id)
{
$request->validate([
    'name' => 'required',
    'history' => 'required',
    'image' => 'required|image|mimes:png,jpg|max:2040',
    'visi_misi' => 'required',
]);

$image = $request->image;
$slug = Str::slug($image->getClientOriginalName());
$new_image = time() . '_' . $slug;
$image->move('upload/vehicle/', $new_image);

$settings = Setting::find($id);
$settings->image = 'upload/vehicle/' . $new_image;
$settings->name = $request->name;
$settings->history = $request->history;
$settings->visi_misi = $request->visi_misi;
$settings->save();
return to_route('setting.index')->with('succes', 'data ditambah');
}

public function destroy($id)
{
    $settings = Setting::find($id);
    $settings->delete();

    return back()->with('succes', 'data dihapus');
}
}

