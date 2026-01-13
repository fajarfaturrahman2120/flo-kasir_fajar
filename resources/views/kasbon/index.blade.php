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
    <h4 class="text-center">Data Kasbon</h4>
    <div class="d-flex justify-content-between align-items-center mb-3" >
        <a href="{{ route('kasbon.create') }}" class="btn btn-primary w-100 " >
        + Tambah Data kasbon
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Id Toko</th>
                <th>Jumlah Kasbon</th>
                <th>Nama Kasbon</th>
                <th>Jenis kasbon</th>
                <th>Pembayaran kasbon</th>
                <th>Keterangan Kasbon</th>
                <th>Cicilan</th>
                <th>tanggal</th>
                <th>Bulan</th>
                <th>tahun</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $kasbon as $item )
            <tr class="text-center">
                 <td>{{ $item->id_kasbon }}</td>
                 <td>{{ $item->id_toko }}</td>
                 <td>{{ $item->jumlah_kasbon }}</td>
                 <td>{{ $item->nama_pengkasbon }}</td>
                 <td>{{ $item->jenis_kasbon }}</td>
                 <td>{{ $item->pembayaran_kasbon }}</td>
                 <td>{{ $item->keterangan_kasbon }}</td>
                 <td>{{ $item->cicilan }}</td>
                 <td>{{ $item->tanggal_kasbon }}</td>
                 <td>{{ $item->bulan_kasbon }}</td>
                 <td>{{ $item->tahun_kasbon }}</td>
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
                    <td colspan="12" class="text-center text-muted">
                        Data kasbon belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
