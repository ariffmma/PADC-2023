@extends('frontend.layouts.app')
@section('title', 'Platinum Architectural Design Competition 2022')
@section('description', 'Platinum Architectural Design Competition is an event for the next Indonesian architects and designers that aims to develop and train ideas before entering the professional world.')
@section('keywords', 'platinum, Architectural, Design, Competition, student competition, design competition, design contest, architecture competition, architecture contest')
@section('canonical', 'https://padc-platinumceramics.com/last-edition')
@section('url','https://padc-platinumceramics.com/last-edition')

@section('content')	
<main id="main">
<div class="breadcrumbs d-flex align-items-center" style="background-image: url({{asset('frontend/assets/img/padc-background-1.jpg')}});">
	<div class="container position-relative d-flex flex-column align-items-center">
		<h2>Kelvin Thengono</h2>
	</div>
</div>
<section id="why-us" class="why-us">
<div class="container" data-aos="fade-up">
	<div class="row g-0" data-aos="fade-up" data-aos-delay="200">
		<div class="col-xl-5  team" >
			<div class="team-member">
				<div class="member-img">
					<img src="{{asset('frontend/img/kelvin-tenggono.jpg')}}" class="img-fluid" alt="">
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
			</div>
		</div>
		<div class="col-xl-7 slides  position-relative">
			<div class="slidfes-1 swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="item"><p>Graduated from California College of the Arts in 2016 and returned to Indonesia to establish its bureau "K-Thengono Design Studio" in 2018. He has got various achievements, such as 2021 got the Architizer A+Awards - Popular Choice Winner Award, continuing in 2022, he got the Architizer A+Awards - Finalist, and at the ARCH:ID 2022 event got the Best Design Award 2022.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section id="portfolio" class="portfolio">
	<div class="container" data-aos="fade-up">
		<div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
		<div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">
		<div class="col-lg-6 col-md-6 portfolio-item filter-2022">
			<a href="{{asset('frontend/img/k4.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
				<img src="{{asset('frontend/img/k4.jpg')}}" class="img-fluid img-judges" alt="">
			</a>
			<div class="portfolio-info d-flex justify-content-center">
				<a title="More Details" class="title-gallery">Islamic Boarding School Tahfizh Akhwat</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 portfolio-item filter-2022">
			<a href="{{asset('frontend/img/k4.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
				<img src="{{asset('frontend/img/k4.jpg')}}" class="img-fluid img-judges" alt="">
			</a>
			<div class="portfolio-info d-flex justify-content-center">
				<a title="More Details" class="title-gallery">Islamic Boarding School Tahfizh Akhwat</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 portfolio-item filter-2022">
			<a href="{{asset('frontend/img/k4.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
				<img src="{{asset('frontend/img/k4.jpg')}}" class="img-fluid img-judges" alt="">
			</a>
			<div class="portfolio-info d-flex justify-content-center">
				<a title="More Details" class="title-gallery">Islamic Boarding School Tahfizh Akhwat</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 portfolio-item filter-2022">
			<a href="{{asset('frontend/img/k4.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
				<img src="{{asset('frontend/img/k4.jpg')}}" class="img-fluid img-judges" alt="">
			</a>
			<div class="portfolio-info d-flex justify-content-center">
				<a title="More Details" class="title-gallery">Islamic Boarding School Tahfizh Akhwat</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 portfolio-item filter-2022">
			<a href="{{asset('frontend/img/k4.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
				<img src="{{asset('frontend/img/k4.jpg')}}" class="img-fluid img-judges" alt="">
			</a>
			<div class="portfolio-info d-flex justify-content-center">
				<a title="More Details" class="title-gallery">Islamic Boarding School Tahfizh Akhwat</a>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 portfolio-item filter-2022">
			<a href="{{asset('frontend/img/k4.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
				<img src="{{asset('frontend/img/k4.jpg')}}" class="img-fluid img-judges" alt="">
			</a>
			<div class="portfolio-info d-flex justify-content-center">
				<a title="More Details" class="title-gallery">Islamic Boarding School Tahfizh Akhwat</a>
			</div>
		</div>
	</div>
</section>
</main>
@endsection