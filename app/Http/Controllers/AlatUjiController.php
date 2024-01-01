<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlatUji;
use App\Models\FotoUtamaHalaman;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportAlatUji;


class AlatUjiController extends Controller
{
    public function index()
    {
        $alatujis = AlatUji::all();
        $fotoutamahalamans = FotoUtamaHalaman::all();
        return view('alatuji', compact('alatujis', 'fotoutamahalamans'));
        
    }

    function export_excel_alatuji()
    {
        return Excel::download(new ExportAlatUji,"AlatUji.xlsx");
    }
}
