@extends('layouts/katalog')
@section('content')
<div class="container mt-4">
    <a href="/katalog/" class="btn btn-secondary mb-3">Kembali</a>
    <h2>Tambah Katalog</h2>
    

    <form action="/katalog" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_wisata">Id Katalog </label>
            <input type="text" class="form-control" id="id_katalog" name="id_katalog" value="{{ Session::get('id_katalog') }}">
        </div>

        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ Session::get('jenis') }}">
        </div>

        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ Session::get('harga') }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
