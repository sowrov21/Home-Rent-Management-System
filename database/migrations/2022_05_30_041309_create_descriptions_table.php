<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->id();
            $table->float('property_size')->nullable();
            $table->integer('total_bed')->nullable();
            $table->integer('total_balcony')->nullable();
            $table->integer('total_parking')->nullable();
            $table->float('parking_size')->nullable();
            $table->integer('floor_number')->nullable();
            $table->string('unit_number')->nullable();
            $table->integer('unit_per_floor')->nullable();
            $table->float('price')->nullable();
            $table->integer('total_lift')->nullable();
            $table->datetime('year_build')->nullable();
            $table->string('apartment_type_id')->nullable();
            $table->string('apartment_purpose')->defaults('For Rent');
            $table->enum('interior',['Furnished','Semi-furnished','Not Furnished'])->defaults('Not Furnished');
             $table->string('building_reg_type')->defaults('Residential');
             $table->string('house_rules')->defaults('Basic Rules');
             $table->string('gas_conn_type')->nullable('Gov. Connection');
             $table->enum('apartment_facing',['North','South','East','West','-'])->defaults('-');
             $table->unsignedBigInteger('apartment_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descriptions');
    }
};
