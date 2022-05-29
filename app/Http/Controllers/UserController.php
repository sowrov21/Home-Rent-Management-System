<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        return view('backend.users.index',compact('users'));
    }
    public function show($id){
        $user = User::find($id);
        //dd($user);
        return view('backend.users.show-details',compact('user'));
    }
}
