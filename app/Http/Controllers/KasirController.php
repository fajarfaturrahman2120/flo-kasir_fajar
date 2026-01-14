<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasir;
use App\Models\AsetToko;
use Illuminate\Support\Facades\Redirect;

class KasirController extends Controller
{
   public function index()
    {
        $kasir = Kasir::with('toko')->get();
        return view('kasir.index', compact('kasir'));
    }
     public function create()
    {
        $asettoko = AsetToko::all();
        return view('kasir.create', compact('asettoko'));
    }
    public function store(Request $request)
    {
         $request->validate([
            'id_toko'             => 'required|exists:aset_toko,id_toko',
            'nama_kasir'       => 'required|string',
            'nik_kasir'     => 'required|string',
            'no_hp_kasir'        => 'required|string',
            'alamat_kasir' => 'required|string',
            'keterangan_kasir'   => 'required|string',

        ]);
    Kasir::create($request->all());
    return redirect() ->route('kasir.index')->with('Data berhasil di tambahkan');
    }
    public function edit($id)
    {
        $kasir = Kasir::findOrFail($id);
        $asettoko = AsetToko::all();

        return view('kasir.edit', compact('kasir', 'asettoko'));
    }
    public function update(Request $request, $id)
    {

         $request->validate([
            'id_toko'             => 'required|exists:aset_toko,id_toko',
            'nama_kasir'       => 'required|string',
            'nik_kasir'     => 'required|string',
            'no_hp_kasir'        => 'required|string',
            'alamat_kasir' => 'required|string',
            'keterangan_kasir'   => 'required|string',

        ]);
        $kasir = Kasir::findOrFail($id);
        $kasir->update($request->all());

        return redirect()
            ->route('kasir.index')
            ->with('success', 'Data kas berhasil diperbarui');

    }
    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();

        return redirect()
            ->route('kasir.index')
            ->with('success', 'Data kas berhasil dihapus');
    }
}
