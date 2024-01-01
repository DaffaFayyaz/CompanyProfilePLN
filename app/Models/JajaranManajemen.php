<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JajaranManajemen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nama_jabatan',
        'foto'
    ];
}
