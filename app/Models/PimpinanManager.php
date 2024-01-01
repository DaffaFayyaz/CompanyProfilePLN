<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PimpinanManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_manager',
        'tahun_pimpinan',
        'image'
    ];
}
