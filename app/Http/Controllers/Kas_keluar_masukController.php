<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetToko;
use App\Models\Kas_keluar_masuk;


class Kas_keluar_masukController extends Controller
{
     public function index()
    {
        $kas_keluar_masuk = Kas_keluar_masuk::with('toko')->get();
        return view('kas_keluar_masuk.index', compact('kas_keluar_masuk'));
    }
}
