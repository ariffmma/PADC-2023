<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PADC Judges - Wendy Djuhara</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Wendy Djuhara is one of our judges for platinum architectural design Competition">
    <meta name="keywords" content="judges competition, architecture competition, design competition, interior competition, platinum competition, padc, architectural competition">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:description" content="Wendy Djuhara is one of our judges for platinum architectural design Competition" />
    <meta property="og:image" itemprop="image" content="{{asset('frontend/img/speakers/wendy-djuhara.jpg')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:image:alt" content=" PADC Judges- Wendy Djuhara">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="256">
    <meta property="og:image:height" content="256">
    <link rel="canonical" href="https://padc-platinumceramics.com/wendy-djuhara" />	
  
    <!-- Favicons -->
    <link href="{{asset('frontend/img/favicon.png')}}" rel="icon">
    <link href="{{asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="{{asset('frontend/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/css/style.css?ver=2.7')}}" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js" integrity="sha512-lteuRD+aUENrZPTXWFRPTBcDDxIGWe5uu0apPEn+3ZKYDwDaEErIK9rvR0QzUGmUQ55KFE2RqGTVoZsKctGMVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  </head>

<body>

 <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center header-inner">
    <div class="container d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="{{ route('home') }}" class="scrollto" title="logo PADC"><img src="{{asset('frontend/img/logo.png')}}" alt="logo platinum architectural design competition" title=""></a>
      </div>

       <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('home')}}#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="{{route('home')}}#hotels">Winners</a></li>
          <li><a class="nav-link scrollto" href="{{route('home')}}#speakers">Judges</a></li>
          <!-- <li><a class="nav-link scrollto" href="#criteria">Kriteria</a></li> -->
          <li><a class="nav-link scrollto" href="{{route('home')}}#schedule">Schedules</a></li>
          <li><a class="nav-link scrollto" href="{{route('home')}}#buy-tickets">Prizes</a></li>
          <li><a class="nav-link scrollto" href="https://www.platinumceramics.com/" target="_blank">About Platinum</a></li>
           <li class="dropdown">
            <a onclick="dropdown2()"><span>Download</span> <i class="bi bi-caret-down-fill"></i></a>
            <div id="dropdownmenu2" class="dropdown-menu">
              <a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#unduh-modal" data-ticket-type="standard-access"> TOR</a>
              <a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#download-modal" data-ticket-type="standard-access"> Catalog</a>
            </div>
          </li>
          <li class="dropdown">
            <a  onclick="dropdown()"><span>Info</span> <i class="bi bi-caret-down-fill"></i></a>
            <div id="dropdownmenu" class="dropdown-menu">
              <a class="nav-link scrollto" href="{{route('home')}}#faq">FAQ</a>
              <a class="nav-link scrollto" href="{{route('home')}}#contact">Contact</a>
            </div>
          </li>
         
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          <!-- <li class="buy-tickets dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
           
            
           
          </ul>
        </li> -->
        @guest
               @else
               <li><a class="nav-link scrollto" href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form-front').submit();">logout</a></li>
               <form id="logout-form-front" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
               @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
            @guest
            <a class="buy-tickets" href="{{ route('login') }}">Account</a>
            @else
            <a class="buy-tickets" href="{{ route('profile') }}">Profile</a>
            @endguest
    </div>
  </header><!-- End Header -->

  

 <!-- Modal Order Form -->
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
              
                <div id="ok2" class="text-center mt-3" style="display:none;">
                  <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn unduh-link">OK</button>
                </div>
              
              <form method="POST"  id="upload_form" enctype="multipart/form-data" role="form" >
              @csrf
              <p class="text-center">Please enter your email address to receive download link</p>
              <h3 class="text-center"><i class="bi bi-download"></i></h3>
                <div class="form-group ">
                  <input type="email" class="form-control input" name="email" placeholder="Email Address" required>
                </div>
               
                <div class="text-center ">
                  <button type="submit" name="upload" id="upload" class="btn unduh-link">Download</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
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
              
                <div id="ok" class="text-center mt-3" style="display:none;">
                  <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn unduh-link">OK</button>
                </div>
              
              <form method="POST"  id="upload_form2" enctype="multipart/form-data" role="form" >
              @csrf
              <p class="text-center">Please enter your email address to receive download  link for Platinum Catalog</p>
              <h3 class="text-center"><i class="bi bi-download"></i></h3>
                <div class="form-group ">
                  <input type="email" class="form-control input" name="email" placeholder="Email Address" required>
                </div>
               
                <div class="text-center ">
                  <button type="submit" name="upload2" id="upload2" class="btn unduh-link">Download</button>
                </div>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
 
<main id="main" class="main-page">
<section id="speakers-details">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <img src="{{asset('frontend/img/speakers/wendy-djuhara.jpg')}}" alt="wendy djuhara juri PADC" class="img-fluid">
              </div>

              <div class="col-md-12">
                <div class="details pt-2">
                     <h2>Wendy djuhara</h2>
              <div class="social">
                <a href="https://m.facebook.com/wendy.djuhara"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/wendydjuhara/"><i class="bi bi-instagram"></i></a>
                
              </div>
              <p>An architect, mother, and lecturer who co-founded djuhara+djuhara since 2004, her love of architecture considered a male profession, giving her more power in dividing her role in family and work. For her, being a female architect should have more resilience, because a profession that needs this totality should share it as a mother as well.
