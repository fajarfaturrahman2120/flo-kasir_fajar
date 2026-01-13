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



    <form action="{{ route('kasbon.update',$kasbon->id_kasbon) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Toko</label>
            <select name="id_toko" class="form-control" required>
                <option value="">-- Pilih Toko --</option>
                @foreach ($asettoko as $item)
                    <option value="{{ $item->id_toko }}"
                        {{ $item->id_toko == $kasbon->id_toko ? 'selected' : '' }}>
                        {{ $item->id_toko }} -- {{ $item->nama_aset_toko }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Jumlah Kasbon</label>
            <input type="number"
                   name="jumlah_kasbon"
                   class="form-control"
                    value="{{$kasbon->jumlah_kasbon}}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Pengkasbon</label>
            <input type="text"
                   name="nama_pengkasbon"
                   class="form-control"
                    value="{{$kasbon->nama_pengkasbon}}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kasbon</label>
            <select name="jenis_kasbon" class="form-control" required>
                <option value="">-- Pilih Jenis Kasbon --</option>
                <option value="Kasbon Keluar"{{ $kasbon->jenis_kasbon == 'Kasbon Keluar' ? 'selected' : '' }}>Kasbon Keluar</option>
                <option value="Kasbon Masuk" {{ $kasbon->jenis_kasbon == 'Kasbon Masuk' ? 'selected' : '' }}>Kasbon Masuk</option>
                <option value="Kasbon Operasinal"{{ $kasbon->jenis_kasbon == 'Kasbon Operasional' ? 'selected' : '' }}>Kasbon Operasinal</option>
                <option value="Kasbon Karyawan"{{ $kasbon->jenis_kasbon == 'Kasbon Karyawan' ? 'selected' : '' }}>Kasbon Karyawan</option>
                <option value="Kasbon Vendor/Supervisor" {{ $kasbon->jenis_kasbon == 'Kasbon Vendor/Supervisor' ? 'selected' : '' }}>Kasbon Vendor/Supervisor</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Pembayaran Kasbon</label>
            <select name="pembayaran_kasbon" class="form-control" required>
                <option value="">-- Pilih Pembayaran --</option>
                <option value="Cash"{{ $kasbon->pembayaran_kasbon == 'Cash' ? 'selected' : '' }}>>Cash</option>
                <option value="Debit"{{ $kasbon->pembayaran_kasbon == 'Debit' ? 'selected' : '' }}>Debit</option>
                <option value="Dana"{{ $kasbon->pembayaran_kasbon == 'Dana' ? 'selected' : '' }}>Dana</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan Kasbon</label>
            <input type="text"
                   name="keterangan_kasbon"
                   class="form-control"
                    value="{{$kasbon->keterangan_kasbon}}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Cicilan</label>
            <input type="number"
                   name="cicilan"
                   class="form-control"
                    value="{{$kasbon->cicilan}}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Kasbon</label>
            <input type="date"
                   name="tanggal_kasbon"
                   class="form-control"
                    value="{{$kasbon->tanggal_kasbon}}"
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
