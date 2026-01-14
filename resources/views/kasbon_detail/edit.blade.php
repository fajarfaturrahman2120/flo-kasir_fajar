<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kasbon Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">

<form action="{{ route('kasbon_detail.update', $kasbon_detail->id_kasbon_detail) }}" method="post">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Id Kasbon</label>
        <select name="id_kasbon" class="form-control" required>
            @foreach ($kasbon as $item)
                <option value="{{ $item->id_kasbon }}"
                    {{ $kasbon_detail->id_kasbon == $item->id_kasbon ? 'selected' : '' }}>
                    {{ $item->id_kasbon }} --- {{ $item->nama_pengkasbon }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Id Toko</label>
        <select name="id_toko" class="form-control" required>
            @foreach ($asettoko as $item)
                <option value="{{ $item->id_toko }}"
                    {{ $kasbon_detail->id_toko == $item->id_toko ? 'selected' : '' }}>
                    {{ $item->id_toko }} - {{ $item->nama_aset_toko }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Jumlah Kasbon Detail</label>
        <input type="number"
               name="jumlah_kasbon_detail"
               class="form-control"
               value="{{ $kasbon_detail->jumlah_kasbon_detail }}"
               required>
    </div>

    <div class="mb-3">
        <label class="form-label">Tipe Bayar Kasbon Detail</label>
        <select name="tipe_bayar_kasbon_detail" class="form-control" required>
            <option value="Cash"
                {{ $kasbon_detail->tipe_bayar_kasbon_detail == 'Cash' ? 'selected' : '' }}>
                Cash
            </option>
            <option value="TF"
                {{ $kasbon_detail->tipe_bayar_kasbon_detail == 'TF' ? 'selected' : '' }}>
                TF
            </option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Kasbon Detail</label>
        <input type="date"
               name="tanggal_kasbon_detail"
               class="form-control"
               value="{{ $kasbon_detail->tanggal_kasbon_detail }}"
               required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Update</button>
</form>

</div>
</body>
</html>
