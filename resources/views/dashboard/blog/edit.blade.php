@extends('layouts/katalog')
@section('content')
<div class="container mt-4">
    <h2>Edit Informasi Blog</h2>

    <a href="/blog" class="btn btn-secondary">Kembali</a>

    <form action="{{ '/blog/'.$blog->id_blog }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>ID :  {{ $blog->id_blog }}</h1>
        </div>
        <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <input type="file" class="form-control" name="thumbnail" id="thumbnail" accept=".jpg, .jpeg">
        </div>
        <div class="mb-3">
            <label for="judul"> Judul </label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $blog->judul }}">
        </div>

        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
        </div>
        <div class="mb-3">
            <textarea name="deskripsi" id="deskripsi" cols="50" rows="5" value="">{{ $blog->deskripsi }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
