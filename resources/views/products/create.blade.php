@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Produk Baru</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="number" step="0.01" name="harga" id="harga" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
