  <?php
      session_start();
      use Illuminate\Http\Request;
  
      Route::get('/token', function (Request $request) {
          $token = $request->session()->token();
      
          $token = csrf_token();
      });
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>ROOTINE - Rawat Tanamanmu</title>
      <link rel="stylesheet" href="css/Produk.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="icon" href="images/Icon.svg" type="image/x-icon" />
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
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
      />
      <!-- Animate.css -->
      <link rel="stylesheet" href="css/animate.css">
      <!-- Bootstrap  -->
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- Flexslider  -->
      <link rel="stylesheet" href="css/flexslider.css">
      <!-- Theme style  -->
      <link rel="stylesheet" href="css/style2.css">

      <!-- Modernizr JS -->
      <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body style="background-color: #fffaf2">
      <!-- NAVBAR -->
      <nav class="navbar" style="margin-bottom: 0px;">
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
      <!-- PRODUK -->
      <?php
      if(! empty ($_SESSION)){
        if($_SESSION['username'] == 'admin'){
          echo 
          '<div class="chat active" style="cursor: pointer;bottom:175px;">
          <span><a href="javascript:void(0);" style="" id="addPesanan"><i class="fa-solid fa-plus" style="color: #fff;"></i></a></span>
          </div>
          <div class="chat active" style="cursor: pointer;">
          <span><a href="/keranjang"><i class="fa-solid fa-receipt" style="color: #fff;"></i></a></span>
          </div>';
        }else{
            echo
            '
            <div class="chat active" style="cursor: pointer;">
            <span><a href="/keranjangpemesan"><i class="fa-solid fa-receipt" style="color: #fff;"></i></a></span>
            </div>';
        }
      }        
      ?>
      <div id="page">
    <aside id="fh5co-hero" class="js-fullheight">
      <div class="flexslider js-fullheight">
        <ul class="slides">
          <li style="background-image: url(images/produk/slider1.png);">
            <div class="container">
              <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                <div class="slider-text-inner">
                  <div class="desc">
                    
                    <h2>Produk Kami</h2>
                    <p>Eksplorasi keajaiban alam dengan katalog produk kami yang lengkap, menjadikan tanaman Anda tumbuh subur dan sehat</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/produk/slider2.png);">
            <div class="container">
              <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                <div class="slider-text-inner">
                  <div class="desc">
                    <h2>DISKON UNTUK SSEMUA PRODUK</h2>
                    <p>Hemat lebih, tanam lebih! Nikmati diskon 15% pada katalog produk pendukung tanaman kami mulai 27 Nov - 3 Des. Waktunya untuk mempercantik kebun Anda!</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(images/produk/slider3.png);">
            <div class="container">
              <div class="col-md-6 col-md-offset-3 col-md-pull-3 js-fullheight slider-text">
                <div class="slider-text-inner">
                  <div class="desc">
                    <h2>Nikmati Kemewahan Produk Kami</h2>
                    <p>Persembahan terbaik untuk tanaman Anda! Jelajahi katalog produk kami yang dipenuhi dengan solusi berkualitas tinggi untuk pertumbuhan dan kesehatan tanaman</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          </ul>
        </div>
    </aside>
      </div>
      <div id="fh5co-services" class="fh5co-bg-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 text-center">
            <div class="feature-center animate-box" data-animate-effect="fadeIn">
              <span class="icon" style="background-image: url(images/produk/vitasampi.png);background-position: center center;background-size:100%;">
              </span>
              <h3>Vitamin</h3>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 text-center">
            <div class="feature-center animate-box" data-animate-effect="fadeIn">
              <span class="icon" style="background-image: url(images/produk/gohama.png);background-position: center center;background-size:100%;">
                <i class="icon-wallet"></i>
              </span>
              <h3>Pestisida</h3>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 text-center">
            <div class="feature-center animate-box" data-animate-effect="fadeIn">
              <span class="icon" style="background-image: url(images/produk/pupukcair.png);background-position: center center;background-size:100%;">
                <i class="icon-paper-plane"></i>
              </span>
              <h3>Pupuk</h3>
          </div>
        </div>
      </div>
    </div>
      <div id="fh5co-product">
      <div class="container">
        <div class="row animate-box">
          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
            <h2>Produk</h2>
            <p>Berbagai macam produk kesehatan untuk tanaman meliputi Vitamin, Pestisida, dan Pupuk</p>
          </div>
        </div>
        <div class="row">
          <?php
                      // $var = "Ini teks dalam variabel ";
                      // echo $var;
                      // echo "Hello World";
                      $cUrl = curl_init();

                      $options = array(
                          CURLOPT_URL => 'https://us-east-1.aws.data.mongodb-api.com/app/application-0-rjiyx/endpoint/getallrootineproduct',

                          CURLOPT_CUSTOMREQUEST => 'GET',
                          CURLOPT_RETURNTRANSFER => true
                      );

                      curl_setopt_array($cUrl,$options);

                      $response = curl_exec($cUrl);

                      $data = json_decode($response);

                      curl_close($cUrl);
                      
                      $urutan = 2;

                      if(! empty($_SESSION['username'])){
                        foreach($data as $produk):
                          echo '
                          <div class="col-md-4 text-center animate-box firstdiv" id="flexcol'.$produk->PID.'" style="order:'.$urutan.'">
                          <div class="row">
                            <div class="col">
                              <div class="product">
                                  <div class="product-grid" style="background-image:url(images/produk/'.$produk->foto.');">
                                  </div>
                                  <div class="desc">
                                      <h3><a class="button" href="javascript:void(0)" data-order='.$urutan.' data-value="'.$produk->PID.'">'.(empty($produk->nama)?'':$produk->nama).'</a></h3>
                                      <span class="price">'.number_format($produk->Harga).'</span>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-8 rounded d-none" id="'.$produk->PID.'">
                            <div class="desc" id="desc'.$produk->PID.'">
                              <span class="price">Rp.'.number_format($produk->Harga).'</span>
                              <h2>'.$produk->nama.'</h2>
                              <p>'.$produk->Desc.'</p>
                              <p>sisa stock : '.$produk->stock.'</p>
                              <p><a href="javascript:void(0)" class="buttondesc btn btn-primary btn-outline btn-lg" data-value="'.$produk->PID.'">Buat Pesanan</a></p>
                            </div>
                            <div class="col d-none" id="form'.$produk->PID.'">
                              <Form id="formPesanan'.$produk->PID.'" data-value="'.$produk->PID.'" action="/savepesanan" method="get">
                                  <div class="mb-3">
                                      <label for="nama" class="form-label">Nama Produk</label>
                                      <h3><b>'.$produk->nama.'</b></h3>
                                      <input type="hidden" id="nama" name="nama" value="'.$produk->nama.'"></input>
                                      <input type="hidden" id="id" name="id"></input>
                                      <input type="hidden" id="date" name="date" value="2"></input>
                                      <input type="hidden" id="username" name="username" value="'.$_SESSION['username'].'"></input>
                                      <input type="hidden" id="status" name="status" value="Belum Dikonfirmasi"></input>
                                      
                                  </div>
                                  <div class="mb-3">
                                      <label for="varian" class="form-label">Varian Produk</label>
                                      <select class="form-select" id="varian" name="varian" required>
                                          <option value="100g atau 100mL">100g atau 100mL</option>
                                          <option value="500 g atau 500 mL">500 g atau 500 mL</option>
                                          <option value="1 kg atau 1 L">1 kg atau 1 L</option>
                                          <option value="2 kg atau 2 L">2 kg atau 2 L</option>
                                      </select>
                                  </div>
                                  <div class="mb-3">
                                      <label for="jumlah" class="form-label">Jumlah</label>
                                      <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" required></input>
                                  </div>
                                  <div class="mb-3">
                                      <label for="alamat" class="form-label">Alamat Pengiriman</label>
                                      <input type="textarea" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamatmu" required></input>
                                  </div>
                              </Form>
                              <button href="javascript:void(0)" type="submit" class="buttondesc btn btn-primary btn-outline btn-lg" data-value="'.$produk->PID.'">kembali</button>
                              <button type="submit" class="btn btn-primary btn-outline btn-lg" form="formPesanan'.$produk->PID.'" >Simpan</button>
                            </div>
                            </div>
                          </div>
                          
                        </div>
                        
                    
                    ';
                    $urutan++;
                    endforeach;
                      }else{
                        foreach($data as $produk):
                          echo
                          '
                          <div class="col-md-4 text-center animate-box firstdiv" id="flexcol'.$produk->PID.'" style="order:'.$urutan.'">
                          <div class="row">
                            <div class="col">
                              <div class="product">
                                  <div class="product-grid" style="background-image:url(images/produk/'.$produk->foto.');">
                                  </div>
                                  <div class="desc">
                                      <h3><a class="button" href="javascript:void(0)" data-order='.$urutan.' data-value="'.$produk->PID.'">'.(empty($produk->nama)?'':$produk->nama).'</a></h3>
                                      <span class="price">'.number_format($produk->Harga).'</span>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-8 rounded d-none" id="'.$produk->PID.'">
                            <div class="desc" id="desc'.$produk->PID.'">
                              <span class="price">Rp.'.number_format($produk->Harga).'</span>
                              <h2>'.$produk->nama.'</h2>
                              <p>'.$produk->Desc.'</p>
                              <p>sisa stock : '.$produk->stock.'</p>
                              <p><a href="javascript:void(0)" class="btn btn-primary btn-outline btn-lg" data-value="'.$produk->PID.'">Login Untuk Membuat Pesanan</a></p>
                            </div>
                            </div>
                          </div>
                          
                        </div>
                        
                    
                    ';
                    $urutan++;
                    endforeach;
                      };
                  ?>
        </div>
        <?php
      if(! empty ($_SESSION)){
        if($_SESSION['username'] == 'admin'){
          echo 
          '<div class="modal" tabindex="-1" id="modalPesanan">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" style="color:#435334;font-weight:bold">Form Pemesanan Produk</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body" style="background-color:#FFFAF2">
                      <Form id="formupload" method="post" enctype="multipart/form-data" action="/upload/store">
                          <div class="mb-3 py-3 text-center">
                            <label for="foto" class="form-label">Gambar Produk</label>
                            <input class="form-control" type="file" name="foto" id="foto" required>
                          </div>
                          
                          <input type="hidden" id="id" name="id" >
                          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                          
                          <div class="row g-3 align-items-center text-center py-3">
                            <div class="col-4">
                              <label for="nama" class="col-form-label">Nama Produk</label>
                            </div>
                            <div class="col-auto">
                              <input class="form-control" type="text" placeholder="Nama Produk" id="nama" name="nama" required>
                            </div>
                          </div>

                          <div class="row g-3 align-items-center text-center py-3">
                            <div class="col-4">
                              <label for="PID" class="col-form-label">Produk ID</label>
                            </div>
                            <div class="col-auto">
                            <input class="form-control" type="text" placeholder="Id Produk" id="PID" name="PID" required>
                            </div>
                          </div>
                          
                          <div class="row g-3 align-items-center text-center py-3">
                            <div class="col-4">
                              <label for="mass" class="col-form-label">Massa Produk</label>
                            </div>
                            <div class="col-auto">
                              <input type="number" class="form-control" id="mass" name="mass" placeholder="Masukkan massa produk" aria-describedby="satuan" required>
                            </div>
                            <div class="col-auto">
                              <span id="satuan" class="form-text">
                                .ML
                              </span>
                            </div>
                          </div>

                          <div class="row g-3 align-items-center text-center py-3">
                            <div class="col-4">
                              <label for="stock" class="col-form-label">Stock</label>
                            </div>
                            <div class="col-auto">
                              <input type="number" class="form-control" id="stock" name="stock" placeholder="Masukkan sisa stock" required>
                            </div>
                            <div class="col-auto">
                            </div>
                          </div>

                          <div class="row g-3 align-items-center text-center py-3">
                            <div class="col-4">
                              <label for="Harga" class="col-form-label">Harga</label>
                            </div>
                            <div class="col-auto">
                            <input type="number" class="form-control" id="Harga" name="Harga" placeholder="Masukkan Harga produk" aria-describedby="matauang" required>
                            </div>
                            <div class="col-auto">
                              <span id="matauang" class="form-text">
                                Rupiah
                              </span>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label for="Desc" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="Desc" name="Desc" rows="6"></textarea>
                          </div>
                      </Form>
                  </div>
                  <div class="modal-footer d-flex justify-content-end" >
                  <button type="submit" class="btn rounded-pill" form="formupload" style="background-color: #9EB384;color:white;outline-style:outset">Simpan</button>
                  </div>
              </div>
          </div>
      </div>
      ';
        }else{
        }
      }        
      ?>
      <script>
        function submitForms() {
          document.getElementById("formupload").submit();
          document.getElementById("formPesanan").submit();
      }

      </script>

      </div>
    </div>
    
  
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
        <script src="js/produk.js"></script>  
      <script src="js/scripts.js"></script>
      
      <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <!-- countTo -->
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>
      <script src="js/script.js"></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"
      ></script>
    </body>
  </html>
