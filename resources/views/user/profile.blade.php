<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplikasi Pengajar</title>
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


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('user.index') }}"><span>Aplikasi</span> Pengajar</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">                       
          <li class="nav-item"><a href="{{ route('user.indexId') }}" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="{{ route('admin.logout2') }}" class="nav-link" onclick="return confirm('Apakah Anda Yakin ?')"><span>Logout</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Aplikasi Pengajar</span>
          <h2 class="mb-4"><img class="img-circle" width="250" height="250" src="{{url("pribadi/pengajar")}}/{{($pengajars->foto_pribadi) }}" alt="" /></h2>            
        </div>
      </div>

      <div class="row block-9">
        <div class="col-md-12 order-md-last d-flex">
          <form action="{{ route('user.update3', $pengajars) }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 p-md-5 contact-form">            
           @csrf 
           @method('PUT')
           <div class="form-group">                
            <label class="col-lg-12 control-label">Nama Lengkap</label>
            <input type="text" class="form-control" value="{{ $pengajars->nama_lengkap }}" disabled="" placeholder="Nama Lengkap" name="nama_lengkap">
          </div>
          <div class="form-group">
            <label class="col-lg-12 control-label">Nama Panggilan</label>
            <input type="text" class="form-control" value="{{ $pengajars->nama_panggilan }}" disabled="" placeholder="Nama Panggilan" name="nama_panggilan">
          </div>
          <div class="form-group">
            <label class="col-lg-12 control-label">Email</label>
            <input type="email" class="form-control" value="{{ $pengajars->email_pengajar }}" disabled="" placeholder="Email" name="email_pengajar">
          </div>
          <div class="form-group">
            <label class="col-lg-12 control-label">No. Hp</label>
            <input type="number" class="form-control" value="{{ $pengajars->no_hp }}" disabled="" placeholder="No. Telepon" name="no_hp">
          </div>
          <div class="form-group">
            <label class="col-lg-12 control-label">Kode Pos</label>
            <input type="number" class="form-control" value="{{ $pengajars->kode_pos }}" disabled="" placeholder="Kode Pos" name="kode_pos">
          </div>
          <div class="form-group">
            <label class="col-lg-12 control-label">Pendidikan Terakhir</label>
            <input type="text" class="form-control" value="{{ $pengajars->pendidikan_terakhir }}" placeholder="Pendidikan Terakhir" name="pendidikan_terakhir">
          </div>
          <div class="form-group">
            <label class="col-lg-12 control-label">Alamat Lengkap</label>
            <textarea cols="30" rows="7" class="form-control" placeholder="Alamat Lengkap" name="alamat_lengkap">{{ $pengajars->alamat_lengkap }}</textarea>
          </div>
          <div class="form-group">
            <label class="col-lg-12 control-label">Aktivitas</label>
            <textarea cols="30" rows="7" class="form-control" placeholder="Aktivitas" name="aktivitas">{{ $pengajars->aktivitas }}</textarea>
          </div>
          <div class="form-group">
            <label class="col-lg-12 control-label">Ceritakan Diri Anda</label>
            <textarea cols="30" rows="7" class="form-control" placeholder="Ceritakan Diri Anda" name="ceritakan_diri">{{ $pengajars->ceritakan_diri }}</textarea>
          </div>

          <div class="form-group">
            <label class="col-lg-5 control-label"></label>
            <div class="col-lg-12">
              <center><button type="submit" class="btn-sm btn-info">Save</button></center>
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
          <h2 class="ftco-heading-2 logo"><span>Aplikasi</span> Pengajar</h2>
          <p>Be A Profesional Teacher</p>              
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script><strong> Aplikasi Pengajar</strong>. All Rights Reserved
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

</body>
</html>
