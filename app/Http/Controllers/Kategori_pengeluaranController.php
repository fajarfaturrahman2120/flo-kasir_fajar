<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetToko;
use App\Models\Kategori_pengeluaran;

class Kategori_pengeluaranController extends Controller
{
    public function index()
    {
        $kategori_pengeluaran = Kategori_pengeluaran::with('toko')->get();
        return view('kategori_pengeluaran.index', compact('kategori_pengeluaran'));
    }
    public function create()
    {
        $asettoko = AsetToko::all();
        return view('kategori_pengeluaran.create', compact('asettoko'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_toko'   => 'required|exists:aset_toko,id_toko',
            'nama_kategori_pengeluaran'   => 'required|string',

        ]);

        Kategori_pengeluaran::create($request->all());
        return redirect() ->route('kategori_pengeluaran.index')->with('Data berhasil di tambahkan');

    }
    public function edit($id)
    {
        $kategori_pengeluaran = Kategori_pengeluaran::findOrFail($id);
        $asettoko = AsetToko::all();

        return view('kategori_pengeluaran.edit', compact('kategori_pengeluaran', 'asettoko'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_toko' => 'required|exists:aset_toko,id_toko',
            'nama_kategori_pengeluaran' => 'required|string',

        ]);

        $kategori_pengeluaran = Kategori_pengeluaran::findOrFail($id);
        $kategori_pengeluaran->update($request->all());

        return redirect()->route('kategori_pengeluaran.index')
            ->with('success', 'Data berhasil diubah');
    }
}
