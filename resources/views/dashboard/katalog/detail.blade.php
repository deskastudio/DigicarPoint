@extends('layouts/katalog')
@section('content')
<div class="container mt-4">
    <a href="/katalog/" class="btn btn-secondary mb-3">Kembali</a>
    
    <h1>{{ $data->jenis }}</h1>
    <p>
        <b>Id Katalog</b> {{ $data->id_katalog }}
    </p>
    <p>
        <b>Harga</b> {{ $data->harga }}
    </p>
    <p>
        <b>Gambar</b><br>
        <img style="max-width:500px; max-height:500px" src="{{ asset('gambar').'/'.$data->gambar }}" alt="gambar">
    </p>
</div>
@endsection
