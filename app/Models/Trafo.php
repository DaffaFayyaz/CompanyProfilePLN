<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trafo extends Model
{
    use HasFactory;

    protected $fillable = [
        'lokasi_gi',
        'nama_bay',
        'merk_trafo',
        'tahun_operasi',
        'ratio_trafo',
        'rata_rata_pembebanan',
    ];
}
