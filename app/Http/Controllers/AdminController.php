<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('admin.dashboard', compact('produks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambahProduk()
    {
        return view('admin.tambahProduk');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function simpanProduk(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|decimal:0,2',
            'stok' => 'required|numeric|max:500',
        ]);

        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Produk ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProduk(Request $request)
    {
        $produk = Produk::findOrFail($request->id);
        if ($request->isMethod('post')) {
            $produk->nama = $request->nama;
            $produk->harga = $request->harga;
            $produk->stok = $request->stok;
            $produk->save();
            return redirect()->route('admin.dashboard')->with('success', 'Produk diperbarui');
        }
        return view('admin.editProduk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function hapusProduk(Request $request)
    {
        $hapus = Produk::findOrFail($request->id);
        $hapus->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Produk dihapus');
    }

    public function indexCustomer()
    {
        $produks = Produk::all();
        return view('customer.dashboard', compact('produks'));
        
    }

    public function semuaTransaksi()
    {
        $pesanans = Pesanan::with(['user', 'transaksi.produk'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.transaksi', compact('pesanans'));
    }
}
