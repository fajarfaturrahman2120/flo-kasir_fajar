<?php

namespace App\Http\Controllers;

use App\Models\AsetToko;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::with('toko')->get();
        return view('customer.index', compact('customer'));
    }

    public function create()
    {
        $asettoko = AsetToko::all();
        return view('customer.create', compact('asettoko'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_toko' => 'required|exists:aset_toko,id_toko',
            'nama_customer' => 'required|string|max:255',
            'poin' => 'required|numeric',
            'keterangan_customer' => 'nullable|string',
            'no_hp_customer' => 'required|string|max:20',
            'alamat_customer' => 'nullable|string',
        ]);

        Customer::create($validated);

        return redirect()
            ->route('customer.index')
            ->with('success', 'Data Customer berhasil disimpan');
    }

    // ===== FORM EDIT =====
    public function edit($id)
    {
        $customer = Customer::where('id_customer', $id)->firstOrFail();
        $asettoko = AsetToko::all();

        return view('customer.edit', compact('customer', 'asettoko'));
    }

    // ===== PROSES UPDATE =====
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_toko' => 'required|exists:aset_toko,id_toko',
            'nama_customer' => 'required|string|max:255',
            'poin' => 'required|numeric',
            'keterangan_customer' => 'nullable|string',
            'no_hp_customer' => 'required|string|max:20',
            'alamat_customer' => 'nullable|string',
        ]);

        Customer::where('id_customer', $id)->update($validated);

        return redirect()
            ->route('customer.index')
            ->with('success', 'Data Customer berhasil diupdate');
    }
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('customer.index');
    }
}
