<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Aset Toko</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<form action="{{ route('aset_toko.store') }}" method="POST">
@csrf

    <div class="mb-3">
        <label for="id_toko" class="form-id_toko">Id Toko : </label>
        <input type="number" class="form-control" id="id_toko" name="id_toko" placeholder="Masukkan Id Toko Anda">
    </div>
    <div class="mb-3">
        <label for="nama_aset_toko" class="form-nama_aset_toko">Nama Aset Toko : </label>
        <input type="text" class="form-control" id="nama_aset_toko" name="nama_aset_toko" placeholder="Masukkan Nama Anda">
    </div>

    <div class="mb-3">
        <label for="harga_perolehan" class="form-harga_perolehan">Harga Perolehan : </label>
        <input type="number" class="form-control" id="harga_perolehan" name="harga_perolehan" placeholder="keseluruhan biaya yang dikeluarkan oleh seseorang untuk memperoleh aset tetap. ">
    </div>
    <div class="mb-3">
        <label for="harga_sekarang" class="form-harga_sekarang">Harga Sekarang : </label>
        <input type="number" class="form-control" id="harga_sekarang" name="harga_sekarang" placeholder=" ukuran nilai yang ditukarkan pelanggan membeli suatu penawaran">
    </div>
    <div class="mb-3">
        <label for="keterangan_aset_toko" class="form-keterangan_aset_toko">Keterangan Aset Toko : </label>
        <input type="text" class="form-control" id="keterangan_aset_toko" name="keterangan_aset_toko" placeholder=" saran anda terhadap toko ini">
    </div>
    <div class="mb-3">
        <label for="bulan_aset_toko" class="form-bulan_aset_toko">Bulan : </label>
        <input type="number" class="form-control" id="bulan_aset_toko" name="bulan_aset_toko" placeholder=" bulan ke berapa pada tahun ini">
    </div>
    <div class="mb-3">
        <label for="tahun_aset_toko" class="form-tahun_aset_toko">Tahun : </label>
        <input type="number" class="form-control" id="tahun_aset_toko" name="tahun_aset_toko" placeholder=" tahun yang  ke berapa anda berlangganan">
    </div>
    <div class="mb-3">
        <label for="tanggal_aset_toko" class="form-tanggal_aset_toko">Tanggal : </label>
        <input type="date" class="form-control" id="tanggal_aset_toko" name="tanggal_aset_toko" placeholder=" tahun yang  ke berapa anda berlangganan">
    </div>
    <button class="btn btn-primary">simpan</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
