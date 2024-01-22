@extends('layouts/katalog')
@section('content')
<div class="container mt-4">
    <a href="/blog/" class="btn btn-secondary mb-3">Kembali</a>
    <h2>Tambah Blog</h2>
    

    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_blog">ID Blog </label>
            <input type="text" class="form-control" id="id_blog" name="id_blog" value="{{ Session::get('id_blog') }}">
        </div>

        <div class="mb-3">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept=".jpg, .jpeg, .png, .gif">
        </div>

        <div class="mb-3">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ Session::get('judul') }}">
        </div>

        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
        </div>
        <div class="mb-3">
            <textarea name="deskripsi" id="deskripsi" cols="50" rows="5">{{ Session::get('deskripsi') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
