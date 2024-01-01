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
        Schema::create('towers', function (Blueprint $table) {
            $table->id();
            $table->string('wilayah_kerja');
            $table->string('upt');
            $table->string('ultg');
            $table->string('route');
            $table->string('route2');
            $table->string('tegangan_kv');
            $table->double('panjang_su_kms');
            $table->double('saluran_sk_kms');
            $table->string('jenis');
            $table->double('luas_penampang');
            $table->double('kapasitas_a');
            $table->YEAR('tahun_operasi');
            $table->date('tanggal_operasi');
            $table->string('sirkit');
            $table->string('tower');
            $table->string('joint');
            $table->string('status_operasi');
            $table->string('keterangan');
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
