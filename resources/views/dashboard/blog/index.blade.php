@extends('layouts/katalog')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <a href="/blog/create" class="btn btn-primary mb-3">+Tambah Informasi Blog</a>
        <a href="/katalog" class="btn btn-success mb-3">Halaman Katalog</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Thumbnail</th>
                {{-- <th>ID_Blog</th> --}}
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $item)
                <tr>
                    <td>
                        @if ($item->thumbnail)
                            <img style="max-width:100px; max-height:100px" src="{{ asset('thumbnail').'/'.$item->thumbnail }}" alt="thumbnail">
                        @endif
                    </td>
                    {{-- <td>{{ $item->id_blog }}</td> --}}
                    <td>{{ $item->judul }}</td>
                    <td>{{ substr($item->deskripsi, 0, 500) }}.......</td>
                    <td><a class="btn btn-secondary btn-sm" 
                    href="{{ url('/blog/' .$item->id_blog) }}">Detail</a></td>
                    <td><a class="btn btn-warning btn-sm" 
                    href="{{ url('/blog/' .$item->id_blog.'/edit') }}">Edit</a></td>
                    <td>
                        <form id="delete" action="{{ '/blog/'.$item->id_blog }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit" onclick="confirmDelete()">Delete</button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $blog->links() }}
</div>

@endsection
