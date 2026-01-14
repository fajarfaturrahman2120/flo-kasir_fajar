 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Kasbon Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
    <h4 class="text-center">Data Kasbon Detail</h4>
    <div class="d-flex justify-content-between align-items-center mb-3" >
        <a href="{{ route('kasbon_detail.create') }}" class="btn btn-primary w-100 " >
        + Tambah Data kasbon Detail
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Id kasbon</th>
                <th>id toko</th>
                <th>Jumalah Kasbon</th>
                <th>Tipe Bayar</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $kasbon_detail as $item )
            <tr class="text-center">
                 <td>{{ $item->id_kasbon_detail }}</td>
                 <td>{{ $item->id_kasbon}}</td>
                 <td>{{ $item->id_toko }}</td>
                 <td>Rp {{ number_format($item->jumlah_kasbon_detail, 0, ',', '.') }}</td>
                 <td>{{ $item->tipe_bayar_kasbon_detail }}</td>
                 <td>{{ $item->tanggal_kasbon_detail }}</td>

                 <td>
                        <a href="{{ route('kasbon_detail.edit', $item->id_kasbon_detail) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('kasbon_detail.destroy', $item->id_kasbon_detail) }}"
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
                    <td colspan="7" class="text-center text-muted">
                        Data kasbon detail belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
