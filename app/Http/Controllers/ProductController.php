<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Daftar produk
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // Simpan produk
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
        ]);

        Product::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}

