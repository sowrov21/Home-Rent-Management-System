<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
    public function destroy($id){
        $user = User::find($id)->first();
        //dd($user);
        $user->delete();
        $msg='Delete Success';
        Toastr::success($msg, 'Delete successful.!',["progressBar"=> true,"positionClass"=>"toast-top-right"]);
        return redirect()->back()->with('msg',$msg);;

    }
}
