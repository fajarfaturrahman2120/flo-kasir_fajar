<?php

namespace App\Http\Controllers;
use App\Models\Kasbon_detail;
use App\Models\AsetToko;
use App\Models\kasbon;

use Illuminate\Http\Request;


class Kasbon_detailController extends Controller
{
    public Function index()
    {

        $kasbon_detail =Kasbon_detail::with('toko')->with('kasbon')->get();
        return view('kasbon_detail.index', compact('kasbon_detail'));
    }
    public function create()
    {
        $kasbon = Kasbon::all();
        $asettoko = AsetToko::all();
       return view('kasbon_detail.create', compact('kasbon', 'asettoko'));
    }
     public function store(Request $request)
    {
        $validated = $request->validate([
                'id_kasbon'   => 'required|exists:kasbon,id_kasbon',
                'id_toko'   => 'required|exists:aset_toko,id_toko',
                'jumlah_kasbon_detail' => 'required|numeric',
                'tipe_bayar_kasbon_detail' => 'required',
                'tanggal_kasbon_detail' => 'required|date',
        ]);
        Kasbon_detail::create($validated);

        return redirect()
            ->route('kasbon_detail.index')
            ->with('success', 'Data kasbon Detail berhasil ditambahkan');

    }
    public function edit($id)
    {
        $kasbon_detail = Kasbon_detail::findOrFail($id);
        $kasbon = Kasbon::all();
        $asettoko = AsetToko::all();

        return view(
            'kasbon_detail.edit',
            compact('kasbon_detail', 'kasbon', 'asettoko')
        );
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kasbon' => 'required|exists:kasbon,id_kasbon',
            'id_toko' => 'required|exists:aset_toko,id_toko',
            'jumlah_kasbon_detail' => 'required|numeric',
            'tipe_bayar_kasbon_detail' => 'required',
            'tanggal_kasbon_detail' => 'required|date',
        ]);

        $kasbon_detail = Kasbon_detail::findOrFail($id);

        $kasbon_detail->update($request->all());

        return redirect()
            ->route('kasbon_detail.index')
            ->with('success', 'Data kasbon detail berhasil diupdate');
    }
     public function destroy($id)
    {
        $kasbon_detail = Kasbon_detail::findOrFail($id);
        $kasbon_detail->delete();

        return redirect()
            ->route('kasbon_detail.index')
            ->with('success', 'Data kasbon Detail berhasil dihapus');
    }


}
