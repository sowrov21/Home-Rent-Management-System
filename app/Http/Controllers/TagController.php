<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    function index()
    {
        return view('backend.tags.index');
    }
    function create()
    {
        return view('backend.tags.create');
    }

    function store()
    {
        return null;
    }
    function edit()
    {
        return view('backend.tags.edit');
    }
    function update()
    {
        return null;
    }
    function delete()
    {
        return null;
    }
}
