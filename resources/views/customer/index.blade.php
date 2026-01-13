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
    <h4 class="text-center">Data Customer</h4>
    <div class="d-flex justify-content-between align-items-center mb-3" >
        <a href="{{ route('customer.create') }}" class="btn btn-primary w-100 " >
        + Tambah Data Customer
        </a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Id</th>
                <th>Id Toko</th>
                <th>Nama Customer</th>
                <th>Poin</th>
                <th>Keterangan Customer</th>
                <th>No Hp Customer</th>
                <th>Almat Customer</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $customer as $item )
            <tr class="text-center">
                 <td>{{ $item->id_customer }}</td>
                 <td>{{ $item->id_toko }}</td>
                 <td>{{ $item->nama_customer }}</td>
                 <td>{{ $item->poin }}</td>
                 <td>{{ $item->keterangan_customer }}</td>
                 <td>{{ $item->no_hp_customer }}</td>
                 <td>{{ $item->alamat_customer }}</td>
                 <td>
                        <a href="{{ route('customer.edit', $item->id_customer) }}"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('customer.destroy', $item->id_customer) }}"
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
                    <td colspan="8" class="text-center text-muted">
                        Data customer belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
