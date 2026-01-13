<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Aset Toko</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h4 class="text-center mb-4">Data Aset Toko</h4>

    <div class="mb-3 text-end">
        <a href="{{ route('aset_toko.create') }}" class="btn btn-primary w-100">
            + Tambah Aset
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr class="text-center">
            <th>ID</th>
            <th>ID Toko</th>
            <th>Nama Aset</th>
            <th>Harga Perolehan</th>
            <th>Harga Sekarang</th>
            <th>Keterangan</th>
            <th>Bulan</th>
            <th>Tahun</th>
            <th>Tanggal</th>
            <th width="150">Aksi</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($asettoko as $item)
            <tr class="text-center align-middle">
                <td>{{ $item->id_aset_toko }}</td>
                <td>{{ $item->id_toko }}</td>
                <td>{{ $item->nama_aset_toko }}</td>
                <td>Rp {{ number_format($item->harga_perolehan, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($item->harga_sekarang, 0, ',', '.') }}</td>
                <td>{{ $item->keterangan_aset_toko }}</td>
                <td>{{ $item->bulan_aset_toko }}</td>
                <td>{{ $item->tahun_aset_toko }}</td>
                <td>
                    {{ \Carbon\Carbon::parse($item->tanggal_aset_toko)->format('d-m-Y') }}
                </td>
                <td>
                    <a href="{{ route('aset_toko.edit', $item->id_aset_toko) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('aset_toko.destroy', $item->id_aset_toko) }}"
                          method="POST"
                          class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus data?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
