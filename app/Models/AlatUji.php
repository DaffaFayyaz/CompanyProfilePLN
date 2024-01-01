<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatUji extends Model
{
    use HasFactory;

    protected $fillable = [
        'lokasi_alat_uji',
        'nama_alat_uji',
        'serial_id',
        'tahun_buat',
        'merk',
        'tipe',
        'kondisi',
        'keterangan',
        'jumlah_pemakaian_tw_1',
        'tanggal_kalibrasi_akhir',
        'sertifikat_kalibrasi',
    ];
}
