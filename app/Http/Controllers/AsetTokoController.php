<?php

namespace App\Http\Controllers;

use App\Models\AsetToko;
use Illuminate\Http\Request;

class AsetTokoController extends Controller
{
    public function index()
    {
        $asettoko = Asettoko::all();
        return view('aset_toko.index', compact('asettoko'));
    }

    public function create()
    {
        return view('aset_toko.create');
    }

    public function store(Request $request)
    {
        AsetToko::create($request->all());
        return redirect()->route('aset_toko.index');
    }

    public function show($id)
    {
        $asettoko = AsetToko::findOrFail($id);
        return view('aset-toko.show', compact('asettoko'));
    }

    public function edit($id)
    {
        $asettoko = AsetToko::findOrFail($id);
        return view('aset_toko.edit', compact('asettoko'));
    }

    public function update(Request $request, $id)
    {
        $asettoko = AsetToko::findOrFail($id);
        $asettoko->update($request->all());
        return redirect()->route('aset_toko.index');
    }

    public function destroy($id)
    {
        AsetToko::destroy($id);
        return redirect()->route('aset_toko.index');
    }
}
