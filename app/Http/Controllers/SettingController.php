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
            'images' => 'required|image|mimes:png,jpg|max:2040',
            'location' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'about_me' => 'required',
            'slogan' => 'required',
        ]);
    // Upload gambar untuk field 'image'
    $image = $request->image;
    $slugimage = Str::slug($image->getClientOriginalName());
    $new_image = time() . '_' . $slugimage;
    $image->move('upload/vehicle/', $new_image);

     // Upload gambar untuk field 'images'
     $images = $request->images;
     $slugimages = Str::slug($images->getClientOriginalName());
     $new_images = time() . '_images_' . $slugimages;
     $images->move('upload/vehicle/', $new_images);

    $settings = new Setting;
    $settings->image = 'upload/vehicle/' . $new_image;
    $settings->images = 'upload/vehicle/' . $new_images;
    $settings->name = $request->name;
    $settings->history = $request->history;
    $settings->location = $request->location;
    $settings->no_telp = $request->no_telp;
    $settings->email = $request->email;
    $settings->about_me = $request->about_me;
    $settings->slogan = $request->slogan;
    $settings->save();

    return redirect('/setting')->with('succes', 'data ditambah');
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
    'images' => 'required|image|mimes:png,jpg|max:2040',
    'location' => 'required',
    'no_telp' => 'required',
    'email' => 'required',
    'about_me' => 'required',
    'slogan' => 'required',
]);

// edit gambar untuk field 'image'
$image = $request->image;
$slugimage = Str::slug($image->getClientOriginalName());
$new_image = time() . '_' . $slugimage;
$image->move('upload/vehicle/', $new_image);

 // edit gambar untuk field 'images'
 $images = $request->images;
 $slugimages = Str::slug($images->getClientOriginalName());
 $new_images = time() . '_images_' . $slugimages;
 $images->move('upload/vehicle/', $new_images);

$settings = Setting::find($id);
$settings->image = 'upload/vehicle/' . $new_image;
$settings->images = 'upload/vehicle/' . $new_images;
$settings->name = $request->name;
$settings->history = $request->history;
$settings->location = $request->location;
$settings->no_telp = $request->no_telp;
$settings->email = $request->email;
$settings->about_me = $request->about_me;
$settings->slogan = $request->slogan;
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

