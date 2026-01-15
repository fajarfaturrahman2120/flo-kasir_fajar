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
    <form action="{{route('kas_keluar_masuk.update', $kas_keluar_masuk->id_kas_keluar_masuk)}}" method="post">
    @csrf
    @method('PUT')
        <h1 class="text-center">Form Edit</h1>
                 <div class="mb-3">
                    <label class="form-label">Nama Toko</label>
                    <select name="id_toko" class="form-control" required>
                        <option value="">-- Pilih Toko --</option>
                        @foreach ($asettoko as $item)
                            <option value="{{ $item->id_toko }}"
                                {{ $item->id_toko == $kas_keluar_masuk->id_toko ? 'selected' : '' }}>
                                {{ $item->id_toko }} -- {{ $item->nama_aset_toko }}
                            </option>
                        @endforeach
                    </select>
                </div>
             <div class="mb-3">
                <label class="form-label">Nama Kas Keluar Masuk</label>
                <input type="text" class="form-control" name="nama_kas_keluar_masuk" value="{{$kas_keluar_masuk->nama_kas_keluar_masuk}}" required>
            </div>
             <div class="mb-3">
                <label class="form-label">Id User</label>
                <input type="text" class="form-control" name="id_user" value="{{$kas_keluar_masuk->id_user}}" required>
            </div>
             <div class="mb-3">
                <label class="form-label">Pembayaran Kas KM </label>
                <select name="pembayaran_kas_keluar_masuk" class="form-control" id="">
                    <option value="">-->Pilih Metode Pembayaran Kas anda<--</option>
                    <option value="Cash"  {{ $kas_keluar_masuk->pembayaran_kas_keluar_masuk == 'Cash' ? 'selected' : '' }}>Cash</option>
                    <option value="Debit"  {{ $kas_keluar_masuk->pembayaran_kas_keluar_masuk == 'Debit' ? 'selected' : '' }}>Debit</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Kas KM </label>
                <input type="date" class="form-control" name="tanggal_bayar_kas_keluar_masuk" value="{{$kas_keluar_masuk->tanggal_bayar_kas_keluar_masuk}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Kas KM </label>
                <input type="number" class="form-control" name="jumlah_kas_keluar_masuk" value="{{$kas_keluar_masuk->jumlah_kas_keluar_masuk}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipe Kas KM </label>
                <select name="tipe_kas_keluar_masuk" class="form-control" id="">
                    <option value="">-->Pilih Tipe Kas anda<--</option>
                    <option value="Kas Keluar" {{ $kas_keluar_masuk->tipe_kas_keluar_masuk == 'Kas Keluar' ? 'selected' : '' }}>Kas Keluar</option>
                    <option value="Kas Masuk" {{ $kas_keluar_masuk->tipe_kas_keluar_masuk == 'Kas Masuk' ? 'selected' : '' }}>Kas Masuk</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Bulan Kas KM </label>
                <input type="number" class="form-control" name="bulan_kas_keluar_masuk" value="{{$kas_keluar_masuk->bulan_kas_keluar_masuk}}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Kas KM </label>
                <input type="number" class="form-control" name="tahun_kas_keluar_masuk" value="{{$kas_keluar_masuk->tahun_kas_keluar_masuk}}" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Kirim</button>
    </form>
</div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
