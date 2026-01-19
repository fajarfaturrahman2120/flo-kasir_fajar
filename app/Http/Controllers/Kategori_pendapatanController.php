<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetToko;
use App\Models\Kategori_pendapatan;


class Kategori_pendapatanController extends Controller
{
    public function index()
    {
        $kategori_pendapatan = Kategori_pendapatan::with('toko')->get();
        return view('kategori_pendapatan.index', compact('kategori_pendapatan'));
    }
    public function create()
    {
        $asettoko = AsetToko::all();
        return view('kategori_pendapatan.create', compact('asettoko'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_toko'   => 'required|exists:aset_toko,id_toko',
            'nama_kategori_pendapatan'   => 'required|string',

        ]);

        Kategori_pendapatan::create($request->all());
        return redirect() ->route('kategori_pendapatan.index')->with('Data berhasil di tambahkan');

    }
    public function edit($id)
    {
        $kategori_pendapatan = Kategori_pendapatan::findOrFail($id);
        $asettoko = AsetToko::all();

        return view('kategori_pendapatan.edit', compact('kategori_pendapatan', 'asettoko'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_toko' => 'required|exists:aset_toko,id_toko',
            'nama_kategori_pendapatan' => 'required|string',

        ]);

        $kategori_pendapatan = Kategori_pendapatan::findOrFail($id);
        $kategori_pendapatan->update($request->all());

        return redirect()->route('kategori_pendapatan.index')
            ->with('success', 'Data berhasil diubah');
    }
    public function destroy($id)
    {
        $kategori_pendapatan = Kategori_pendapatan::findOrFail($id);
        $kategori_pendapatan->delete();

        return redirect()
            ->route('kategori_pendapatan.index')
            ->with('success', 'Data kas berhasil dihapus');
    }
}
