<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Customer</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <h4 class="mb-3">Form Edit Customer</h4>

        <form action="{{ route('customer.update', $customer->id_customer) }}" method="post">

        @csrf
        @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Toko</label>
                <select name="id_toko" class="form-select" required>
                    <option value="">-- Pilih Toko --</option>
                    @foreach ($asettoko as $item)
                        <option value="{{ $item->id_toko }}"
                            {{ $customer->id_toko == $item->id_toko ? 'selected' : '' }}>
                            {{ $item->id_toko }} — {{ $item->nama_aset_toko }}
                        </option>
                    @endforeach
                </select>
            </div>



        <div class="mb-3">
            <label class="form-label">Nama Customer</label>
            <input
                type="text"
                name="nama_customer"
                class="form-control"
                value="{{  $customer->nama_customer }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Poin</label>
            <input
                type="number"
                name="poin"
                class="form-control"
                value="{{ $customer->poin }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <input
                type="text"
                name="keterangan_customer"
                class="form-control"
                value="{{  $customer->keterangan_customer }}">
        </div>

        <div class="mb-3">
            <label class="form-label">No HP</label>
            <input
                type="text"
                name="no_hp_customer"
                class="form-control"
                value="{{  $customer->no_hp_customer }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat_customer" class="form-control" value="{{ $customer->alamat_customer }}">
        </div>


        <button type="submit" class="btn btn-primary">
            Update
        </button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
