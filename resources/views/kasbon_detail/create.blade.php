<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
    <form action="{{route('kasbon_detail.store')}}" method="post">
    @csrf
        <div class="mb-3">
            <label class="form-label">Id Kasbon</label>
            <select name="id_kasbon" class="form-control" required>
                <option value="">-- Pilih Kasbon --</option>
                @foreach ($kasbon as $item)
                    <option value="{{ $item->id_kasbon }}">
                        {{ $item->id_kasbon }} --- {{ $item->nama_pengkasbon }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Id Toko</label>
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
            <label class="form-label">jumlah Kasbon Detail</label>
            <input type="number"
                   name="jumlah_kasbon_detail"
                   class="form-control"
                   required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipe Bayar Kasbon Detail</label>
            <select name="tipe_bayar_kasbon_detail" id="" class="form-control">
                <option value="">-->Pilih Tipe Bayar Anda<--</option>
                <option value="Cash">Cash</option>
                <option value="TF">TF</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Kasbon Detail</label>
            <input type="date"
                   name="tanggal_kasbon_detail"
                   class="form-control"
                   required>
        </div>
        <button type="submit" class="btn btn-success w-100">Simpan</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
