@extends('layouts/katalog')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <a href="/katalog/create" class="btn btn-primary mb-3">+Tambah Data Katalog</a>
        <a href="/blog" class="btn btn-success mb-3">Halaman Blog</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Gambar</th>
                {{-- <th>ID_katalog</th> --}}
                <th>Jenis</th>
                <th>Harga</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $katalog)
                <tr>
                    <td>
                        @if ($katalog->gambar)
                            <img style="max-width:50px; max-height:50px" src="{{ asset('gambar').'/'.$katalog->gambar }}" alt="gambar">
                        @endif
                    </td>
                    {{-- <td>{{ $katalog->id_katalog }}</td> --}}
                    <td>{{ $katalog->jenis }}</td>
                    <td>{{ $katalog->harga }}</td>
                    <td><a class="btn btn-secondary btn-sm" 
                    href="{{ url('/katalog/' .$katalog->id_katalog) }}">Detail</a></td>
                    <td><a class="btn btn-warning btn-sm" 
                    href="{{ url('/katalog/' .$katalog->id_katalog.'/edit') }}">Edit</a></td>
                    <td>
                        <form id="delete" action="{{ '/katalog/'.$katalog->id_katalog }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit" onclick="confirmDelete()">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>

@endsection