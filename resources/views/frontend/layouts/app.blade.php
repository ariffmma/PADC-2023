<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>@yield('title')</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:image" itemprop="image" content="@yield('image')" />
	<meta property="og:type" content="website" />
	<meta property="og:image:alt" content="@yield('title')">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="256">
	<meta property="og:image:height" content="256">
	<link rel="canonical" href="@yield('canonical')" />	
	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
	<!-- Template Main CSS File -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
	<link href="{{asset('frontend/assets/css/main.css?ver=')}}{{ date('YmdHis')}}" rel="stylesheet">
</head>
<body class="page-index">
<header id="header" class="header d-flex align-items-center fixed-top">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
		<a href="{{ route('home') }}" class="logo d-flex align-items-center">
			<div class="d-flex align-items-center">
				<img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="">
			</div>
		</a>
		<div class="d-flex align-items-center justify-content-between">
			@guest 
			@else
			<a href="{{ route('login') }}" class="nav-logout btn-nav-showhide" onclick="event.preventDefault(); document.getElementById('logout-form-front').submit();">Logout</a>
			<form id="logout-form-front" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
			@endguest
			@guest
			<div class="btn-account btn-nav-showhide"><a href="{{ route('login') }}" style="color: #fff !important; font-weight: 900 !important;" class="btn-get-started">Account</a></div>
			@else
			<div class="btn-account btn-nav-showhide"><a href="{{ route('profile') }}" style="color: #fff !important font-weight: 900 !important;" class="btn-get-started">Profile</a></div>
			@endguest
			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
		</div>
		<nav id="navbar" class="navbar">
			<ul>
				<li><a href="{{ route('home') }}" class="active">Home</a></li>
				<li><a href="{{ route('home') }}#Judges">Judges</a></li>
				<li><a href="{{ route('home') }}#Schedules">Schedules</a></li>
				<li><a href="{{ route('home') }}#Prizes">Prizes</a></li>
				<li><a href="https://www.platinumceramics.com/" target="_blank">About Platinum</a></li>
				<li><a href="{{ route('last-edition') }}">PADC 2022</a></li>
				<li><a href="{{ route('gallery') }}">Gallery</a></li>
				<li class="dropdown">
					<a href="#"><span>Download</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a data-bs-toggle="modal" data-bs-target="#unduh-modal" data-ticket-type="standard-access">TOR</a></li>
						<li><a data-bs-toggle="modal" data-bs-target="#download-modal" data-ticket-type="standard-access">Catalog</a></li>
					</ul>
				</li>
				@guest 
				@else
				<li><a href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form-front').submit();">Logout</a></li>
				<form id="logout-form-front" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
				@endguest
			</ul>
				@guest
				<div class="btn-account"><a href="{{ route('login') }}" style="color: #fff !important; font-weight: 900 !important;" class="btn-get-started">Account</a></div>
				@else
				<div class="btn-account"><a href="{{ route('profile') }}" style="color: #fff !important; font-weight: 900 !important;" class="btn-get-started">Profile</a></div>
				@endguest
		</nav>
	</div>
</header>
@yield('content')

<div id="unduh-modal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title"></h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body justify-content-center mt-3">
			<h3 id="message2" class="sent-message text-center" style="display:none;"></h3>
			<p id="message" class="sent-message text-center" style="display:none;"></p>
			<p id="message3" class="sent-message text-center" style="display:none;"></p>
			
			<div id="ok" class="text-center mt-3" style="display:none;">
				<button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn unduh-link">OK</button>
			</div>
			
			<form method="POST"  id="upload_form" enctype="multipart/form-data" role="form" >
			@csrf
			<p class="text-center">Please enter your email address to receive download link For PADC TOR</p>
			<h3 class="text-center"><i class="bi bi-download" style="margin-left:0 !important"></i></h3>
			<div class="form-group ">
				<input type="email" class="form-control input" name="email" placeholder="Email Address" required>
			</div>
			
			<div class="text-center ">
				<button type="submit" name="upload" id="upload" class="btn-popup">Download</button>
			</div>
			</form>
		</div>
		</div><!-- /.modal-content -->
	</div>
</div>
<div id="download-modal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title"></h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body justify-content-center mt-3">
			<h3 id="pesan2" class="sent-message text-center" style="display:none;"></h3>
			<p id="pesan" class="sent-message text-center" style="display:none;"></p>
			<p id="pesan3" class="sent-message text-center" style="display:none;"></p>
			
			<div id="ok2" class="text-center mt-3" style="display:none;">
				<button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-popup">OK</button>
			</div>
			
			<form method="POST"  id="upload_form2" enctype="multipart/form-data" role="form" >
			@csrf
			<p class="text-center">Please enter your email address to receive download  link for Platinum Catalog</p>
			<h3 class="text-center"><i class="bi bi-download"  style="margin-left:0 !important"></i></h3>
			<div class="form-group ">
				<input type="email" class="form-control input" name="email" placeholder="Email Address" required>
			</div>
			
			<div class="text-center ">
				<button type="submit" name="upload2" id="upload2" class="btn-popup">Download</button>
			</div>
			</form>
		</div>
		</div><!-- /.modal-content -->
	</div>
</div>
<footer id="footer" class="footer">
	<div class="footer-content">
		<div class="container">
			<div class="row gy-4">
				<div class="col-xl-6 col-lg-6 col-md-4 footer-info">
					<a href="{{ route('home') }}" class="logo d-flex align-items-center">
						<div class="d-flex align-items-center"><img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="">
						</div>
					</a>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 footer-links">
					<ul>
						<li><i class="bi bi-facebook"></i><a class="ps-2" href="https://web.facebook.com/platinumceramicsindustry" target="_blank"> platinumceramicsindustry</a></li>
						<li><i class="bi bi-twitter"></i><a class="ps-2" href="https://twitter.com/platinumceramic?lang=en" target="_blank"> PlatinumCeramic</a></li>
					</ul>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 footer-links">
					<ul>
						<li><i class="bi bi-instagram"></i><a class="ps-2" href="https://www.instagram.com/platinum.ceramics/" target="_blank"> platinum.ceramics</a></li>
						<li><i class="bi bi-youtube"></i><a class="ps-2" href="https://www.youtube.com/@platinumceramics9826" target="_blank"> Platinum Ceramics</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<a href="#" class="scroll-top d-flex align-items-center justify-content-center">
	<i class="bi bi-arrow-up-short"></i>
</a>
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
<!-- Template Main JS File -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script>
	var coll = document.getElementsByClassName("collapsible");
	var i;
	for (i = 0; i < coll.length; i++) {
 	coll[i].addEventListener("click", function() {
		for(item of coll){
		item.classList.remove("active");
		item.nextElementSibling.style.display = "none";
		}
		this.classList.toggle("active");
		var content = this.nextElementSibling;
		if (content.style.display === "block") {
		content.style.display = "none";
		} else {
		content.style.display = "block";
		}
  	});
	}
</script>
<script>
$(document).ready(function(){
$('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2500,
            arrows: false,
            variableWidth: false,
            slidesToShow:1,
            infinite:true,
            });
})
</script>
@stack('script')
</body>
</html>


