<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApartmentImage;
use Illuminate\Database\QueryException;

class ApartmentImageController extends Controller
{
    function index()
    {
        $apartment_images = ApartmentImage::all();
        return view('backend.apartment_images.index',compact('apartment_images'));
    }
    function create()
    {
        return view('backend.apartment_images.create');
    }

    function store(Request $req)
    {
       try
       {
        $validated = $req->validate([
        'name' => 'required',
        ]);
        if($validated){
        
            $data = $req->except(['_token']);
       // dd($data);
          ApartmentImage::create($data);
        return redirect()->route('apartment_image.index');
        }
       }
       catch(QueryException $e)
       {
         return redirect()->back()->with('error', $e->getMessage());
       }
        
    }
    function edit($id)
    {
      $apartment_image = ApartmentImage::find($id);
        return view('backend.apartment_images.edit',compact('apartment_image'));
    }
    function update(Request $req,$id)
    {
        //dd($req->all());
        try
       {
        $validated = $req->validate([
        'name' => 'required|unique:apartment_images|max:255',
        ]);
        if($validated){
        
            $data = $req->except(['_token']);
       // dd($data);
          ApartmentImage::where('id',$id)->update($data);
        return redirect()->route('apartment_image.index');
        }
       }
       catch(QueryException $e)
       {
         return redirect()->back()->with('error', $e->getMessage());
       }
    }

    function show($id)
    {
         $apartment_image = ApartmentImage::find($id);
        return view('backend.apartment_images.show',compact('apartment_image'));
    }
    function destroy($id)
    {
        //dd($id);
        //$apartment_image = ApartmentImage::find($id);
        ApartmentImage::where('id',$id)->delete();
         return redirect()->route('apartment_image.index');
    }
}
