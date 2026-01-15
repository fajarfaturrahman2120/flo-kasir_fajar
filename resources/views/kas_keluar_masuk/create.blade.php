<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah kas keluar masuk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <form action="{{route('kas_keluar_masuk.store')}}" method="post">
    @csrf
        <h1 class="text-center">Form Tambah</h1>
             <div class="mb-3">
                <label class="form-label">Id Toko</label>
                <select name="id_toko" class="form-control" required>
                    <option value="">-- Pilih Toko --</option>
                    @foreach ($asettoko as $item)
                        <option value="{{ $item->id_toko }}">
                            {{  $item->id_toko }}--{{$item->nama_aset_toko }}
                        </option>
                    @endforeach
                </select>
            </div>
             <div class="mb-3">
                <label class="form-label">Nama Kas Keluar Masuk</label>
                <input type="text" class="form-control" name="nama_kas_keluar_masuk" placeholder="Masukkan Nama anda" required>
            </div>
             <div class="mb-3">
                <label class="form-label">Id User</label>
                <input type="text" class="form-control" name="id_user" placeholder="Masukkan Id User Anda" required>
            </div>
             <div class="mb-3">
                <label class="form-label">Pembayaran Kas KM </label>
                <select name="pembayaran_kas_keluar_masuk" class="form-control" id="">
                    <option value="">-->Pilih Metode Pembayaran Kas anda<--</option>
                    <option value="Cash">Cash</option>
                    <option value="Debit">Debit</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Kas KM </label>
                <input type="date" class="form-control" name="tanggal_bayar_kas_keluar_masuk" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Kas KM </label>
                <input type="number" class="form-control" name="jumlah_kas_keluar_masuk" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipe Kas KM </label>
                <select name="tipe_kas_keluar_masuk" class="form-control" id="">
                    <option value="">-->Pilih Tipe Kas anda<--</option>
                    <option value="Kas Keluar">Kas Keluar</option>
                    <option value="Kas Masuk">Kas Masuk</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Bulan Kas KM </label>
                <input type="number" class="form-control" name="bulan_kas_keluar_masuk" placeholder="Bulan Kas anda" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Kas KM </label>
                <input type="number" class="form-control" name="tahun_kas_keluar_masuk" placeholder="Tahun Kas anda" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Kirim</button>
    </form>
</div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
