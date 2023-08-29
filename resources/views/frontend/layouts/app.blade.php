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
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('frontend/favicon/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('frontend/favicon/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('frontend/favicon/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/favicon/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('frontend/favicon/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontend/favicon/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('frontend/favicon/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontend/favicon/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/favicon/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('frontend/favicon/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('frontend/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('frontend/favicon/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('frontend/favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('frontend/favicon/manifest.json')}}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{asset('frontend/favicon/ms-icon-144x144.png')}}">
	<meta name="theme-color" content="#ffffff">
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
	    <div class="logo d-flex align-items-center">
            <div class="d-flex align-items-center">
                <a href="{{ route('home') }}">
                    <img src="{{asset('frontend/assets/img/logo/logo.png')}}" alt="">
                </a>
                <a href="https://www.platinumceramics.com/" target="_blank">
                    <img class="ps-3" src="{{asset('frontend/img/platinum_logo.png')}}" style="max-height: 35px !important;" alt="">
                </a>
                <a href="https://www.platinumceramics.com/" target="_blank">
                    <img class="ps-3" src="{{asset('frontend/img/asiatile_logo.png')}}" style="max-height: 35px !important;" alt="">
                </a>
            </div>
        </div>
		<div class="d-flex align-items-center justify-content-between">
			@guest
			<div class="btn-account btn-nav-showhide"><a href="{{ route('login') }}" style="color: #fff !important; font-weight: 900 !important;font-size: 12px !important;" class="btn-get-started">Account</a></div>
			@else
			<div class="navbar-mobile">
				<div class="dropdown-mobile">
				  <div class="btn-get-started" style="color: #fff !important; font-weight: 900 !important;font-size: 12px !important;">Account </div>
				  <div class="dropdown-content">
					<a href="{{ route('profile') }}">Profile</a>
					<a href="{{ route('login') }}" class="nav-logout btn-nav-showhide" onclick="event.preventDefault(); document.getElementById('logout-form-front').submit();">Logout</a>
					<form id="logout-form-front" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
				  </div>
				</div> 
			  </div>
			@endguest
			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" id="hamburger-menu"></i>
		</div>
		<nav id="navbar" class="navbar">
			<ul class="menuu">
				<li class="close-hamburger"><a href="{{ route('home') }}" class="">Home</a></li>
				<li class="close-hamburger"><a href="{{ route('home') }}#Judges">Judges</a></li>
				<li class="close-hamburger"><a href="{{ route('home') }}#Schedules">Schedules</a></li>
				<li class="close-hamburger"><a href="{{ route('home') }}#Prizes">Prizes</a></li>
				<li class="close-hamburger"><a href="https://www.platinumceramics.com/" target="_blank">About Platinum</a></li>
				<li class="close-hamburger"><a href="{{ route('last-edition') }}">PADC 2022</a></li>
				<li class="dropdown">
					<a href="#"><span>Download</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a data-bs-toggle="modal" data-bs-target="#unduh-modal" data-ticket-type="standard-access">TOR</a></li>
						<li><a data-bs-toggle="modal" data-bs-target="#download-modal" data-ticket-type="standard-access">Catalog</a></li>
					
					</ul>
				</li>
				<!-- <li class="dropdown">
					<a href="#"><span>Info</span><i class="bi bi-chevron-down dropdown-indicator"></i></a>
					<ul>
						<li><a href="{{ route('home') }}#About">About</a></li>
						<li><a href="{{ route('home') }}#About">FAQ</a></li>
						<li><a href="{{ route('home') }}#Contact">Contact</a></li>
					</ul>
				</li> -->
			    <li class="dropdown navbar-mob">
                    @guest
                    <div class="btn-account"><a href="{{ route('login') }}" style="color: #fff !important; font-weight: 900 !important;" class="btn-get-started">Account</a></div>
                    @else
                    <div class="btn-account"><a href="#" style="color: #fff !important; font-weight: 900 !important;" class="btn-get-started">Account</a></div>
                    <ul>
                        <li><a href="{{ route('profile') }}" class="close-hamburger" >Profile</a></li>
                        <li><a href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form-front').submit();">Logout</a></li>
                        <form id="logout-form-front" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                    </ul>
                    @endguest
                </li>
			</ul>
			
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
				<button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-popup">OK</button>
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
			<h3 class="text-center"><i class="bi bi-download" style="margin-left:0 !important"></i></h3>
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
<div id="download-linimasa" class="modal fade">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title"></h4>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body justify-content-center mt-3">
			<h3 id="pesan22" class="sent-message text-center" style="display:none;"></h3>
			<p id="pesan23" class="sent-message text-center" style="display:none;"></p>
			<p id="pesan33" class="sent-message text-center" style="display:none;"></p>
			
			<div id="ok3" class="text-center mt-3" style="display:none;">
				<button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn-popup">OK</button>
			</div>
			
			<form method="POST"  id="upload_form3" enctype="multipart/form-data" role="form" >
			@csrf
			<p class="text-center">Please enter your email address to receive download link for Linimasa Platinum Ceramics Indonesia</p>
			<h3 class="text-center"><i class="bi bi-download" style="margin-left:0 !important"></i></h3>
			<div class="form-group ">
				<input type="email" class="form-control input" name="email" placeholder="Email Address" required>
			</div>
			
			<div class="text-center ">
				<button type="submit" name="upload3" id="upload3" class="btn-popup">Download</button>
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
                    <p style="color: white;"></p>
                </div>
               
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 footer-links">
                    <ul>
						<li><i class="bi bi-facebook"></i><a class="ps-2" href="https://web.facebook.com/platinumceramicsindustry" target="_blank"> platinumceramicsindustry</a></li>
						<li><i class="bi bi-twitter"></i><a class="ps-2" href="https://twitter.com/platinumceramic?lang=en" target="_blank"> PlatinumCeramic</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 footer-links">
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

$('#upload_form').on('submit', function(event){
event.preventDefault();
$("#upload").html(
		'<i class="fa fa-circle-notch faa-spin animated " style="margin-left:0px !important"></i> Sending..'
		);
$.ajax({
  url:"{{ route('unduh.tor') }}",
  method:"POST",
  data:new FormData(this),
  dataType:'JSON',
  contentType: false,
  cache: false,
  processData: false,
  success:function(data)
  {
  $('#message').css('display', 'block');
  $('#message').html(data.message);
  $('#message2').css('display', 'block');
  $('#message2').html(data.message2);
  $('#ok').css('display', 'block');
  $('#upload_form').css('display','none')
  }
})
});

//ajax for download catalog
 $('#upload_form2').on('submit', function(event){
event.preventDefault();
$("#upload2").html(
		'<i class="fa fa-circle-notch faa-spin animated " style="margin-left:0px !important"></i> Sending..'
		);
$.ajax({
  url:"{{ route('unduh.catalog') }}",
  method:"POST",
  data:new FormData(this),
  dataType:'JSON',
  contentType: false,
  cache: false,
  processData: false,
  success:function(data)
  {
  $('#pesan').css('display', 'block');
  $('#pesan').html(data.message);
  $('#pesan2').css('display', 'block');
  $('#pesan2').html(data.message2);
  $('#ok2').css('display', 'block');
  $('#upload_form2').css('display','none')
  }
})
});

$('#upload_form3').on('submit', function(event){
event.preventDefault();
$("#upload3").html(
		'<i class="fa fa-circle-notch faa-spin animated " style="margin-left:0px !important"></i> Sending..'
		);
$.ajax({
  url:"",
  method:"POST",
  data:new FormData(this),
  dataType:'JSON',
  contentType: false,
  cache: false,
  processData: false,
  success:function(data)
  {
  $('#pesan22').css('display', 'block');
  $('#pesan22').html(data.message);
  $('#pesan23').css('display', 'block');
  $('#pesan23').html(data.message2);
  $('#ok3').css('display', 'block');
  $('#upload_form3').css('display','none')
  }
})
});

});
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
<script>
    $(document).ready(function(){
        $( '.close-hamburger' ).on("click", function(){
        $('#hamburger-menu').click();
        });
    })
</script>
@stack('scripts')
</body>
</html>


