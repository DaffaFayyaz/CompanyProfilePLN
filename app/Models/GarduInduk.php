<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarduInduk extends Model
{
    use HasFactory;

    protected $fillable = [
        'isi_text_paragraf',
        'nama_pimpinan',
        'nama_jabatan',
        'foto_gardu_induk',
        'foto_pimpinan',
        'nama_gardu_induk',
        'alamat',
        'link_map',
        'foto_diagram_line'
    ];
}
