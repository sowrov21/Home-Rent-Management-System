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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('main_image')->nullable();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('location_id');
            $table->float('apartment_size')->nullable();
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
            $table->string('apartment_purpose')->nullable();
            $table->string('interior')->nullable();
             $table->string('building_reg_type')->nullable();;
             $table->string('house_rules')->nullable();;
             $table->string('gas_conn_type')->nullable();
             $table->string('apartment_facing')->nullable();
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
        Schema::dropIfExists('apartments');
    }
};
