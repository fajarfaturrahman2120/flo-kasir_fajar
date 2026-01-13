<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kas;
use App\Models\AsetToko;

class KasController extends Controller
{

    public function index()
    {
        $kas = Kas::with('toko')->get();
        return view('kas.index', compact('kas'));
    }


    public function create()
    {
        $asettoko = AsetToko::all();
        return view('kas.create', compact('asettoko'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_toko' => 'required',
            'tipe_kas' => 'required|in:Kas Masuk,Kas Keluar',
            'modal_kas' => 'required|numeric',
            'keterangan_kas' => 'required|string',
            'tanggal_kas' => 'required|date',
            'bulan_kas' => 'required|numeric|min:1|max:12',
            'tahun_kas' => 'required|numeric',
            'pembayaran_kas' => 'required|in:Cash,Debit,Dana',
        ]);

        Kas::create($request->all());

        return redirect()
            ->route('kas.index')
            ->with('success', 'Data kas berhasil ditambahkan');
    }


  public function edit($id)
{
    $kas = Kas::findOrFail($id);
    $asettoko = AsetToko::all();

    return view('kas.edit', compact('kas', 'asettoko'));
}



    public function update(Request $request, $id)
    {
        $request->validate([
            'id_toko' => 'required',
            'tipe_kas' => 'required|in:Kas Masuk,Kas Keluar',
            'modal_kas' => 'required|numeric',
            'keterangan_kas' => 'required|string',
            'tanggal_kas' => 'required|date',
            'bulan_kas' => 'required|numeric|min:1|max:12',
            'tahun_kas' => 'required|numeric',
            'pembayaran_kas' => 'required|in:Cash,Debit,Dana',
        ]);

        $kas = Kas::findOrFail($id);
        $kas->update($request->all());

        return redirect()
            ->route('kas.index')
            ->with('success', 'Data kas berhasil diperbarui');
    }



    public function destroy($id)
    {
        $kas = Kas::findOrFail($id);
        $kas->delete();

        return redirect()
            ->route('kas.index')
            ->with('success', 'Data kas berhasil dihapus');
    }
}
