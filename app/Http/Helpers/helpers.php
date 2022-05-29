<?php 

use App\Models\Role;

    function getRoleName($id){

        $name = Role::where('id',$id)->first()->name;
          
        return $name;
    }
