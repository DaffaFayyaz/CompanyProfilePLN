<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('alat_ujis', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_alat_uji');
            $table->string('nama_alat_uji');
            $table->string('serial_id');
            $table->YEAR('tahun_buat');
            $table->string('merk');
            $table->string('tipe');
            $table->string('kondisi');
            $table->string('keterangan');
            $table->integer('jumlah_pemakaian_tw_1');
            $table->date('tanggal_kalibrasi_akhir');
            $table->string('sertifikat_kalibrasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
