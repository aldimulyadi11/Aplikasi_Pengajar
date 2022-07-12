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
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('indexUser') }}"><span></span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">	          
            <li class="nav-item"><a href="#home" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Tentang</span></a></li>
            <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
            <li class="nav-item"><a href="{{ route('user.login') }}" class="nav-link"><span>Login</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section class="home-slider js-fullheight owl-carousel" id="home">
      <div class="slider-item js-fullheight" style="background-image:url(foto/admin/1577234869_PHP-logo.svg);">
      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
	          <div class="col-md-8 text-center ftco-animate mt-5">
	          	<div class="text">
	          		<div class="subheading">
	          			<span>Welcome To</span>
	          		</div>
		            <h1 class="mb-4">Aplikasi <span>Pengajar</span></h1>
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
          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-users"></span>
              	</div>
                <strong class="number" data-number="2">0</strong>
                <span>Pengajar</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center py-5">
              <div class="text">
              	<div class="icon d-flex justify-content-center align-items-center">
              		<span class="icon-user"></span>
              	</div>
                <strong class="number" data-number="5">0</strong>
                <span>Materi</span>
              </div>
            </div>
          </div>          
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-services-2" id="about-section">
      <div class="container">
        <div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Tentang</span>
            <h2 class="mb-4">Aplikasi Pengajar</h2>
            <p>Aplikasi ini dibuat dengan tujuan untuk membuka lapangan pekerjaan bagi para Pengajar</p>
          </div>
        </div>
    </section>


    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Aplikasi Pengajar</h2>            
          </div>
        </div>

        <div class="row block-9">
          <div class="col-md-7 order-md-last d-flex">
            <form action="#" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
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
				            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
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
				            <p><a href="/asset2/tel://1234567920">+ 1235 2355 98</a></p>
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
				            <p><a href="/asset2/mailto:info@yoursite.com">info@yoursite.com</a></p>
			            </div>
			          </div>
		          </div>
		          <div class="col-md-12 ftco-animate">
		          	<div class="box p-2 px-3 bg-light d-flex">
		          		<div class="icon mr-3">
		          			<span class="icon-globe"></span>
		          		</div>
		          		<div>
			          		<h3 class="mb-3">Website</h3>
				            <p><a href="/asset2/#">yoursite.com</a></p>
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
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><span>Christian</span> Church</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="/asset2/#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="/asset2/#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="/asset2/#"><span class="icon-instagram"></span></a></li>
              </ul>
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