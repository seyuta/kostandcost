<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pay_code')->nullable();
            $table->string('pay_code_dp')->nullable();
            $table->string('no_kwitansi')->nullable();
            $table->string('no_kwitansi_dp')->nullable();
            $table->string('bill')->nullable();
            $table->string('dp_booking')->nullable();
            $table->string('pay_method')->nullable();
            $table->string('pay_method_dp')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_name_dp')->nullable();
            $table->string('transaction_code')->nullable();
            $table->string('transaction_code_dp')->nullable();
            $table->date('pay_date')->nullable();
            $table->date('pay_date_dp')->nullable();
            $table->string('status')->nullable()->default('Belum Lunas');
            $table->string('status_dp')->nullable()->default('Belum Lunas');
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
        Schema::dropIfExists('payments');
    }
}
