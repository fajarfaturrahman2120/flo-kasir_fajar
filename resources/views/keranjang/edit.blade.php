<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Keranjang</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <h4 class="text-center mb-4">Tambah Data Keranjang</h4>

    <form action="{{ route('keranjang.upadate',$keranjang->id_keranjang) }}" method="POST">
        @csrf

        <div class="row">

               <div class="mb-3">
                            <label class="form-label">Id Toko</label>
                            <select name="id_toko" class="form-select" required>
                                <option value="">-- Pilih Toko --</option>
                                @foreach ($asettoko as $item)
                                    <option value="{{ $item->id_toko }}"
                                         {{ $keranjang->id_toko == $item->id_toko ? 'selected' : '' }}>>
                                        {{ $item->id_toko }} — {{ $item->nama_aset_toko }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

            <div class=" mb-3">
                <label>ID Kasir</label>
                <input type="number" name="id_kasir" class="form-control"  value="{{ $keranjang->id_kasir }}" required>
            </div>

            <div class=" mb-3">
                <label>ID Transaksi</label>
                <input type="number" name="id_transaksi" class="form-control" value="{{ $keranjang->id_transaksi }}"  required>
            </div>

            <div class=" mb-3">
                <label>ID Produk</label>
                <input type="number" name="id_produk" class="form-control"  value="{{ $keranjang->id_produk }}"  required>
            </div>

            <div class=" mb-3">
                <label>Qty Keranjang</label>
                <input type="number" name="qty_keranjang" class="form-control" value="{{ $keranjang->total_beli }}" required>
            </div>

            <div class=" mb-3">
                <label>Total Beli</label>
                <input type="number" name="total_beli" class="form-control"  value="{{ $keranjang->tanggal_beli }}" required>
            </div>

            <div class=" mb-3">
                <label>Tanggal Beli</label>
                <input type="date" name="tanggal_beli" class="form-control" required value="{{ $keranjang->tanggal_beli }}">
            </div>

            <div class=" mb-3">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control" value="{{ $keranjang->harga_jual }}">
            </div>

            <div class=" mb-3">
                <label>Harga Pokok</label>
                <input type="number" name="harga_pokok" class="form-control"  value="{{ $keranjang->harga_pokok }}">
            </div>

            <div class=" mb-3">
                <label>Harga Grosir</label>
                <input type="number" name="harga_grosir" class="form-control" value="{{ $keranjang->harga_grosir }}">
            </div>

            <div class=" mb-3">
                <label>Minimal Grosir</label>
                <input type="number" name="min_grosir" class="form-control"  value="{{ $keranjang->min_grosir }}">
            </div>

            <div class=" mb-3">
                <label>Harga Terpilih</label>
                <input type="number" name="harga_terpilih" class="form-control"  value="{{ $keranjang->harga_terpilih }}">
            </div>

            <div class=" mb-3">
                <label>Harga Diskon</label>
                <input type="number" name="harga_diskon" class="form-control"   value="{{ $keranjang->harga_diskon }}">
            </div>

            <div class=" mb-3">
                <label>Status Beli</label>
                <select name="status_beli" class="form-control">
                <option value="Pending" {{ $keranjang->status_beli=='Pending'?'selected':'' }}>Pending</option>
                <option value="Selesai" {{ $keranjang->status_beli=='Selesai'?'selected':'' }}>Selesai</option>
                </select>
            </div>

            <div class=" mb-3">
                <label>Diskon?</label>
                <select name="is_diskon" class="form-control">
                <option value="tidak" {{ $keranjang->is_diskon=='tidak'?'selected':'' }}>Tidak</option>
                <option value="ya" {{ $keranjang->is_diskon=='ya'?'selected':'' }}>Ya</option>
                </select>
            </div>

            <div class=" mb-3">
                <label>Pengaturan Diskon</label>
                <input type="text" name="pengaturan_diskon" class="form-control"   value="{{ $keranjang->pengaturan_diskon }}">
            </div>

        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('keranjang.index') }}" class="btn btn-secondary">
                Kembali
            </a>

            <button type="submit" class="btn btn-success">
                Simpan Data
            </button>
        </div>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
