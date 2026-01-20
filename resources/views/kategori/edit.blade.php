<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <form action="{{ route('kategori.update',$kategori->id_kategori) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Id Toko</label>
                <select name="id_toko" class="form-control" required>
                    <option value="">-- Pilih Toko --</option>
                    @foreach ($asettoko as $item)
                        <option value="{{ $item->id_toko }}"
                            {{ $kategori->id_toko == $item->id_toko ? 'selected' : '' }}>
                            {{ $item->id_toko }} -- {{ $item->nama_aset_toko }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="form-label">Nama Kategori</label>
                <input type="text" class="form-control" name="nama_kategori" value{{$kategori->nama_kategori}} required>
            </div>
            <div class="mb-3">
                <label for="form-label">Jenis Transaksi</label>
                <select name="jenis_transaksi" class="form-control" id="" required>
                    <option value="">-- Pilih Jeis Transaksi Anda --</option>
                    <option value="Qris" {{ $kategori->jenis_transaksi == 'Qris' ? 'selected' : '' }}>Qris</option>
                    <option value="Dana" {{ $kategori->jenis_transaksi == 'Dana' ? 'selected' : '' }}>Dana</option>
                    <option value="Atm BRI" {{ $kategori->jenis_transaksi == 'Atm BRI' ? 'selected' : '' }}>Atm BRI</option>
                    <option value="Gopay" {{ $kategori->jenis_transaksi == 'Gopay' ? 'selected' : '' }}>Gopay</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100"> Update</button>
        </form>
    </div>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
