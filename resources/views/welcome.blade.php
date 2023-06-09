<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Task 5</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template')}}/assets/img/icon.png" rel="icon">
  <link href="{{asset('template')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    <script src="https://kit.fontawesome.com/efe3f6fdbc.js" crossorigin="anonymous"></script>
  <link href="{{asset('template')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template')}}/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-light">
    <div class="container d-flex align-items-center">
      <a href="index.html" class="logo me-auto"><img src="{{asset('template')}}/assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#why-us">About</a></li>
          <li><a class="nav-link scrollto" href="#categories">Categories</a></li>
          <li><a class="nav-link scrollto" href="#leaderboard">Leaderboard</a></li>
          <li><a class="nav-link scrollto" href="#portofolio">Portofolio</a></li>
            <li><a class="nav-link scrollto" href="#testimonial">Testimonial</a></li>
            <li><a class="getstarted scrollto" href="#">Join US</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1 ><span style="text-decoration: underline; color: #334daa;">Mentoring</span>&ensp;<span>Program</span></h1>

        <center> <br><br>
            <a href="{{url('login')}}" class="text-center btn-get-started scrollto">Join US</a>
          </center>
        </div>

      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h3>About Mentoring</h3>
              <div class="row ">
                <div class="img-fluid mt-5" style="margin-left: 200px;">
                  <img src="{{asset('template')}}/assets/img/about.png" class=" col-md-6">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-2 " style="margin-top: 270px;">
            <h1 style="color: #000;">What is Mentoring?</h1>
            <p style="color: #000; line-height: 24px;">
            Mentoring is a learning method that <br>
            allows someone with more experience <br>
            to share their experiences with people<br>
            who do not have experience in a<br>
            particular field. Mentoring is proven to<br>
            be effective in shaping one's<br>
            characteristics, especially for people<br>
            who want to enter the workforce<br>
            </p>
          </div>
        </div>
        <center>
          <button class="btn btn-success btn-circle mr-2"></button>
          <button class="btn btn-secondary btn-circle mr-2"></button>
          <button class="btn btn-secondary btn-circle"></button>
        </center>

      </div>
    </section>

    <section id="categories" class="services section-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div data-aos="fade-right">
                <h2 class="categories">Mentoring Categories</h2>
                <p class="text-bold" style="color: #000; font-weight: 400; font-size: 18px; line-height: 27px;">Pick your favorite categories for <br>
                mentoring, bring yourself one step <br>
                further from the others.</p>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="filter-container p-0 row">
                  <div class="filtr-item col-sm-4" data-category="1" data-sort="white sample">

                    </a>
                  </div>
                    <div class="filtr-item col-sm-4" data-sort="white sample">
                      <a href="" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="{{asset('template')}}/assets/img/flutter.png" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-4" data-sort="black sample">
                      <a href="" data-toggle="lightbox" data-title="sample 2 - black">
                        <img src="{{asset('template')}}/assets/img/ui.png" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="filter-container p-0 row">
                    <div class="filtr-item col-sm-4" data-sort="red sample">
                      <a href="" data-toggle="lightbox" data-title="sample 3 - red">
                        <img src="{{asset('template')}}/assets/img/kotlin.png" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-4" data-sort="red sample">
                      <a href="" data-toggle="lightbox" data-title="sample 4 - red">
                        <img src="{{asset('template')}}/assets/img/web.png" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-4" data-sort="black sample">
                      <a href="" data-toggle="lightbox" data-title="sample 5 - black">
                        <img src="{{asset('template')}}/assets/img/english.png" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                  </div>
                </div>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </section>

    <section id="leaderboard" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="content">
          <h3>Leaderboard</h3>
        </div>
        <div class="col-md-12">
          <nav id="navbar" class="navbar2 text-center fw-bold text-white">
            <ul>
              <li ><a class="nav-link scrollto active" href="#">Flutter</a></li>
              <li><a class="nav-link scrollto" href="#">Kotlin</a></li>
              <li><a class="nav-link scrollto" href="#">UiDesign</a></li>
              <li><a class="nav-link scrollto" href="#">Web</a></li>
              <li><a class="nav-link scrollto" href="#">English</a></li>
              <li><a class="nav-link scrollto" href="#">Kotlin ll</a></li>
              <li><a class="nav-link scrollto" href="#">Flutter ll</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box1">
              <div class="personal">
                  <center>
                    <img src="{{asset('template')}}/assets/img/team/team-1.jpg" class="card-img-top rounded-circle mt-1 ml-1" alt="gambar" style="width:140px;height:140px;">
                    <p class="text-bold mt-3 mb-0" style="color: #48AA33"><b>Rizki Adi Saputra</b></p>
                    <p class="text-bold mt-1" style="color: #000"><b>Univ Dian Nuswantoro</b></p>
                    <p class="text-bold mt-4" style="color: #000; font-size: 34px;"><b>2388</b></p>
                    <p class="text-bold mt-4" style="color: #000; font-size: 14px;"><b>Flutter - Batch 2</b></p>
                    </center>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <div class="personal">
                  <center>
                    <img src="{{asset('template')}}/assets/img/team/team-3.jpg" class="card-img-top rounded-circle mt-1 ml-1" alt="gambar" style="width:140px;height:140px;">
                    <p class="text-bold mt-3 mb-0" style="color: #48AA33"><b>Sesaka Aji Nuryah B</b></p>
                    <p class="text-bold mt-1" style="color: #000"><b>Univ Singaperbangsa Karawang</b></p>
                    <p class="text-bold mt-4" style="color: #000; font-size: 34px;"><b>2441</b></p>
                    <p class="text-bold mt-4" style="color: #000; font-size: 14px;"><b>Flutter - Batch 2</b></p>
                    </center>
              </div>

            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box1">
              <div class="personal">
                  <center>
                    <img src="{{asset('template')}}/assets/img/team/team-2.jpg" class="card-img-top rounded-circle mt-1 ml-1" alt="gambar" style="width:140px;height:140px;">
                    <p class="text-bold mt-3 mb-0" style="color: #48AA33"><b>Siti Sa'adiyah</b></p>
                    <p class="text-bold mt-1" style="color: #000"><b>Politeknik Negri Padang</b></p>
                    <p class="text-bold mt-4" style="color: #000; font-size: 34px;"><b>2307</b></p>
                    <p class="text-bold mt-4" style="color: #000; font-size: 14px;"><b>Flutter - Batch 1</b></p>
                    </center>
              </div>
            </div>
          </div>
          <div class="lead1">
            <a class="text-bold mt-3 mb-0" style=" font-size: 20px; margin-left: 83%; color: #48AA33;" href="{{url('leaderboard')}}">All Leaderboard</a>
          </div>
        </div>
      </div>
      </div>
    </section>
    <section id="portofolio">
    <div class="container" data-aos="fade-up">
    <div class="content mb-4">
      <h3 style="font-size: 38px; color: #48AA33; font-weight: 600;">Portofolio</h3>
    </div>
  </div>
    </section>
  <section id="portofolio" class="portofolio">
    <div class="container" data-aos="fade-up">
      <div class="portofolio-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper" style="margin-top: 35px">

          <div class="swiper-slide">
            <div class="portofolio-item">
              <img src="{{asset('template')}}/assets/img/cta-bg.jpg" width="340px" height="200px" alt="">
            </div>
          </div><!-- End portofolio item -->

          <div class="swiper-slide">
            <div class="portofolio-item">
              <img src="{{asset('template')}}/assets/img/cta-bg1.jpg" width="340px" height="200px" alt="">
            </div>
          </div><!-- End portofolio item -->

          <div class="swiper-slide">
            <div class="portofolio-item">
              <img src="{{asset('template')}}/assets/img/cta-bg2.jpg" width="340px" height="200px" alt="">
            </div>
          </div><!-- End portofolio item -->

          <div class="swiper-slide">
            <div class="portofolio-item">
              <img src="{{asset('template')}}/assets/img/cta-bg3.jpg" width="340px" height="200px" alt="">
            </div>
          </div><!-- End portofolio item -->

          <div class="swiper-slide">
            <div class="portofolio-item">
              <img src="{{asset('template')}}/assets/img/cta-bg4.jpg" width="340px" height="200px" alt="">
            </div>
          </div><!-- End portofolio item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section>

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonial" class="pricing">
    <div class="container" data-aos="fade-up">

      <div class="content">
        <h3>Testimoni</h3>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="box">
            <div class="personal">
                <center>
                  <p  style="color: #000; font-weight: 500; font-size: 18px;">Untuk mentoring dan
                    <br> silabusnya sudah
                    <br> bagus</p>
                    <br><br>
                  <div class="row">
                    <div class="col-md-6 ">
                        <img src="{{asset('template')}}/assets/img/team/team-5.jpg" class="card-img-top rounded-circle mt-1 ml-1" alt="gambar" style="width:90px;height:90px;">
                    </div>
                    <div class="col-md-6">
                      <p class="fw-bold mb-0 mt-3" style="color: #48AA33; text-align: left; width: 150px;">Hartanto Santoso</p>
                      <p class="mt-0" style="text-align: left;">Batch 2 </p>
                    </div>
                  </div>
                  </center>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box featured">
            <div class="personal">
                <center>
                  <p style="color: #000; font-weight: 500; font-size: 18px;">
                    Materinya terstruktur <br>
                    dari yang dasar <br>
                    banget sampai yang <br>
                    complex</p>
                    <br>
                  <div class="row">
                    <div class="col-md-6 ">
                        <img src="{{asset('template')}}/assets/img/team/team-3.jpg" class="card-img-top rounded-circle mt-1 ml-1" alt="gambar" style="width:90px;height:90px;">
                    </div>
                    <div class="col-md-6">
                      <p class="fw-bold mb-0 mt-3" style="color: #48AA33; text-align: left; width: 150px;">Harun Arrashid </p>
                      <p class="mt-0" style="text-align: left;">Batch 2 </p>
                    </div>
                  </div>
                  </center>
            </div>

          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <div class="personal">
                <center>
                  <p style="color: #000; font-weight: 500; font-size: 18px;">Mentornya sangat baik
                    <br> dan kompeten,
                    <br> menjelaskan materi  <br> dengan luwes dan
                    <br>dapat dimengerti
                  </p>

                  <div class="row">
                    <div class="col-md-6 ">
                        <img src="{{asset('template')}}/assets/img/team/team-1.jpg" class="card-img-top rounded-circle mt-1 ml-1" alt="gambar" style="width:90px;height:90px;">
                    </div>
                    <div class="col-md-6">
                      <p class="fw-bold mb-0 mt-3" style="color: #48AA33; text-align: left; width: 150px;">Yuda Kesuma </p>
                      <p class="text-bold mt-0" style="text-align: left;">Batch 2 </p>
                    </div>
                  </div>
              </center>

            </div>
          </div>
        </div>
        <div>
          <center>
            <button class="btn btn-success btn-circle ml-5 mr-3"></button>
            <button class="btn btn-secondary btn-circle ml-5 mr-3"></button>
            <button class="btn btn-secondary btn-circle ml-5 mr-3"></button>
            <button class="btn btn-secondary btn-circle ml-5 mr-3"></button>
            <button class="btn btn-secondary btn-circle"></button>
          </center>
        </div>
      </div>
    </div>
    </div>
  </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-md-6 footer-contact">
            <a href="index.html" class="logo me-auto"><img src="{{asset('template')}}/assets/img/logo.png" alt="" class="img-fluid"></a>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">

            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Careers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Media Center</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">

            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Help Center</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Contact Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Driver Help Center</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Term & Conditions</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="color: #fff;">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Download</h4>
          <div class="row">
            <div class="col-md-6 ">
            <button type="button" class="btn btn-secondary" name="button"><i class="fab fa-app-store"></i> App Store</button>
            </div>
            <div class="col-md-6 ">
              <button type="button" class="btn btn-secondary" name="button"><i class="fab fa-google-play"></i> Play Store</button>
            </div>
          </div>
            <div class="social-links mt-3">
                <h4>Follow Us</h4>
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <hr style="color: #fff">
    <div class="container footer-bottom clearfix">

      <div class="copyright">
       Copyright &copy; 2018 - 2022 Udacoding
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('template')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('template')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('template')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template')}}/assets/js/main.js"></script>
</body>

</html>
