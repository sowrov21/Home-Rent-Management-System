<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        return view('backend.admin.roles.index');
    }
    public function allUser()
    {
        $arrayData = Role::all();
        return view('backend.roles.index',compact('arrayData'));//'<h1>Hi</h1>';
    }
    public function createRole()
    {
      return view('backend.roles.create');
    }

    public function storeRole(Request $request)
    {
      //dd($request->all());

      //Method:1

    /*
       DB::table('roles')->insert([

             'name'=>$request->name
       ]);
    */

       //Method:2
        return redirect()->route('Role.allUser');
    }

    public function destroyRole($id)
    {
            //Method:1

       DB::table('roles')->where('id',$id)->delete();

       return redirect()->back();
    
    }
}
