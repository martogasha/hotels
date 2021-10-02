<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->string('hotel_phone');
            $table->string('hotel_about');
            $table->string('hotel_email')->unique();
            $table->string('hotel_category');
            $table->string('hotel_type');
            $table->string('hotel_minimum_nights');
            $table->string('security_deposit');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('city');
            $table->string('hotel_amenities');
            $table->string('hotel_amenities1')->nullable();
            $table->string('hotel_amenities2')->nullable();
            $table->string('hotel_amenities3')->nullable();
            $table->string('hotel_amenities4')->nullable();
            $table->string('hotel_amenities5')->nullable();
            $table->string('hotel_amenities6')->nullable();
            $table->string('hotel_amenities7')->nullable();
            $table->string('hotel_amenities8')->nullable();
            $table->string('hotel_amenities9')->nullable();
            $table->string('hotel_amenities10')->nullable();
            $table->string('hotel_amenities11')->nullable();
            $table->string('hotel_amenities12')->nullable();
            $table->string('hotel_amenities13')->nullable();
            $table->string('hotel_amenities14')->nullable();
            $table->string('hotel_amenities15')->nullable();
            $table->string('hotel_amenities16')->nullable();
            $table->string('hotel_amenities17')->nullable();
            $table->string('hotel_amenities18')->nullable();
            $table->string('hotel_amenities19')->nullable();
            $table->string('hotel_amenities20')->nullable();
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
        Schema::dropIfExists('hotels');
    }
}
