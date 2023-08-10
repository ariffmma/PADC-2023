@extends('frontend.layouts.app')
@section('title', 'Platinum Architectural Design Competition')
@section('description', 'Platinum Architectural Design Competition is an event for the next Indonesian architects and designers that aims to develop and train ideas before entering the professional world.')
@section('keywords', 'platinum, Architectural, Design, Competition, student competition, design competition, design contest, architecture competition, architecture contest')
@section('canonical', 'https://padc-platinumceramics.com')
@section('url','https://padc-platinumceramics.com')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
     <div class="bg slider">

      <img src="{{asset('frontend/img/padc-background-1.jpg')}}" alt='platinum architectural design competition'>
      <img src="{{asset('frontend/img/padc-background-2.jpg')}}" alt='platinum architectural design competition'>
      <img src="{{asset('frontend/img/padc-background-3.jpg')}}" alt='platinum architectural design competition'>
    </div>
    
    <div class="hero-container virified" data-aos="zoom-in" data-aos-delay="100">
      
       
      <h1 class="mb-2 pb-0">Platinum <span>Architectural</span><br><span> Design</span> Competition</h1>
      <p class="mb-4 pb-0 slogan" >#raisethefuture</p>
      @php
      $current = strtotime(date("Y-m-d h:i:s"));
      $registration = strtotime("2022-08-01 23:59:00");
      $launching    = strtotime("2022-08-20 13:00:00");
      $maxregist   = strtotime("2022-09-30 23:59:00");
      $submitting   = strtotime("2022-10-13 23:59:00");
      $limabesar    = strtotime("2022-10-25 16:00:00");
      $finish    = strtotime("2022-10-30 19:00:00");
      $a = $registration - $current;
      $b = $launching - $current;
      $c = $maxregist - $current;
      $d = $submitting - $current;
      $e = $limabesar - $current;
      $f = $finish - $current;
      $regist       = floor($a/(60*60*24));
      $launch       = floor($b/(60*60*24));
      $maxregister  = floor($c/(60*60*24));
      $submit       = floor($d/(60*60*24));
      $lima         = floor($e/(60*60*24));
      $champion     = floor($f/(60*60*24));
      if($regist > 0)
      {
          echo "<div class='launch mb-1 pb-0'>countdown to registration!</div>
          <input type='hidden' id='date_val' value='2022-08-01 23:59:00'>";
      }
      elseif($launch > 0)
      {
          echo "<div class='launch mb-1 pb-0'>countdown to Virtual launching!</div>
          <input type='hidden' id='date_val' value='2022-08-20 13:00:00'>";
      }elseif($maxregister > 0)
      {
          echo "<div class='launch mb-1 pb-0'>countdown to last user registration!</div>
          <input type='hidden' id='date_val' value='2022-09-30 23:59:00'>";
      }elseif($submit > 0)
      {
          echo "<div class='launch mb-1 pb-0'>countdown to last submission!</div>
          <input type='hidden' id='date_val' value='2022-10-12 23:59:00'>";
      }
      elseif($lima > 0)
      {
          echo "<div class='launch mb-1 pb-0'>countdown to top 5 finalis announcement!</div>
          <input type='hidden' id='date_val' value='2022-10-24 16:00:00'>";
      }
      elseif($champion > 0)
      {
          echo "<div class='launch mb-1 pb-0'>countdown to Awarding Night!</div>
          <input type='hidden' id='date_val' value='2022-10-29 19:00:00'>";
      }
      else
      {
          echo "<div class='launch mb-1 pb-0'>See u on PADC 2023</div>";
      }
    @endphp

      <div id="countdown"></div>
      @guest
      <a href="{{ route('login') }}" class="about-btn scrollto" target="_blank">Login</a>
      @else
      <a href="{{ route('profile') }}" class="about-btn scrollto" target="_blank">Profile</a>
      @endguest
      
        <!--<a class='pt-2' href="https://www.platinumceramics.com/" target="_blank"><img class="p-2" src="{{asset('frontend/img/platinum-logo.png')}}" style="max-height:80px;">-->
        <!--<img src="{{asset('frontend/img/asiatile.png')}}" style="max-height:80px;"></a>-->
        <div class="logo-hero mt-2">
        <a  href="https://www.platinumceramics.com/" target="_blank">
          <img class="platinum" src="{{asset('frontend/img/platinum_logo.png')}}" style="max-height:80px;" alt="logo platinum ceramics">
        </a><br>
        <a  href="https://www.platinumceramics.com/" target="_blank">
          <img class="asiatile" class="logo-hero" src="{{asset('frontend/img/asiatile_logo.png')}}" style="max-height:80px;" alt="logo Asia tile">
        </a>
      </div>
    </div>
  </section><!-- End Hero Section -->
