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
        Schema::create('gardu_induks', function (Blueprint $table) {
            $table->id();
            $table->string('isi_text_paragraf');
            $table->string('nama_pimpinan');
            $table->string('nama_gardu_induk');
            $table->string('nama_jabatan');
            $table->string('alamat');
            $table->string('link_map');
            $table->string('foto_gardu_induk');
            $table->string('foto_pimpinan');
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
