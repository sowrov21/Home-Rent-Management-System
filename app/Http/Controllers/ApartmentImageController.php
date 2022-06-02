<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApartmentImage;
use Illuminate\Database\QueryException;

class ApartmentImageController extends Controller
{
  public function index($id)
  {
    $images = ApartmentImage::where('apartment_id', $id)->get();
    // dd($images);
    return view('backend.apartment_images.index',compact('images'));
  }

  function destroy($id)
  {
   // dd($id);
    ApartmentImage::where('id', $id)->delete();
    return redirect()->back();
  }
}
