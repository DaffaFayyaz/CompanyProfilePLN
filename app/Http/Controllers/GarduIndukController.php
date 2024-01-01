<?php

namespace App\Http\Controllers;
use App\Models\GarduInduk;
use Illuminate\Http\Request;

class GarduIndukController extends Controller
{
    public function showDetail($id) {

        $garduinduk = GarduInduk::find($id);
        return view('garduinduk', compact('garduinduk'));

        $garduinduks = GarduInduk::all();
        return view('garduinduk', compact('garduinduks'));
    }
    
}
