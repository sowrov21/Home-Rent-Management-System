<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\ApartmentImage;

class RentController extends Controller
{
    function index()
    {
        $apartments = Apartment::all();
        $images = ApartmentImage::all();
        return view('welcome',compact('apartments','images'));
    }
    function cart()
    {
        // $apartments = Apartment::all();
        // $images = ApartmentImage::all();
        return view('frontend.rents.cart');
    }
    function addToCart(Apartment $apartment)
    {
        
        $cart = session()->get('cart');
 
        if(!$cart)
        {
            $cart = [
                $apartment->id => [
                    'name' => $apartment->name,
                    'price' => $apartment->price,
                    'image' => $apartment->main_image,
                ]
            ];
            session()->put('cart');

            return redirect()->route('rent.cart')->with('success', "Added t Cart");
        } 

        $cart[$apartment->id] = [

            'name' => $apartment->name,
            'price' => $apartment->price,
            'image' => $apartment->main_image,
        ];
        session()->put('cart');
        return redirect()->route('rent.cart')->with('success', "Added t Cart");
    }

}
