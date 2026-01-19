<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Kategori BOP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Form Edit Kategori BOP</h5>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-body">
                    <form action="{{ route('kategori_bop.update',$kategori_bop->id_kategori_bop) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Id Toko</label>
                            <select name="id_toko" class="form-select" required>
                                <option value="">-- Pilih Toko --</option>
                                @foreach ($asettoko as $item)
                                    <option value="{{ $item->id_toko }}"
                                        {{ $kategori_bop->id_toko == $item->id_toko ? 'selected' : '' }}>
                                        {{ $item->id_toko }} — {{ $item->nama_aset_toko }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Kategori BOP</label>
                            <input
                                type="text"
                                name="nama_kategori_bop"
                                class="form-control"
                                placeholder="Masukkan Nama Kategori"
                                value="{{$kategori_bop->nama_kategori_bop}}"
                                required
                            >
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Update
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
