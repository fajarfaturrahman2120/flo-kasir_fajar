<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Keranjang</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <h4 class="text-center mb-3">Data Keranjang</h4>


    <div class="mb-3">
        <a href="{{ route('keranjang.create') }}" class="btn btn-primary w-100">
            + Tambah Data Keranjang
        </a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>ID Toko</th>
                <th>ID Kasir</th>
                <th>Id Transaksi</th>
                <th>Id Produk</th>
                <th>Qty Keranjang</th>
                <th>Total Beli</th>
                <th>Tanggal Beli</th>
                <th>Harga jual</th>
                <th>Harga Pokok</th>
                <th>Harga Grosir</th>
                <th>Minimal Grosir</th>
                <th>Harga Terpilih</th>
                <th>Harga Diskon</th>
                <th>Status Beli</th>
                <th>Diskon</th>
                <th>Pengaturan Stok</th>
                <th>Harga Diskon</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($keranjang as $item)
                <tr class="text-center">
                    <td>{{ $item->id_keranjang }}</td>
                    <td>{{ $item->id_toko }}</td>
                    <td>{{ $item->id_kasir }}</td>
                    <td>{{ $item->id_transaksi }}</td>
                    <td>{{ $item->id_produk }}</td>
                    <td>{{ $item->qty_keranjang }}</td>
                    <td>{{ $item->total_beli }}</td>
                    <td>{{ $item->tanggal_beli }}</td>
                    <td>{{ $item->harga_jual }}</td>
                    <td>{{ $item->harga_pokok }}</td>
                    <td>{{ $item->harga_grosir }}</td>
                    <td>{{ $item->min_grosir }}</td>
                    <td>{{ $item->harga_tepilih }}</td>
                    <td>{{ $item->harga_diskon }}</td>
                    <td>{{ $item->status_beli }}</td>
                    <td>{{ $item->is_diskon }}</td>
                    <td>{{ $item->pengaturan_diskon }}</td>
                    <td>{{ $item->cek_harga_diskon }}</td>

                    <td>
                        <a href="{{ route('keranjang.edit', $item->id_keranjang) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('keranjang.destroy', $item->id_keranjang) }}"
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
                    <td colspan="19" class="text-center text-muted">
                        Data keranjang belum ada
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
