@if( Session::get("nama_pengajar") )
<script type="text/javascript">
  window.location=("user/index");
</script>
@endif

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kuys</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="/asset1/img/logo.png" rel="icon">
  
  <link href="/asset2/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <link href="/asset2/https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="/asset2/https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/asset2/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="/asset2/css/animate.css">

  <link rel="stylesheet" href="/asset2/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/asset2/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/asset2/css/magnific-popup.css">

  <link rel="stylesheet" href="/asset2/css/aos.css">

  <link rel="stylesheet" href="/asset2/css/ionicons.min.css">

  <link rel="stylesheet" href="/asset2/css/flaticon.css">
  <link rel="stylesheet" href="/asset2/css/icomoon.css">
  <link rel="stylesheet" href="/asset2/css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('user.index') }}"><span></span></a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">           
          <li class="nav-item"><a href="#home" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
          <li class="nav-item"><a href="{{ route('user.register') }}" class="nav-link"><span>Registrasi</span></a></li>
          <li class="nav-item"><a href="{{ route('user.login') }}" class="nav-link"><span>Login</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="home-slider js-fullheight owl-carousel" id="home">
    <div class="slider-item js-fullheight" style="background-image:url(/asset2/images/7.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate mt-5">
            <div class="text">
              <div class="subheading">
                <span>Welcome To</span>
              </div>
              <h1 class="mb-4">KU<span>YS</span></h1>
              <p>Jadilah Pendidik Yang Bermanfaat Untuk Orang Lain</p>
              <!-- <p><a href="/asset2/#" class="btn btn-primary py-2 px-4">Be part of us</a> <a href="/asset2/#" class="btn btn-primary btn-outline-primary py-2 px-4">Read more</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </div>      
  </section>

  <section class="ftco-counter" id="section-counter">
    <div class="container-fluid px-0">
      <div class="row no-gutters">
        <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
          <a href="{{ route('user.dataPengajar') }}">
            <div class="block-18 text-center py-5">
              <div class="text">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-users"></span>
                </div>
                <strong class="number">{{ $pengajar }}</strong>
                <span>Pengajar</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
          <a href="{{ route('user.dataPengajar') }}">
            <div class="block-18 text-center py-5">
              <div class="text">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-user"></span>
                </div>
                <strong class="number">{{ $pengajar }}</strong>
                <span>Pelajar</span>
              </div>
            </div>
            <a href="{{ route('user.dataPengajar') }}">
            </div>
            <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
              <a href="{{ route('user.dataMateri') }}">
                <div class="block-18 text-center py-5">
                  <div class="text">
                    <div class="icon d-flex justify-content-center align-items-center">
                      <span class="icon-book"></span>
                    </div>
                    <strong class="number">{{ $materi }}</strong>
                    <span>Pelajaran</span>
                  </div>
                </div>
              </a>
            </div>          
          </div>
        </div>
      </section>

  <section class="ftco-section ftco-no-pb" id="pastor-section">
    <div class="container">
      <div class="row justify-content-center pb-5">
        <div class="col-md-6 heading-section text-center ftco-animate">
          <span class="subheading">Topic</span>
          <h2 class="mb-4">Materi</h2>
        </div>
      </div>
      <div class="row">
        @foreach($materi2 as $materis)
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="text d-flex align-items-center pt-1 text-center">
              <div class="img align-self-stretch"><img width="85%" height="70%" src="{{url("foto/materi")}}/{{($materis->foto_materi) }}"></div>

            </div>
            <div class="text d-flex align-items-center pt-1 text-center">
              <div>
                <h3 class="mb-1">{{ $materis->nama_materi }}</h3>                
                <br><br>
              </div>
            </div>
          </div>
        </div>  
        @endforeach      
      </div>
    </div>
  </section>
  

  <section class="ftco-section ftco-services-2" id="about-section">
    <div class="container">
      <div class="row justify-content-center pb-5">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <span class="subheading">Kuys</span>
          <h2 class="mb-4">About</h2>
          <p>Ikut berpartisipasi dalam program pemerintah untuk mencerdaskan kehidupan bangsa</p>
          <p>Memenuhi kesejahteraan guru honorer</p>
          <p>Menjadi solusi atas penghasilan guru honorer di Indonesia</p>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Kuys</span>
          <h2 class="mb-4"><span>Contact</span> Us</h2>            
        </div>
      </div>

      <div class="row block-9">
        <div class="col-md-7 order-md-last d-flex">
          <form action="{{ route('pesan.store') }}" method="POST" class="bg-light p-4 p-md-5 contact-form">
            <div class="form-group">
              @csrf
              <input type="text" class="form-control" name="nama" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea cols="30" rows="7" class="form-control" name="pesan" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>

        <div class="col-md-5 d-flex">
          <div class="row d-flex contact-info mb-5">
            <div class="col-md-12 ftco-animate">
              <div class="box p-2 px-3 bg-light d-flex">
                <div class="icon mr-3">
                  <span class="icon-map-signs"></span>
                </div>
                <div>
                  <h3 class="mb-3">Address</h3>
                  <p>jl.Ganesha no.64 Bandung</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="box p-2 px-3 bg-light d-flex">
                <div class="icon mr-3">
                  <span class="icon-phone2"></span>
                </div>
                <div>
                  <h3 class="mb-3">Contact Number</h3>
                  <p><a href="/asset2/tel://1234567920">+ 62 89505300313</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-12 ftco-animate">
              <div class="box p-2 px-3 bg-light d-flex">
                <div class="icon mr-3">
                  <span class="icon-paper-plane"></span>
                </div>
                <div>
                  <h3 class="mb-3">Email Address</h3>
                  <p><a href="/asset2/mailto:info@yoursite.com">office@BimbinganPrivat.com</a></p>
                </div>
              </div>
            </div>              
          </div>
        </div>
      </div>
    </div>
  </section>    

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12 text-center">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2 logo"><span>KU</span>YS</h2>
            <p>Be A Profesional Teacher</p>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script><strong>Kuys</strong>. All Rights Reserved
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/asset2/js/jquery.min.js"></script>
  <script src="/asset2/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/asset2/js/popper.min.js"></script>
  <script src="/asset2/js/bootstrap.min.js"></script>
  <script src="/asset2/js/jquery.easing.1.3.js"></script>
  <script src="/asset2/js/jquery.waypoints.min.js"></script>
  <script src="/asset2/js/jquery.stellar.min.js"></script>
  <script src="/asset2/js/owl.carousel.min.js"></script>
  <script src="/asset2/js/jquery.magnific-popup.min.js"></script>
  <script src="/asset2/js/aos.js"></script>
  <script src="/asset2/js/jquery.animateNumber.min.js"></script>
  <script src="/asset2/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/asset2/js/google-map.js"></script>

  <script src="/asset2/js/main.js"></script>

</body>
</html>