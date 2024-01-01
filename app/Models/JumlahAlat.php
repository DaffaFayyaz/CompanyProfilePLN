<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JumlahAlat extends Model
{
    use HasFactory;
    protected $fillable = [
        'jumlah_trafo',
        'jumlah_bayline',
        'jumlah_cubicle',
        'jumlah_tower',
        'jumlah_alat_uji'
        
    ];
}
