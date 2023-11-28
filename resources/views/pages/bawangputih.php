<?php
    session_start();

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ROOTINE - Rawat Tanamanmu</title>
    <link rel="stylesheet" href="../css/styletanamans.css" />
    <link rel="icon" href="../images/Icon.svg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body style="background-color: #fffaf2">
      <!-- NAVBAR -->
      <nav>
        <div class="nav-container">
          <div class="logo mt-2">
            <h1>
              <a href="/index">
                <img
                  src="../images/Icon.svg"
                  alt="Icon"
                  width="80"
                  height="60"
                  class="d-inline-block align-text-center me-1 mt-1"
                />
                Rootine
              </a>
            </h1>
          </div>

          <div class="items">
            <div class="regist">
              <a class="regist-btn" href="">Sign Up</a>
              <a class="login-btn" href="">Login</a>
            </div>
            <ul class="p-0 m-0 nav-list">
              <li>
                <a href="/cuaca" class="nav-link" id="link-cuaca">Cuaca</a>
              </li>
              <li>
                <a href="/jenistanaman"class="nav-link" id="link-tanaman"
                  >Tanaman</a
                >
              </li>
              <li>
                <a href="/produk" class="nav-link" id="link-produk">Produk</a>
              </li>
            </ul>
          </div>

          <?php
            if(! empty($_SESSION['username'])){
                echo '
                <a href="/logout" class="btn btn-danger btn-md" style="border-radius: 20px;">Logout</a>
                </div>';
            }else{
                echo'<div class="drop-menu d-flex align-item-center">
                <div id="regist" class="regist">
                    <div class="signup">
                        <a>Sign Up</a>
                    </div>
                    <div class="login">
                        <a>Log In</a>
                    </div>
                </div>';
            }
        ?> 
            <div class="hamburger d-flex align-items-center">
              <div class="burger">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- KONTEN -->
      <div class="Tanaman" style="text-align: center;">
        <img src="../images/tanaman/bawangputih.jpg" style="width: 300px; height: 300px; margin-top: 10%;">
        <div class="judul-tanaman pt-3">
            <h2><b>Bawang Putih</b></h2>
        </div>
        <div class="nama-latin">
            <p> 
                <h3><b>(Allium sativum)</b></h3>
            </p>
        </div>
        <div class="container" style="text-align: left;">
          <div class="tingkat-kesulitan">
              <p>
                  <h3>Tingkat Kesulitan</h3>

                  <i class="fa-solid fa-star" style="color: #000000;"></i>
                  <i class="fa-solid fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
              </p>
          </div>

          <div class="penjelasan-tanaman">
              <h3>Deskripsi</h3>
              Bawang putih(Allium sativum), Bawang putih adalah tanaman umbi yang memiliki umbi besar yang terdiri dari beberapa 
              siung kecil yang terpisah oleh kulit luar. Kulit luar umbi bawang putih biasanya berwarna putih hingga ungu pucat.
                Setiap siung bawang putih terdiri dari beberapa lapisan yang dapat dikupasBawang putih memiliki rasa yang kuat dan 
                tajam yang sedikit pedas ketika dimakan mentah. Aromanya sangat khas dan kuat, yang merupakan salah satu alasan utama 
                mengapa bawang putih sering digunakan sebagai bumbu.


          <div class="budidaya">
              <br><h3>Tips Budidaya</h3>
              <p></p>
              <ul>
                  <li>Pemilihan lahan<br>Pilih lokasi yang terkena sinar matahari penuh atau setidaknya 6-8 jam sinar matahari per hari.
                      Bawang putih tumbuh baik di dataran rendah hingga sedang.</li><br>
                  <li>Jenis tanah<br> Bawang putih tumbuh paling baik di tanah berstruktur gembur yang memiliki drainase yang baik. 
                      Tanah liat berat atau tanah yang tergenang air tidak cocok untuk bawang putih karena dapat menyebabkan pembusukan umbi.
                      Jika tanah Anda memiliki tekstur liat berat, Anda dapat memperbaikinya dengan menambahkan pasir dan kompos untuk meningkatkan drainase.
                      Penanaman: Tanamlah siung bawang putih dengan sisi yang tumpul menghadap ke bawah dan sisi yang tajam menghadap ke atas. 
                      Jarakkan setiap siung sekitar 10-15 cm dan antara baris sekitar 30-45 cm.</li><br>
                  <li>Suhu<br>
                      Bawang putih lebih suka iklim yang sejuk hingga hangat. Suhu optimal untuk pertumbuhan 
                      bawang putih berkisar antara 15-24° derajat Celsius (60-75° derajat Fahrenheit)</li><br>
                  <li>Ph tanah <br>
                      Bawang putih tumbuh terbaik di tanah yang memiliki pH netral hingga sedikit asam, yaitu sekitar 6,0 hingga 7,0. 
                      Tanah dengan pH di kisaran ini akan memungkinkan bawang putih untuk menyerap nutrisi dengan baik.</li><br>
                  <li>Kelembapan<br>
                      Sekitar 60% - 80% ,tanaman bawang putih dapat tumbuh baik dalam musim dingin yang ringan hingga musim semi yang sejuk, tergantung pada daerah Anda. 
                      Di daerah yang lebih dingin, bawang putih bisa ditanam di musim semi, sementara di daerah yang lebih hangat, mereka bisa ditanam di musim gugur.
                  </li><br>
                  <li>Penanaman benih<br>
                      Setiap siung bawang putih memiliki potensi untuk tumbuh menjadi bawang utuh. Pastikan benih yang Anda pilih sehat, tanpa tanda-tanda kerusakan atau penyakit. 
                      Persiapan Tanah: Siapkan lahan yang sudah dibajak dan diberi pupuk organik. Pisahkan setiap siung dari umbi bawang putih dengan lembut, 
                      dan tanam setiap siung dengan ujung tumpul menghadap ke bawah dan ujung tajam menghadap ke atas. 
                      Biasanya, siung ditanam dengan kedalaman sekitar 2-3 cm dan jarak antar siung sekitar 10-15 cm.</li><br>
                  <li>Pengairan<br>
                      Setelah menanam siung bawang putih, segera setelah penanaman, siram tanaman dengan lembut untuk memastikan tanah di sekitar benih cukup lembab.</li><br>
                  <li>Pencahayaan<br>
                      Bawang putih membutuhkan sinar matahari penuh atau setidaknya 6-8 jam sinar matahari langsung setiap hari. Tempatkan tanaman bawang putih di lokasi yang terkena sinar matahari dengan baik</li><br>
              </ul>
          </div>
          <div class="hama">
              <h3>Hama</h3>
              <p></p>
              <ul>
                  <li>Lalat Bawang (Onion Fly)<br>
                      Lalat bawang adalah hama yang dapat menyerang baik bawang merah maupun bawang putih dengan cara yang serupa, 
                      yaitu dengan bertelur di sekitar pangkal tanaman dan merusak umbi atau siung.</li><br>
                  <li>Kutu Daun (Aphids)<br>Kutu daun adalah serangga kecil yang bisa merusak daun bawang merah dan bawang putih dengan mengisap cairan tanaman.
                  </li><br>
                  <li>Thrips<br>Thrips adalah hama kecil yang dapat merusak daun pada bawang merah dan bawang putih dengan mengisap cairan tanaman.</li><br>
              </ul>
          </div>
          <div class="penyakit">
              <h3>Penyakit</h3>
              <p></p>
              <ul>
                  <li>Busuk Basah (Damping-off)<br>
                      Ini adalah penyakit yang disebabkan oleh jamur dan dapat merusak benih dan bibit bawang merah dan bawang putih.
                  </li><br>
                  <li>Busuk Bawang (Onion Rot)<br>Penyakit ini disebabkan oleh jamur dan dapat membusukkan umbi
                        bawang merah dan bawang putih jika mereka disimpan dalam kondisi lembap.</li><br>
                  <li>Bercak Daun (Leaf Spot)<br>Penyakit ini dapat menyebabkan bercak-barcak berwarna coklat atau hitam pada daun bawang merah dan bawang putih.</li><br>
              </ul>
          </div>
        </div>
    </div>
    </div>
    <div class="produk-ikon">
      <a href="">
        <div
          class="produk-icon"
          style="background-image: url('../images/produk/pupukcair.png'); background-size: 100% 100%;">
        </div>
      </a>

      <a href="">
        <div
          class="produk-icon"
          style="background-image: url('../images/produk/atonik.png'); background-size: 100% 100%;">
        </div>
      </a>

      <a href="">
        <div
          class="produk-icon"
          style="background-image: url('../images/produk/soilboost.png'); background-size: 100% 100%;">
        </div>
      </a>
    </div>
    <div class="middle">
        <a class="btn-apk" href="#">
          <i class="fa-solid fa-bag-shopping" style="color: #435334;"><span style="padding-left: 15px;">Selengkapnya</span></i>
        </a>
    </div>
  <!-- ===== Footer ===== -->
    <footer class="body bg-coklat">
      <div class="container">
          <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col">
              <div class="row"> 
              <img src="../images/Footer/FooterLogo.png">
              </div>
              <div class="row">
                  <h5>connect with us</h5>
              </div>
              <div class="row gap-3 d-flex justify-content-start ikon-sosmed">
                  <div class="col-md-2">
                      <a href="#"><img src="../images/Footer/Instagram.png" alt="Instagram kami"></a> 
                  </div>
                  <div class="col-md-2 ml-md-2">
                      <a href="#"><img src="../images/Footer/TwitterX.png"></a>
                  </div>
                  <div class="col-md-2 d-md-none d-lg-none d-xl-block ">
                      <a href="#"><img src="../images/Footer/YouTube.png"></a>
                  </div>
                  <div class="col-md-2 d-md-none d-lg-none d-xl-block">
                      <a href="#"><img src="../images/Footer/Facebook.png"></a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-2 d-none d-md-block d-lg-block d-xl-none">
                      <img src="../images/footer/YouTube.png">
                  </div>
                  <div class="col-md-2 offset-md-1 d-none d-md-block d-lg-block d-xl-none">
                      <img src="../images/footer/Facebook.png">
                  </div>
              </div>
          </div>
          <div class="col">
              <h5>Untuk Petani</h5>
              <ul class="nav flex-column ">
                  <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Aplikasi ROOTINE</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Cuaca</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Info Produk</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Detector Hama</a></li>
              </ul>
          </div>
          <div class="col">
              <h5>Bantuan</h5>
              <ul class="nav flex-column ">
                  <ul class="nav flex-column">
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Kontak</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Kebijakan Privasi</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Ketentuan Pengunaan</a></li>
                      <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Terbitan</a></li>
              </ul>
          </div>
          <div class="col">
              <h5>Lebih Lanjut</h5>
              <ul class="nav flex-column">
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">API</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Teams</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Creator</a></li>
                  <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black">Lokasi</a></li>
              </ul>
          </div>
          
          <div class="col" >
              <div class="row">
                  <button class="btn btn-light btn-circle" >
                  <img src="../images/Footer/Playstore.png " class="w-100">
                  </button>
              </div>
              <div class="col mb-3">
              </div>
              <div class="col" >
              <div class="row">
                  <button class="btn btn-light btn-circle" >
                  <img src="../images/Footer/Appstore.png " class="w-100">
                  </button>
              </div>
              
          </footer>
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 border-top border-dark">
              <p>© 2023 by ROOTINE</p>
          </div>
      </footer>
    <script src="../js/scripts.js"></script>
<script src="../script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
