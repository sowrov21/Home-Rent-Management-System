<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
            DB::table('roles')->insert(['name'=>'Super Admin',]);

            
            DB::table('roles')->insert([

            'name'=>'Admin',
        ]);
            DB::table('roles')->insert([

            'name'=>'Owner',
        ]);
            DB::table('roles')->insert([

            'name'=>'Tenant',
        ]);
    }
}
