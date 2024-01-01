<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoUtamaHalaman extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'foto_trafo',
        'foto_alatuji',
        'foto_tower',
        'foto_bayline',
        'foto_kegiatan',
        'foto_manajemen',
    ];
}
