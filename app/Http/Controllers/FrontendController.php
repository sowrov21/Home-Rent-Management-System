<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\ApartmentImage;

class FrontendController extends Controller
{
    function index()
    {
        $apartments = Apartment::all();
        $images = ApartmentImage::all();
        return view('frontend.index',compact('apartments','images'));
    }
    function allApartmets()
    {
        //dd('asci');
        $apartments = Apartment::all();
        $images = ApartmentImage::all();
        $locations = Location::all();
        return view('frontend.apartments.all-apartments',compact('apartments','images','locations'));
    }
}
