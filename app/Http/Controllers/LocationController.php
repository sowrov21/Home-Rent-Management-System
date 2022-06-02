<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class LocationController extends Controller
{
    function index()
    {
        $locations = Location::all();
        return view('backend.locations.index',compact('locations'));
    }
    function create()
    {
        return view('backend.locations.create');
    }

    function store(Request $req)
    {
       try
       {
        $validated = $req->validate([
        'name' => 'required|unique:locations|max:255',
        ]);
        if($validated){
        
            $data = $req->except(['_token']);
       // dd($data);
          Location::create($data);
        return redirect()->route('location.index');
        }
       }
       catch(QueryException $e)
       {
         return redirect()->back()->with('error', $e->getMessage());
       }
        
    }
    function edit($id)
    {
      $location = Location::find($id);
        return view('backend.locations.edit',compact('location'));
    }
    function update(Request $req,$id)
    {
        //dd($req->all());
        try
       {
        $validated = $req->validate([
        'name' => 'required|unique:locations|max:255',
        ]);
        if($validated){
        
            $data = $req->except(['_token']);
       // dd($data);
          Location::where('id',$id)->update($data);
        return redirect()->route('location.index');
        }
       }
       catch(QueryException $e)
       {
         return redirect()->back()->with('error', $e->getMessage());
       }
    }

    function show($id)
    {
         $location = Location::find($id);
        return view('backend.locations.show',compact('location'));
    }
    function destroy($id)
    {
        //dd($id);
        //$location = Location::find($id);
        Location::where('id',$id)->delete();
         return redirect()->route('location.index');
    }
}
