<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsetToko extends Model
{
    protected $table = 'aset_toko';
    protected $primaryKey = 'id_aset_toko';

    protected $fillable = [
        'id_toko',
        'nama_aset_toko',
        'harga_perolehan',
        'harga_sekarang',
        'keterangan_aset_toko',
        'bulan_aset_toko',
        'tahun_aset_toko',
        'tanggal_aset_toko',
    ];
    public function kasbon()
    {
        return $this->hasMany(Kasbon::class, 'id_toko', 'id_toko');
    }

}
