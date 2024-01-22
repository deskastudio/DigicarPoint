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
                <span class="navbar-toggler-icon bg-secondary"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav fs-6">
                  <a class="nav-link" href="#">Beranda</a>
                  <a class="nav-link" href="/tentangKami">Tentang Kami</a>
                  <a class="nav-link" href="/blog">Blog</a>
                  <a class="nav-link" href="/produk">Produk</a>
                  <a class="nav-link" href="/testimoni">Testimoni</a>
                  <a class="nav-link" href="/kontak">Kontak</a>
                </div>
              </div>
            </div>
          </nav>
          {{-- Navbar End --}}

          {{-- Hero Section Start --}}
          <section id="heroWelcome">
            <div class="container d-flex flex-wrap" style="justify-content: space-between; align-items:center;">
                <div class="row" style="margin-top:100px; z-index: 3;">
                    <h1 class="heroFont fw-bold col-lg-7 col-sm-12 col-md-12" style="color: #5C5656; line-height: 65px; font-size: 50px;"> Kami Hadir Untuk <span style="color: #A80743;">Memenuhi Kebutuhan Perjalanan Anda</span></h1>
                    <h4 class="fw-normal" style="margin-top: 30px;">DigiCarPoint telah hadir sejak 2018</h4>
                    <div class="d-flex border border-2 border-dark p-2 col-lg-6 col-sm-6 col-md-6" style="justify-content: center; margin-top: 70px; border-radius: 20px; background-color: #FFFF;">
                        <div class="border border-2 shadow p-1" style="color:white; background-color:#A80743; border-radius: 20px;">
                            <div class="mt-3 mb-3">
                                <h2 class="" style="text-align: center;">10K +</h2>
                                <p class="" style="text-align: center;">Pengguna yang mempercayakan Rental Kepada Kami</p>
                            </div>
                        </div>
                        <div id="carouselExampleControls" class="carousel slide w-100" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <h5 class="p-3 mx-auto w-50 text-center align-item-center mt-4" style="background-color: #FEE3E0; border-radius: 15px;">Lihat Produk</h5>
                            </div>
                            <div class="carousel-item">
                              <img src="{{asset('images/gambarMobil2.png')}}" class="d-block mx-auto" alt="..." style="max-width: 200px;">
                            </div>
                            <div class="carousel-item">
                              <img src="{{asset('images/gambarMobil3.png')}}" class="d-block mx-auto" alt="..." style="max-width: 200px;">
                            </div>
                            <div class="carousel-item">
                              <img src="{{asset('images/gambarMobil1.png')}}" class="d-block mx-auto" alt="..." style="max-width: 200px;">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                    </div>
                </div>
                <div>
                  <div class="backgroundHero"></div>
                  <img src="{{asset('images/mobilHero.svg')}}" alt="..." class="backgroundMobil">
                </div>
            </div>
          </section>
          {{-- Hero Section End --}}

          {{-- Step Section Start--}}
          <section id="step">
            <div class="container">
                <h1 class="fw-bold" style="text-align:center;">Rental Mudah Hanya Dengan <br>3 Steps</h1>
                    <div class="row align-items-center mx-5" style="margin-top: 100px;">
                      <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center;">
                        <img src="{{asset('images/eye.svg')}}" alt="" style="background-color: #D9D9D9; border-radius: 20px; width: 75px;" class="p-3">
                        <h2 class="mt-5 fw-bold">Lihat Produk</h2>
                        <p style="font-size: 20px">Melihat produk yang tersedia untuk dirental</p>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center;">
                        <img src="{{asset('images/check.svg')}}" alt="" style="background-color: #A80743; border-radius: 20px; width: 75px;" class="p-3">
                        <h2 class="mt-5 fw-bold">Pilih Produk</h2>
                        <p style="font-size: 20px">Memilih mobil yang diinginkan dan sesuai kebutuhan</p>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12" style="text-align: center;">
                        <img src="{{asset('images/chat.svg')}}" alt="" style="background-color: #D9D9D9; border-radius: 20px; width: 75px;" class="p-3">
                        <h2 class="mt-5 fw-bold">Chat Kami</h2>
                        <p style="font-size: 20px">Chat kami melalui kontak yang telah tersedia</p>
                      </div>
                    </div>
                </div>
            </div>
          </section>
          {{-- Step Section End --}}

          {{-- Carousel Start --}}
          <section id="carouselProduk">
            <div class="container">
                <h1 class="text-center p-5 fw-bold" style="color: white;">Produk</h1>
                <p class="text-end me-5 fs-5"><a href="#" style="color: white;">Lihat Semua</a></p>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>
                  <div class="carousel-inner col-lg-12 col-md-4 col-sm-12" style="margin-top: 50px;">
                    <div class="carousel-item active">
                      <div class="row justify-content-evenly">
                                        {{-- carousel satu card satu --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #FEE3E0;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body">
                                            <h4 class="card-title">Toyota Avanza 2018</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 420.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color:#A80743; color:white;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                
                                        {{-- carousel satu card dua --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #5C5656;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body" style="color: white;">
                                            <h4 class="card-title">Honda Yaris</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 500.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color: #FEE3E0; color: #5C5656;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                
                                        {{-- carousel satu card tiga --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #FEE3E0;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body">
                                            <h4 class="card-title">Toyota Avanza 2018</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 420.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color:#A80743; color:white;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row justify-content-evenly">
                                         {{-- carousel dua card satu --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #5C5656;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body" style="color: white;">
                                            <h4 class="card-title">Toyota Avanza 2018</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 420.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color: #FEE3E0; color: #5C5656;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                
                                        {{-- carousel dua card dua --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #FEE3E0;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body" style="color: black;">
                                            <h4 class="card-title">Honda Yaris</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 500.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color:#A80743; color:white;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                
                                        {{-- carousel dua card tiga --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #5C5656;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body" style="color: white;">
                                            <h4 class="card-title">Toyota Avanza 2018</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 420.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color: #FEE3E0; color: #5C5656;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row justify-content-evenly">
                                         {{-- carousel tiga card satu --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #FEE3E0;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body">
                                            <h4 class="card-title">Toyota Avanza 2018</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 420.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color:#A80743; color:white;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                
                                        {{-- carousel tiga card dua --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #5C5656;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body" style="color: white;">
                                            <h4 class="card-title">Honda Yaris</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 500.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color: #FEE3E0; color: #5C5656;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                
                                        {{-- carousel tiga card tiga --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #FEE3E0;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body">
                                            <h4 class="card-title">Toyota Avanza 2018</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 420.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color:#A80743; color:white;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row justify-content-evenly">
                                         {{-- carousel dua card satu --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #5C5656;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body" style="color: white;">
                                            <h4 class="card-title">Toyota Avanza 2018</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 420.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color: #FEE3E0; color: #5C5656;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                
                                        {{-- carousel dua card dua --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #FEE3E0;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body" style="color: black;">
                                            <h4 class="card-title">Honda Yaris</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 500.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color:#A80743; color:white;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                
                                        {{-- carousel dua card tiga --}}
                                        <div class="card" style="width: 23rem; border-radius: 20px; background-color: #5C5656;">
                                          <img src="{{asset('images/mobil1.svg')}}" class="card-img img-fluid p-3 mt-2" alt="...">
                                          <div class="card-body" style="color: white;">
                                            <h4 class="card-title">Toyota Avanza 2018</h4>
                                            <p class="text-end">Plat Genap</p>
                                            <h5>Harga</h5>
                                            <h4>Rp. 420.000/1 Hari</h4>
                                          </div>
                                          <div class="card-body text-center mb-4" style="">
                                            <a href="#" class="btn fs-5" role="button" data-bs-toggle="button" style="border-radius:10px; background-color: #FEE3E0; color: #5C5656;">Chat melalui WhatsApp</a>
                                          </div>
                                        </div>
                                      </div>
                    </div>
                  </div><br><br>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
          </section>
          {{-- Carousel End --}}

          {{-- Tentang Kami Start --}}
          <section id="tentangKami">
            <div class="container">
              <div class="d-flex flex-wrap justify-content-between align-items-center">
                <div class="col">
                  <img src="{{asset('images/gambarTentangKami.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="text-center p-5 col">
                    <h1 class="mb-5" style="color: #A80743;">Tentang Kami</h1>
                    <div class="text-start ms-5 tentang">
                      <p style="line-height: 25px;">DigiCarPoint merupakan usaha sewa mobil untuk berbagai keperluan liburan, pernikahan atau kebutuhan bisnis. DigiCarPoint memiliki beragam inventaris mobil yang bisa Anda sewa seperti Avanza, Xenia, Alphard, Vellfire, Innova, Yaris, Mobilio, Jazz, Elf dan masih banyak lagi. DigiCarPoint membandingkan banyak penyedia layanan penyewaan mobil terbaik untuk membantu Anda menemukan harga termurah dalam satu pencarian mudah.</p>
                    </div>
                </div>
              </div>
            </div>
          </section>
          {{-- Tentang Kami End --}}

          {{-- Apa Kata Customer Start --}}
          <section id="kataCustomer" class="position-relative">
            <div class="container">
              <div class="d-flex justify-content-between col-12 text-center">
                <div class="col-9">
                  <h1 class="p-5" style="color: white;">Apa Kata Customer Kami</h1>
                  <div class="list"></div>

                  {{-- review customer --}}
                  <div style="margin-top: 100px;" class="row row-cols-1 row-cols-md-2 mx-3">
                    <div class="col">
                      <div class="card mb-3" style="width: 450px; height: 120px; background-color: #FFF8F7; border-radius: 15px;">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="{{asset('images/customerSatu.svg')}}" class="img-fluid p-3" alt="..." style="max-width: 110px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <p class="card-text">Siap makasih puas dengan pelayanannya. Akan saya rekomendasikan ke orang lain.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card" style="width: 450px; height: 120px; background-color: #FFF8F7; border-radius: 15px;">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="{{asset('images/customerDua.svg')}}" class="img-fluid p-3" alt="..." style="max-width: 110px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <p class="card-text">Siap makasih puas dengan pelayanannya. Akan saya rekomendasikan ke orang lain.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card" style="width: 450px; height: 120px; background-color: #FFF8F7; border-radius: 15px;">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="{{asset('images/customerSatu.svg')}}" class="img-fluid p-3" alt="..." style="max-width: 110px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <p class="card-text">Siap makasih puas dengan pelayanannya. Akan saya rekomendasikan ke orang lain.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card" style="width: 450px; height: 120px; background-color: #FFF8F7; border-radius: 15px;">
                        <div class="row">
                          <div class="col-md-4">
                            <img src="{{asset('images/customerDua.svg')}}" class="img-fluid p-3" alt="..." style="max-width: 110px;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <p class="card-text">Siap makasih puas dengan pelayanannya. Akan saya rekomendasikan ke orang lain.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                </div>
                <div class="col-3 position-absolute top-0 end-0 bottom-0">
                  <img src="{{asset('images/mobilCustomer.jpg')}}" alt="" class="w-100 h-100" style="border-bottom-right-radius: 200px;">
                </div>
              </div>
            </div>
          </section>
          {{-- Apa Kata Customer End --}}

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
