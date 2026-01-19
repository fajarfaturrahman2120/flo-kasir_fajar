<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kategori</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <h4 class="text-center mb-3">Data Kategori Bop</h4>


    <div class="mb-3">
        <a href="{{ route('kategori_bop.create') }}" class="btn btn-primary w-100">
            + Tambah Data Kategori Bop
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>ID Toko</th>
                <th>Nama Kategori Bop</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($kategori_bop as $item)
                <tr class="text-center">
                    <td>{{ $item->id_kategori_bop }}</td>
                    <td>{{ $item->id_toko }}</td>
                    <td>{{ $item->nama_kategori_bop }}</td>

                    <td>
                        <a href="{{ route('kategori_bop.edit', $item->id_kategori_bop) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('kategori_bop.destroy', $item->id_kategori_bop) }}"
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
                    <td colspan="4" class="text-center text-muted">
                        Data kategori bop belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
