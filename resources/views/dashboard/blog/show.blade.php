@extends('layouts/katalog')
@section('content')
<div class="container mt-4">
    <a href="/blog/" class="btn btn-secondary mb-3">Kembali</a>
    
    <h1>{{ $blog->judul }}</h1>
    <p>
        <b>ID Blog</b> {{ $blog->id_blog }}
    </p>
    <p>
        <b>Deskripsi</b> {{ $blog->deskripsi }}
    </p>
    <p>
        <b>Thumbnail</b><br>
        <img style="max-width:500px; max-height:500px" src="{{ asset('thumbnail').'/'.$blog->thumbnail }}" alt="thumbnail">
    </p>
</div>
@endsection
