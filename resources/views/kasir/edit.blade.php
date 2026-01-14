<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Kasir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <form action="{{route('kasir.update', $kasir->id_kasir)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
        <label class="form-label">Id Toko</label>
        <select name="id_toko" class="form-control" required>
            @foreach ($asettoko as $item)
                <option value="{{ $item->id_toko }}"
                    {{ $kasir->id_toko == $item->id_toko ? 'selected' : '' }}>
                    {{ $item->id_toko }} - {{ $item->nama_aset_toko }}
                </option>
            @endforeach
        </select>
    </div>
        <div class="mb-3">
            <label class="form-label">Nama Kasir</label>
            <input type="text" name="nama_kasir" class="form-control" value="{{$kasir->nama_kasir}}" placeholder="Isi nama anda" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nik kasir</label>
            <input type="number" name="nik_kasir" class="form-control" value="{{$kasir->nik_kasir}}" placeholder="Isi nik anda" required>
        </div>
        <div class="mb-3">
            <label class="form-label">No Hp Kasir</label>
            <input type="number" name="no_hp_kasir" class="form-control" value="{{$kasir->no_hp_kasir}}" placeholder="Isi no hp anda" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat Kasir</label>
            <input type="text" name="alamat_kasir" class="form-control" value="{{$kasir->alamat_kasir}}" placeholder="Isi Alamat anda" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Keterangan Kasir</label>
            <input type="text" name="keterangan_kasir" class="form-control" value="{{$kasir->keterangan_kasir}}" placeholder="Isi Alamat anda" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Kirim</button>
        </form>
    </div>
<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
