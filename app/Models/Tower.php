<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    use HasFactory;

    protected $fillable = [
        'wilayah_kerja',
        'upt',
        'ultg',
        'route',
        'route2',
        'tegangan_kv',
        'panjang_su_kms',
        'saluran_sk_kms',
        'jenis',
        'luas_penampang',
        'kapasitas_a',
        'tahun_operasi',
        'tanggal_operasi',
        'sirkit',
        'tower',
        'joint',
        'status_operasi',
        'keterangan',
    ];
}
