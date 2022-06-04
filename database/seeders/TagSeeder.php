<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(['name'=>'For Rent',]);
        DB::table('tags')->insert(['name'=>'New',]);
        DB::table('tags')->insert(['name'=>'Used',]);
    }
}
