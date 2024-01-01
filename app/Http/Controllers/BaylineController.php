<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bayline;
use App\Models\FotoUtamaHalaman;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportBayline;

class BaylineController extends Controller
{
    public function index()
    {
        $baylines = Bayline::all();
        $fotos = FotoUtamaHalaman::all();
        return view('baylines', compact('baylines', 'fotos'));
    }

    function export_excel_bayline()
    {
        return Excel::download(new ExportBayline,"Bayline.xlsx");
    }
}
