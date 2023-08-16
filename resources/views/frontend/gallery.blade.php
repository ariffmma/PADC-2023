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
			<h2>GALLERY</h2>
		</div>
	</div>
    <section id="portfolio" class="portfolio">
      	<div class="container" data-aos="fade-up">
        	<div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
				<ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
					<li data-filter="*" class="filter-active">All</li>
					<li data-filter=".filter-2022">2022</li>
				</ul>
        	<div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4 col-md-6 portfolio-item filter-2022">
				<a href="{{asset('frontend/img/gallery/sample1.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
					<img src="{{asset('frontend/img/gallery/sample1.jpg')}}" class="img-fluid" alt="">
				</a>
				<div class="portfolio-info d-flex justify-content-center">
					<a title="More Details" class="title-gallery">PADC 2022</a>
				</div>
            </div>
			<div class="col-lg-4 col-md-6 portfolio-item filter-2022">
				<a href="{{asset('frontend/img/gallery/sample2.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
					<img src="{{asset('frontend/img/gallery/sample2.jpg')}}" class="img-fluid" alt="">
				</a>
				<div class="portfolio-info d-flex justify-content-center">
					<a title="More Details" class="title-gallery">PADC 2022</a>
				</div>
            </div>
			<div class="col-lg-4 col-md-6 portfolio-item filter-2022">
				<a href="{{asset('frontend/img/gallery/sample3.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
					<img src="{{asset('frontend/img/gallery/sample3.jpg')}}" class="img-fluid" alt="">
				</a>
				<div class="portfolio-info d-flex justify-content-center">
					<a title="More Details" class="title-gallery">PADC 2022</a>
				</div>
            </div>
			<div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
				<ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
					<li data-filter="*" class="filter-active">All</li>
					<li data-filter=".filter-2022">2022</li>
				</ul>
        	<div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4 col-md-6 portfolio-item filter-2022">
				<a href="{{asset('frontend/img/gallery/sample1.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
					<img src="{{asset('frontend/img/gallery/sample1.jpg')}}" class="img-fluid" alt="">
				</a>
				<div class="portfolio-info d-flex justify-content-center">
					<a title="More Details" class="title-gallery">PADC 2022</a>
				</div>
            </div>
			<div class="col-lg-4 col-md-6 portfolio-item filter-2022">
				<a href="{{asset('frontend/img/gallery/sample2.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
					<img src="{{asset('frontend/img/gallery/sample2.jpg')}}" class="img-fluid" alt="">
				</a>
				<div class="portfolio-info d-flex justify-content-center">
					<a title="More Details" class="title-gallery">PADC 2022</a>
				</div>
            </div>
			<div class="col-lg-4 col-md-6 portfolio-item filter-2022">
				<a href="{{asset('frontend/img/gallery/sample3.jpg')}}" title="PADC 2022" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
					<img src="{{asset('frontend/img/gallery/sample3.jpg')}}" class="img-fluid" alt="">
				</a>
				<div class="portfolio-info d-flex justify-content-center">
					<a title="More Details" class="title-gallery">PADC 2022</a>
				</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection