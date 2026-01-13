<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Bop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
            <h4 class="text-center">Data Bop</h4>
        <div class="d-flex justify-content-between align-items-center mb-3" >

            <a href="{{ route('bop.create') }}" class="btn btn-primary w-100 " >
                + Tambah Data Bop
            </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Id Toko</th>
                <th>Id Kategori Toko</th>
                <th>Jumlah Bop</th>
                <th>Keterangan Bop</th>
                <th>Tipe Bayar bop</th>
                <th>Gambar Bop</th>
                <th>Bulan Bop</th>
                <th>Tahun Bop</th>
                <th>Tanggal Bop</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bop as $item)
                <tr class="text-center">
                    <td>{{ $item->id_bop }}</td>
                    <td>{{ $item->id_toko }}</td>
                    <td>{{ $item->id_kategori_bop }}</td>
                    <td>Rp {{ number_format($item->jumlah_bop, 0, ',', '.') }}</td>
                    <td>{{ $item->keterangan_bop }}</td>
                    <td>{{ $item->tipe_bayar_bop }}</td>
                    <td>{{ $item->gambar_bop }}</td>
                    <td>{{ $item->bulan_bop }}</td>
                    <td>{{ $item->tahun_bop }}</td>
                    <td>{{ $item->tanggal_bop }}</td>
                    <td>
                        <a href="{{ route('bop.edit', $item->id_bop) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('bop.destroy', $item->id_bop) }}"
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
            @empty
                <tr>
                    <td colspan="11" class="text-center text-muted">
                        Data aset toko belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
