<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Bop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<form action="{{ route('bop.store') }}" method="post" enctype="multipart/form-data">
@csrf

<h4>Form Tambah Data</h4>

<div class="mb-3">
    <label class="form-label">Nama Toko</label>
    <select name="id_toko" class="form-control" required>
        <option value="">-- Pilih Toko --</option>
        @foreach ($asettoko as $item)
            <option value="{{ $item->id_toko }}">
                {{ $item->id_toko }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Id Kategori bop</label>
    <input type="number" class="form-control" id="" name="id_kategori_bop" required>
</div>

<div class="mb-3">
    <label class="form-label">Jumlah Bop</label>
    <input type="number" class="form-control" id="" name="jumlah_bop" required>
</div>

<div class="mb-3">
    <label class="form-label">Keterangan Bop</label>
    <input type="text" class="form-control" id="" name="keterangan_bop" required>
</div>

<div class="mb-3">
    <label class="form-label">Tipe Bayar Bop</label>
    <select name="tipe_bayar_bop" class="form-control" id="">
        <option value="">-- Pilih Metode Pembayaran --</option>
        <option value="cash">Cash</option>
        <option value="Debit">Debit</option>
        <option value="qris">Qris</option>
        <option value="dana">Dana</option>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Upload Foto</label>
    <input type="file" class="form-control" id="" name="gambar_bop" accept="image/*" required>
</div>

<div class="mb-3">
    <label class="form-label">Bulan Bop</label>
    <input type="number" class="form-control" id="" name="bulan_bop" required>
</div>

<div class="mb-3">
    <label class="form-label">Tahun Bop</label>
    <input type="numbe" class="form-control" id="" name="tahun_bop" required>
</div>

<div class="mb-3">
    <label class="form-label">Tanggal Bop</label>
    <input type="date" class="form-control" id="" name="tanggal_bop" required>
</div>

<button type="submit" class="btn btn-primary w-100">Simpan</button required>

</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