Her enthusiasm in her profession, bringing her profession as part of her. This is based on her thoughts on the profession of architect and a woman, whose profession is usually always sliced as a profession owned by men.</p>

            

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  
    <section id="speakers-details">
      <div class="container">
         
        <div class="row justify-content-center py-1">
          <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                <div class="details pt-2">
                     <h3>Shining Stars Kindergarten Bintaro</h3>
            
            

                </div>
              </div>
          
              <div class="col-md-12">
                <img src="{{asset('frontend/img/projects/shining_stars_kindergarten_17.jpg')}}" alt="shining starts kindergarten" class="img-fluid">
                <p style="font-size:10px;">Photo by Tony Djohan</p>
               
                 <img src="{{asset('frontend/img/projects/Shining Stars Bintaro (39) - Photo by Tony Djohan.jpg')}}" alt="juri 1" class="img-fluid">
                <p style="font-size:10px;">Photo by Tony Djohan</p>
              </div>

              
            </div>
          </div>
          </div>
          <div class="row justify-content-center py-1">
          <div class="col-md-6">
            <div class="row">
                 <div class="col-md-12">
                <div class="details pt-2">
                     <h3>Wisnu & Ndari House</h3>
            
            

                </div>
              </div>
             
              <div class="col-md-12">
                <img src="{{asset('frontend/img/projects/wisnu_house_1.jpg')}}" alt="wisnu houae" class="img-fluid">
              </div>

             
            </div>
          </div>
          </div>
           <div class="row justify-content-center py-1">
          <div class="col-md-6">
            <div class="row">
                 <div class="col-md-12">
                <div class="details pt-2">
                     <h3>Widjanarko House </h3>
            
            

                </div>
              </div>
             
              <div class="col-md-12">
                <img src="{{asset('frontend/img/projects/Widjanarko House 1 - photo by Wendy Djuhara.JPG')}}" alt="widjanarko house photo by wendy djuhara" class="img-fluid">
                 <p style="font-size:10px;">photo by Wendy Djuhara</p>
                 <img src="{{asset('frontend/img/projects/WidjanarkoHouse-0037-photo by Home & Decor.jpg')}}" alt="widjanarko house photo by home & decor" class="img-fluid">
                 <p style="font-size:10px;">photo by Home & Decor</p>
              </div>

             
            </div>
          </div>
          </div>
        
      </div>

  </main><!-- End #main -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{asset('frontend/img/logo.png')}}" alt="logo platinum architectural design competition">
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <ul>
              <li><a class="scrollto" href="{{route('home')}}">Home</a></li>
              <li><a class="scrollto" href="{{route('home')}}#speakers">Judges</a></li>
              <li><a class="scrollto" href="{{route('home')}}#schedule">Schedules</a></li>
              <li><a class="scrollto" href="{{route('home')}}#buy-tickets">Prizes</a></li>
              <li><a class="scrollto" href="https://www.platinumceramics.com/" target="_blank">About Platinum</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <ul>
              
              <li><a class="scrollto" href="{{route('home')}}#faq">FAQ</a></li>
              <li><a class="scrollto" href="{{route('home')}}#contact">Contact</a></li>
              @guest
              <li><a class="scrollto" href="{{route('login')}}">Account</a></li>
              @else
              <li><a class="scrollto" href="{{route('profile')}}">Profile</a></li>
              @endguest
              <li><a class="scrollto" data-bs-toggle="modal" data-bs-target="#unduh-modal" data-ticket-type="standard-access">Download TOR</a></li>
              <li><a class="scrollto" href="https://www.platinumceramics.com/download/" target="_blank">Download Catalog</a></li>
             
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <p>
              Follow Us :
            </p>

            <div class="social-links">
              <div class="social-media"><a href="https://www.facebook.com/platinumceramicsindustry" target="_blank" class="facebook"><i class="bi bi-facebook"></i> platinumceramicsindustry</a></div>
              <div class="social-media"><a href="https://twitter.com/PlatinumCeramic" target="_blank" class="twitter"><i class="bi bi-twitter"></i> PlatinumCeramic</a></div>
              <div class="social-media"><a href="https://www.instagram.com/platinumcompetition/" target="_blank" class="instagram"><i class="bi bi-instagram"></i> platinumcompetition</a></div>
              <div class="social-media"><a href="https://www.instagram.com/platinum.ceramics/" target="_blank" class="instagram"><i class="bi bi-instagram"></i> platinum.ceramics</a></div>
              <div class="social-media"><a href="https://www.youtube.com/channel/UCkXWJfBrOPwN6vdFMoh28YQ" target="_blank" class="instagram"><i class="bi bi-youtube"></i> Platinum Ceramics</a></div>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
         Copyright &copy; 2022. Platinum Architectural Design Competition
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <!-- Slick JS -->    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/js/main.js')}}"></script>
  <script>

     function dropdown() {
      $('#dropdownmenu').toggle("show");
    }
     function dropdown2() {
      $('#dropdownmenu2').toggle("show");
    }

    $(document).ready(function(){

    $('#upload_form').on('submit', function(event){
    event.preventDefault();
    $("#upload").html(
			'<i class="fa fa-circle-notch faa-spin animated "></i> Sending..'
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
			'<i class="fa fa-circle-notch faa-spin animated "></i> Sending..'
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
</body>


</html>