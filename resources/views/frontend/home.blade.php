	
@extends('frontend.layouts.app')
@section('title', 'Platinum Architectural Design Competition')
@section('description', 'Platinum Architectural Design Competition is an event for the next Indonesian architects and designers that aims to develop and train ideas before entering the professional world.')
@section('keywords', 'platinum, Architectural, Design, Competition, student competition, design competition, design contest, architecture competition, architecture contest,architecture competition in indonesia, padc, platinum ceramics Indonesia')
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
								$registration = strtotime("2023-08-30 23:59:00"); 
								$launching = strtotime("2023-09-15 13:00:00"); 
								$maxregist = strtotime("2023-09-30 23:59:00"); 
								$submitting = strtotime("2023-11-10 23:59:00"); 
								$limabesar = strtotime("2023-12-04 16:00:00"); 
								$finish = strtotime("2023-12-15 19:00:00"); 
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
									<input type='hidden' id='date_val' value='2023-08-30 23:59:00'>"; } elseif($launch > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to Virtual launching!</div>
									<input type='hidden' id='date_val' value='2023-09-15 13:00:00'>"; }elseif($maxregister > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to last user registration!</div>
									<input type='hidden' id='date_val' value='2023-09-30 23:59:00'>"; }elseif($submit > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to last submission!</div>
									<input type='hidden' id='date_val' value='2023-11-10 23:59:00'>"; } elseif($lima > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to top 5 finalis announcement!</div>
									<input type='hidden' id='date_val' value='2023-12-04 16:00:00'>"; } elseif($champion > 0) 
								{ echo " 
									<div class='launch mb-1 pb-0'>countdown to Awarding Night!</div>
									<input type='hidden' id='date_val' value='2023-12-15 19:00:00'>"; } else 
								{ echo " 
									<div class='launch mb-1 pb-0'>See u on PADC 2024</div>"; } 
								@endphp 
							</p>
						</blockquote>
						<div>
							<div id="countdown"></div> 
						</div>
						<div class="d-flex" data-aos="fade-up" data-aos-delay="200">
							@guest 
							<a href="{{ route('login') }}" class="btn-count-login" style="font-weight: 900 !important;">Login</a>
							@else 
							<a href="{{ route('profile') }}" class="btn-count-login" style="font-weight: 900 !important;">Profile</a>
							@endguest
						</div>
						
					</div>
				</div>
			</div>
		</section>
		
		<main id="main">
			<section id="Judges" class="team">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>JUDGES</h2>
					</div>
					<div class="row gy-4 justify-content-center">
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<a href="">
								<div class="team-member">
									<div class="member-img">
										<img src="{{asset('frontend/assets/img/K-Thengono.jpg')}}" class="img-fluid" alt="">
										<div class="social">
											
											<a href="https://www.instagram.com/kthengono/" target="_blanks">
												<i class="bi bi-instagram"></i>
											</a>
											<a target="_blanks" href="https://www.linkedin.com/in/kelvin-thengono-2472a381/?originalSubdomain=id">
												<i class="bi bi-linkedin"></i>
											</a>
										</div>
									</div>
									<a href="">
									<div class="member-info">
										<h4>Kelvin Thengono</h4>
										<span>K-Thengono Design Studio</span>
									</div>
									</a>
								</div>
							</a>
						</div>
						<!-- End Team Member -->
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
							<a href="">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/Michael Lauw.jpg')}}" class="img-fluid" alt="">
									<div class="social">
										
										<a href="https://www.instagram.com/michaellauw/" target="_blanks">
											<i class="bi bi-instagram" target="_blanks"></i>
										</a>
										<a href="https://www.linkedin.com/in/michael-lauw-74203795/?originalSubdomain=id" target="_blanks">
											<i class="bi bi-linkedin"></i>
										</a>
									</div>
								</div>
								<a href="">
								<div class="member-info">
									<h4>Michael Lauw</h4>
									<span>Michael Lauw Studio</span>
								</div>
								</a>
							</div>
							</a>
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
								<div class="desc">August 31<sup>st</sup> - October 25<sup>th</sup>, 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-l">
								<div class="flag-wrapper">
									<span class="flag">Virtual Launching</span>
								</div>
								<div class="desc">September 15<sup>th</sup>, 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-r">
								<div class="flag-wrapper">
									<span class="flag">Workshop</span>
								</div>
								<div class="desc">October 23<sup>th</sup> - October 24<sup>th</sup>, 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-l">
								<div class="flag-wrapper">
									<span class="flag">Submission Deadline</span>
								</div>
								<div class="desc">November 10<sup>th</sup>, 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-r">
								<div class="flag-wrapper">
									<span class="flag">Announcement Top 5</span>
								</div>
								<div class="desc">December 4<sup>th</sup>, 2023</div>
							</div>
						</li>
						<li>
							<div class="direction-l">
								<div class="flag-wrapper">
									<span class="flag">Judging And Awarding</span>
								</div>
								<div class="desc">December 15<sup>th</sup>, 2023</div>
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
						<div class="col-lg-4 col-md-12 col-sm-12 service-item flex-custom1" data-aos="fade-up" data-aos-delay="100">
							<div class="icon flex-shrink-0">
								<i class="bi bi-award" style="color: #f57813;"></i>
							</div>
							<div>
								<h4 class="title"><a href="#" class="stretched-link">1st Prize</a></h4>
                				<h4 class="title"><a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 12.500.000,-</a></h4>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy</p>
                				<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate</p>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> 2 months internship in one of the judges offices</p>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Exposure in architectural media</p>
                				<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trip to Surabaya</p>
							</div>
						</div>
						<!-- End Service Item -->
						<div class="col-lg-4 col-md-6 col-sm-12 service-item flex-custom2" data-aos="fade-up" data-aos-delay="100">
							<div class="icon flex-shrink-0">
								<i class="bi bi-award" style="color: #f57813;"></i>
							</div>
							<div>
								<h4 class="title"><a href="#" class="stretched-link">2nd Prize</a></h4>
								<h4 class="title"><a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 8.000.000,-</a></h4>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy</p>
                				<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate</p>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Exposure in architectural media</p>
                				<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trip to Surabaya</p>
							</div>
						</div>
						<!-- End Service Item -->
						<div class="col-lg-4 col-md-6 col-sm-12 service-item flex-custom3" data-aos="fade-up" data-aos-delay="100">
							<div class="icon flex-shrink-0">
								<i class="bi bi-award" style="color: #f57813;"></i>
							</div>
							<div>
								<h4 class="title"><a href="#" class="stretched-link">3rd Prize</a></h4>
								<h4 class="title"><a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 5.000.000,-</a></h4>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy</p>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate</p>
								<p class="description"><i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Exposure in architectural media</p>
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
						<div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
							<h3>ABOUT PADC</h3>
							<div class="row">
								<div class="">
									<p style="font-size: 18px;font-weight: 500;">Platinum Architectural Design Competition is an event for the next Indonesian architects and designers that aims to develop and prepare ideas before joining the professional scope. Starting in 2022, this annual competition brings the big theme for the first multi-purpose space. This competition will be gathered fresh ideas to face the dynamic conditions in the future.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="details">
					<div class="container" data-aos="fade-up" data-aos-delay="300">
						<div class="row">
							<div class="col-md-6">
								<h3>FAQ</h3>
								<button type="button" class="collapsible">Who can participate in the competition?</button>
								<div class="content">
									<p>The competition is open to architecture and interior students all over Indonesia.</p>
								</div>
								<button type="button" class="collapsible">Is this competition paid?</button>
								<div class="content">
									<p>No, there is no registration fee for this competition.</p>
								</div>
								<button type="button" class="collapsible">How do I register for the competition?</button>
								<div class="content">
									<p>You only register at platinumceramics.com/platinumcompetition, and please fill in all the requirements.</p>
								</div>
								<button type="button" class="collapsible">Is there a limit to the number of team members in a group entry?</button>
								<div class="content">
									<p>Yes, each team must be a minimum and maximum of two students.</p>
								</div>
								<button type="button" class="collapsible">Can I submit multiple entries?</button>
								<div class="content">
									<p>No, each team only can submit one work.</p>
								</div>
								<button type="button" class="collapsible">I am still a semester one student. Can I participate in this competition?</button>
								<div class="content">
									<p>Yes, you can join this competition by doing all the requirements.</p>
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
							<div class="info-item flex-contact-custom1">
								<i class="bi bi-whatsapp flex-shrink-0"></i>
								<div>
								     <a href="https://wa.me/6285186664866" target="_blanks">
									<h4>WHATSAPP</h4>
									<p>+6285186664866</p>
									 </a>
								</div>
							</div>
						</div>
						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
							<div class="info-item flex-contact-custom2">
								<i class="bi bi-envelope flex-shrink-0"></i>
								<div>
								    <a href="mailto:info@padc-platinumceramics.com" target="_blanks">
									<h4>EMAIL</h4>
									<p>info@padc-platinumceramics.com</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
							<div class="info-item flex-contact-custom3">
								<i class="bi bi-instagram flex-shrink-0"></i>
								<div>
								    <a href="https://www.instagram.com/platinumcompetition/" target="_blanks">
									<h4>INSTAGRAM</h4>
									<p>@platinumcompetition</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div id="popupplatinum" class="modal fade">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
				
					<div class="modal-body justify-content-center bg-popup">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute;right: 16px;filter: brightness(0) invert(1);"></button>
						<div class=" d-flex justify-content-center align-items-center logo-hero">
							<div class="title-popup"><a href="">#explorationthepast</a></div>
						  </div>
					</div>
					</div><!-- /.modal-content -->
				</div>
			</div>
		</main>
		<script type="text/javascript">
			$(window).on('load', function() {
				setTimeout(function(){
					$('#popupplatinum').modal('show');
   				}, 2000);
			});
		</script>
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