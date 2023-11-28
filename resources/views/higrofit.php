
<?php
    session_start();

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ROOTINE - Rawat Tanamanmu</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="aset/images/Icon.svg" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
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
                src="images/Icon.svg"
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
                <a href="/jenistanaman" class="nav-link" id="link-tanaman"
                    >Tanaman</a
                >
                </li>
                <li>
                <a href="/produk" class="nav-link" id="link-produk">Produk</a>
                </li>
                <?php
                if(! empty ($_SESSION)){
                if($_SESSION['username'] == 'admin'){
                    echo 
                    '<li>
                    <a href="/feedback" class="nav-link" id="link-feedback">Feedback</a>
                    </li>';
                }else{
                    echo
                    '';
                }
                }
                ?>
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

    <!-- ===== Produk ===== -->
    <div class="chat">
      <span><a href="/chatbot"><i class="bi bi-robot" style="color: #fff;"></i></a></span>
    </div>
    <div class="kategori-tanaman">HIGROFIT (TANAMAN LEMBAB)</div>
    <div class="container-produk">  
      <div class="card">
        <a href="pages/tomat">
          <img src="images/tanaman/tomato.jpg" /></a>
        <div class="intro">
          <h1>Tomat</h1>
          <p>Merupakan buah yang kaya akan kandungan vitamin seperti vitamin C</p>
        </div>
      </div>

      <div class="card">
        <a href="pages/cabai">
          <img src="images/tanaman/cabaimerah.jpg" /></a>
        <div class="intro">
          <h1>Cabai Merah</h1>
          <p>Mengandung senyawa kapsaisin yang memberikan rasa pedas
          </p>
        </div>
      </div>
      

      <div class="card">
        <a href="pages/gandum">
        <img src="images/tanaman/gandum.jpg" /></a>
        <div class="intro">
          <h1>Gandum</h1>
          <p>Merupakan tanaman sumber utama karbohidrat kompleks</p>
        </div>
      </div>
      <div class="card">
        <a href="pages/kembangkol">
          <img src="images/tanaman/kembangkol.jpg" /></a>
        <div class="intro">
          <h1>Kembang Kol</h1>
          <p>
            Merupakan tumbuhan sayuran yang lazim dikenal sebagai kubis bunga
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/brokoli">
          <img src="images/tanaman/brokoli.jpg" /></a>
        <div class="intro">
          <h1>Brokoli</h1>
          <p>
            Sayuran yang berbentuk seperti pohon dengan bagian kepala
            berwarna hijau tua
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/paprika">
          <img src="images/tanaman/paprika.jpg" /></a>
        <div class="intro">
          <h1>Paprika</h1>
          <p>
            Sayuran Paprika adalah sayuran rendah kalori
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/wortel">
          <img src="images/tanaman/wortel.jpg" /></a>
        <div class="intro">
          <h1>Wortel</h1>
          <p>
            Sayuran yang mengandung beta karoten, serat, dan air yang
            cukup tinggi
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/terung">
          <img src="images/tanaman/terung.jpg" /></a>
        <div class="intro">
          <h1>Terung</h1>
          <p>
            Mengandung sejumlah vitamin, mineral, dam vitamin K
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/kentang">
          <img src="images/tanaman/kentang.jpg" /></a>
        <div class="intro">
          <h1>Kentang</h1>
          <p>
            Jenis umbi-umbian yang kaya akan nutrisi karbohidrat kompleks
          </p>
        </div>
      </div>

      <div class="card">
        <a href="pages/bawangputih">
          <img src="images/tanaman/bawangputih.jpg" />
        </a>
        <div class="intro">
          <h1>Bawang Putih</h1>
          <p>
            Tanaman umbi yang memiliki umbi besar yang terdiri dari beberapa siung kecil yang terpisah oleh kulit luar
          </p>
        </div>
      </div>

      <div class="card">
        <a href="pages/bawangmerah">
          <img src="images/tanaman/bawangmerah.jpg" /></a>
        <div class="intro">
          <h1>Bawang Merah</h1>
          <p>
            Tanaman umbi yang memiliki umbi besar yang terdiri dari beberapa siung kecil kulit luar berwarna merah atau ungu
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/bayam">
        <img src="images/tanaman/bayam.jpg" /></a>
        <div class="intro">
          <h1>Bayam</h1>
          <p>
            Sayuran hijau dengan daun berbentuk hati yang biasanya hijau gelap
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/talas">
          <img src="images/tanaman/taro.jpg" /></a>
        <div class="intro">
          <h1>Talas</h1>
          <p>
            Sumber kalium yang baik, yang berperan dalam menjaga tekanan darah
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/kangkung">
          <img src="images/tanaman/kangkung.jpg" /></a>
        <div class="intro">
          <h1>Kangkung</h1>
          <p>
            Sayuran hijau yang tumbuh merambat, memiliki daun hijau gelap yang berbentuk hati
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/jahe">
          <img src="images/tanaman/jahe.jpg" /></a>
        <div class="intro">
          <h1>Jahe</h1>
          <p>
            Tanaman herbal yang akarnya beraroma dan diolah untuk menjadi penghangat tubuh
          </p>
        </div>
      </div>
      <div class="card">
        <a href="pages/timun">
          <img src="images/tanaman/timun.jpg" /></a>
        <div class="intro">
          <h1>Timun</h1>
          <p>
            Mengandung unsur air yang sangat tinggi, sekitar 95% hingga 96% beratnya
          </p>
        </div>
      </div>
    </div>
      <!-- <div class="card">
        <img src="images/tanaman/newCarrot.jpg" />
        <div class="intro">
          <h1>Wortel</h1>
          <p>
            adalah sayuran yang mengandung beta karoten, serat, dan air yang
            cukup tinggi.
          </p>
        </div>
      </div>

      <div class="card">
        <img src="images/tanaman/paprika.jpg" />
        <div class="intro">
          <h1>Paprika</h1>
          <p>bisa mencegah anemia dan menjaga kesehatan tulang.</p>
        </div>
      </div>

      <div class="card">
        <img src="images/tanaman/selada.jpg" />
        <div class="intro">
          <h1>Selada</h1>
          <p>merupakan sayuran hijau yang kaya akan antioksidan.</p>
        </div>
      </div>
    </div> -->

    <!-- ===== Footer ===== -->
    <footer class="body bg-coklat">
      <div class="container">
          <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
          <div class="col">
              <div class="row"> 
              <img src="images/Footer/FooterLogo.png">
              </div>
              <div class="row">
                  <h5>connect with us</h5>
              </div>
              <div class="row gap-3 d-flex justify-content-start ikon-sosmed">
                  <div class="col-md-2">
                      <a href="#"><img src="images/Footer/Instagram.png" alt="Instagram kami"></a> 
                  </div>
                  <div class="col-md-2 ml-md-2">
                      <a href="#"><img src="images/Footer/TwitterX.png"></a>
                  </div>
                  <div class="col-md-2 d-md-none d-lg-none d-xl-block ">
                      <a href="#"><img src="images/Footer/YouTube.png"></a>
                  </div>
                  <div class="col-md-2 d-md-none d-lg-none d-xl-block">
                      <a href="#"><img src="images/Footer/Facebook.png"></a>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-2 d-none d-md-block d-lg-block d-xl-none">
                      <img src="images/footer/YouTube.png">
                  </div>
                  <div class="col-md-2 offset-md-1 d-none d-md-block d-lg-block d-xl-none">
                      <img src="images/footer/Facebook.png">
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
                  <img src="images/Footer/Playstore.png " class="w-100">
                  </button>
              </div>
              <div class="col mb-3">
              </div>
              <div class="col" >
              <div class="row">
                  <button class="btn btn-light btn-circle" >
                  <img src="images/Footer/Appstore.png " class="w-100">
                  </button>
              </div>
              
          </footer>
          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 border-top border-dark">
              <p>© 2023 by ROOTINE</p>
          </div>
      </footer>
    <script src="js/scripts.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
