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
    //   dd($request->all());

      //Method:1

    /*
       DB::table('roles')->insert([

             'name'=>$request->name
       ]);
    */

       //Method:2

       $data = $request->except(['_token']);

       Role::create($data);

        return redirect()->route('Role.allUser');
    }

    public function destroyRole($id)
    {
            //Method:1

       DB::table('roles')->where('id',$id)->delete();

       return redirect()->back();

    }
    public function editRole($id){
            //dd($id);
        $role = Role::find($id);
        //dd($role);
        return view('backend.roles.edit', compact('role'));
    }
    public function updateRole(Request $request,$id){
         //dd($id);
        //dd($request->all());
        $data = $request->except(['_token']);

        Role::where('id',$id)->update($data);

        return redirect()->route('Role.allUser');
    }
    public function detailsRole($id){
        $role = Role::find($id);
        return view('backend.roles.details',compact('role'));
    }
}
