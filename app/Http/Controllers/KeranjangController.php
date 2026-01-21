<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetToko;
use App\Models\Keranjang;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = Keranjang::with('toko')->get();
        return view('keranjang.index', compact('keranjang'));
    }
}
