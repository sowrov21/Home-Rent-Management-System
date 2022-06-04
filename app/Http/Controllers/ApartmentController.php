<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Location;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\ApartmentImage;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Database\QueryException;

class ApartmentController extends Controller
{
    function index()
    {
        $apartments = Apartment::all();
        return view('backend.apartments.index',compact('apartments'));
    }
    function create()
    {
        $locations = Location::all();
        $tags = Tag::all();
        return view('backend.apartments.create',compact('locations','tags'));
    }

    function store(Request $req)
    {
       try
       {
        $validated = $req->validate([
        'title' => 'required|unique:apartments|max:255',
        ]);
        //dd($req->all());

        if($validated){

          if($req->hasFile('main_image')) {
           
            $mainImage = $this->uploadImage($req->main_image, $req->title);
 
         }

          $apartment = Apartment::create([
            'title' => $req->title ?? null,
            'main_image'=>$mainImage,
            'owner_id' => $req->owner_id ?? null,
            'location_id' => $req->location_id ?? null,
            'apartment_size' => $req->apartment_size ?? null,
            'total_bed' => $req->total_bed ?? null,
            'total_balcony' => $req->total_balcony ?? null,
            'total_parking' => $req->total_parking ?? null,
            'parking_size' => $req->parking_size ?? null,
            'floor_number' => $req->floor_number ?? null,
            'unit_number' => $req->unit_number ?? null,
            'unit_per_floor' => $req->unit_per_floor ?? null,
            'price' => $req->price ?? null,
            'total_lift' => $req->total_lift ?? null,
            'year_build' => $req->year_build ?? null,
            'apartment_type_id' => $req->apartment_type_id ?? null,
            'apartment_facing' => $req->apartment_facing ?? null,

        ]);

        $tags = $req->tag_id;

        $apartment->tags()->attach($tags);

        $images = $req->image;
        //dd($images);
        foreach ($images as $image) {
          //dd($image);
          $file_name = $this->uploadImage($image, $req->title);

          $data[] = [
            'apartment_id' => $apartment->id,
            'name' => $file_name,
          ];
         
        }
        ApartmentImage::insert($data);
        return redirect()->route('apartment.index');
        }
       }
       catch(QueryException $e)
       {
         return redirect()->back()->withErrors($e->getMessage());
       }
        
    }
    function edit($id)
    {
      $apartment = Apartment::find($id);
      $locations = Location::all();
      $tags = Tag::all();
      $images = ApartmentImage::where('apartment_id', $id)->get();
      $selectedTags = $apartment->tags->pluck('id')->toArray();
        return view('backend.apartments.edit',compact('apartment','locations','tags','selectedTags', 'images'));
    }
    function update(Request $req,$id)
    {
        //dd($req->all());
        //dd($id);
        try
       {
        $validated = $req->validate([
        'title' => 'required|max:255',
        ]);

        if($validated){

            Apartment::where('id',$id)->update([
            'title' => $req->title ?? null,
            'owner_id' => $req->owner_id ?? null,
            'location_id' => $req->location_id ?? null,
        ]);

          $apartment = Apartment::find($id);

          $tags = $req->tag_id;

         $apartment->tags()->sync($tags);

        $images = $req->image;
        //dd($images);
        foreach ($images as $image) {
          //dd($image);
          $file_name = $this->uploadImage($image, $req->title);

          $data[] = [
            'apartment_id' => $apartment->id,
            'name' => $file_name,
          ];
        }
        ApartmentImage::insert($data);
        return redirect()->route('apartment.index');
        }
       }
       catch(QueryException $e)
       {
         return redirect()->back()->withErrors($e->getMessage());
       }
    }

    function show($id)
    {
         $apartment = Apartment::find($id);
         $images = ApartmentImage::where('apartment_id',$id)->get();
         //dd($images);
        return view('backend.apartments.show',compact('apartment','images'));
    }

    function destroy($id)
    {
        //dd($id);
        try
        {
          $apartment = Apartment::find($id);
          $apartment->tags()->detach();
          Apartment::where('id',$id)->delete();

          return redirect()->route('apartment.index');
        }
        catch(QueryException $e)
        {
          return redirect()->back()->withErrors($e->getMessage());
        }
       
      
    
         
    }

    private function uploadImage($file, $title)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());

        $file_name = $timestamp .'-'.$title. '.' . $file->getClientOriginalExtension();
        

        $pathToUpload = storage_path().'/app/public/apartments/'; 

        if(!is_dir($pathToUpload)) {

            mkdir($pathToUpload, 0755, true);

        }

      Image::make($file)->resize(634,792)->save($pathToUpload.$file_name);

        return $file_name;
    }

    private function unlink($file)
    {
        $pathToUpload = storage_path().'/app/public/apartments/';
        if ($file != '' && file_exists($pathToUpload. $file)) {
            @unlink($pathToUpload. $file);
        }
    }

}
