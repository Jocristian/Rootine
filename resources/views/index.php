    <?php
        session_start();

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="theme-color"content="#9EB384">
        <title>ROOTINE - Rawat Tanamanmu</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/master.css">
        <link rel="icon" href="images/Icon.svg" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="apple-touch-icon"href="images/icon192.png">
        <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <link rel="manifest" href="json/manifest.json">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body style="background-color: #FFFAF2;">
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
        <!-- NAV END -->

        <main>
            <div class="chat">
                <span><a href="/chatbot"><i class="bi bi-robot" style="color: #fff;"></i></a></span>
            </div>
            <!-- ====== Get App Section ====== -->
            <section class="get-app">
                <div class="wave">
                <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFAF2">
                        <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 z" id="Path"></path>
                    </g>
                    </g>
                </svg>
                </div>

                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 app-text-image">
                        <div class="row">
                            <div class="col-lg-8 text-center text-lg-start text1" style="margin-top: -120px;">
                                <h1 data-aos="fade-right">Rawat Tanamanmu <br> dengan Rootine</h1>
                                <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Aplikasi berbasis web dan mobile yang 
                                    berfokus membantu kalian dalam merawat tanaman, mendukung produktivitas , serta pengetahuan terkait tanaman.</p>
                                <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#" class="btn">Unduh Rootine</a></p>
                            </div>
                            <div class="col-lg-4 iphone-wrap">
                                <img src="images/phone1.png" alt="Image" class="phone-1" data-aos="fade-right">
                                <img src="images/phone2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- GET APP END -->

            <!-- ===== Section Bubble ===== -->
            <section class="section">
                <div class="container bubble">
                    <div class="row justify-content-center text-center mb-4">
                        <div class="col-md-6" data-aos="fade-up" style="z-index: 2;">
                            <h2 class="section-heading">Jaga dan Cek Tanaman Bersama Rootine</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-4" style="width: auto; margin: 1rem 2rem;" data-aos="fade-up" data-aos-delay="">
                            <div class="feature-1 text-center card hvr-shutter-out-vertical">
                                <div class="wrap-icon icon-1">
                                    <i class="bi bi-brightness-high"></i>
                                </div>
                                <h3 class="mb-3">Pemantauan Cuaca Terkini</h3>
                            </div>
                        </div>
                            <div class="col-md-4" style="width: auto; margin: 1rem 2rem;" data-aos="fade-up" data-aos-delay="100">
                                <div class="feature-1 text-center card hvr-shutter-out-vertical">
                                    <div class="wrap-icon icon-1">
                                        <i class="bi bi-flower3"></i>
                                    </div>
                                <h3 class="mb-3">Informasi Seputar Tanaman</h3>
                            </div>
                        </div>
                        <div class="col-md-4" style="width: auto; margin: 1rem 2rem;" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-1 text-center card hvr-shutter-out-vertical">
                                <div class="wrap-icon icon-1">
                                    <i class="bi bi-cart3"></i>
                                </div>
                                <h3 class="mb-3">Produk untuk Membantu Tanaman</h3>
                            </div>
                        </div>
                        <div class="col-md-4" style="width: auto; margin: 1rem 2rem;" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-1 text-center card hvr-shutter-out-vertical">
                                <div class="wrap-icon icon-1">
                                    <i class="bi bi-robot"></i>
                                </div>
                                <h3 class="mb-3">Diagnosis Penyakit Tanaman</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- BUBBLE END -->

            <!-- ===== FITUR ===== -->
            <section class="fitur">
                <section class="section">
                    <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4 ms-auto order-2 desc">
                        <h2 class="mb-4">Pantau Cuaca</h2>
                        <p class="mb-4">Gunakan fitur AgriPredict untuk memprediksi cuaca dan suhu, serta dapatkan tips terbaik dari aplikasi kami!</p>
                        <p><a href="#" class="btn btn-primary btn-fitur">Lihat Selengkapnya</a></p>
                        </div>
                        <div class="col-md-6 desc" data-aos="fade-right">
                            <img src="images/wheater.svg" alt="Image-cuaca" class="img-fluid">
                        </div>
                    </div>
                    </div>
                </section>
                <section class="section-tanaman">
                    <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-md-4 me-auto items1">
                            <h2 class="mb-4 text-left">Cari Informasi tentang Tanaman</h2>
                            <p class="mb-4">Gunakan fitur Tanaman untuk mencari informasi terkait tanaman yang ingin anda budidayakan, lengkap dengan cara merawat dan informasi penyakitnya!</p>
                            <p><a href="#" class="btn btn-primary btn-fitur">Lihat Selengkapnya</a></p>
                        </div>
                        <div class="col-md-6 align-items-right items2" data-aos="fade-left">
                        <img src="images/tanaman.svg" alt="Imageitanaman" class="img-fluid">
                        </div>
                    </div>
                    </div>
                </section>
                
                <section class="section">
                    <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-md-4 ms-auto order-2 desc">
                            <h2 class="mb-4">Dapatkan Produk yang Sesuai</h2>
                            <p class="mb-4">Temukan produk yang sesuai dengan kebutuhan anda dalam merawat tanaman!</p>
                            <p><a href="#" class="btn btn-primary btn-fitur">Lihat Selengkapnya</a></p>
                        </div>
                        <div class="col-md-6" data-aos="fade-right">
                            <img src="images/toko.svg" alt="Image-toko" class="img-fluid">
                        </div>
                    </div>
                    </div>
                </section>
    <!--             
                <section class="photos-container">
                    <div class="photos-wrapper">
                        <div class="photo1"><img src="images/fitur.png "></div>
                        <div class="photo2"><img src="images/fitur.png "></div>
                    </div>
                    <div class="photos-hl"></div>
                </section> -->
            </section>
            <!-- FITUR END -->

        </main>

        <!-- ===== Floating Button AI ===== -->
        <a href="#" class="floating-button"><i class="bi bi-robot"></i></a>

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
        <script src="js/master.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
    </html>