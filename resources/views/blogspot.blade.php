<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DigiCar Point | Blog</title>

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

          {{-- Hero Section start --}}
          <section id="heroBlog">
            <div class="container">
                <div class="text-center">
                    <h1 class="mt-5 mb-3">Berita <span style="color:#A80743;">DigiCar</span>Point</h1>
                    <h5>Jangan sampai ketinggalan informasi dan promo kami!</h5>
                </div>

                {{-- card mobil satu --}}
                <div class="row row-cols-1 row-cols-md-3" style="margin-top: 80px">
                    <div class="col">
                      <div class="card h-100" style="background-color: #351C22; border: none; border-bottom-left-radius: 30px; border-top-left-radius: 30px;">
                        <div class="card-body mt-4" style="color: #FEE3E0;">
                          <h1>Informasi</h1>
                          <h1>Terkini</h1>
                          <div class="mt-5">
                              <h5 class="card-text">Temukan kenyamanan dan kehandalan dalam setiap momen bersama Digicar, kami hadirkan informasi menarik untuk perjalananmu,</h5>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card h-100 mb-5" style="background-color: #A80743; border: none;">
                        <div class="card-body mt-4" style="color: #FEE3E0;">
                          <h1>Seputar</h1>
                          <h1>Mobil</h1>
                          <div class="mt-5">
                              <h5 class="card-text">Mobil keluarga hingga kendaraan kelas premium, penyewaan mobil tidak hanya memberikan fleksibilitas, tetapi juga memberikan kemudahan dalam menyesuaikan pilihan mobil sesuai kebutuhan.</h5>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card h-100" style="background-color: #5C5656; border: none; border-bottom-right-radius: 30px; border-top-right-radius: 30px;">
                        <div class="card-body mt-4" style="color: #FEE3E0;">
                          <h1>Destinasi</h1>
                          <h1>Populer</h1>
                          <div class="mt-5">
                              <h5 class="card-text">Temukan kenyamanan dan kehandalan dalam setiap momen bersama Digicar, kami hadirkan informasi menarik untuk perjalananmu,</h5>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                {{-- card mobil dua --}}
                <div class="row row-cols-1 row-cols-md-3 g-5 mt-2">
                  @foreach ($tampil as $item)
                  <div class="col">
                      <div class="card h-100" style="background-color: #FFF8F7; border: none;">
                          <img src="{{ url('thumbnail').'/'.$item->thumbnail }}" class="card-img-top" alt="...">
                          <div class="card-body p-4">
                              <h5 class="card-title">{{ $item->judul }}</h5>
                              <p class="card-text">
                                  {{ substr($item->deskripsi, 0, 300) }}... <!-- Menampilkan 100 karakter pertama -->
                              </p>
                          </div>
                          <div class="text-end p-4">
                              <a href="{{ url('/selengkapnya/'.$item->id_blog) }}" class="btn"
                                  style="background-color: #A80743; color:white; border-radius: 10px;">Selengkapnya</a>
                          </div>
                      </div>
                  </div>
                  @endforeach
              </div>
              
            </div>
          </section>
          {{-- Hero Section End --}}

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