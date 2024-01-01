<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tower;
use App\Models\FotoUtamaHalaman;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportTower;

class TowerController extends Controller
{
    public function index()
    {
        $towers = Tower::all();
        $fotos = FotoUtamaHalaman::all();
        return view('tower', compact('towers', 'fotos'));
    }

    function export_excel_tower()
    {
        return Excel::download(new ExportTower,"Tower.xlsx");
    }
}
