<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bug Masters, LLC Murray, KY | Home</title>
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png"/>
	<meta name="description" content="Bug Masters, LLC provides quality termite and pest control services in Murray, KY since 2007." />
	<meta name="keywords" content="pest control, termite control, Murray KY, Bug Masters" />
	<meta name="robots" content="index, follow" />

	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	<!-- Font Awesome Pro -->
	<script src="https://kit.fontawesome.com/0eb93f6154.js" crossorigin="anonymous"></script>
  </head>
  <body>
	<div class="container">
		<!-- PHP includes for header and nav remain the same -->
		<?php include 'template/header.html'; ?>
		<?php include 'template/nav.html'; ?>
	   
		<!-- Slider - modernized with accessibility improvements -->
		<div class="row">
			<div class="col">
				<div class="swiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide sl-one">
							<h2 class="sl-white-banner">Locally Owned and Operated</h2>
							<p class="sl-red-banner">Offering the best service for the best price since 2007</p>
						</div>
						<div class="swiper-slide sl-two">
							<h2 class="sl-white-banner"> What's <span class="red-text">Bugging</span> You?</h2>
							<a href="https://bugmastersmurray.com/pest-library/" class="btn banner-btn" role="button">Check Our Pest Library</a>
						</div>
						<div class="swiper-slide sl-three">
							<h2 class="sl-white-banner">Termites can do irreparable damage to your home</h2>
							<p class="sl-red-banner">Bug Masters can help. Call today for your free termite inspection.</p>
						</div>
					</div>
					
					<!-- Modern pagination -->
					<div class="swiper-pagination"></div>
					
					<!-- Navigation buttons -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>           
			</div>
		</div>
	
		<!-- Begin Body Content - improved responsive layout -->
		<div class="row justify-content-center home-main">
			<div class="col">
				<h1 class="text-center mb-4">Welcome to Bug Masters, <small>LLC</small></h1>
				
				<div class="row">
					<div class="col-md-6 col-12 mb-3">
						<p>Bug Masters, LLC was founded in 2007 in Murray, KY. We are owned and operated by Johnny Hutching and Shane Cox. We provide quality termite and pest control services. At Bug Masters, we understand how important it is to keep ants, spiders, rodents, bed bugs and other common pests from your home or business.</p>

						<p>With over thirty-seven years of combined experience, we know how to inspect your home, property or place of business thoroughly, evaluate what we find and pinpoint exactly what we need to do to keep you pest free and worry free.</p>

						<p>We pride ourselves in providing quality service at a quality price. We have personally experienced the emphasis placed on managers, salespersons, and even the technicians to get every penny they can from you, and at Bug Masters, we try not to push you into a product or service that you don't need or want. Our unique and progressive approach of "Targeting Your Bugs, Not Your Wallet" is how we really feel!</p>

						<p>Bug Masters is putting honesty and integrity back into the pest control industry!</p>
					</div>
					<div class="col-md-6 col-12">
						<img src="assets/images/building-sign.JPG" class="img-fluid rounded" alt="Bug Masters Building Sign">
					</div>
				</div>
			</div>
		</div>
					   
		<?php include 'template/footer.php'; ?>
	</div>

	<!-- Bootstrap 5 JS Bundle -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	
	<!-- Initialize Swiper -->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			const swiper = new Swiper('.swiper', {
				// Modern configuration
				loop: true,
				autoplay: {
					delay: 6000,
					disableOnInteraction: false,
				},
				speed: 500,
				
				// Pagination
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				},
				
				// Navigation arrows
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
				
				// Accessibility
				a11y: {
					prevSlideMessage: 'Previous slide',
					nextSlideMessage: 'Next slide',
				},
			});
		});
	</script>  
  </body>
</html>