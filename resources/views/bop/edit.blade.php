<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Update</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
<h4 class="text-center">Form Edit</h4>
<form action="{{ route('bop.update', $bop->id_bop) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label class="form-label">Nama Toko</label>
        <select name="id_toko" class="form-select" required>
            <option value="">-- Pilih Toko --</option>
            @foreach ($asettoko as $item)
                <option value="{{ $item->id_toko }}" {{ $bop->id_toko == $item->id_toko ? 'selected' : '' }}>
                     {{ $item->id_toko }} -- {{ $item->nama_aset_toko }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Id Kategori Bop</label> <input type="number" class="form-control"
            name="id_kategori_bop"
            value="{{ $bop->id_kategori_bop }}"> </div>

    <div class="mb-3">
        <label class="form-label">Jumlah Bop</label>
        <input type="number" class="form-control"
            name="jumlah_bop"
            value="{{ $bop->jumlah_bop }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Keterangan Bop</label>
        <input type="text" class="form-control"
            name="keterangan_bop"
            value="{{ $bop->keterangan_bop }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Tipe Bayar Bop</label>
        <select name="tipe_bayar_bop" class="form-control">
            <option value="">-- Pilih Metode Pembayaran --</option>
            <option value="cash" {{ strtolower($bop->tipe_bayar_bop) == 'cash' ? 'selected' : '' }}>Cash</option>
            <option value="Debit" {{ $bop->tipe_bayar_bop == 'Debit' ? 'selected' : '' }}>Debit</option>
            <option value="qris" {{ $bop->tipe_bayar_bop == 'qris' ? 'selected' : '' }}>Qris</option>
            <option value="dana" {{ $bop->tipe_bayar_bop == 'dana' ? 'selected' : '' }}>Dana</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Upload Foto </label>
        <input type="file" class="form-control" name="gambar_bop">
        @if($bop->gambar_bop)
            <small>File saat ini: {{ $bop->gambar_bop }}</small>
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label">Bulan Bop</label>
        <input type="number" class="form-control"
            name="bulan_bop"
            value="{{ $bop->bulan_bop }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Tahun Bop</label>
        <input type="number" class="form-control"
            name="tahun_bop"
            value="{{ $bop->tahun_bop }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal</label>
        <input type="date" class="form-control"
               name="tanggal_bop"
               value="{{ $bop->tanggal_bop }}">
    </div>

    <button type="submit" class="btn btn-success w-100">Update</button>
    <button type="reset" class="btn btn-dark w-100">Update</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
