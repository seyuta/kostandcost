<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_name')->nullable();
            $table->string('size_bed')->nullable();
            $table->string('desk')->nullable();
            $table->string('wardrobe')->nullable();
            $table->string('air_conditioner')->nullable();
            $table->string('line_telp')->nullable();
            $table->string('wifi')->nullable();
            $table->string('bathroom')->nullable();
            $table->string('water_heater')->nullable();
            $table->string('private_balkon')->nullable();
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
        Schema::dropIfExists('room_types');
    }
}
