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
        <img src="../images/tanaman/ubijalar.jpg" style="width: 300px; height: 300px; margin-top: 10%;">
        <div class="judul-tanaman pt-3">
            <h2><b>Ubi Kayu</b></h2>
        </div>
        <div class="nama-latin">
            <p> 
                <h3><b>(Manihot esculenta)</b></h3>
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
              Ubi kayu (Manihot esculenta), juga dikenal sebagai singkong, adalah tanaman umbi-umbian yang ditanam untuk umbinya yang kaya akan karbohidrat.
              Ubi kayu merupakan sumber makanan pokok di banyak daerah tropis dan subtropis.
          </div>

          <div class="budidaya">
              <br><h3>Tips Budidaya</h3>
              <p></p>
              <ul>
                  <li>Pemilihan lahan<br>Pilih lahan yang terkena sinar matahari penuh. Ubi kayu tumbuh paling baik pada tanah yang gembur, berdrainase baik, dan memiliki kandungan pasir.
                        Tanaman ini tahan terhadap kondisi tanah yang miskin unsur hara.</li><br>
                  <li>Jenis tanah<br> Tanah yang ideal adalah tanah pasir berdrainase baik dengan pH sekitar 5,5 hingga 6,5. Ubi kayu tumbuh lebih baik pada tanah yang tidak tergenang.</li><br>
                  <li>Suhu<br>
                      Ubi kayu tumbuh dengan baik pada suhu antara 24°C hingga 30°C (75-86°F). Ini adalah tanaman yang tahan panas.</li><br>
                  <li>Ph tanah <br>
                      Ubi kayu tumbuh optimal pada tanah dengan pH antara 5,5 hingga 6,5, yang cenderung netral hingga sedikit asam.</li><br>
                  <li>Kelembapan<br>
                      Ubi kayu toleran terhadap kekeringan, tetapi memerlukan air yang cukup selama fase pertumbuhan awal. Setelah tanaman mapan, mereka bisa bertahan dalam kondisi kering.</li><br>
                  <li>Penanaman benih<br>
                      Ubi kayu biasanya ditanam dari potongan batang atau stek. Potongan batang ditanam dalam lubang dengan kedalaman sekitar 5-10 cm.</li><br>
                  <li>Pengairan<br>
                      Penyiraman teratur penting selama fase pertumbuhan awal. Setelah tanaman mapan, penyiraman lebih sedikit diperlukan.</li><br>
                  <li>Pencahayaan<br> Ubi kayu memerlukan sinar matahari penuh untuk pertumbuhan yang optimal.</li></br>
              </ul>
          </div>
          <div class="hama">
              <h3>Hama</h3>
              <p></p>
              <ul>
                  <li>Tungau merah (tetranychus urticae koch)<br>
                      Gejala diawali dengan terlihatnya spot (bercak) kuning sepanjang tulang daun pada daun daun bawah dan tengah.
                        kemudian menyebar ke seluruh permukaan daun sehingga daun berwarna ke-merahan, coklat atau seperti karat.</li><br>
                  <li>Kepinding Tepung (Phenacoccus sp)<br> hama pengisap cair- an daun dan batang tamanan dan membawa racun dalam air liurnya.
                        gejala kerdil pada daerah titik tumbuh, ruas men- jadi pendek, daun baru yang baru tumbuh menjadi kecil dan mengkerut.
                  </li><br>
              </ul>
          </div>
          <div class="penyakit">
              <h3>Penyakit</h3>
              <p></p>
              <ul>
                  <li>Bercak Daun Baur (Cercospora viscosae Muller et Chupp)<br>
                      Gejala berupa bercak berukuran besar (mencapai seperlima luas daun), berwarna coklat tanpa batas yang jelas.
                        Cara pengendalian Penyemprotan dengan fungisida atau mengatur jarak tanam agar tidak terlalu rapat dan mengurangi kelembaban.
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
          style="background-image: url('../images/produk/pupukza.png'); background-size: 100% 100%;">
        </div>
      </a>

      <a href="">
        <div
          class="produk-icon"
          style="background-image: url('../images/produk/pupukurea.png'); background-size: 100% 100%;">
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
