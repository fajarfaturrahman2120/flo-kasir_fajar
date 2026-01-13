 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
    <h4 class="text-center">Data Kas</h4>
    <div class="d-flex justify-content-between align-items-center mb-3" >
        <a href="{{ route('kas.create') }}" class="btn btn-primary w-100 " >
        + Tambah Data kas
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Id Toko</th>
                <th>tipe Kas</th>
                <th>Modal kas</th>
                <th>Keterangan Kas</th>
                <th>Tanggal kas</th>
                <th>Bulan Kas</th>
                <th>Tahun Kas</th>
                <th>Pembayaran Kas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $kas as $item )
            <tr class="text-center">
                 <td>{{ $item->id_kas }}</td>
                 <td>{{ $item->id_toko }}</td>
                 <td>{{ $item->tipe_kas }}</td>
                 <td>{{ $item->modal_kas }}</td>
                 <td>{{ $item->keterangan_kas }}</td>
                 <td>{{ $item->tanggal_kas }}</td>
                 <td>{{ $item->bulan_kas }}</td>
                 <td>{{ $item->tahun_kas }}</td>
                 <td>{{ $item->pembayaran_kas }}</td>
                 <td>
                        <a href="{{ route('kas.edit', $item->id_kas) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('kas.destroy', $item->id_kas) }}"
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
                    <td colspan="9" class="text-center text-muted">
                        Data kas belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
