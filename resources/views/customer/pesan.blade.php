@extends('master')

@section('content')
<div class="container mt-5">
    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">🛒 Pesan Produk</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @elseif(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('pesanan.store') }}">
                @csrf
                <input type="hidden" name="produk_id" value="{{ $produk->id }}">

                <div class="mb-3">
                    <label class="form-label"><strong>Nama Produk:</strong></label>
                    <p class="form-control-plaintext">{{ $produk->nama }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Harga:</strong></label>
                    <p class="form-control-plaintext">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Stok Tersedia:</strong></label>
                    <p class="form-control-plaintext">{{ $produk->stok }}</p>
                </div>

                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah:</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" value="1" min="1" max="{{ $produk->stok }}" required>
                </div>

                <div class="mb-3">
                    <label for="total" class="form-label">Total Harga:</label>
                    <input type="text" class="form-control" id="total" readonly>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat:</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="kontak" class="form-label">Kontak:</label>
                    <input type="text" class="form-control" name="kontak" id="kontak" required>
                </div>

                <button type="submit" class="btn btn-success w-100">
                    <i class="bi bi-bag-check-fill me-1"></i> Beli Sekarang
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    const harga = {{ $produk->harga }};
    const jumlahInput = document.getElementById('jumlah');
    const totalInput = document.getElementById('total');

    function updateTotal() {
        const jumlah = parseInt(jumlahInput.value) || 0;
        const total = jumlah * harga;
        totalInput.value = 'Rp' + total.toLocaleString('id-ID');
    }

    jumlahInput.addEventListener('input', updateTotal);
    window.addEventListener('DOMContentLoaded', updateTotal);
</script>
@endsection
