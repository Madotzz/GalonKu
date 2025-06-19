@extends('master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center fw-bold mb-4">🛒 Daftar Produk Galon</h1>

    @if($produks->isEmpty())
        <div class="alert alert-warning text-center">Belum ada produk tersedia.</div>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($produks as $product)
                <div class="col">
                    <div class="card h-100 shadow border-0">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title">{{ $product->nama }}</h5>
                                <p class="card-text text-muted mb-1">
                                    Stok: 
                                    <span class="badge bg-{{ $product->stok > 0 ? 'success' : 'danger' }}">
                                        {{ $product->stok }}
                                    </span>
                                </p>
                                <p class="card-text fw-semibold">Harga: Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="mt-3">
                                @if($product->stok > 0)
                                    <a href="{{ route('pesanan.create', $product->id) }}" class="btn btn-primary w-100">
                                        <i class="bi bi-cart-plus me-1"></i> Beli Sekarang
                                    </a>
                                @else
                                    <button class="btn btn-secondary w-100" disabled>Stok Habis</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
