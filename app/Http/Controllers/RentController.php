<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\ApartmentImage;
use Illuminate\Support\Facades\Auth;

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
        
        //dd($apartment);
        //dd($apartment->user);
        //dd($apartment->locations->name);
        $cart = session()->get('cart');
        
        //cart has no data
        if(!$cart)
        {
            $cart = [
                $apartment->id => $this->sessionData($apartment)
            ];
            session()->put('cart',$cart);
           
            return redirect()->route('rent.cart')->with('success', "Added to Cart");
        } 
        //new data aded to cart
        $cart[$apartment->id] =$this->sessionData($apartment);
        session()->put('cart',$cart);
        return redirect()->route('rent.cart')->with('success', "Added t Cart");
    }

    public function destroy($id)
    {
        $cart = session()->get('cart');
        //session()->forget('cart'); //destroy all cart session data
        if(isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart',$cart);
            
        }
        return redirect()->route('rent.cart')->with('success', "Removed from Cart");
    }

    public function checkout()
    {
        $cart = session()->get('cart');
        //dd($cart);
      
        if(Auth::check())
        {
            $loggedUser = Auth::user()->id;
            $user = User :: find( $loggedUser);
            return view('frontend.rents.checkout',compact('user'));
        }
        else
        {
            return redirect()->route('login')->with('checkout_failed', "Please, Login to Checkout");
        }
     
    }

    private function sessionData(Apartment $apartment)
    {
        return [
            'name' => $apartment->name,
            'price' => $apartment->price,
            'image' => $apartment->main_image,
            'location_name'=>$apartment->locations->name,
            'owner_name'=>$apartment->user->name,
        ];
    }

}
