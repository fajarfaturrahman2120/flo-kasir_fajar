<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Customer</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <form action="{{ route('customer.store') }}" method="post">
        @csrf

        <h4 class="text-center mb-4">Form Tambah Customer</h4>

        <div class="mb-3">
            <label class="form-label">Nama Toko</label>
            <select name="id_toko" class="form-control" required>
                <option value="">-- Pilih Toko --</option>
                @foreach ($asettoko as $item)
                    <option value="{{ $item->id_toko }}">
                        {{ $item->nama_toko ?? $item->id_toko }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Customer</label>
            <input type="text" class="form-control" name="nama_customer" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Poin</label>
            <input type="number" class="form-control" name="poin" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan Customer</label>
            <input type="text" class="form-control" name="keterangan_customer">
        </div>

        <div class="mb-3">
            <label class="form-label">No HP Customer</label>
            <input type="number" class="form-control" name="no_hp_customer" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat Customer</label>
            <input type="text" class="form-control" name="alamat_customer">
        </div>

        <button type="submit" class="btn btn-primary w-100">Kirim</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