<main id="main">
<!-- ======= About Section ======= -->
<section id="about" class="section-with-bg2">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-12">
        <div class="px-1"> 
          <h2>ABOUT PADC</h2>
          <p class="about-information">Platinum Architectural Design Competition is an event for the next Indonesian architects and designers that aims to develop and train ideas before entering the professional world. Starting in 2022, this is an annual competition and brings the big theme for the first about multi-purpose space. The topic responds to uncertain conditions. This competition will be gathered fresh ideas to face the dynamical conditions in the future.</p>
        </div>
      </div>
     
  </div>
</section><!-- End About Section -->

<!-- ======= Hotels Section ======= -->
<section id="hotels" class="section-with-bg2">

<div class="container" data-aos="fade-up">
  <div class="section-header">
    <h2>Winners</h2>
    <!-- <p>Her are some nearby hotels</p> -->
  </div>

  <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

    <div class="col-lg-4 col-md-6">
      <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('frontend/img/awar5.jpg')}}" alt="1st Place - PADC631" class="img-fluid">
        </div>
        <h3><a >1st Place - PADC631</a></h3>
        <p>Musa Ilham Ardiansyah dan Fortiusa Damha dari Universitas Islam Indonesia (UII) meraih juara pada PADC 2022 melalui karyanya yang berjudul "IKIRU"</p>
    </br>
 
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('frontend/img/awar4.jpg')}}" alt="2nd Place - PADC931" class="img-fluid">
        </div>
        <h3><a>2nd Place - PADC931</a></h3>        
        <p>Kevin Chandra Bulyono dan Danny Ramdhani dari Universitas Bina Nusantara (Binus University) berhasil menduduki peringkat ke-2 dalam PADC2022 melalui karyanya yang berkonsep warm-minimalism.</p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('frontend/img/awar3.jpg')}}" alt="3rd Place - PADC179" class="img-fluid">
        </div>
        <h3><a href="#">3rd Place - PADC179</a></h3>
        
        <p>Ellen Manthovani dan Kelvin dari Universitas Sumatera Utara (USU) mendapatkan 3rd Place PADC 2022 melalui karyanya yang berjudul "C.E.O Safe House"</p>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('frontend/img/awar2.jpg')}}" alt="Finalist - PADC644" class="img-fluid">
        </div>
        <h3><a >Finalist - PADC644</a></h3>
        <p>Regina Magdalena dan Arya Putra dari Institut Teknologi Bandung menjadi finalis melalui karyanya yang berjudul "Change Flows Through Us"</p>
    </br>
 
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="hotel">
        <div class="hotel-img">
          <img src="{{asset('frontend/img/awar1.jpg')}}" alt="Finalist - PADC140" class="img-fluid">
        </div>
        <h3><a>Finalist - PADC140</a></h3>        
        <p>Akhmad Faza Amaanullah dan Bonaventura Rah Abisca dari Arsitektur Institut Teknologi Sepuluh Nopember, menjadi finalis melalui karyanya yang berjudul "Rekasa"</p>
      </div>
    </div>

  </div>
