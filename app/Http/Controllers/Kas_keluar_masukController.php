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
    public function create()
    {
        $asettoko = AsetToko::all();
        return view('kas_keluar_masuk.create', compact('asettoko'));
    }
    public function store(Request $request)
    {
        $request->validate([
        'id_toko' => 'required|exists:aset_toko,id_toko',
        'nama_kas_keluar_masuk' => 'required|string',
        'id_user' => 'required|numeric',
        'pembayaran_kas_keluar_masuk' => 'required|string',
        'tanggal_bayar_kas_keluar_masuk' => 'required|date',
        'jumlah_kas_keluar_masuk' => 'required|numeric',
        'tipe_kas_keluar_masuk' => 'required|string',
        'bulan_kas_keluar_masuk' => 'required|numeric|min:1|max:12',
        'tahun_kas_keluar_masuk' => 'required|numeric',
    ]);

        Kas_keluar_masuk::create($request->all());

        return redirect()
            ->route('kas_keluar_masuk.index')
            ->with('success', 'Data kas berhasil ditambahkan');
    }
    public function edit($id)
    {
        $kas_keluar_masuk = Kas_keluar_masuk::findOrFail($id);
        $asettoko = AsetToko::all();

        return view('kas_keluar_masuk.edit', compact('kas_keluar_masuk', 'asettoko'));
    }
    public function update(Request $request , $id)
    {
        $request->validate([
        'id_toko' => 'required|exists:aset_toko,id_toko',
        'nama_kas_keluar_masuk' => 'required|string',
        'id_user' => 'required|numeric',
        'pembayaran_kas_keluar_masuk' => 'required|string',
        'tanggal_bayar_kas_keluar_masuk' => 'required|date',
        'jumlah_kas_keluar_masuk' => 'required|numeric',
        'tipe_kas_keluar_masuk' => 'required|string',
        'bulan_kas_keluar_masuk' => 'required|numeric|min:1|max:12',
        'tahun_kas_keluar_masuk' => 'required|numeric',
    ]);
        $kas_keluar_masuk = Kas_keluar_masuk::findOrFail($id);
        $kas_keluar_masuk->update($request->all());
        return redirect()
            ->route('kas_keluar_masuk.update')
            ->with('success', 'Data kas keluar masuk berhasil di edit');
    }
    public function destroy($id)
    {
        $kas_keluar_masuk = Kas_keluar_masuk::findOrFail($id);
        $kas_keluar_masuk->delete();

        return redirect()
            ->route('kas_keluar_masuk.index')
            ->with('success', 'Data kas Keluar Masuk berhasil dihapus');
    }
}
