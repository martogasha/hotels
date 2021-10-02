<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('hotel_id');
            $table->string('room_name');
            $table->string('room_feet');
            $table->string('room_bed_type');
            $table->string('room_bathroom_type');
            $table->string('room_amount');
            $table->string('room_amenities');
            $table->string('room_amenities1')->nullable();
            $table->string('room_amenities2')->nullable();
            $table->string('room_amenities3')->nullable();
            $table->string('room_amenities4')->nullable();
            $table->string('room_amenities5')->nullable();
            $table->string('room_amenities6')->nullable();
            $table->string('room_amenities7')->nullable();
            $table->string('room_amenities8')->nullable();
            $table->string('room_amenities9')->nullable();
            $table->string('room_amenities10')->nullable();
            $table->string('room_amenities11')->nullable();
            $table->string('room_amenities12')->nullable();
            $table->string('room_amenities13')->nullable();
            $table->string('room_amenities14')->nullable();
            $table->string('room_amenities15')->nullable();
            $table->string('room_amenities16')->nullable();
            $table->string('room_amenities17')->nullable();
            $table->string('room_amenities18')->nullable();
            $table->string('room_amenities19')->nullable();
            $table->string('room_amenities20')->nullable();
            $table->string('room_amenities21')->nullable();
            $table->string('room_amenities22')->nullable();
            $table->string('room_amenities23')->nullable();
            $table->string('room_amenities24')->nullable();
            $table->string('room_amenities25')->nullable();
            $table->string('room_amenities26')->nullable();
            $table->string('room_amenities27')->nullable();
            $table->string('room_amenities28')->nullable();
            $table->string('room_amenities29')->nullable();
            $table->string('room_amenities30')->nullable();
            $table->string('room_amenities31')->nullable();
            $table->string('room_amenities32')->nullable();
            $table->string('room_amenities33')->nullable();
            $table->string('room_amenities34')->nullable();
            $table->string('room_amenities35')->nullable();
            $table->string('room_amenities36')->nullable();
            $table->string('room_amenities37')->nullable();
            $table->string('room_amenities38')->nullable();
            $table->string('room_amenities39')->nullable();
            $table->string('room_amenities40')->nullable();
            $table->string('room_amenities41')->nullable();
            $table->string('room_amenities42')->nullable();
            $table->string('room_amenities43')->nullable();
            $table->string('room_amenities44')->nullable();
            $table->string('room_amenities45')->nullable();
            $table->string('room_amenities46')->nullable();
            $table->string('room_amenities47')->nullable();
            $table->string('room_amenities48')->nullable();
            $table->string('room_amenities49')->nullable();
            $table->string('room_amenities50')->nullable();
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
        Schema::dropIfExists('rooms');
    }
}
