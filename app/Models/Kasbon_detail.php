<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kasbon_detail extends Model
{
    protected $table = 'kasbon_detail';
    protected $primaryKey = 'id_kasbon_detail';

    protected $fillable = [
        'id_kasbon',
        'id_toko',
        'jumlah_kasbon_detail',
        'tipe_bayar_kasbon_detail',
        'tanggal_kasbon_detail',

    ];
    public function toko()
    {
        return $this->belongsTo(AsetToko::class, 'id_toko', 'id_toko');
    }

    // ✅ RELASI KE KASBON
    public function kasbon()
    {
        return $this->belongsTo(Kasbon::class, 'id_kasbon', 'id_kasbon');
    }
}
