<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bug Masters, LLC Murray, KY | Our Services</title>
	<link rel="shortcut icon" type="image/png" href="../../assets/images/favicon.png"/>
	<meta name="description" content="Bug Masters provides pest control, termite treatment, moisture barrier installation, and other services in Murray, KY. Quality service at quality prices." />
	<meta name="keywords" content="pest control, termite treatment, murray ky, bug masters, moisture barrier" />
	<meta name="robots" content="index, follow" />

	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="../../assets/css/style.css">
	
	<!-- Font Awesome Pro -->
	<script src="https://kit.fontawesome.com/0eb93f6154.js" crossorigin="anonymous"></script>
  </head>
  <body>
	<div class="container">
	   <?php include '../template/header.html'; ?>
	
	   <?php include '../template/nav.html'; ?>
	   
	   <div class="row">
		   <div class="col">
				<div class="header-container">
					<h1 class="header-red-banner">Services</h1>
				</div>           
			</div>
	   </div>
	
	   <div class="row justify-content-center home-main py-4">
		   <div class="col">
			   <div class="row mb-4">
					<div class="col-lg-8 col-md-10 mx-auto text-center">
						<h2 class="mb-3">We Target Your Bugs, Not Your Wallet!</h2>
						<p class="lead">Bug Masters is here to defend and protect your home with quality services at quality prices.</p>
					</div>
				</div>
				
				<!-- Hero Section -->
				<div class="row mb-5 align-items-center">
					<div class="col-lg-5 mb-4 mb-lg-0">
						<img src="../../assets/images/van.JPG" class="img-fluid rounded shadow" alt="Bug Masters Service Van">
					</div>
				
					<div class="col-lg-7">
						<div class="card border-0 bg-light">
							<div class="card-body p-4">
								<h3 class="h4 mb-3"><i class="fa-solid fa-shield-check text-primary me-2"></i>Professional Pest Solutions</h3>
								<p>We offer a multitude of services with a state-of-the-art approach to identifying and treating the root of your pest problem. You can count on our Bug Masters to investigate, determine a solution for your problem, target your pests and protect your property.</p>
								
								<div class="mt-4">
									<a href="../contact-us/" class="btn btn-danger mb-3">
										<i class="fa-solid fa-phone me-2"></i>Contact Us Today
									</a>
									<a href="tel:270-761-2847" class="btn btn-outline-primary ms-2">
										<i class="fa-solid fa-phone-volume me-2"></i>Call Now
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Service Categories -->
				<!-- Replace the current filter buttons with this responsive version -->
				<div class="row mb-4">
					<div class="col-12 text-center">
						<h2 class="mb-2">Our Services</h2>
						<p class="text-muted mb-4">Click on each service to learn more about how we can help</p>
						
						<!-- Responsive filter buttons -->
						<div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
							<button class="btn btn-primary mb-2" id="btn-all">All Services</button>
							<button class="btn btn-outline-primary mb-2" id="btn-pest">Pest Control</button>
							<button class="btn btn-outline-primary mb-2" id="btn-termite">Termite</button>
							<button class="btn btn-outline-primary mb-2" id="btn-moisture">Moisture</button>
							<button class="btn btn-outline-primary mb-2" id="btn-structural">Structural</button>
						</div>
					</div>
				</div>
				
				<div class="services-cont">
					<!-- Service Cards -->
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
						<!-- Quarterly Pest Control -->
						<div class="col service-card" data-category="pest">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-primary text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-spray-can fa-fw me-2"></i>Quarterly Pest Control
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-primary me-1">Interior</span>
										<span class="badge bg-primary me-1">Exterior</span>
										<span class="badge bg-success">Guaranteed</span>
									</div>
									
									<p class="card-text">Provides service covering ants, crickets, roaches, silverfish, fleas, water bugs and more. Baiting for mice and rats is also provided per request.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Complete indoor treatment</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Exterior perimeter protection</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Only $50.00 per quarter</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Same service available for one-time treatment</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-primary w-100">
										<i class="fa-solid fa-calendar-check me-2"></i>Schedule Service
									</a>
								</div>
							</div>
						</div>
						
						<!-- Commercial Pest Control -->
						<div class="col service-card" data-category="pest">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-primary text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-building fa-fw me-2"></i>Commercial Pest Control
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-primary me-1">Businesses</span>
										<span class="badge bg-info me-1">Customized</span>
										<span class="badge bg-success">Flexible Schedule</span>
									</div>
									
									<p class="card-text">Professional pest management solutions for businesses of all types. Treatment service provided monthly or bi-monthly, available on your schedule.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Tailored to your business needs</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Discreet service options</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Maintenance programs available</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Compliance documentation provided</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-primary w-100">
										<i class="fa-solid fa-file-contract me-2"></i>Request Quote
									</a>
								</div>
							</div>
						</div>
						
						<!-- Termite Treatment -->
						<div class="col service-card" data-category="termite">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-danger text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-house-chimney fa-fw me-2"></i>Termite Treatment
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-danger me-1">Protection</span>
										<span class="badge bg-warning me-1">Non-Invasive</span>
										<span class="badge bg-info">Contract Available</span>
									</div>
									
									<p class="card-text">We specialize in the non-evasive treatment offered by Termidor S.C. Perimeter Plus. This allows the applicator to avoid drilling the interior and exterior coverings of your home.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>No drilling of interior walls in most cases</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Effective termite elimination</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Comprehensive contract provided</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Protects your biggest investment</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-danger w-100">
										<i class="fa-solid fa-clipboard-check me-2"></i>Free Inspection
									</a>
								</div>
							</div>
						</div>
						
						<!-- Pre-Construction Treatment -->
						<div class="col service-card" data-category="termite">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-danger text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-hammer fa-fw me-2"></i>Pre-Construction Treatment
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-danger me-1">Prevention</span>
										<span class="badge bg-success me-1">Cost-Effective</span>
										<span class="badge bg-info">New Construction</span>
									</div>
									
									<p class="card-text">If you are building a new home this is the least expensive and the best time to place a protective barrier for your home. The termiticide is applied to areas that will be enclosed forever.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Applied during construction phase</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Most effective prevention method</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Lower cost than post-construction treatment</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Coordination with your builder</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-danger w-100">
										<i class="fa-solid fa-calculator me-2"></i>Get Estimate
									</a>
								</div>
							</div>
						</div>
						
						<!-- Mold and Fungus Treatment -->
						<div class="col service-card" data-category="moisture">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-info text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-droplet fa-fw me-2"></i>Mold & Fungus Treatment
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-info me-1">Health</span>
										<span class="badge bg-warning me-1">Structural</span>
										<span class="badge bg-secondary">Moisture Control</span>
									</div>
									
									<p class="card-text">Mold and Fungus is a major destroyer of your homes structural soundness and value. We provide comprehensive treatment with proper ventilation and moisture barriers.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Effective mold elimination</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Improved air quality</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Protection of structural elements</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Complete assessment included</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-info w-100">
										<i class="fa-solid fa-search me-2"></i>Schedule Inspection
									</a>
								</div>
							</div>
						</div>
						
						<!-- Moisture Barrier Installation -->
						<div class="col service-card" data-category="moisture">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-info text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-shield fa-fw me-2"></i>Moisture Barrier Installation
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-info me-1">Protection</span>
										<span class="badge bg-warning me-1">Preventative</span>
										<span class="badge bg-secondary">Home Value</span>
									</div>
									
									<p class="card-text">A moisture barrier is a material that stops the flow of moisture. It's installed to stop the capillary rise of moisture in the soil from becoming airborne vapor.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Prevents structural damage</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Protects insulation effectiveness</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Prevents paint blistering</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Reduces pest-friendly conditions</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-info w-100">
										<i class="fa-solid fa-ruler me-2"></i>Free Quote
									</a>
								</div>
							</div>
						</div>
						
						<!-- Temp-Vents -->
						<div class="col service-card" data-category="moisture">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-info text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-temperature-low fa-fw me-2"></i>Temp-Vents
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-info me-1">Ventilation</span>
										<span class="badge bg-success me-1">Energy Saving</span>
										<span class="badge bg-warning">Automatic</span>
									</div>
									
									<p class="card-text">Ventilation is the main defense against excess moisture and foundation decay. Temp-Vents automatically open at 70°F and close at 40°F with no electricity needed.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Prevents frozen pipes</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>No electricity required</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Temperature-controlled operation</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Reduces utility costs</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-info w-100">
										<i class="fa-solid fa-fan me-2"></i>Learn More
									</a>
								</div>
							</div>
						</div>
						
						<!-- Floor Supports -->
						<div class="col service-card" data-category="structural">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-secondary text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-house-circle-check fa-fw me-2"></i>Floor Supports
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-secondary me-1">Structural</span>
										<span class="badge bg-warning me-1">Repair</span>
										<span class="badge bg-success">Value Protection</span>
									</div>
									
									<p class="card-text">Bug Masters can professionally install floor supports to remedy the settling of your home. Sagging floor joists will cost you thousands of dollars in damage if left unattended.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Stops further settling</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Restores floor stability</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Professional installation</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Prevents costly future repairs</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-secondary w-100">
										<i class="fa-solid fa-home-alt me-2"></i>Request Assessment
									</a>
								</div>
							</div>
						</div>
						
						<!-- Structural Repair -->
						<div class="col service-card" data-category="structural">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-secondary text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-screwdriver-wrench fa-fw me-2"></i>Structural Repair
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-secondary me-1">Repair</span>
										<span class="badge bg-danger me-1">Damage</span>
										<span class="badge bg-warning">Restoration</span>
									</div>
									
									<p class="card-text">Pests and mold can cause structural damage to your home or business. You can trust that Bug Masters will offer repair services to put your property back in order.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Expert assessment</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Quality repairs</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Preventative recommendations</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Comprehensive solutions</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-secondary w-100">
										<i class="fa-solid fa-tools me-2"></i>Schedule Consultation
									</a>
								</div>
							</div>
						</div>
						
						<!-- Access Doors -->
						<div class="col service-card" data-category="structural">
							<div class="card h-100 border-0 shadow-sm">
								<div class="card-header bg-secondary text-white py-3">
									<h3 class="card-title h5 mb-0">
										<i class="fa-solid fa-door-open fa-fw me-2"></i>Access Doors
									</h3>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<span class="badge bg-secondary me-1">Installation</span>
										<span class="badge bg-primary me-1">Replacement</span>
										<span class="badge bg-info">Access</span>
									</div>
									
									<p class="card-text">Bug Masters offers installation of replacement access doors for crawl spaces and vent wells where the vents are actually located at or below the exterior grade.</p>
									
									<ul class="list-unstyled mb-3">
										<li><i class="fa-solid fa-check text-success me-2"></i>Improved access</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Better pest prevention</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Weather-resistant options</li>
										<li><i class="fa-solid fa-check text-success me-2"></i>Professional installation</li>
									</ul>
								</div>
								<div class="card-footer bg-transparent border-0 pb-3">
									<a href="../contact-us/" class="btn btn-outline-secondary w-100">
										<i class="fa-solid fa-door-open me-2"></i>Get Details
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Call to Action -->
				<div class="row mt-5">
					<div class="col-lg-8 mx-auto">
						<div class="card bg-light border-0 shadow">
							<div class="card-body p-4 text-center">
								<h3 class="mb-3">Ready to Get Started?</h3>
								<p class="mb-4">Contact Bug Masters today for a free consultation about any of our services. We're here to help protect your home and property.</p>
								<div class="d-flex flex-wrap justify-content-center gap-3">
									<a href="../contact-us/" class="btn btn-danger">
										<i class="fa-solid fa-envelope me-2"></i>Contact Us
									</a>
									<a href="tel:270-761-2847" class="btn btn-outline-primary">
										<i class="fa-solid fa-phone me-2"></i>270-761-BUGS
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	   </div>
		   
	   <?php include '../template/footer.php'; ?>
	</div>

	<!-- Bootstrap 5 JS Bundle -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	
	<!-- Custom JS for category filtering -->
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Get all filter buttons
			const filterButtons = document.querySelectorAll('#btn-all, #btn-pest, #btn-termite, #btn-moisture, #btn-structural');
			
			// Get all service cards
			const serviceCards = document.querySelectorAll('.service-card');
			
			// Add click event to each filter button
			filterButtons.forEach(button => {
				button.addEventListener('click', function() {
					// Remove active class from all buttons
					filterButtons.forEach(btn => {
						btn.classList.remove('btn-primary');
						btn.classList.add('btn-outline-primary');
					});
					
					// Add active class to clicked button
					this.classList.remove('btn-outline-primary');
					this.classList.add('btn-primary');
					
					// Get the category to filter by
					const category = this.id.replace('btn-', '');
					
					// Show/hide cards based on category
					serviceCards.forEach(card => {
						if (category === 'all' || card.dataset.category === category) {
							card.style.display = 'block';
						} else {
							card.style.display = 'none';
						}
					});
				});
			});
		});
	</script>
  </body>
</html>