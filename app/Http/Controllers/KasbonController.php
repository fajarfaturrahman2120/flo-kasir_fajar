<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kasbon;
use App\Models\AsetToko;
use Carbon\Carbon;

class KasbonController extends Controller
{
    public function index()
    {
        $kasbon = Kasbon::with('toko')->get();
        return view('kasbon.index', compact('kasbon'));
    }

    public function create()
    {
        $asettoko = AsetToko::all();
        return view('kasbon.create', compact('asettoko'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_toko'             => 'required|exists:aset_toko,id_toko',
            'jumlah_kasbon'       => 'required|numeric',
            'nama_pengkasbon'     => 'required|string',
            'jenis_kasbon'        => 'required|string',
            'pembayaran_kasbon' => 'required|string',
            'keterangan_kasbon'   => 'required|string',
            'cicilan'             => 'required|numeric',
            'tanggal_kasbon'      => 'required|date',
        ]);

        $tanggal = \Carbon\Carbon::parse($validated['tanggal_kasbon']);
        $validated['bulan_kasbon'] = $tanggal->month;
        $validated['tahun_kasbon'] = $tanggal->year;

        Kasbon::create($validated);

        return redirect()
            ->route('kasbon.index')
            ->with('success', 'Data kasbon berhasil ditambahkan');
    }
    public function edit($id)
    {
        $kasbon   = Kasbon::findOrFail($id);
        $asettoko = AsetToko::all();

        return view('kasbon.edit', compact('kasbon', 'asettoko'));
    }

    public function update(Request $request, $id)
    {
        $kasbon = Kasbon::findOrFail($id);

        $validated = $request->validate([
            'id_toko'             => 'required|exists:aset_toko,id_toko',
            'jumlah_kasbon'       => 'required|numeric',
            'nama_pengkasbon'     => 'required|string',
            'jenis_kasbon'        => 'required|string',
            'pembayaran_kasbon'   => 'required|string',
            'keterangan_kasbon'   => 'required|string',
            'cicilan'             => 'required|numeric',
            'tanggal_kasbon'      => 'required|date',
        ]);

        // update bulan & tahun otomatis dari tanggal
        $tanggal = Carbon::parse($validated['tanggal_kasbon']);
        $validated['bulan_kasbon'] = $tanggal->month;
        $validated['tahun_kasbon'] = $tanggal->year;

        $kasbon->update($validated);

        return redirect()
            ->route('kasbon.index')
            ->with('success', 'Data kasbon berhasil diperbarui');
    }
    public function destroy($id)
    {
        $kasbon = Kasbon::findOrFail($id);
        $kasbon->delete();

        return redirect()
            ->route('kasbon.index')
            ->with('success', 'Data kas berhasil dihapus');
    }


}
