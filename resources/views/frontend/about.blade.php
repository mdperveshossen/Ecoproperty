@extends('layouts.frontend_app')
@section('about')
    active
@endsection
@section('title')
    about | Eco Property
@endsection
@section('frontend_content')
    <!-- Sub Banner Section -->
	<section id="sub-banner" class="sub-banner">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="sub-banner__title text-uppercase">{{ $about_detail->bradcrumb_title }}</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section -->
	<section id="about" class="about section-gap">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 pr-lg-5 mb-4 mb-md-0">
					<div class="about__block position-relative rounded">
						<a href="gallery.html" class="about__block__image rounded d-inline-block position-absolute overflow-hidden w-100 h-100">
							<img src="{{ asset('uploads/about') }}/{{ $about_detail->thumbnail }}" alt="about-1" class="position-absolute w-100 h-100 transition">
						</a>
						<div class="about__block__content bg-white py-4 px-2 position-absolute">
							<h2 class="about__block__title mb-3">
								<a href="gallery.html" class="d-inline-block transition">View Our<br><span class="b-line px-2 d-inline-block">Gallery</span></a>
							</h2>
						</div>
						<span class="about__block__pattern about__block__pattern--left position-absolute">
							<img src="{{ asset('frontend_asset') }}/assets/images/pattern.png" alt="pattern" class="w-100">
						</span>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about__content">
						<h1 class="about__content__title text-capitalize">{{ $about_detail->heading }}</h1>
						<svg class="section-header__icon mb-4" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
							<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
						</svg>
						<p class="about__content__text">{{ $about_detail->description }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Watch Video Section -->
	<section id="watch" class="watch section-gap">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="section-header text-center col-12 mb-3 mb-md-5">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">{{ $youtube_heading->sub_heading }}</h4>
					<h1 class="section-header__title text-capitalize">{{ $youtube_heading->heading }}</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
				<div class="col-12">
					<div class="watch__slider">
                        @forelse ($youtube_link as $link)
						<div class="watch__block transition position-relative">
							<img src="{{ asset('uploads/youtube_thumbnail') }}/{{ $link->thumbnail }}" alt="watch" class="w-100">
							<div class="watch__block__overlay transition d-flex align-items-center justify-content-center position-absolute w-100 h-100">
								<a href="{{ $link->link }}" class="play-btn venobox d-inline-block text-center rounded-circle transition position-absolute" data-vbtype="video" data-autoplay="true">
									<i class="fas fa-play"></i>
								</a>
							</div>
						</div>
                        @empty
                            
                        @endforelse
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials Section -->
	<section class="testimonials section-gap">
		<div class="container-fluid">
			<div class="row">
				<div class="section-header text-center col-12 mb-3">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">{{ $testimonial_heading->sub_heading }}</h4>
					<h1 class="section-header__title text-capitalize">{{ $testimonial_heading->heading }}</h1>
					<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
				<div class="col-12">
					<div class="testimonials__slider">
                        @forelse ($testimonials as $testimonial)
						<div class="testimonials__block px-3">
							<div class="testimonials__block__content text-center position-relative bg-white py-5 px-4">
								<div class="testimonials__block__client-image position-absolute rounded-circle overflow-hidden">
									<img src="{{ asset('uploads/testimonial') }}/{{ $testimonial->thumbnail }}" alt="testimonial-1" class="w-100 h-100">
								</div>
								<h3 class="testimonials__block__client-name text-capitalize mt-4">{{ $testimonial->name }}</h3>
								<h5 class="testimonials__block__client-position text-capitalize">{{ $testimonial->designtaion }}</h5>
								<p class="testimonials__block__text mt-4">{{ $testimonial->description }}</p>
							</div>
						</div>
                        @empty
                            
                        @endforelse
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Schedule Section -->

	<!-- Schedule Section -->
	<section id="schedule" class="schedule section-gap">
		<div class="container">
			<div class="row">
				<div class="section-header text-center col-12 mb-5">
					<h4 class="section-header__sub-title d-inline-block text-uppercase px-2">title</h4>
					<h1 class="section-header__title text-capitalize">INTERESTED IN A SHOWING?</h1>
						<svg class="section-header__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="65.167px" height="11.917px" viewBox="0 0 65.167 11.917" enable-background="new 0 0 65.167 11.917" xml:space="preserve">
						<path fill="none" stroke-linecap="round" stroke-width="2" stroke-miterlimit="10" d="M1.045,9.833 9.295,2.083 17.295,9.833 24.295,2.083 32.291,9.833 39.294,2.083 47.294,9.833 54.294,2.083 64.287,9.833 "></path>
					</svg>
				</div>
				<div class="col-12 text-center">
					<!-- Schedule Modal -->
					<div id="my_section">
						<div class="container p-0">
							<div class="row">
								<div class="col-lg-12">
									<div class="main-content">
										<img src="{{ asset('frontend_asset') }}/images/main.jpg" alt="" height="700" width="1100">
										<div class="shadow-1">
											<div  class='mehedi'>
												<div class="content ">
											  <h6>status: for sale</h6>
											  <h6>color: koitam na</h6>
											  <h6>price: $24000</h6>
											  <!-- <script>
												  const cursor = document.querySelector('.content');
												  document.addEventListener('mousemove',(e) => {
													  cursor.style.left = e.pageX = 'px';
												  })
											  </script> -->
										  </div>
											</div>					
										</div>
										  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur cum rerum incidunt dolores quam minima consequuntur tenetur eum sit, deserunt, distinctio cumque ipsa aut quasi? Ducimus dolorem et corporis unde sed, quod maxime odio officiis quaerat odit eius repudiandae quae est debitis omnis sint fugiat vitae autem! Itaque, perspiciatis? Quo cumque doloribus consequatur quibusdam porro repudiandae voluptatem quidem quisquam tempora dolorem ipsa aut deserunt numquam, minus esse molestiae earum veniam animi possimus placeat optio quos qui a? Suscipit officiis in natus tempore cupiditate recusandae odio laboriosam alias voluptatem doloremque! Eos, ex dolorum voluptate sit labore dolor ad dolore cupiditate corporis accusantium culpa porro, aut perspiciatis quos laborum. Debitis assumenda inventore, at saepe quia ab quos maiores eum dolores excepturi dolorem consectetur molestias placeat eaque praesentium reprehenderit numquam quis! Velit laboriosam nesciunt rem tempora deleniti nulla cupiditate, aliquid unde in quisquam vitae qui ut ex animi consequuntur facilis illum amet suscipit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer Section -->

@endsection