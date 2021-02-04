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
            $table->bigIncrements('id');
            $table->unsignedInteger('room_type_id')->nullable();
            $table->unsignedInteger('occupant_id')->nullable();
            $table->integer('no_room')->nullable();
            $table->string('location')->nullable();
            $table->string('size_room')->nullable();
            $table->string('cost_per_day')->nullable();
            $table->string('cost_per_month')->nullable();
            $table->string('cost_per_year')->nullable();
            $table->text('ket_room')->nullable();
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
