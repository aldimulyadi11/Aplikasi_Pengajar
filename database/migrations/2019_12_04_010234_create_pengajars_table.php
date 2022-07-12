<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajars', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('email_pengajar',100)->unique();
            $table->string('no_hp');
            $table->string('alamat_lengkap');
            $table->string('aktivitas');
            $table->string('kode_pos');
            $table->string('pendidikan_terakhir');
            $table->string('id_materi');
            $table->string('ceritakan_diri');
            $table->string('foto_pribadi');
            $table->string('foto_ktp');
            $table->string('foto_ijazah');
            $table->string('foto_lainnya');
            $table->string('status');
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
        Schema::dropIfExists('pengajars');
    }
}
