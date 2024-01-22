<div class="mb-3">
    {{-- @if (Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
  @endif --}}

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif
  </div>
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <span class="fs-4">Admin Panel</span>
      </a>
  
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/sesi/logout" class="nav-link">Logout</a></li>
      </ul>
    </header>