@extends('master')

@section('content')
<div class="container mt-5">
    <div class="card shadow border-0">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">✏️ Edit Produk</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.editProduk', $produk->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Produk:</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $produk->nama }}" required>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}" required>
                </div>

                <div class="mb-3">
                    <label for="stok" class="form-label">Stok:</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $produk->stok }}" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-save me-1"></i> Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
