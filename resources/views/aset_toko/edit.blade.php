<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Aset Toko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Aset Toko</h3>

    <form action="{{ route('aset_toko.update', $asettoko->id_aset_toko) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Id Toko</label>
            <input type="number" class="form-control"
                   name="id_toko"
                   value="{{ $asettoko->id_toko }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Aset Toko</label>
            <input type="text" class="form-control"
                   name="nama_aset_toko"
                   value="{{ $asettoko->nama_aset_toko }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Perolehan</label>
            <input type="number" class="form-control"
                   name="harga_perolehan"
                   value="{{ $asettoko->harga_perolehan }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Harga Sekarang</label>
            <input type="number" class="form-control"
                   name="harga_sekarang"
                   value="{{ $asettoko->harga_sekarang }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <input type="text" class="form-control"
                   name="keterangan_aset_toko"
                   value="{{ $asettoko->keterangan_aset_toko }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Bulan</label>
            <input type="number" class="form-control"
                   name="bulan_aset_toko"
                   value="{{ $asettoko->bulan_aset_toko }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="number" class="form-control"
                   name="tahun_aset_toko"
                   value="{{ $asettoko->tahun_aset_toko }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal</label>
            <input type="date" class="form-control"
                   name="tanggal_aset_toko"
                   value="{{ $asettoko->tanggal_aset_toko }}">
        </div>

        <button class="btn btn-primary">Update Data</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