</div>

</section><!-- End Hotels Section -->

<!-- ======= Speakers Section ======= -->
<section id="speakers" class="section-with-bg2">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Competition Judges</h2>
      <p></p>
      <div  class="section-line">
        <span></span>
      </div>
    </div>

    <div class="row justify-content-center px-1">
      <div class="col-lg-4 col-md-6">
        <div class="speaker mx-1" data-aos="fade-up" data-aos-delay="100">
          <img  src="{{asset('frontend/img/speakers/wendy-djuhara.jpg')}}" alt="Wendy Djuhara" class="img-fluid">
          <div class="details">
            <h3><a href="{{ route('wendy') }}">Wendy Djuhara</a></h3>
           
            <div class="social">
            
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="speaker mx-1" data-aos="fade-up" data-aos-delay="200">
          <img src="{{asset('frontend/img/speakers/Agatha Carolina.jpg')}}" alt="Agatha Carolina" class="img-fluid">
          <div class="details">
            <h3><a href="{{route('agatha')}}">Agatha Carolina</a></h3>
          
            <div class="social">
             
             
             
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>

</section><!-- End Speakers Section -->



<section id="schedule" class="section-with-bg2">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Schedules</h2>
      <div  class="section-line">
        <span></span>
      </div>
    </div>

    <div class="row justify-content-center view-desktop" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-7">
        <div class="row justify-content-center"> 
          <div class="col-md-5">
            <div class="row schedule-content">
              <div class="d-block mt-1">
                <h4 class="d-end"></h4>
                <span class="d-end"></span>
              </div>
            </div>
            <div class="row schedule-content schedule-content-hover">
              <div class="d-block mt-1">
                <h4 class="d-end">Virtual Launching</h4>
                <span class="d-end">20 August 2022 </span>
              </div>
            </div>
            <div class="row schedule-content">
              <div class="d-block mt-1">
                <h4 class="d-end"></h4>
                <span class="d-end"></span>
              </div>
            </div>
            <!--<div class="row schedule-content schedule-content-hover">-->
            <!--  <div class="d-block mt-1">-->
            <!--    <h4 class="d-end">Workshop </h4>-->
            <!--    <span class="d-end">12 September - 15 September 2022</span>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="row schedule-content schedule-content-hover">
              <div class="d-block mt-1">
                <h4 class="d-end">Submission Deadline </h4>
                <span class="d-end">12 October 2022</span>
              </div>
            </div>
            <div class="row schedule-content">
              <div class="d-block mt-1">
                <h4 class="d-end"></h4>
                <span class="d-end"></span>
              </div>
            </div>
            <!--<div class="row schedule-content schedule-content-hover">-->
            <!--  <div class="d-block mt-1">-->
            <!--    <h4 class="d-end">Announcement Top 5</h4>-->
            <!--    <span class="d-end">22 October 2022</span>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="row schedule-content schedule-content-hover">
              <div class="d-block mt-1">
                <h4 class="d-end">Judging And Awarding</h4>
                <span class="d-end">29 October - 30 October 2022</span>
              </div>
            </div>
            <div class="row schedule-content">
              <div class="d-block mt-1">
                <h4 class="d-end"></h4>
                <span class="d-end"></span>
              </div>
            </div>
          </div>

          <div class="col-md-1">
            <div class="row schedule-content position-relative">
              <div class="speaker">
                <div class="dot"><span></span></div>
                <div class="line"></div>
              </div>
            </div>
            <div class="row schedule-content position-relative">
              <div class="speaker">
                <div class="dot"><span></span></div>
                <div class="line"></div>
              </div>
            </div>
            <div class="row schedule-content position-relative">
              <div class="speaker">
                <div class="dot"><span></span></div>
                <div class="line"></div>
              </div>
            </div>
            <div class="row schedule-content position-relative">
              <div class="speaker">
                <div class="dot"><span></span></div>
                <div class="line"></div>
              </div>
            </div>
            <div class="row schedule-content position-relative">
              <div class="speaker">
                <div class="dot"><span></span></div>
                <div class="line"></div>
              </div>
            </div>
            <div class="row schedule-content position-relative">
              <div class="speaker">
                <div class="dot"><span></span></div>
                <div class="line"></div>
              </div>
            </div>
            <!--<div class="row schedule-content position-relative">-->
            <!--  <div class="speaker">-->
            <!--    <div class="dot"><span></span></div>-->
            <!--    <div class="line"></div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>

          <div class="col-md-5">
            <div class="row schedule-content schedule-content-hover">
              <div class="d-block mt-1">
                <h4 class="d-start">Registration</h4>
                <span class="d-start">15 August - 30 September 2022</span>
              </div>
            </div>
            <div class="row schedule-content">
              <div class="d-block mt-1">
                <h4 class="d-start"></h4>
                <span class="d-start"></span>
              </div>
            </div>
               <div class="row schedule-content schedule-content-hover">
              <div class="d-block mt-1">
                <h4 class="d-start">Workshop </h4>
                <span class="d-start">04 October - 05 October 2022</span>
              </div>
            </div>
            <!--<div class="row schedule-content schedule-content-hover">-->
            <!--  <div class="d-block mt-1">-->
            <!--    <h4 class="d-start">Roadshow</h4>-->
            <!--    <span class="d-start">22 Agustus - 31 August 2022</span>-->
            <!--  </div>-->
            <!--</div>-->
            <div class="row schedule-content">
              <div class="d-block mt-1">
                <h4 class="d-start"></h4>
                <span class="d-start"></span>
              </div>
            </div>
            <!--<div class="row schedule-content schedule-content-hover">-->
            <!--  <div class="d-block mt-1">-->
            <!--    <h4 class="d-start">Submission Deadline </h4>-->
            <!--    <span class="d-start">12 October 2022</span>-->
            <!--  </div>-->
            <!--</div>-->
             <div class="row schedule-content schedule-content-hover">
              <div class="d-block mt-1">
                <h4 class="d-start">Announcement Top 5</h4>
                <span class="d-star">24 October 2022</span>
              </div>
            </div>
            <div class="row schedule-content">
              <div class="d-block mt-1">
                <h4 class="d-start"></h4>
                <span class="d-start"></span>
              </div>
            </div>
            <!--<div class="row schedule-content schedule-content-hover">-->
            <!--  <div class="d-block mt-1">-->
            <!--    <h4 class="d-start">Judging And Awarding</h4>-->
            <!--    <span class="d-start">29 October - 30 October 2022</span>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>

    <div class="tab-content row justify-content-center px-1 view-mobile" data-aos="fade-up" data-aos-delay="200">
      <div role="tabpanel" class="col-xl-4 col-lg-5 tab-pane fade show active">
        <div class="row schedule-item">
          <div class="col-md-12">
            <div class="speaker">
              <div class="dot"><span></span></div>
              <div class="line"></div>
            </div>
            <div class="d-block mt-1">
              <h4>Registration </h4>
              <span>15 August - 30 September 2022 </span>
            </div>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-12">
            <div class="speaker">
              <div class="dot"><span></span></div>
              <div class="line"></div>
            </div>
            <div class="d-block mt-1">
              <h4>Virtual Launching	</h4>
              <span>20 August 2022 </span>
            </div>
          </div>
        </div>


        <div class="row schedule-item">
          <div class="col-md-12">
            <div class="speaker">
              <div class="dot"><span></span></div>
              <div class="line"></div>
            </div>
            <div class="d-block mt-1">
              <h4>Workshop</h4>
              <span>04 October - 05 October 2022 </span>
            </div>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-12">
            <div class="speaker">
              <div class="dot"><span></span></div>
              <div class="line"></div>
            </div>
            <div class="d-block mt-1">
              <h4>Submission Deadline </h4>
              <span>12 October 2022 </span>
            </div>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-12">
            <div class="speaker">
              <div class="dot"><span></span></div>
              <div class="line"></div>
            </div>
            <div class="d-block mt-1">
              <h4>Announcement Top 5 </h4>
              <span>24 October 2022 </span>
            </div>
          </div>
        </div>

        <div class="row schedule-item">
          <div class="col-md-12">
            <div class="speaker">
              <div class="dot"><span></span></div>
              <div class="line"></div>
            </div>
            <div class="d-block mt-1">
              <h4>Judging And Awarding</h4>
              <span>29 October - 30 October 2022 </span>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</section><!-- End Schedule Section -->



