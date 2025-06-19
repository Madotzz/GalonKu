@extends('master')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Riwayat Transaksi Saya</h2>

    @if($pesanans->isEmpty())
        <div class="alert alert-warning text-center">Belum ada transaksi.</div>
    @else
        @foreach($pesanans as $pesanan)
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-secondary text-white">
                    <strong>Pesanan Tanggal: </strong>{{ $pesanan->created_at->format('d-m-Y H:i') }}
                </div>
                <div class="card-body">
                    <p><strong>Status:</strong>
                        <span class="badge bg-{{ $pesanan->status == 'selesai' ? 'success' : ($pesanan->status == 'batal' ? 'danger' : 'secondary') }}">
                            {{ ucfirst($pesanan->status) }}
                        </span>
                    </p>
                    <p><strong>Alamat:</strong> {{ $pesanan->alamat }}</p>
                    <p><strong>Kontak:</strong> {{ $pesanan->kontak }}</p>

                    <hr>
                    <h6 class="fw-bold">Produk yang Dibeli:</h6>
                    <ul class="list-group">
                        @foreach($pesanan->transaksi as $trx)
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">{{ $trx->produk->nama }}</div>
                                    {{ $trx->jumlah }} pcs × Rp{{ number_format($trx->produk->harga, 0, ',', '.') }}
                                </div>
                                <span class="badge bg-primary rounded-pill">Rp{{ number_format($trx->subtotal_harga, 0, ',', '.') }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
