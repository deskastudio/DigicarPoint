<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DigiCar Point | Produk</title>

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
        <nav class="navbar navbar-expand-lg fs-5 p-2">
            <div class="container">
            <img src="{{asset('images/logoDigiCar.svg')}}" alt="..." class="me-3">
              <a class="navbar-brand fw-bold" href="#" style="color: #A80743;">DigiCar<span style="color: black;">Point</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav fs-6">
                  <a class="nav-link" href="/">Beranda</a>
                  <a class="nav-link" href="/#tentangKami">Tentang Kami</a>
                  <a class="nav-link" href="/blogspot">Blog</a>
                  <a class="nav-link" href="/produk">Produk</a>
                  <a class="nav-link" href="/#kataCustomer">Testimoni</a>
                  <a class="nav-link" href="/kontak">Kontak</a>
                </div>
              </div>
            </div>
          </nav>
          {{-- Navbar End --}}

          {{-- Hero Section Start --}}
          <section id="heroKontak">
            <div class="container">
                <div class="d-flex justify-content-evenly">
                    <div class="col-6" style="margin-top: 80px; margin-left: 100px;">
                        <div>
                            <h1 style="color:#A80743; font-size: 50px;">Pilih Armada Anda..</h1>
                            <h5 style="font-size: 23px;">Kami hanya menyediakan unit mobil berkualitas yang siap untuk melakukan perjalanan dalam dan luar kota di seluruh indonesia. Berikut ini adalah beberapa pilihan kategori mobil yang bisa anda sewa sesuai kebutuhan anda.</h5>
                        </div>
                        {{-- <div class=" col-8 border mt-5" style="background-color: white; border-radius: 10px;">
                            <form action="" class="row mx-1 my-2 justify-content-between">
                                <div class="col-auto">
                                    <label for="inputText" class="visually-hidden"></label>
                                    <input type="text" class="form-control" id="inputText" placeholder="Masukkan Pilihan Anda" style="border: none;">
                                  </div>
                                  <div class="col-auto">
                                    <button type="submit" class="btn" style="background-color: #A80743; color: white; border-radius: 10px;">Cari</button>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                    <div class="col-6" style="text-align:center; margin-top: 50px;">
                        <img src="{{asset('images/heroLogoKontak.svg')}}" alt="">
                    </div>
                </div>
            </div>
          </section>
          {{-- Hero Section End --}}

          {{-- Card Mobil Start --}}
          <section id="cardMobil">
              <div class="container">
                  <div class="row row-cols-1 row-cols-md-3 g-5 mx-5" style="">
                    {{-- card baris satu kolom satu --}}
                    @foreach ($data as $index => $item)  
                    <div class="col">
                        <div class="card h-100" style="width: 23rem; border-radius: 20px; background-color: {{ $index == 0 ? '#FEE3E0' : ($index == 1 ? '#5C5656' : '#FEE3E0') }};">
                          <img src="{{ asset('gambar').'/'.$item->gambar }}" class="card-img img-fluid p-3 h-100" alt="...">
                          <div class="card-body" style="color: {{ $index == 0 ? '#000000' : ($index == 1 ? '#FFFFFF' : '#000000') }}">
                            <h4 class="card-title">{{$item->jenis}}</h4>
                            <p class="text-end">Plat Genap</p>
                            <h5>Harga</h5>
                            <h4>{{$item->harga}}/hari</h4>
                          </div>
                          <div class="card-body text-center mb-4" style="">
                            <a onclick="welcome(event)" href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color: {{ $index == 0 ? '#A80743' : ($index == 1 ? '#FEE3E0' : '#A80743') }}; color: {{ $index == 0 ? '#FFFFFF' : ($index == 1 ? '#5C5656' : '#FFFFFF') }};">Chat melalui WhatsApp</a>
                          </div>
                        </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
          </section>
          {{-- Card Mobil End --}}

          {{-- Footer Start --}}
          <section id="footer">
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