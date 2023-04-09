<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Leaderboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template')}}/assets/img/icon.png" rel="icon">
  <link href="{{asset('template')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/efe3f6fdbc.js" crossorigin="anonymous"></script>
  <link href="{{asset('template')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('template')}}/assets/css/style.css" rel="stylesheet">
</head>
  <body>
    <header id="header">
      <div class="container d-flex align-items-center">
        <a href="index.html" class="logo me-auto"><img src="{{asset('template')}}/assets/img/logo.png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#why-us">About</a></li>
            <li><a class="nav-link scrollto" href="#categories">Categories</a></li>
            <li><a class="nav-link scrollto" href="#portfolio">Leaderboard</a></li>
            <li><a class="nav-link scrollto" href="#team">Portofolio</a></li>
              <li><a class="nav-link scrollto" href="#team">Testimonial</a></li>
              <li><a class="getstarted scrollto" href="#">Join US</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header>
    <main id="main">
      <section class="mt-5 mb-0">
        <div class="container">
          <a href="{{url('/')}}" style="color: #48AA33">  <h1>< Leaderboard Mentoring Program</h1></a>
        </div>
      </section>
      <section class="mt-2">
        <div class="container">
          <div class="card">
            <div class="row">
              <div class="col-md-8">

              </div>
              <div class="col-md-2 mt-2" style="margin-left: 950px;">
                <select style="float: right !important;" class="btn btn" name="">
                  <option value="">Batch</option>
                </select>
                <div class="" style="margin-left: 320px;">
                  <select style="float: right !important;" class="btn btn" name="">
                    <option value="">Sort By</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="row mt-2">
              <div style="margin-left: 20px;" class="col-md-2">
                  Program :
                  <select width="30px;" class="btn btn" name="">
                    <option value="">Flutter</option>
                  </select>
              </div>
              <div style="margin-left: 837px;" class="col-md-2 mt-1 float-right">
              <form class="form-inline">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                  </div>
                  <input type="text" class="form-control" style="height: 30px;" placeholder="Search....">
                </div>
              </form>

              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Rank</th>
                    <th>Nama Peserta</th>
                    <th style="width: 450px;">Sekolah</th>
                    <th>Program</th>
                    <th>Angkatan</th>
                    <th>Skor</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  @foreach($pengunjung as $value)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->nama}}</td>
                    <td>{{$value->sekolah}}</td>
                    <td>{{$value->program}}</td>
                    <td>Batch{{$value->angkatan}}</td>
                    <td><b>{{$value->skor}}</b></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="card-footer " >
              <span>Showing 1 to 10 of 216 entries</span>
              <div class="float-right"  >
                <ul class="pagination pagination-sm m-0" >
                  <li class="page-item"><a style="color: #8F8F8F;" class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a style="background-color: #48AA33; color: #fff;" class="page-link" href="#">1</a></li>
                  <li class="page-item"><a style="color: #000;" class="page-link" href="#">2</a></li>
                  <li class="page-item"><a style="color: #000;" class="page-link" href="#">3</a></li>
                  <li class="page-item"><a style="color: #000;" class="page-link" href="#">4</a></li>
                  <li class="page-item"><a style="color: #000;" class="page-link" href="#">5</a></li>
                  <li class="page-item"><a style="color: #000;" class="page-link" href="#">...</a></li>
                  <li class="page-item"><a style="color: #000;" class="page-link" href="#">Next</a></li>
                </ul>
              </div>

              </div>
          </div>
        </div>
      </section>
    </main>
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
              <div class="col-md-6 mr-0">
              <button type="button" class="btn btn-secondary" name="button"><i class="fab fa-app-store"></i> App Store</button>
              </div>
              <div class="col-md-6 ml-0">
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
    </footer>

  </body>
</html>
