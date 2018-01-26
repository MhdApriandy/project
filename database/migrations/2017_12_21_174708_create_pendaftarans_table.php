<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->text('asal_sekolah');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->string('agama');
            $table->string('status');
            $table->string('no_ijazah');
            $table->string('no_hp');
            $table->string('no_hp_ortu');
            $table->string('ayah');
            $table->string('ibu');
            $table->text('paket');
            $table->text('image');
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
        Schema::dropIfExists('pendaftarans');
    }
}
