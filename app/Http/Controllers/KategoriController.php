<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\AsetToko;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
         $kategori = Kategori::with('toko')->get();
        return view('kategori.index', compact('kategori'));
    }
     public function create()
    {
        $asettoko = AsetToko::all();
        return view('kategori.create', compact('asettoko'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id_toko'   => 'required|exists:aset_toko,id_toko',
            'nama_kategori'   => 'required|string',
            'jenis_transaksi'   => 'required|string',
        ]);

        Kategori::create($request->all());
        return redirect() ->route('kategori.index')->with('Data berhasil di tambahkan');

    }
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        $asettoko = AsetToko::all();

        return view('kategori.edit', compact('kategori', 'asettoko'));
    }
   public function update(Request $request, $id)
    {
        $request->validate([
            'id_toko' => 'required|exists:aset_toko,id_toko',
            'nama_kategori' => 'required|string',
            'jenis_transaksi' => 'required|string',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());

        return redirect()->route('kategori.index')
            ->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()
            ->route('kategori.index')
            ->with('success', 'Data kas berhasil dihapus');
    }
}
