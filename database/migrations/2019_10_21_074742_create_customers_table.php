<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergency_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname_ec')->nullable();
            $table->string('relation')->nullable();
            $table->string('jenis_identitas_ec')->nullable();
            $table->string('no_identitas_ec')->nullable();
            $table->string('tmp_lahir_ec')->nullable();
            $table->date('tgl_lahir_ec')->nullable();
            $table->string('no_hp1_ec')->nullable();
            $table->string('no_hp2_ec')->nullable();
            $table->string('gender_ec')->nullable();
            $table->string('email_ec')->nullable();
            $table->string('job_ec')->nullable();
            $table->text('alamat_ec')->nullable();
            $table->timestamps();
        });

        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('emergency_contact_id')->nullable();
            $table->unsignedInteger('occupant_id')->nullable();
            $table->string('fullname')->nullable();
            $table->string('nickname')->nullable();
            $table->string('jenis_identitas')->nullable();
            $table->string('no_identitas')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('no_hp1')->nullable();
            $table->string('no_hp2')->nullable();
            $table->string('gender')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('email')->nullable();
            $table->string('job')->nullable();
            $table->text('alamat_asal')->nullable();
            $table->string('nama_instansi')->nullable();
            $table->text('alamat_instansi')->nullable();
            $table->string('no_telp_instansi')->nullable();
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
        Schema::dropIfExists('customers');
        Schema::dropIfExists('emergency_contacts');
    }
}
