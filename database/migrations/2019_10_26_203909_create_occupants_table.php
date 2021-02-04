<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccupantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occupants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('room_id')->nullable();
            $table->unsignedInteger('customer_id')->nullable();
            $table->unsignedInteger('additional_facilities_id')->nullable();
            $table->unsignedInteger('payment_id')->nullable();
            $table->string('periode')->nullable();
            $table->string('length')->nullable();
            $table->date('due_date')->nullable();
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('occupants');
    }
}
