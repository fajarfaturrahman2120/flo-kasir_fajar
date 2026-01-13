<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';

    protected $fillable = [
        'id_toko',
        'nama_customer',
        'poin',
        'keterangan_customer',
        'no_hp_customer',
        'alamat_customer',
    ];

    // ✅ INI YANG KURANG (WAJIB ADA)
    public function toko()
    {
        return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
    }
}
