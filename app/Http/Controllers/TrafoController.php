<?php

namespace App\Http\Controllers;

use App\Exports\ExportTrafo;
use Illuminate\Http\Request;
use App\Models\Trafo;
use App\Models\FotoUtamaHalaman;
use Maatwebsite\Excel\Facades\Excel;

class TrafoController extends Controller
{
    public function index()
    {
        $trafos = Trafo::all();
        $fotos = FotoUtamaHalaman::all();
        return view('trafo', compact('trafos', 'fotos'));
    }

    function export_excel()
    {
        return Excel::download(new ExportTrafo,"Trafo.xlsx");
    }
}
