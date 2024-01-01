<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trafos', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_gi');
            $table->string('nama_bay');
            $table->string('merk_trafo');
            $table->YEAR('tahun_operasi');
            $table->string('ratio_trafo');
            $table->string('rata_rata_pembebanan');
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
