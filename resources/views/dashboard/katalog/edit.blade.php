@extends('layouts/katalog')
@section('content')
<div class="container mt-4">
    <h2>Edit Katalog</h2>

    <a href="/katalog" class="btn btn-secondary">Kembali</a>

    <form action="{{ '/katalog/'.$data->id_katalog }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>ID :  {{ $data->id_katalog }}</h1>
        </div>
        <div class="form-group">
            <label for="gambar">Thumbnail</label>
            <input type="file" class="form-control" name="gambar" id="gambar" accept=".jpg, .jpeg">
        </div>
        <div class="mb-3">
            <label for="jenis"> Jenis </label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $data->jenis }}">
        </div>

        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $data->harga }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
