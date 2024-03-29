@extends('layouts/katalog')
@section('content')
<div class="mb-3">
    {{-- @if (Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
  @endif --}}
  </div>
<div class="w-50 center border rounded px-3 py-3 mx-auto">
    <h1>Login</h1>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="/sesi/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ Session::get('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="mb-3">
            <p>Belum memiliki akun ? <a href="/sesi/register">Register</a></p>
        </div>
    </form>
</div>
@endsection