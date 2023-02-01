<?php 

    @$btnhitung = $_POST['btnhitung']; 
    if($btnhitung=="ditekan"){
    $calon = $_POST['calon'];
    $k = $_POST['k']; //kehadiran
    $a = $_POST['a']; //adart
    $p = $_POST['p']; //pembukuan

    if ($p == "p2") {
      if ($a=="a2" and $k=="k3") {
      $ket = "Anda tidak menerima bantuan";
      } else if ($a=="a2" and $k=="k1") {
      $ket = "Anda menerima bantuan";
      } else if ($a=="a2" and $k=="k2") {
      $ket = "Anda menerima bantuan";
      } else if ($a=="a3" and $k=="k3") {
        $ket = "Anda menerima bantuan";
      } else {
        $ket = "Jika Pembukuan Buruk Maka ADART tidak mungkin BAIK";
      }
    } else if ($p == "p1") {
      $ket = "Anda menerima bantuan";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dana Bantuan Koperasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.3.1
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Dana Bantuan Koperasi<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Utama</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">Tentang Website</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Aplikasi</a></li>
          <li><a class="nav-link scrollto" href="index.php#team">Tentang Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/bansos.jpg" class="img-fluid animated">
      <h2>Selamat Datang Di <span>Dana Bantuan Koperasi</span></h2>
      <div class="d-flex">
        <a href="#services" class="btn-get-started scrollto">Memulai Menilai</a>
      </div>
    </div>
  </section>

  <main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Website</h2>
          <p>Pembuatan sistem pendukung keputusan dengan 
penentuan masalah, dalam hal ini adalah penentuan 
bantuan dana bantuan koperasi. Hal ini sangat penting 
dilakukan karena akan menentukan pengetahuan yang 
selanjutnya akan diperlukan dalam sistem. Dari 
struktur sistem tersebut dapat dilihat masalah yang 
ditemukan, kemudian menemukan kesimpulan 
permasalahan yang dihadapi.</p>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Ngitung Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Aplikasi</h2>
        </div>

        <div class="row gy-5">
          <div class="card">
            <div class="card-body">
              <form method="POST">
                    <label for="exampleFormControlInput1" class="form-label">Nama Calon</label>
                    <input name="calon" class="form-control" type="text" aria-label="readonly input example" >

                    <label for="exampleFormControlInput1" class="form-label">Pembukuan</label>
                    <select name="p" class="form-select" aria-label="Default select example" id="id">
                      <option selected>Pembukuan</option>
                      <option value="p1">Baik</option>
                      <option value="p2">Buruk</option>
                    </select> <br>
                    <label for="exampleFormControlInput1" class="form-label">Kehadiran</label>
                    <select name="k" class="form-select" aria-label="Default select example" id="id">
                      <option selected>Pilih Kehadiran</option>
                      <option value="k1">Baik</option>
                      <option value="k2">Sedang</option>
                      <option value="k3">Rendah</option>
                    </select> <br>
                    <label for="exampleFormControlInput1" class="form-label">Melaksanakan ADART</label>
                    <select name="a" class="form-select" aria-label="Default select example" id="id">
                      <option selected>Melaksanakan ADART</option>
                      <option value="a1">Bagus</option>
                      <option value="a2">Cukup</option>
                      <option value="a3">Kurang</option>
                    </select> <br>
                <button type="submit" name="btnhitung" value="ditekan" class="btn btn-info btn-lg btn-block">Hasil Keputusan</button>
                </form>
                <br>
                <?php        
                            if($btnhitung=="ditekan"){   
                        ?> 
                                                    
                        <div class="alert" role="alert">
                            <p>Hasilnya  : </p>
                            <?php       
                                echo "Nama Calon : $calon <br>";
                                echo "Hasil Keputusan : $ket <br>";
                            ?>   
                        </div>
                        <?php
                            }
                        ?>  
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
          <p>Kami adalah mahasiswa Teknik Informatika semester 5 di Universitas Islam Balitar</p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-3 col-md-3 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/niken.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Niken Cahyaning Tyas</h4>
                <span>20104410037</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-3 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/anna.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Nurliana Azizah</h4>
                <span>20104410031</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-3 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/muayyin.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Muayyin Wafi Khoiriyah</h4>
                <span>20104410015</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-3 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/devi.jpeg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Devi Budianti</h4>
                <span>20104410034</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Dana Bantuan Koperasi</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>