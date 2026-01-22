<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AsetToko;
use App\Models\Keranjang;

class KeranjangController extends Controller
{
    // INDEX
    public function index()
    {
        $keranjang = Keranjang::with('toko')->get();
        return view('keranjang.index', compact('keranjang'));
    }

    // CREATE (tampilkan form)
    public function create()
    {
        $asettoko = AsetToko::all();
        return view('keranjang.create', compact('asettoko'));
    }

    // STORE (simpan data)
    public function store(Request $request)
    {
        // validasi dasar
        $request->validate([
            'id_toko' => 'required',
            'id_kasir' => 'required',
            'id_transaksi' => 'required',
            'id_produk' => 'required',
            'qty_keranjang' => 'required|numeric',
            'total_beli' => 'required|numeric',
            'harga_terpilih '=>'required|numeric',
        ]);

        Keranjang::create($request->all());

        return redirect()->route('keranjang.index')
                         ->with('success', 'Data keranjang berhasil ditambahkan');
    }

    // SHOW (detail satu data)
    public function show($id)
    {
        $item = Keranjang::findOrFail($id);
        return view('keranjang.show', compact('item'));
    }

    // EDIT (tampilkan form edit)
    public function edit($id)
    {
        $item = Keranjang::findOrFail($id);
        $asettoko = AsetToko::all();

        return view('keranjang.edit', compact('item', 'toko'));
    }

    // UPDATE (update data)
    public function update(Request $request, $id)
    {
        $request->validate([
              'id_toko'   => 'required|exists:aset_toko,id_toko',
            'id_kasir' => 'required',
            'id_transaksi' => 'required',
            'id_produk' => 'required',
            'qty_keranjang' => 'required|numeric',
            'total_beli' => 'required|numeric',
        ]);

        $item = Keranjang::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('keranjang.index')
                         ->with('success', 'Data keranjang berhasil diupdate');
    }

    // DESTROY (hapus data)
    public function destroy($id)
    {
        $item = Keranjang::findOrFail($id);
        $item->delete();

        return redirect()->route('keranjang.index')
                         ->with('success', 'Data keranjang berhasil dihapus');
    }
}
