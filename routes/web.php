<?php

use App\Models\AlatUji;
use App\Models\Trafo;
use App\Models\Cubicle;
use App\Models\Bayline;
use App\Models\JumlahAlat;
use App\Models\GarduInduk;
use App\Models\JajaranManajemen;
use App\Models\Kegiatan;
use App\Models\Tower;
use App\Models\VisiMisi;
use App\Models\LandingPage;
use App\Models\FotoUtamaHalaman;
use App\Models\Manajemen;
use App\Models\PimpinanManager;
use App\Http\Controllers\TrafoController;
use App\Http\Controllers\BaylineController;
use App\Http\Controllers\AlatUjiController;
use App\Http\Controllers\TowerController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\TrafosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/trafo', [TrafoController::class, 'index']);
Route::get('/trafo/excel/export', [TrafoController::class, 'export_excel']);
Route::get('/baylines', [BaylineController::class, 'index']);
Route::get('/baylines/excel/export', [BaylineController::class, 'export_excel_bayline']);
Route::get('/alatuji', [AlatUjiController::class, 'index']);
Route::get('/alatuji/excel/export', [AlatUjiController::class, 'export_excel_alatuji']);
Route::get('/tower', [TowerController::class, 'index']);
Route::get('/tower/excel/export', [TowerController::class, 'export_excel_tower']);

Route::get('/kegiatan', function () {
    $kegiatans = Kegiatan::orderBy('created_at', 'desc')->paginate(8);
    $fotos = FotoUtamaHalaman::all();
    return view('kegiatan', compact('kegiatans', 'fotos'));
});

Route::get('/detailkegiatan/{id}', function ($id) {
    $kegiatans = Kegiatan::find($id);
    return view('detailkegiatan', compact('kegiatans'));
});

Route::get('/manajemen',function()
{   
    $manajemens = Manajemen::all();
    $fotos = FotoUtamaHalaman::all();
    return view('manajemen', compact('manajemens', 'fotos'));
});
Route::get('/garduinduk/{id}', function ($id) {
    $garduinduks = GarduInduk::find($id);
    return view('garduinduk', compact('garduinduks'));
});
Route::get('/', function () {
    $visiMisis = VisiMisi::all();
    $landingPages = LandingPage::all();
    $pimpinanManagers = PimpinanManager::all();
    $jajaranManajemens = JajaranManajemen::all();
    $garduinduks = GarduInduk::all();
    $statsAlats = JumlahAlat::all();
    
    return view('index', compact('visiMisis', 'landingPages', 'pimpinanManagers', 'jajaranManajemens', 'garduinduks', 'statsAlats'));
});




