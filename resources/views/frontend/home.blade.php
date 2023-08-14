	
@extends('frontend.layouts.app')
@section('title', 'Platinum Architectural Design Competition')
@section('description', 'Platinum Architectural Design Competition is an event for the next Indonesian architects and designers that aims to develop and train ideas before entering the professional world.')
@section('keywords', 'platinum, Architectural, Design, Competition, student competition, design competition, design contest, architecture competition, architecture contest')
@section('canonical', 'https://padc-platinumceramics.com')
@section('url','https://padc-platinumceramics.com')

@section('content')	
	<section id="hero" class="hero d-flex align-items-center">
			<div class="container">
				<div class="row" style="margin-top: 6%;">
					<div class="col-xl-4">
						<h2 data-aos="fade-up">
							<span style="color:#f0a500">PLATINUM </span>
							<span style="color:#ffffff">ARCHITECTURAL </span>
							<span style="color:#ffffff">DESIGN </span>
							<span style="color:#f0a500">COMPETITION </span>
						</h2>
						<blockquote data-aos="fade-up" data-aos-delay="100">
							<p>
								@php 
								$current = strtotime(date("Y-m-d h:i:s")); 
								$registration = strtotime("2023-08-01 23:59:00"); 
								$launching = strtotime("2023-08-20 13:00:00"); 
								$maxregist = strtotime("2023-09-30 23:59:00"); 
								$submitting = strtotime("2023-10-13 23:59:00"); 
								$limabesar = strtotime("2023-10-25 16:00:00"); 
								$finish = strtotime("2023-10-30 19:00:00"); 
								$a = $registration - $current; 
								$b = $launching - $current; 
								$c = $maxregist - $current; 
								$d = $submitting - $current; 
								$e = $limabesar - $current; 
								$f = $finish - $current; 
								$regist = floor($a/(60*60*24)); 
								$launch = floor($b/(60*60*24)); 
								$maxregister = floor($c/(60*60*24)); 
								$submit = floor($d/(60*60*24)); 
								$lima = floor($e/(60*60*24)); 
								$champion = floor($f/(60*60*24)); 
								if($regist > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to registration!</div>
									<input type='hidden' id='date_val' value='2023-08-01 23:59:00'>"; } elseif($launch > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to Virtual launching!</div>
									<input type='hidden' id='date_val' value='2023-08-20 13:00:00'>"; }elseif($maxregister > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to last user registration!</div>
									<input type='hidden' id='date_val' value='2023-09-30 23:59:00'>"; }elseif($submit > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to last submission!</div>
									<input type='hidden' id='date_val' value='2023-10-12 23:59:00'>"; } elseif($lima > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to top 5 finalis announcement!</div>
									<input type='hidden' id='date_val' value='2023-10-24 16:00:00'>"; } elseif($champion > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to Awarding Night!</div>
									<input type='hidden' id='date_val' value='2023-10-29 19:00:00'>"; } else 
								{ echo " 
									<div class='launch mb-1 pb-0'>See u on PADC 2023</div>"; } 
								@endphp 
							</p>
						</blockquote>
						<div>
							<div id="countdown"></div> 
						</div>
						<div class="d-flex" data-aos="fade-up" data-aos-delay="200">
							@guest 
							<a href="{{ route('login') }}" class="btn-count-login">Login</a>
							@else 
							<a href="{{ route('profile') }}" class="btn-count-login">Profile</a>
							@endguest
						</div>
						<div class=" d-flex justify-content-center logo-hero mt-5">
							<div class="px-3">
								<a href="https://www.platinumceramics.com/" target="_blank">
									<img class="platinum" src="{{asset('frontend/img/platinum_logo.png')}}" style="max-height:40px;" alt="logo platinum ceramics">
								  </a>
							</div>
							<div class="px-3">
								<a href="https://www.platinumceramics.com/" target="_blank">
									<img class="asiatile" class="logo-hero" src="{{asset('frontend/img/asiatile_logo.png')}}" style="max-height:40px;" alt="logo Asia tile">
								  </a>
							</div>
							
						  </div>
					</div>
				</div>
			</div>
		</section>
		<main id="main">
			<section id="Judges" class="team">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>COMPETITION JUDGES</h2>
					</div>
					<div class="row gy-4 justify-content-center">
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/Dummy.jpg')}}" class="img-fluid" alt="">
									<div class="social">
										<a href="">
											<i class="bi bi-twitter"></i>
										</a>
										<a href="">
											<i class="bi bi-facebook"></i>
										</a>
										<a href="">
											<i class="bi bi-instagram"></i>
										</a>
										<a href="">
											<i class="bi bi-linkedin"></i>
										</a>
									</div>
								</div>
								<div class="member-info">
									<h4>Walter White</h4>
									<span>Chief Executive Officer</span>
								</div>
							</div>
						</div>
						<!-- End Team Member -->
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/Dummy.jpg')}}" class="img-fluid" alt="">
									<div class="social">
										<a href="">
											<i class="bi bi-twitter"></i>
										</a>
										<a href="">
											<i class="bi bi-facebook"></i>
										</a>
										<a href="">
											<i class="bi bi-instagram"></i>
										</a>
										<a href="">
											<i class="bi bi-linkedin"></i>
										</a>
									</div>
								</div>
								<div class="member-info">
									<h4>Sarah Jhonson</h4>
									<span>Product Manager</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="Schedules" class="call-to-action">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2 style="color:white !important">SCHEDULES</h2>
					</div>
					<ul class="timeline">
						<li>
							<div class="direction-r">
								<div class="flag-wrapper">
									<span class="flag">Registration</span>
								</div>
								<div class="desc">31 August - 25 Oktober 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-l">
								<div class="flag-wrapper">
									<span class="flag">Virtual Launching</span>
								</div>
								<div class="desc">31 Agustus 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-r">
								<div class="flag-wrapper">
									<span class="flag">Workshop</span>
								</div>
								<div class="desc">16 Oktober - 23 Oktober 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-l">
								<div class="flag-wrapper">
									<span class="flag">Submission Deadline</span>
								</div>
								<div class="desc">10 November 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-r">
								<div class="flag-wrapper">
									<span class="flag">Announcement Top 5</span>
								</div>
								<div class="desc">23 November 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-l">
								<div class="flag-wrapper">
									<span class="flag">Judging And Awarding</span>
								</div>
								<div class="desc">25 November - 26 November 2023</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section id="Prizes" class="services-list">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>PRIZES</h2>
					</div>
					<div class="row gy-5">
						<div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="icon flex-shrink-0">
								<i class="bi bi-award" style="color: #f57813;"></i>
							</div>
							<div>
								<h4 class="title"><a href="#" class="stretched-link">1st Prize</a></h4>
                				<h4 class="title"><a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 10.000.000,-</a></h4>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy</p>
                				<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate</p>
                				<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trip to Surabaya</p>
							</div>
						</div>
						<!-- End Service Item -->
						<div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="icon flex-shrink-0">
								<i class="bi bi-award" style="color: #f57813;"></i>
							</div>
							<div>
								<h4 class="title"><a href="#" class="stretched-link">2nd Prize</a></h4>
								<h4 class="title"><a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 7.500.000,-</a></h4>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy</p>
                				<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate</p>
                				<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trip to Surabaya</p>
							</div>
						</div>
						<!-- End Service Item -->
						<div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="icon flex-shrink-0">
								<i class="bi bi-award" style="color: #f57813;"></i>
							</div>
							<div>
								<h4 class="title"><a href="#" class="stretched-link">3rd Prize</a></h4>
								<h4 class="title"><a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 5.000.000,-</a></h4>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy</p>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate</p>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trip to Surabaya</p>
							</div>
						</div>
						<!-- End Service Item -->
					</div>
				</div>
			</section>
			<section id="About" class="features">
				<div class="container" data-aos="fade-up">
					<div class="row">
						<div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
							<h3>ABOUT PADC</h3>
							<div class="row">
								<div class="">
									<p>Platinum Architectural Design Competition is an event for the next Indonesian architects and designers that aims to develop and train ideas before entering the professional world. Starting in 2022, this is an annual competition and brings the big theme for the first about multi-purpose space. The topic responds to uncertain conditions. This competition will be gathered fresh ideas to face the dynamical conditions in the future.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
							<div class="phone-wrap">
								<img src="{{asset('frontend/assets/img/Logo-new.png')}}" alt="Image" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="details">
					<div class="container" data-aos="fade-up" data-aos-delay="300">
						<div class="row">
							<div class="col-md-6">
								<h3>FAQ</h3>
								<button type="button" class="collapsible">How do I register?</button>
								<div class="content">
									<p>All competition registration can only through the website</p>
								</div>
								<button type="button" class="collapsible">Who can join this competition?</button>
								<div class="content">
									<p>All students majoring in architecture and interior from all over Indonesia</p>
								</div>
								<button type="button" class="collapsible">I’m a 1st semester student, Can I join this competition?</button>
								<div class="content">
									<p>Yes, if you can do all the design requirement</p>
								</div>
								<button type="button" class="collapsible">What if I don’t get a registration confirmation email?</button>
								<div class="content">
									<p>You can ask questions by email at padc2022@platinumceramics.com</p>
								</div>
								<button type="button" class="collapsible">Can I have more than one team member?</button>
								<div class="content">
									<p>No, one team is only for two people</p>
								</div>
								<button type="button" class="collapsible">What are the costs?</button>
								<div class="content">
									<p>This competition is free to entry</p>
								</div>
								<button type="button" class="collapsible">Can I submit more than one work?</button>
								<div class="content">
									<p>No, one participant can only submit one work</p>
								</div>
								<button type="button" class="collapsible">Can the site area be more than the provision?</button>
								<div class="content">
									<p>No, the site area is only by the provisions of 60 m2</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="Contact" class="contact">
				<div class="container position-relative" data-aos="fade-up">
					<div class="section-header">
						<h2>CONTACT</h2>
						<p>Contact us if you need more information</p>
					</div>
					<div class="row gy-4 d-flex justify-content-center mt-3">
						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
							<div class="info-item d-flex">
								<i class="bi bi-whatsapp flex-shrink-0"></i>
								<div>
									<h4>WHATSAPP</h4>
									<p>+6281326148866</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
							<div class="info-item d-flex">
								<i class="bi bi-envelope flex-shrink-0"></i>
								<div>
									<h4>EMAIL</h4>
									<p>info@padc-platinumceramics.com</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
							<div class="info-item d-flex">
								<i class="bi bi-instagram flex-shrink-0"></i>
								<div>
									<h4>INSTAGRAM</h4>
									<p>@platinumcompetition</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<script>
			$(window).scroll(function() {
			  if ($(window).scrollTop() > 550) {
				$('.register-button').addClass('active');
			  } else {
				$('.register-button').removeClass('active');
			  }
			});
			$(document).ready(function(e) {
				  window.history.replaceState('', '', '/');
				  var valuedate = $('#date_val').val();
				  $('#countdown').countdown(valuedate) // Get you DB value and pass in this funciton.
					.on('update.countdown', function(event) {
						var day = '%D';
						var hour = '%H';
						var minute = '%M';
						var second = '%S';
						$(this).html("  <div class='count-down-container'><div class='count-down-box'><div class='count-down'><h1 id='days'>"+event.strftime(day)+"</h1><p>Days</p></div></div><div class='count-down-box'><div class='count-down'><h1 id='hours'>"+event.strftime(hour)+"</h1><p>Hours</p></div></div><div class='count-down-box'><div class='count-down'><h1 id='minutes'>"+event.strftime(minute)+"</h1><p>Minutes</p></div></div><div class='count-down-box'><div class='count-down'><h1 id='seconds'>"+event.strftime(second)+"</h1><p>Seconds</p></div></div></div>");
						}).on('finish.countdown', function(event) {
						$(this).html('This offer has expired!')
					  });
					});
		  </script> 
@endsection