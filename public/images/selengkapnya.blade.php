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
          <section id="heroSelengkapnya">
            <div class="container">
                <button type="button" class="btn fs-5" style="background-color: #A80743; color:#fff; border-radius:10px;"><a href="/blog" style="text-decoration: none; color:#fff; padding: 20px 15px;">< Kembali</a></button>
                <div class="mt-5">
                    <h1 class="mb-5 text-center">Wisata Antapura De Djati Garut, Cocok buat Uji Adrenalin</h1>
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('images/gambarSelengkapnya.png')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="mt-5" style="font-size: 18px;">
                    <p>Tourist Experience atau pengalaman wisatawan, menjadi salah satu komponen penting dalam pengembangan wisata daerah yang identik dengan kekayaan budaya, keindahan pemandangan dan lingkungan alami. Terbaru, ada tempat wisata seru yang lokasinya berada di Kabupaten Garut Jawa Barat. Apalagi, harga tiket masuk obyek wisata ini terbilang sangat terjangkau.
                        <br>
                        Obyek wisata Antapura De Djati Garut, yang berlokasi di Kecamatan Cibiuk, Kabupaten Garut, Jawa Barat mengajak wisatawan menguji adrenalin sambil menikmati panorama alam yang menawan.
                        <br>
                        Intan, salah satu pengunjung wisata Antapura De Djati Garut mengatakan, selain keseruan permainan menantang, wisatawan bisa menikmati indahnya panorama alam sekaligus menikmati kuliner khas Jawa Barat di Restoran Cibiuk. Intan mengaku datang ke lokasi wisata ini bersama sang suami dan anaknya. Dirinya mengatakan baru pertama kalinya datang ke lokasi tersebut, karena penasaran mengetahui Antapura De Djati melalui media sosial (Medsos).
                        <br>
                        "Ternyata, lokasi wisata Antapura De Djati ini memiliki pemandangan yang sangat indah," tandasnya.
                        <br>
                        Sementara, pengunjung lain, Anita mengatakan menjajal permainan ayunan terbang di lokasi wisata ini sangat seru dan menghibur. "Datang kesini tujuannya liburan bersama teman sambil menikmati suasana pemandangan yang asyik," ujar Anita.
                        "Untuk tiket permainan yang kami sediakan hanya sebesar Rp 15.000 untuk sekali mencoba," jelasnya.
                        <br>
                        Wildan menambahkan, melihat tingginya animo pengunjung Antapua De Djati terhadap wahana permainan, pihaknya akan menambah lebih banyak fasilitas.
                        "Kebanyakan pengunjung datang kesini, ingin menikmati panorama wisata dan sambil makan bersama keluarga. Saat liburan sekolah, biasanya pengunjung lebih ramai dan banyak anak-anak," pungkasnya.</p>
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
