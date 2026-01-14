 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Kasbon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
    <h4 class="text-center">Data Kas Masuk dan Keluar</h4>
    <div class="d-flex justify-content-between align-items-center mb-3" >
        <a href="{{ route('kas_keluar_masuk.create') }}" class="btn btn-primary w-100 " >
        + Tambah Data Kas Keluar Masuk
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Id Toko</th>
                <th>Nama Kas KM</th>
                <th>Id User</th>
                <th>Pembayaran Kas KM</th>
                <th>Tanggal kas KM</th>
                <th>Jumlah Kas KM</th>
                <th>Tipe Kas KM</th>
                <th>Bulan Kas KM</th>
                <th>Tahun Kas KM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $kas_keluar_masuk as $item )
            <tr class="text-center">
                 <td>{{ $item->id_kas_keluar_masuk }}</td>
                 <td>{{ $item->id_toko }}</td>
                 <td>{{ $item->nama_kas_keluar_masuk }}</td>
                 <td>{{ $item->id_user }}</td>
                 <td>{{ $item->pembayaran_kas_keluar_masuk}}</td>
                 <td>{{ $item->Tanggal_kas_keluar_masuk }}</td>
                 <td>{{ $item->jumlah_kas_keluar_masuk }}</td>
                 <td>{{ $item->tipe_kas_keluar_masuk }}</td>
                 <td>{{ $item->bulan_kas_keluar_masuk }}</td>
                 <td>{{ $item->tahun_kas_keluar_masuk }}</td>

                 <td>
                        <a href="{{ route('kasbon.edit', $item->id_kasbon) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('kasbon.destroy', $item->id_kasbon) }}"
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
                        Data Kas KM belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
