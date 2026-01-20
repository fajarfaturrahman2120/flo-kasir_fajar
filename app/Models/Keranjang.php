<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    protected $table = 'keranjang';
    protected $primaryKey = 'id_keranjang';
    protected $fillable = [
        'id_toko',
        'id_kasir',
        'id_transaksi',
        'id_produk',
        'qty_keranjang',
        'total_beli',
        'tanggal_beli',
        'harga_jual',
        'harga_pokok',
        'harga_grosir',
        'min_grosir',
        'harga_terpilih',
        'harga_diskon',
        'status_beli',
        'is_diskon',
        'pengaturan_stok',
        'cek_harga_diskon',

    ];


        public function toko()
        {
            return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
        }
}
