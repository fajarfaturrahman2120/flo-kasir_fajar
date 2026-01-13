<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Kasbon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    {{-- tampilkan error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kasbon.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Toko</label>
            <select name="id_toko" class="form-control" required>
                <option value="">-- Pilih Toko --</option>
                @foreach ($asettoko as $item)
                    <option value="{{ $item->id_toko }}">
                        {{ $item->id_toko }} - {{ $item->nama_aset_toko }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Kasbon</label>
            <input type="number"
                   name="jumlah_kasbon"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Pengkasbon</label>
            <input type="text"
                   name="nama_pengkasbon"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kasbon</label>
            <select name="jenis_kasbon" class="form-control" required>
                <option value="">-- Pilih Jenis Kasbon --</option>
                <option value="Kasbon Keluar">Kasbon Keluar</option>
                <option value="Kasbon Masuk">Kasbon Masuk</option>
                <option value="Kasbon Operasinal">Kasbon Operasinal</option>
                <option value="Kasbon Karyawan">Kasbon Karyawan</option>
                <option value="Kasbon Vendor/Supervisor">Kasbon Vendor/Supervisor</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Pembayaran Kasbon</label>
            <select name="pembayaran_kasbon" class="form-control" required>
                <option value="">-- Pilih Pembayaran --</option>
                <option value="Cash">Cash</option>
                <option value="Debit">Debit</option>
                <option value="Dana">Dana</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan Kasbon</label>
            <input type="text"
                   name="keterangan_kasbon"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Cicilan</label>
            <input type="number"
                   name="cicilan"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Kasbon</label>
            <input type="date"
                   name="tanggal_kasbon"
                   class="form-control"
                   required>
        </div>

        <button type="submit" class="btn btn-success w-100">
            Simpan Kasbon
        </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
