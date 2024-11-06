<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class AdminContoller extends Controller
{
  public function home()
  {
    return view('admin/index');
  }
  public function add_view_slider()
  {
    return view('admin/add_slider');
  }
  public function add_slider(Request $req)
  {
    $req->validate([
      'name' => 'required|string|max:255',
      'nav_1' => 'nullable|string|max:255',
      'nav_1_link' => 'nullable|max:255',
      'nav_2' => 'nullable|string|max:255',
      'nav_2_link' => 'nullable|max:255',
    ]);

    $insert = Slider::create([
      'name' => $req->name,
      'nav_1' => $req->nav_1,
      'nav_1_link' => $req->nav_1_link,
      'nav_2' => $req->nav_2,
      'nav_2_link' => $req->nav_2_link,
    ]);

    return redirect()->back()->with('succes', 'Slider Added Successfull');
  }
 
}
