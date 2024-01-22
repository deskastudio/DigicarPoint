<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DigiCar Point | Selengkapnya</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles CSS -->
        <link rel="stylesheet" href="styles.css">
        <!-- other head elements -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </head>
    <body>
        {{-- Navbar start --}}
        <nav class="navbar navbar-expand-lg fs-5 p-2" style="background-color: #FFF8F7;">
            <div class="container">
            <img src="{{asset('images/logoDigiCar.svg')}}" alt="..." class="me-3">
              <a class="navbar-brand fw-bold" href="#" style="color: #A80743;">DigiCar<span style="color: black;">Point</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-secondary"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav fs-6">
                  <a class="nav-link" href="/" style="color: #351C22; margin-right: 20px;">Beranda</a>
                  <a class="nav-link" href="/#tentangKami" style="color: #351C22; margin-right: 20px;">Tentang Kami</a>
                  <a class="nav-link" href="/blogspot" style="color: #351C22; margin-right: 20px;">Blog</a>
                  <a class="nav-link" href="/produk" style="color: #351C22; margin-right: 20px;">Produk</a>
                  <a class="nav-link" href="/#kataCustomer" style="color: #351C22; margin-right: 20px;">Testimoni</a>
                  <a class="nav-link" href="/kontak" style="color: #351C22; margin-right: 20px;">Kontak</a>
                </div>
              </div>
            </div>
          </nav>
          {{-- Navbar End --}}

          {{-- Hero Section Start --}}
          @foreach ($detailSelengkapnya as $item)    
          <section id="heroSelengkapnya">
            <div class="container">
                <button type="button" class="btn fs-5" style="background-color: #A80743; color:#fff; border-radius:10px; margin-top:100px;"><a href="/blogspot" class="nav-link" style="text-decoration: none; color:#fff; padding: 3px 15px;">Kembali</a></button>
                <div class="mt-5">
                    <h1 class="mb-5 text-center">{{ $item->judul }}</h1>
                    <div class="d-flex justify-content-center">
                        <img src="{{ url('thumbnail').'/'.$item->thumbnail }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="mt-5 mb-5" style="font-size: 18px; text-align: justify;">
                  {!! nl2br(e(''.str_replace("\n", '', $item->deskripsi).'')) !!}
              </div>
            </div>
          </section>
          @endforeach

          {{-- Hero Section End --}}


          {{-- Footer Start --}}
          <section id="footer" style="background-color: #351C22;">
            <div class="container">
                <div class="row align-items-center col-md-12 col-sm-12" style="color:white;">
                  <h2 class="col mt-4"><span style="color:#A80743; font-weight: bold;">DigiCar</span>Point</h2>
                  <h5 class="col mt-4">Terus Ikuti Perkembangan</h5>
                  <h4 class="col mt-4"><span style="color:#A80743; font-weight: bold;">DigiCar</span>Point</h4>
                </div>

                <div class="row col-md-12 col-sm-12" style="color:white;">
                  <p class="col mt-4">DigiCarPoint merupakan usaha serta wadah yang menyediakan jasa untuk merental mobil dengan misi untuk mempermudah pengguna mencari rental mobil yang dibutuhkan</p>
                  <p class="col mt-4">Bergabunglah dengan mailling list kami untuk terus mengikuti perkembangan info-info menarik dari kami</p>
                  <div class="col mt-4">
                    <div>
                      <a href="/#tentangKami" class="me-3" style="text-decoration: none; color:#fff;">Tentang Kami</a>
                      <a href="/kontak" class="" style="text-decoration: none; color:#fff;">Kontak</a>
                    </div>
                    <a href="/" class="me-5" style="text-decoration: none; color:#fff;">Beranda</a>
                    <a href="/#kataCustomer" class="" style="text-decoration: none; color:#fff;">Testimoni</a>
                  </div>
                </div>

                <div class="row" style="color:white;">
                  <div class="col-4 mt-2 d-flex">
                    <a href="#"><img src="{{asset('images/facebook.svg')}}" class="img-fluid " alt="..." style="width:50px;"></a>
                    <a href="#"><img src="{{asset('images/twitter.svg')}}" class="img-fluid mx-2" alt="..." style="width:50px;"></a>
                    <a href="https://www.linkedin.com/in/adiirwn"><img src="{{asset('images/linkedin.svg')}}" class="img-fluid" alt="..." style="width:50px;"></a>
                  </div>
                  <div class="col-5 border" style="border-radius: 50px;">
                    <form class="row" id="subscribeForm">
                      <div class="col-7">
                          <label for="inputEmail" class="visually-hidden">Email</label>
                          <input type="email" class="form-control bg-transparent mt-2 p-3" id="inputEmail" placeholder="Masukkan Email" style="border-radius: 50px; border: none; color: #fff;">
                      </div>
                      <div class="col mt-2 mb-2">
                          <button id="subscribeBtn" type="submit" class="btn p-3" style="border-radius: 50px; background-color: #FEE3E0;">
                              Berlangganan Sekarang
                          </button>
                      </div>
                  </form>
                  </div>
                  <div class="text-center" style="margin-top: 40px;">
                    <h5 style="font-size:15px;">Copyright © 2023  <span class="fw-bold" style="color:#A80743;">DigiCar</span>Point</h5>
                  </div>
          </section>
          {{-- Footer End --}}

          
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="main.js"></script>
    </body>
</html>
