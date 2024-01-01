<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JajaranGI extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_leader',
        'judul',
        'foto'
    ];
}
