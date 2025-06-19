@extends('master')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">🚚 Daftar Pengiriman</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    @if($pesanans->isEmpty())
        <div class="alert alert-warning text-center">Tidak ada pesanan yang sedang dikirim.</div>
    @else
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($pesanans as $pesanan)
                <div class="col">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title text-primary">Alamat Pengiriman</h5>
                                <p class="card-text"><strong>Alamat:</strong> {{ $pesanan->alamat }}</p>
                                <p class="card-text"><strong>Kontak:</strong> {{ $pesanan->kontak }}</p>
                                <p class="card-text"><strong>Tanggal Pesan:</strong> {{ $pesanan->created_at->format('d-m-Y H:i') }}</p>
                                
                                <hr>
                                <h6 class="fw-bold">Produk:</h6>
                                <ul class="list-group">
                                    @foreach($pesanan->transaksi as $trx)
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                {{ $trx->produk->nama }} ({{ $trx->jumlah }} pcs)
                                            </div>
                                            <span class="badge bg-primary rounded-pill">Rp{{ number_format($trx->subtotal_harga, 0, ',', '.') }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <form method="POST" action="{{ route('kurir.terima', $pesanan->id) }}" class="mt-3">
                                @csrf
                                <button type="submit" class="btn btn-success w-100">
                                    <i class="bi bi-check-circle me-1"></i> Terima Pesanan (Selesai)
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
