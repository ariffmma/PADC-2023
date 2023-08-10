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
					<h2>WINNER PADC 2022</h2>
				</div>
			</div>
			<section id="services-cards" class="team">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
					</div>
					<div class="row justify-content-center gy-4">
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/winner1.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="member-info" style="box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1); border: 1px solid #00000014; height: 150px; text-align: left !important;">
									<h4>1st Place - PADC631</h4>
									<span>Musa Ilham Ardiansyah dan Fortiusa Damha dari Universitas Islam Indonesia (UII) meraih juara pada PADC 2022 melalui karyanya yang berjudul "IKIRU"</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/winner2.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="member-info" style="box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1); border: 1px solid #00000014; height: 150px; text-align: left !important;">
									<h4>2nd Place - PADC931</h4>
									<span>Kevin Chandra Bulyono dan Danny Ramdhani dari Universitas Bina Nusantara (Binus University) berhasil menduduki peringkat ke-2 dalam PADC2022 melalui karyanya yang berkonsep warm-minimalism.</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/winner3.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="member-info" style="box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1); border: 1px solid #00000014; height: 150px; text-align: left !important;">
									<h4>3rd Place - PADC179</h4>
									<span>Ellen Manthovani dan Kelvin dari Universitas Sumatera Utara (USU) mendapatkan 3rd Place PADC 2022 melalui karyanya yang berjudul "C.E.O Safe House"</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/winner4.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="member-info" style="box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1); border: 1px solid #00000014; height: 150px; text-align: left !important;">
									<h4>Finalist - PADC644</h4>
									<span>Regina Magdalena dan Arya Putra dari Institut Teknologi Bandung menjadi finalis melalui karyanya yang berjudul "Change Flows Through Us"</span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/winner5.jpg')}}" class="img-fluid" alt="">
								</div>
								<div class="member-info" style="box-shadow: 0 10px 25px 0 rgba(6, 12, 34, 0.1); border: 1px solid #00000014; height: 150px; text-align: left !important;">
									<h4>Finalist - PADC140</h4>
									<span>Akhmad Faza Amaanullah dan Bonaventura Rah Abisca dari Arsitektur Institut Teknologi Sepuluh Nopember, menjadi finalis melalui karyanya yang berjudul "Rekasa"</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="team" class="team">
				<div class="container" data-aos="fade-up">
					<div class="section-header">
						<h2>COMPETITION JUDGES 2022</h2>
					</div>
					<div class="row gy-4 justify-content-center">
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/wendy-djuhara.jpg')}}" class="img-fluid" alt="">
									<div class="social">
										<a href="https://m.facebook.com/wendy.djuhara">
											<i class="bi bi-facebook"></i>
										</a>
										<a href="https://www.instagram.com/wendydjuhara/">
											<i class="bi bi-instagram"></i>
										</a>
									</div>
								</div>
								<div class="member-info">
									<h4>Wendy Djuhara</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
							<div class="team-member">
								<div class="member-img">
									<img src="{{asset('frontend/assets/img/Agatha Carolina.jpg')}}" class="img-fluid" alt="">
									<div class="social">
										<a href="https://twitter.com/agatha_carolina">
											<i class="bi bi-twitter"></i>
										</a>
										<a href="https://www.instagram.com/agathacarolina/">
											<i class="bi bi-instagram"></i>
										</a>
									</div>
								</div>
								<div class="member-info">
									<h4>Agatha Carolina</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="services-list" class="services-list">
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
								<h4 class="title">
									<a href="#" class="stretched-link">1st Prize</a>
								</h4>
								<h4 class="title">
									<a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 10.000.000,-</a>
								</h4>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy
								</p>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate
								</p>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trip to Surabaya
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="icon flex-shrink-0">
								<i class="bi bi-award" style="color: #f57813;"></i>
							</div>
							<div>
								<h4 class="title">
									<a href="#" class="stretched-link">2nd Prize</a>
								</h4>
								<h4 class="title">
									<a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 7.500.000,-</a>
								</h4>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy
								</p>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate
								</p>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trip to Surabaya
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
							<div class="icon flex-shrink-0">
								<i class="bi bi-award" style="color: #f57813;"></i>
							</div>
							<div>
								<h4 class="title">
									<a href="#" class="stretched-link">3rd Prize</a>
								</h4>
								<h4 class="title">
									<a href="#" style="font-size: 32px !important;" class="stretched-link">Rp. 5.000.000,-</a>
								</h4>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trophy
								</p>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Certificate
								</p>
								<p class="description">
									<i class="bi bi-patch-check-fill" style="color: #f57813;"></i> Trip to Surabaya
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
@endsection