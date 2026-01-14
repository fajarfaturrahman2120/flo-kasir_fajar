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
    <h4 class="text-center">Data Kasir</h4>
    <div class="d-flex justify-content-between align-items-center mb-3" >
        <a href="{{ route('kasir.create') }}" class="btn btn-primary w-100 " >
        + Tambah Data kasir
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>id toko</th>
                <th>Nama Kasir</th>
                <th>Nik Kasir</th>
                <th>No Hp Kasir</th>
                <th>Alamat Kasir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $kasir as $item )
            <tr class="text-center">
                 <td>{{ $item->id_kasir }}</td>
                 <td>{{ $item->id_toko}}</td>
                 <td>{{ $item->nama_kasir }}</td>
                 <td>{{ $item->nik_kasir }}</td>
                 <td>{{ $item->alamat_kasir }}</td>
                 <td>{{ $item->keterangan_kasir }}</td>

                 <td>
                        <a href="{{ route('kasir.edit', $item->id_kasir) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('kasir.destroy', $item->id_kasir) }}"
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
                        Data Kasir belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
