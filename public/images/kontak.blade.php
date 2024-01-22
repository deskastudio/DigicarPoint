<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles CSS -->
        <link rel="stylesheet" href="styles.css">
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
                  <a class="nav-link" href="#">Beranda</a>
                  <a class="nav-link" href="#">Tentang Kami</a>
                  <a class="nav-link" href="#">Blog</a>
                  <a class="nav-link" href="#">Produk</a>
                  <a class="nav-link" href="#">Testimoni</a>
                  <a class="nav-link" href="#">Kontak</a>
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
                            <h1 style="color:#A80743; font-size: 50px;">Kenyamanan dan Keamanan Perjalanan Anda,</h1>
                            <h1>Prioritas Kami</h1>
                        </div>
                        <div class=" col-8 border mt-5" style="background-color: white; border-radius: 10px;">
                            <form action="" class="row mx-1 my-2 justify-content-between">
                                <div class="col-auto">
                                    <label for="inputEmail" class="visually-hidden">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Masukkan Email Anda" style="border: none;">
                                  </div>
                                  <div class="col-auto">
                                    <button type="submit" class="btn" style="background-color: #A80743; color: white; border-radius: 10px;">Berlangganan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6" style="text-align:center; margin-top: 50px;">
                        <img src="{{asset('images/heroLogoKontak.svg')}}" alt="">
                    </div>
                </div>
            </div>
          </section>
          {{-- Hero Section End --}}

          {{-- Temukan Kami Start --}}
          <section id="temukanKami">
            <div class="container mt-5 mb-5">
                <h1 class="text-center">Temukan Kami</h1>
                <div class="list"></div>
                <h4 class="text-center p-5">Anda mempunyai pertanyaan? Silahkan hubungi kami melalui</h4>
                <div class="d-flex justify-content-evenly">
                    <div class="">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <a href=""><img src="{{asset('images/logoCall.svg')}}" alt="" style="width: 55px;"></a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>081122334455</h3>
                              <p>Senin - Jumat : 05:00 - 22:00 WIB</p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <a href=""><img src="{{asset('images/logoCall.svg')}}" alt="" style="width: 55px;"></a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>082233445566</h3>
                              <p>Sabtu - Minggu : 07:00 - 22:00 WIB</p>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <a href=""><img src="{{asset('images/logoChat.svg')}}" alt="" style="width: 55px;"></a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>halodigicar@gmail.com</h3>
                            </div>
                          </div>
                    </div>

                    <div class="">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <a href=""><img src="{{asset('images/logoTiktok.svg')}}" alt="" style="width: 55px;"></a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Tiktok</h3>
                            </div>
                          </div>

                          <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <a href=""><img src="{{asset('images/logoInstagram.svg')}}" alt="" style="width: 55px;"></a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Instagram</h3>
                            </div>
                          </div>

                          <div class="d-flex align-items-center mb-3">
                            <div class="flex-shrink-0">
                                <a href=""><img src="{{asset('images/logoFacebook.svg')}}" alt="" style="width: 55px;"></a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Facebook</h3>
                            </div>
                          </div>

                          <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <a href=""><img src="{{asset('images/logoYoutube.svg')}}" alt="" style="width: 55px;"></a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                              <h3>Youtube</h3>
                            </div>
                          </div>
                    </div>    
                </div>
            </div>
          </section>
          {{-- Temukan Kami End --}}

          {{-- Map Section Start --}}
          <section id="heroKontak">
            <div class="container">
                <div class="d-flex justify-content-evenly">
                    <div class="col-6" style="margin-top: 80px; margin-left: 100px;">
                        <div>
                            <h1 style="color:#A80743; font-size: 50px;">Showroom<span style="color: black;">DigiCar</span></h1>
                            <h1 style="color: #A80743;">di Google Maps</h1><br>
                            <h5>Kota Tangerang</h5>
                            <p>Jalan Pisah No. 70, Kel. Gede, Kec. Kecil</p>
                        </div>
                        <div class=" col-8 border mt-5" style="background-color: white; border-radius: 10px;">
                            <form action="" class="row mx-1 my-2 justify-content-between">
                                <div class="col-auto">
                                    <label for="inputEmail" class="visually-hidden">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Masukkan Lokasi Anda" style="border: none;">
                                  </div>
                                  <div class="col-auto">
                                    <button type="submit" class="btn" style="background-color: #A80743; color: white; border-radius: 10px;">Cek Rute</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2407265861134!2d106.61333437491255!3d-6.2319636610297025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc1acf84837d%3A0x6642a0008730b471!2sUniversitas%20Gunadarma%20Kampus%20K!5e0!3m2!1sid!2sid!4v1701168446718!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
          </section>
          {{-- Map Section End --}}

          {{-- Pengunjung Start --}}
          <section id="pengunjung">
            <div class="container">
                <div class="d-flex justify-content-evenly my-5">
                    <div class="text-center">
                        <h1>5.873</h1>
                        <h4>Pengunjung Baru Bulan ini</h4>
                    </div>
                    <div class="text-center">
                        <h1>1.320</h1>
                        <h4>Rental Mobil Tahun ini</h4>
                    </div>
                </div>
            </div>

          </section>

          {{-- Pengunjung End --}}

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
                      <a href="/tentangKami" class="me-3" style="text-decoration: none; color:#fff;">Tentang Kami</a>
                      <a href="/kontak" class="" style="text-decoration: none; color:#fff;">Kontak</a>
                    </div>
                    <a href="/Bantuan" class="me-5" style="text-decoration: none; color:#fff;">Bantuan</a>
                    <a href="/privacy" class="" style="text-decoration: none; color:#fff;">Privacy</a>
                  </div>
                </div>

                <div class="row" style="color:white;">
                  <div class="col-4 mt-2 d-flex">
                    <a href="#"><img src="{{asset('images/facebook.svg')}}" class="img-fluid " alt="..." style="width:50px;"></a>
                    <a href="#"><img src="{{asset('images/twitter.svg')}}" class="img-fluid mx-2" alt="..." style="width:50px;"></a>
                    <a href="#"><img src="{{asset('images/linkedin.svg')}}" class="img-fluid" alt="..." style="width:50px;"></a>
                  </div>
                  <div class="col-5 border" style="border-radius: 50px;">
                    <form class="row">
                      <div class="col-7">
                        <label for="inputEmail" class="visually-hidden">Email</label>
                        <input type="Email" class="form-control bg-transparent mt-2 p-3" id="inputEmail" placeholder="Masukkan Email" style="border-radius: 50px; border: none;">
                      </div>
                      <div class="col mt-2 mb-2">
                        <button type="submit" class="btn p-3" style="border-radius: 50px; background-color: #FEE3E0;">Berlangganan Sekarang</button>
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