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

    <form action="{{ route('keranjang.store') }}" method="POST">
        @csrf

        <div class="row">

               <div class="mb-3">
                            <label class="form-label">Id Toko</label>
                            <select name="id_toko" class="form-select" required>
                                <option value="">-- Pilih Toko --</option>
                                @foreach ($asettoko as $item)
                                    <option value="{{ $item->id_toko }}">
                                        {{ $item->id_toko }} — {{ $item->nama_aset_toko }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

            <div class=" mb-3">
                <label>ID Kasir</label>
                <input type="text" name="id_kasir" class="form-control" required>
            </div>

            <div class=" mb-3">
                <label>ID Transaksi</label>
                <input type="text" name="id_transaksi" class="form-control" required>
            </div>

            <div class=" mb-3">
                <label>ID Produk</label>
                <input type="text" name="id_produk" class="form-control" required>
            </div>

            <div class=" mb-3">
                <label>Qty Keranjang</label>
                <input type="number" name="qty_keranjang" class="form-control" required>
            </div>

            <div class=" mb-3">
                <label>Total Beli</label>
                <input type="number" name="total_beli" class="form-control" required>
            </div>

            <div class=" mb-3">
                <label>Tanggal Beli</label>
                <input type="date" name="tanggal_beli" class="form-control" required>
            </div>

            <div class=" mb-3">
                <label>Harga Jual</label>
                <input type="number" name="harga_jual" class="form-control">
            </div>

            <div class=" mb-3">
                <label>Harga Pokok</label>
                <input type="number" name="harga_pokok" class="form-control">
            </div>

            <div class=" mb-3">
                <label>Harga Grosir</label>
                <input type="number" name="harga_grosir" class="form-control">
            </div>

            <div class=" mb-3">
                <label>Minimal Grosir</label>
                <input type="number" name="min_grosir" class="form-control">
            </div>

            <div class=" mb-3">
                <label>Harga Terpilih</label>
                <input type="number" name="harga_tepilih" class="form-control">
            </div>

            <div class=" mb-3">
                <label>Harga Diskon</label>
                <input type="number" name="harga_diskon" class="form-control">
            </div>

            <div class=" mb-3">
                <label>Status Beli</label>
                <select name="status_beli" class="form-control">
                    <option value="0">Pending</option>
                    <option value="1">Selesai</option>
                </select>
            </div>

            <div class=" mb-3">
                <label>Diskon?</label>
                <select name="is_diskon" class="form-control">
                    <option value="tidak">Tidak</option>
                    <option value="ya">Ya</option>
                </select>
            </div>

            <div class=" mb-3">
                <label>Pengaturan Diskon</label>
                <input type="text" name="pengaturan_diskon" class="form-control">
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
