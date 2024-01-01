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
        Schema::create('FotoHalamanUtamas', function (Blueprint $table) {
            $table->id();
            $table->string('foto_trafo');
            $table->string('foto_alatuji');
            $table->string('foto_tower');
            $table->string('foto_bayline');
            $table->string('foto_kegiatan');
            $table->string('foto_manajemen');
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
