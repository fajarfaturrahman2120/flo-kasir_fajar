<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah</title>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
       <form action="{{ route('kas.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Toko</label>
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
                <label class="form-label">Tipe Kas</label>
                <select name="tipe_kas" id="" class="form-control">
                    <option value="">--Pilih Tipe Kas--</option>
                    <option value="Kas Masuk">Kas Masuk</option>
                    <option value=" Kas  Keluar">Kas Keluar</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Modal Kas</label>
                <input type="number" class="form-control" name="modal_kas" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan Kas</label>
                <input type="text" class="form-control" name="keterangan_kas" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Kas</label>
                <input type="date" class="form-control" name="tanggal_kas" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Bulan Kas</label>
                <input type="number" class="form-control" name="bulan_kas" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tahun Kas</label>
                <input type="number" class="form-control" name="tahun_kas" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Pembayaran Kas</label>
                <select name="pembayaran_kas" id="" class="form-control">
                    <option value="">--Pilih Metode Pembayaran Kas Anda--</option>
                    <option value="Cash">Cash</option>
                    <option value="Debit">Debit</option>
                    <option value="Dana">Dana</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100">Kirim</button>
        </form>
    </div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
