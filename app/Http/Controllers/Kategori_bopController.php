<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetToko;
use App\Models\Kategori_bop;

class Kategori_bopController extends Controller
{
    public function index()
    {
         $kategori_bop = Kategori_bop::with('toko')->get();
        return view('kategori_bop.index', compact('kategori_bop'));
    }
    public function create()
    {
        $asettoko = AsetToko::all();
        return view('kategori_bop.create', compact('asettoko'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_toko'   => 'required|exists:aset_toko,id_toko',
            'nama_kategori_bop'   => 'required|string',

        ]);

        Kategori_bop::create($request->all());
        return redirect() ->route('kategori_bop.index')->with('Data berhasil di tambahkan');

    }
    public function edit($id)
    {
        $kategori_bop = Kategori_bop::findOrFail($id);
        $asettoko = AsetToko::all();

        return view('kategori_bop.edit', compact('kategori_bop', 'asettoko'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_toko' => 'required|exists:aset_toko,id_toko',
            'nama_kategori_bop' => 'required|string',

        ]);

        $kategori_bop = Kategori_bop::findOrFail($id);
        $kategori_bop->update($request->all());

        return redirect()->route('kategori_bop.index')
            ->with('success', 'Data berhasil diubah');
    }
    public function destroy($id)
    {
        $kategori_bop = Kategori_bop::findOrFail($id);
        $kategori_bop->delete();

        return redirect()
            ->route('kategori_bop.index')
            ->with('success', 'Data kas berhasil dihapus');
    }
}