<!-- ======= Buy Ticket Section ======= -->
<section id="buy-tickets" >
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Prizes</h2>
      
      <div  class="section-line">
        <span></span>
      </div>
    </div>

    <div class="row px-1">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card mb-5 mb-lg-0">
          <div class="card-header">
              <div class="star">
                <img src="{{asset('frontend/img/prize.png')}}" alt="prize logo">
              </div>
              <h5 class="card-title text-title text-center">1<sup>st</sup> Prize</h5>
              <div class="d-flex justify-content-center">
                <span class="rp px-1"> Rp. </span>
                <span class="card-price"> 10.000.000,-</span>
              </div>
          </div>
          <div class="card-body mb-1 mt-2">
            
            <p><i class="fa fa-badge-check"></i> Trophy</p>
            <p><i class="fa fa-badge-check"></i> Certificate</p>
            <p><i class="fa fa-badge-check"></i> Trip to Surabaya</p>
      
          </div>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card mb-5 mb-lg-0">
          <div class="card-header">
            <div class="star">
              <img src="{{asset('frontend/img/prize.png')}}" alt="prize logo">
            </div>
              <h5 class="card-title text-title  text-center">2<sup>nd</sup> Prize</h5>
              <div class="d-flex justify-content-center">
                <span class="rp px-1"> Rp. </span>
                <span class="card-price"> 7.500.000,-</span>
              </div>
          </div>
          <div class="card-body mb-1 mt-2">
            
            <p><i class="fa fa-badge-check"></i> Trophy</p>
            <p><i class="fa fa-badge-check"></i> Certificate</p>
            <p><i class="fa fa-badge-check"></i> Trip to Surabaya</p>
      
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card mb-5 mb-lg-0">
          <div class="card-header">
            <div class="star">
              <img src="{{asset('frontend/img/prize.png')}}" alt="prize logo">
            </div>
              <h5 class="card-title text-title  text-center">3<sup>rd</sup> Prize</h5>
              <div class="d-flex justify-content-center">
                <span class="rp px-1"> Rp. </span>
                <span class="card-price"> 5.000.000,-</span>
              </div>
          </div>
          <div class="card-body mb-1 mt-2">
            
             <p><i class="fa fa-badge-check"></i> Trophy</p>
            <p><i class="fa fa-badge-check"></i> Certificate</p>
            <p><i class="fa fa-badge-check"></i> Trip to Surabaya</p>
      
          </div>
        </div>
      </div>
      
    </div>
   
  </div>
