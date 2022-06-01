<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class TagController extends Controller
{
    function index()
    {
        $tags = Tag::all();
        return view('backend.tags.index',compact('tags'));
    }
    function create()
    {
        return view('backend.tags.create');
    }

    function store(Request $req)
    {
       try
       {
        $validated = $req->validate([
        'name' => 'required|unique:tags|max:255',
        ]);
        if($validated){
        
            $data = $req->except(['_token']);
       // dd($data);
          Tag::create($data);
        return redirect()->route('tag.index');
        }
       }
       catch(QueryException $e)
       {
         return redirect()->back()->with('error', $e->getMessage());
       }
        
    }
    function edit($id)
    {
      $tag = Tag::find($id);
        return view('backend.tags.edit',compact('tag'));
    }
    function update(Request $req,$id)
    {
        //dd($req->all());
        try
       {
        $validated = $req->validate([
        'name' => 'required|unique:tags|max:255',
        ]);
        if($validated){
        
            $data = $req->except(['_token']);
       // dd($data);
          Tag::where('id',$id)->update($data);
        return redirect()->route('tag.index');
        }
       }
       catch(QueryException $e)
       {
         return redirect()->back()->with('error', $e->getMessage());
       }
    }

    function show($id)
    {
         $tag = Tag::find($id);
        return view('backend.tags.show',compact('tag'));
    }
    function destroy($id)
    {
        //dd($id);
        //$tag = Tag::find($id);
        Tag::where('id',$id)->delete();
         return redirect()->route('tag.index');
    }
}
