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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('user.index') }}"><span>Ku</span>ys</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">                       
          <li class="nav-item"><a href="{{ route('user.index') }}" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="{{ route('user.login') }}" class="nav-link"><span>Login</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">KUYS</span>
          <h2 class="mb-4">Registrasi Pelajar</h2>            
        </div>
      </div>

      <div class="row block-9">
        <div class="col-md-12 order-md-last d-flex">
          <form action="{{ route('user.store') }}" class="bg-light p-4 p-md-5 contact-form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="col-lg-12 control-label">Nama Lengkap <span class="form-required">*</span></label>
              <input required="" type="text" class="form-control" name="nama_lengkap">
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Alamat Lengkap <span class="form-required">*</span></label>
              <textarea cols="30" rows="7" class="form-control" name="alamat_lengkap" required=""></textarea>
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Tempat Lahir <span class="form-required">*</span></label>                
              <input required="" type="text" class="form-control" name="tempat_lahir">
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Tanggal Lahir <span class="form-required">*</span></label>                
              <input required="" type="date" class="form-control" name="tanggal_lahir">
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">Email <span class="form-required">*</span></label>
              <input required="" type="email" class="form-control" name="email_pengajar">
            </div>
            <div class="form-group">
              <label class="col-lg-12 control-label">No. Telpon <span class="form-required">*</span></label>
              <input required="" type="number" class="form-control" name="no_hp">
            </div>
            
            <div class="form-group">
              <label class="col-lg-12 control-label">Aktivitas <span class="form-required">*</span></label>
              <textarea cols="30" rows="7" class="form-control" name="aktivitas" required=""></textarea>
            </div>
            <div class="form-group"> 
              <label class="col-lg-12 control-label">Ceritakan Diri Anda <span class="form-required">*</span></label>             
              <textarea cols="30" rows="7" class="form-control" name="ceritakan_diri" required=""></textarea>
            </div>

            <div class="form-group">
              <label class="col-lg-12 control-label">Foto Pribadi <span class="form-required">*</span></label>              
              <input required="" type="file" class="form-control" name="foto_pribadi">
            </div>

            <div class="form-group"> 
              <div class="icon d-flex justify-content-center align-items-center">               
                <input type="submit" value="Send" class="btn btn-primary py-2 px-4 text-center">
              </div>
            </div>

          </form>
          
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

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script><strong>Kuys</strong>. All Rights Reserved
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

    <script>
      $("#id_materi").select2();
    </script>
    
  </body>
  </html>
  