</section>

<section id="faq" class="section-with-bg3">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>FAQ</h2>
      <div  class="section-line">
        <span></span>
      </div>
    </div>

    <div class="row justify-content-center px-1" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-9">

        <ul class="faq-list">

            <li>
                <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">How do I register?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                  <div class="answer d-flex"> <span class="information">All competition registration can only through the website</span></div>
                </div>
              </li>
              
              <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Who can join this competition?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <div class="answer d-flex"> <span class="information">All students majoring in architecture and interior from all over Indonesia</span></div>
            </div>
          </li>
            <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">I’m a 1st semester student, Can I join this competition? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <div class="answer d-flex"> <span class="information">Yes, if you can do all the design requirement</span></div>
            </div>
          </li>
          
          
          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">What if I don’t get a registration confirmation email?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <div class="answer d-flex"> <span class="information">You can ask questions by email at padc2022@platinumceramics.com</span></div>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Can I have more than one team member? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <div class="answer d-flex"> <span class="information">No, one team is only for two people</span></div>
            </div>
          </li>
          
            <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq8">What are the costs?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq8" class="collapse" data-bs-parent=".faq-list">
              <div class="answer d-flex"> <span class="information">This competition is free to entry</span></div>
            </div>
          </li>
          
          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can I submit more than one work? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <div class="answer d-flex"> <span class="information">No, one participant can only submit one work</span></div>
            </div>
          </li>
          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Can the site area be more than the provision? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <div class="answer d-flex"> <span class="information">No, the site area is only by the provisions of 60 m2</span></div>
            </div>
          </li>
          
          

        </ul>

      </div>
    </div>

  </div>

