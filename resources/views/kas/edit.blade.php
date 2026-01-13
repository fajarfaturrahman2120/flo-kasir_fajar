<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Kas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <form action="{{ route('kas.update', $kas->id_kas) }}" method="post">
        @csrf
        @method('PUT')

        <h4 class="text-center mb-4">Form Edit Kas</h4>

        <div class="mb-3">
            <label class="form-label">Nama Toko</label>
            <select name="id_toko" class="form-control" required>
                <option value="">-- Pilih Toko --</option>
                @foreach ($asettoko as $item)
                    <option value="{{ $item->id_toko }}"
                        {{ $item->id_toko == $kas->id_toko ? 'selected' : '' }}>
                        {{ $item->id_toko }} -- {{ $item->nama_aset_toko }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Tipe Kas</label>
            <select name="tipe_kas" class="form-control" required>
                <option value="">-- Pilih Tipe Kas --</option>
                <option value="Kas Masuk"
                    {{ $kas->tipe_kas == 'Kas Masuk' ? 'selected' : '' }}>
                    Kas Masuk
                </option>
                <option value="Kas Keluar"
                    {{ $kas->tipe_kas == 'Kas Keluar' ? 'selected' : '' }}>
                    Kas Keluar
                </option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Modal Kas</label>
            <input type="number" class="form-control" name="modal_kas"
                   value="{{ $kas->modal_kas }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan Kas</label>
            <input type="text" class="form-control" name="keterangan_kas"
                   value="{{ $kas->keterangan_kas }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal Kas</label>
            <input type="date" class="form-control" name="tanggal_kas"
                   value="{{ $kas->tanggal_kas }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Bulan Kas</label>
            <input type="number" class="form-control" name="bulan_kas"
                   value="{{ $kas->bulan_kas }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tahun Kas</label>
            <input type="number" class="form-control" name="tahun_kas"
                   value="{{ $kas->tahun_kas }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pembayaran Kas</label>
            <select name="pembayaran_kas" class="form-control" required>
                <option value="">-- Pilih Metode Pembayaran --</option>
                <option value="Cash"
                    {{ $kas->pembayaran_kas == 'Cash' ? 'selected' : '' }}>
                    Cash
                </option>
                <option value="Debit"
                    {{ $kas->pembayaran_kas == 'Debit' ? 'selected' : '' }}>
                    Debit
                </option>
                <option value="Dana"
                    {{ $kas->pembayaran_kas == 'Dana' ? 'selected' : '' }}>
                    Dana
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning w-100">
            Update
        </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
