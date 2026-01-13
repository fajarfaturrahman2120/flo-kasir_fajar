<?php

namespace App\Http\Controllers;

use App\Models\Bop;
use App\Models\AsetToko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BopController extends Controller
{
    public function index()
    {
        $bop = Bop::with('toko')->get();
        return view('bop.index', compact('bop'));
    }

    public function create()
    {
        $asettoko = AsetToko::all();
        return view('bop.create', compact('asettoko'));
    }

public function store(Request $request)
{
    $request->validate([
        'id_toko'         => 'required|exists:aset_toko,id_toko',
        'id_kategori_bop' => 'required',
        'jumlah_bop'      => 'required|numeric',
        'keterangan_bop'  => 'nullable|string',
        'tipe_bayar_bop'  => 'required|string',
        'gambar_bop'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'bulan_bop'       => 'required',
        'tahun_bop'       => 'required',
        'tanggal_bop'     => 'required|date',
    ]);

    $data = $request->except('gambar_bop');
    $data['tanggal_bop'] = date('Y-m-d', strtotime($request->tanggal_bop));


    if ($request->hasFile('gambar_bop')) {
        $file = $request->file('gambar_bop');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/bop', $filename);
        $data['gambar_bop'] = $filename;
    }

    Bop::create($data);

    return redirect()->route('bop.index')->with('success', 'Data BOP berhasil disimpan');
}


public function edit($id)
{
    $bop = Bop::where('id_bop', $id)->firstOrFail();
    $asettoko = AsetToko::all();

    return view('bop.edit', compact('bop', 'asettoko'));
}


public function update(Request $request, $id)
{
    // Gunakan id_bop jika primary key Anda bukan 'id'
    $bop = Bop::where('id_bop', $id)->firstOrFail();

    $request->validate([
        'id_toko'         => 'required|exists:aset_toko,id_toko',
        'id_kategori_bop' => 'required',
        'jumlah_bop'      => 'required|numeric',
        'keterangan_bop'  => 'nullable|string',
        'tipe_bayar_bop'  => 'required|string',
        'gambar_bop'      => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'bulan_bop'       => 'required',
        'tahun_bop'       => 'required',
        'tanggal_bop'     => 'required|date',
    ]);

    // dd($id); // HAPUS ATAU KOMENTAR BARIS INI

    $data = $request->except('gambar_bop');
    $data['tanggal_bop'] = date('Y-m-d', strtotime($request->tanggal_bop));

    if ($request->hasFile('gambar_bop')) {
        if ($bop->gambar_bop) {
            Storage::delete('public/bop/' . $bop->gambar_bop);
        }

        $file = $request->file('gambar_bop');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/bop', $filename);
        $data['gambar_bop'] = $filename;
    }

    $bop->update($data);

    return redirect()->route('bop.index')->with('success', 'Data BOP berhasil diperbarui');
}


    public function destroy($id)
    {
        $bop = Bop::findOrFail($id);

        if ($bop->gambar_bop) {
            Storage::delete('public/bop/' . $bop->gambar_bop);
        }

        $bop->delete();

        return redirect()->route('bop.index')->with('success', 'Data BOP berhasil dihapus');
    }
}
