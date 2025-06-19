@extends('master')
@section('content')
<div class="container">
    <h1 class="text-center fw-bold mb-4">🛒 Data Produk</h1>

    <div class="row">
        @foreach ($produks as $product)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                {{-- Gambar produk --}}
                {{-- <img src="{{ asset('storage/galon/' . $product->gambar) }}" class="card-img-top" alt="{{ $product->nama }}" style="height: 200px; object-fit: cover;"> --}}

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->nama }}</h5>
                    <p class="card-text mb-1">Stok: {{ $product->stok }}</p>
                    <p class="card-text mb-2">Harga: Rp. {{ number_format($product->harga, 0, ',', '.') }}</p>

                    <div class="mt-auto d-flex justify-content-between">
                        <a href="{{ route('admin.editProduk', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.hapusProduk', $product->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus produk ini?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('admin.tambahProduk') }}" class="btn btn-primary">Tambah Produk</a>
    </div>
</div>
@endsection