</section><!-- End  F.A.Q Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="section-bg">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Contact</h2>
      <p>Contact us if you need more information</p>
      <div  class="section-line">
        <span></span>
      </div>
    </div>

    <div class="row contact-info justify-content-center">

     

      <div class="col-md-3 px-0">
        <div class="contact-phone">
          <i class="bi bi-whatsapp"></i>
          <h3>Whatsapp</h3>
          <p><a href="https://api.whatsapp.com/send/?phone=6281326148866&text&type=phone_number&app_absent=0" target="_blank">+6281326148866</a></p>
        </div>
      </div>

      <div class="col-md-3 px-0">
        <div class="contact-email">
          <i class="bi bi-envelope"></i>
          <h3>Email</h3>
          <p><a href="mailto:padc2022@platinumceramics.com" target="_blank">padc2022@platinumceramics.com</a></p>
        </div>
      </div>

      <div class="col-md-3 px-0">
        <div class="contact-instagram">
          <i class="bi bi-instagram"></i>
          <h3>Instagram</h3>
          <p><a href="https://www.instagram.com/platinumcompetition/" target="_blank">@platinumcompetition</a></p>
        
        </div>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->




</main><!-- End #main -->
@guest
    @php
    $current = strtotime(date("Y-m-d h:i:s"));
    $registrationdate = strtotime("2022-09-30 23:59:00");
    $adate = $registrationdate - $current;
    $registdate = floor($adate/(60*60*24));
    if($registdate > 0)                {
    @endphp
        <div class="register-button">
            <a href="{{route('register')}}">Registration</a>
        </div>
    @php
    }else{
    @endphp
    <div class="register-button">
        <a href="{{ route('login') }}">Login</a>
    </div>
    @php
    }
    @endphp
@else
@endguest
 
<script>
   $(window).scroll(function() {
    if ($(window).scrollTop() > 550) {
      $('.register-button').addClass('active');
    } else {
      $('.register-button').removeClass('active');
    }
  });

  $(document).ready(function(e) {
    
    window.history.replaceState('','','/'); 

    var valuedate = $('#date_val').val();

    $('#countdown').countdown(valuedate) // Get you DB value and pass in this funciton.
      .on('update.countdown', function(event) {
        var day = '%D';
        var hour = '%H';
        var minute = '%M';
        var second = '%S';
        $(this).html("<div class='countdown'>"+event.strftime(day)+"<p class='countdown-mini'> Days </p> </div> <div class='countdown'>"+event.strftime(hour)+"<p class='countdown-mini'> Hours </p> </div> <div class='countdown'>"+event.strftime(minute)+" <p class='countdown-mini'> Minutes </p> </div> <div class='countdown'>"+event.strftime(second)+" <p class='countdown-mini'> Seconds </p></div>");
      })
      .on('finish.countdown', function(event) {
        $(this).html('This offer has expired!')
      });
  });
</script>
 

@endsection
