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
        <img src="../images/tanaman/kangkung.jpg" style="width: 300px; height: 300px; margin-top: 10%;">
        <div class="judul-tanaman pt-3">
            <h2><b>Kangkung</b></h2>
        </div>
        <div class="nama-latin">
            <p> 
                <h3><b>(Ipomoea reptans)</b></h3>
            </p>
        </div>
        <div class="container" style="text-align: left;">
          <div class="tingkat-kesulitan">
              <p>
                  <h3>Tingkat Kesulitan</h3>

                  <i class="fa-solid fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
                  <i class="fa-regular fa-star" style="color: #000000;"></i>
              </p>
          </div>

          <div class="penjelasan-tanaman">
              <h3>Deskripsi</h3>
              Kangkung darat (Ipomoea reptans) adalah tanaman sayuran hijau yang tumbuh merambat. 
              Tanaman ini memiliki daun hijau gelap yang berbentuk hati dan batang yang merayap di permukaan tanah. 
              Kangkung darat biasanya tumbuh subur di daerah beriklim tropis dan subtropis.
          <div class="budidaya">
              <br><h3>Tips Budidaya</h3>
              <p></p>
              <ul>
                  <li>Pemilihan lahan<br>Kangkung tumbuh baik dengan sinar matahari penuh atau sinar matahari sebagian. 
                      Namun,juga bisa tumbuh di tempat yang agak teduh, terutama di daerah yang panas.
                  </li><br>
                  <li>Jenis tanah<br>Kangkung darat tumbuh baik di tanah berdrainase baik yang kaya bahan organik. 
                      Tanah yang ideal adalah tanah berpasir atau lempung yang tidak tergenang air.                   
                  </li><br>
                  <li>Suhu<br>
                      Tanaman ini tumbuh dengan baik pada suhu sekitar 25-30 derajat Celsius (77-86 derajat Fahrenheit).
                      </li><br>
                  <li>Ph tanah <br>
                      Tanah yang netral hingga sedikit asam dengan pH sekitar 6 hingga 7 adalah yang sesuai.</li><br>
                  <li>Kelembapan<br>
                      Tanaman ini memerlukan kelembaban yang konsisten. Pastikan tanah tetap lembab, tetapi hindari tergenang air.
                  </li><br>
                  <li>Penanaman benih<br>
                      Anda dapat menanam benih kangkung darat langsung di kebun atau dalam pot. 
                      Tanam benih dengan kedalaman sekitar 1-2 sentimeter dan jarakkan antarbenih sekitar 15-30 cm tergantung pada varietasnya.</li><br>
                  <li>Pengairan<br>
                      Penyiraman di Pagi atau Sore Hari: Disarankan untuk menyirami kangkung darat pada pagi atau sore hari ketika suhu lebih sejuk dan terhindar dari penyiraman saat sinar matahari terlalu kuat.
                  </li><br>
                  <li>Pencahayaan<br>
                      Kangkung darat memerlukan sinar matahari penuh atau setengah sinar matahari. Pencahayaan yang cukup akan membantu pertumbuhan tanaman yang baik.
                  </li><br>
              </ul>
          </div>
          <div class="hama">
              <h3>Hama</h3>
              <p></p>
              <ul>
                  <li>Ulat(Spodoptera spp. )<br>larva dari ngengat yang biasanya menyerang tanaman dengan mengunyah daun-daunnya. 
                      Mereka dapat mengakibatkan kerusakan pada tanaman dengan memakan jaringan tanaman, terutama pada daun.
                  </li><br>
                  <li>Kutu Daun(Aphids spp.)<br>Kutu daun adalah serangga kecil yang mengisap sari tumbuhan dari tanaman dengan menggunakan probosis mereka. 
                      Mereka sering hidup berkelompok pada bagian bawah daun dan dapat mengurangi pertumbuhan tanaman 
                      serta menyebabkan daunnya menjadi keriput atau kuning.
                  </li><br>
                  <li>Walang Sangit(Leptocorisa spp)<br> Walang sangit adalah serangga dengan tubuh pipih yang sering ditemukan 
                      di tanaman kangkung darat. Mereka menghisap sari tumbuhan dan dapat merusak tanaman dengan cara ini. 
                      Walang sangit juga dapat menyebabkan kerusakan estetika pada daun tanaman.
                  </li><br>
              </ul>
          </div>
          <div class="penyakit">
              <h3>Penyakit</h3>
              <p></p>
              <ul>
                  <li>Busuk Akar (Root Rot)<br>
                      Ini adalah penyakit yang disebabkan oleh jamur yang dapat merusak akar tanaman Talas. 
                      Untuk menghindari penyakit ini, pastikan tanah memiliki drainase yang baik dan hindari penyiraman berlebihan.</li><br>
                  <li>Busuk Pangkal Batang (Stem Rot)<br>
                      Busuk pangkal batang adalah penyakit yang disebabkan oleh jamur yang dapat membusuk batang tanaman. Tanaman yang terinfeksi biasanya memiliki bagian pangkal batang yang lunak, berair, dan berubah warna.
                      Tindakan Pencegahan, Pastikan tanah di sekitar pangkal batang tetap kering, hindari menyiram air langsung ke pangkal batang, dan pastikan tanaman memiliki ruang yang cukup untuk sirkulasi udara.</li><br>
                  <li>Penyakit Layu (Wilt Disease)<br>
                      Penyakit layu adalah penyakit yang disebabkan oleh bakteri atau jamur yang menyerang sistem peredaran air tanaman. 
                      Gejalanya termasuk layu dan kekuningan pada daun, serta kemungkinan kematian tanaman. Tindakan Pencegahan,
                        Pilih bibit yang sehat, pastikan tanah memiliki drainase yang baik, dan hindari over-irigasi. 
                        Jika infeksi terjadi, isolasi tanaman yang sakit dan perhatikan tindakan kontrol penyakit yang direkomendasikan.
                  </li><br>
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
          style="background-image: url('../images/produk/neemoil.png'); background-size: 100% 100%;">
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
