<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bug Masters, LLC Murray, KY | Pest Library</title>
	<link rel="shortcut icon" type="image/png" href="../../assets/images/favicon.png"/>
	<meta name="description" content="Browse Bug Masters' pest library to identify common household pests in Murray, KY. Learn about ants, termites, roaches, spiders, and more." />
	<meta name="keywords" content="pest library, common pests, murray ky, bug masters, termites, ants" />
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
					<h1 class="header-red-banner">Pest Library</h1>
				</div>           
			</div>
	   </div>
	
	   <div class="row justify-content-center home-main py-4">
		   <div class="col-lg-10">
				<div class="text-center mb-5">
					<h2>Common Household Pests</h2>
					<p class="lead">Knowledge is your first line of defense against pests. Learn about the common household pests in our area.</p>
				</div>
				
				<!-- Pest Library Cards -->
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
					<!-- Termites -->
					<div class="col">
						<div class="card h-100 border-0 shadow-sm">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<i class="fa-solid fa-bugs fa-2x text-danger me-3"></i>
									<h3 class="card-title h4 mb-0">Termites</h3>
								</div>
								<p class="card-text">Termites are wood-destroying insects that can cause significant structural damage to homes. They feed on cellulose found in wood and other building materials.</p>
								<div class="mt-3">
									<span class="badge bg-danger me-2">Wood Destroyers</span>
									<span class="badge bg-secondary">Colony Insects</span>
								</div>
							</div>
							<div class="card-footer bg-transparent border-0 pb-3">
								<button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#termiteModal">
									<i class="fa-solid fa-info-circle me-2"></i>Learn More
								</button>
							</div>
						</div>
					</div>
					
					<!-- Ants -->
					<div class="col">
						<div class="card h-100 border-0 shadow-sm">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<i class="fa-solid fa-ant fa-2x text-danger me-3"></i>
									<h3 class="card-title h4 mb-0">Ants</h3>
								</div>
								<p class="card-text">Ants are social insects that live in colonies. While most species are merely a nuisance, some, like carpenter ants, can cause structural damage to homes.</p>
								<div class="mt-3">
									<span class="badge bg-danger me-2">Food Contaminators</span>
									<span class="badge bg-secondary">Colony Insects</span>
								</div>
							</div>
							<div class="card-footer bg-transparent border-0 pb-3">
								<button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#antModal">
									<i class="fa-solid fa-info-circle me-2"></i>Learn More
								</button>
							</div>
						</div>
					</div>
					
					<!-- Cockroaches -->
					<div class="col">
						<div class="card h-100 border-0 shadow-sm">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<i class="fa-solid fa-bug fa-2x text-danger me-3"></i>
									<h3 class="card-title h4 mb-0">Cockroaches</h3>
								</div>
								<p class="card-text">Cockroaches are known for their resilience and ability to survive in various environments. They can spread bacteria and trigger allergies and asthma.</p>
								<div class="mt-3">
									<span class="badge bg-danger me-2">Disease Carriers</span>
									<span class="badge bg-secondary">Allergen Source</span>
								</div>
							</div>
							<div class="card-footer bg-transparent border-0 pb-3">
								<button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#roachModal">
									<i class="fa-solid fa-info-circle me-2"></i>Learn More
								</button>
							</div>
						</div>
					</div>
					
					<!-- Spiders -->
					<div class="col">
						<div class="card h-100 border-0 shadow-sm">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<i class="fa-solid fa-spider fa-2x text-danger me-3"></i>
									<h3 class="card-title h4 mb-0">Spiders</h3>
								</div>
								<p class="card-text">While most spiders are harmless and beneficial predators of other pests, some species like the black widow and brown recluse can be dangerous to humans.</p>
								<div class="mt-3">
									<span class="badge bg-danger me-2">Potentially Venomous</span>
									<span class="badge bg-success">Natural Pest Control</span>
								</div>
							</div>
							<div class="card-footer bg-transparent border-0 pb-3">
								<button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#spiderModal">
									<i class="fa-solid fa-info-circle me-2"></i>Learn More
								</button>
							</div>
						</div>
					</div>
					
					<!-- Bed Bugs -->
					<div class="col">
						<div class="card h-100 border-0 shadow-sm">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<i class="fa-solid fa-bed fa-2x text-danger me-3"></i>
									<h3 class="card-title h4 mb-0">Bed Bugs</h3>
								</div>
								<p class="card-text">Bed bugs are small, parasitic insects that feed on the blood of humans and animals. They're known for being difficult to eradicate once established in a home.</p>
								<div class="mt-3">
									<span class="badge bg-danger me-2">Blood Feeders</span>
									<span class="badge bg-secondary">Difficult to Eliminate</span>
								</div>
							</div>
							<div class="card-footer bg-transparent border-0 pb-3">
								<button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#bedbugModal">
									<i class="fa-solid fa-info-circle me-2"></i>Learn More
								</button>
							</div>
						</div>
					</div>
					
					<!-- Rodents -->
					<div class="col">
						<div class="card h-100 border-0 shadow-sm">
							<div class="card-body">
								<div class="d-flex align-items-center mb-3">
									<i class="fa-solid fa-mouse-field fa-2x text-danger me-3"></i>
									<h3 class="card-title h4 mb-0">Rodents</h3>
								</div>
								<p class="card-text">Mice and rats can damage property by gnawing on structures and wiring. They can also contaminate food and spread diseases through their droppings and urine.</p>
								<div class="mt-3">
									<span class="badge bg-danger me-2">Disease Carriers</span>
									<span class="badge bg-secondary">Property Damagers</span>
								</div>
							</div>
							<div class="card-footer bg-transparent border-0 pb-3">
								<button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#rodentModal">
									<i class="fa-solid fa-info-circle me-2"></i>Learn More
								</button>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Call to Action -->
				<div class="card bg-light border-0 shadow-sm mb-4">
					<div class="card-body p-4 text-center">
						<h3 class="mb-3">Dealing with a Pest Problem?</h3>
						<p>Our expert technicians can identify and treat any pest infestation in your home or business.</p>
						<a href="../contact-us/" class="btn btn-danger">
							<i class="fa-solid fa-phone me-2"></i>Contact Us Today
						</a>
					</div>
				</div>
				
				<!-- Pest Prevention Tips -->
				<div class="mb-5">
					<h3 class="mb-4 text-center">Pest Prevention Tips</h3>
					<div class="row row-cols-1 row-cols-md-2 g-4">
						<div class="col">
							<div class="d-flex">
								<div class="flex-shrink-0">
									<i class="fa-solid fa-broom fa-2x text-primary"></i>
								</div>
								<div class="ms-3">
									<h4 class="h5">Keep Your Home Clean</h4>
									<p>Regularly clean floors, countertops, and other surfaces to eliminate food residue that attracts pests.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="d-flex">
								<div class="flex-shrink-0">
									<i class="fa-solid fa-trash-can fa-2x text-primary"></i>
								</div>
								<div class="ms-3">
									<h4 class="h5">Manage Waste Properly</h4>
									<p>Keep trash in sealed containers and dispose of it regularly to prevent attracting pests.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="d-flex">
								<div class="flex-shrink-0">
									<i class="fa-solid fa-house-chimney fa-2x text-primary"></i>
								</div>
								<div class="ms-3">
									<h4 class="h5">Seal Entry Points</h4>
									<p>Inspect your home for cracks, gaps, and holes that pests can use to enter, and seal them properly.</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="d-flex">
								<div class="flex-shrink-0">
									<i class="fa-solid fa-droplet-slash fa-2x text-primary"></i>
								</div>
								<div class="ms-3">
									<h4 class="h5">Control Moisture</h4>
									<p>Fix leaky pipes and eliminate standing water to reduce habitats for moisture-loving pests.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	   </div>
		   
	   <?php include '../template/footer.php'; ?>
	</div>
	
	<!-- MODALS -->
	
	<!-- Termite Modal -->
	<div class="modal fade" id="termiteModal" tabindex="-1" aria-labelledby="termiteModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-danger text-white">
					<h5 class="modal-title" id="termiteModalLabel"><i class="fa-solid fa-bugs me-2"></i>Termites</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<img src="../../assets/images/library/termite.jpg" class="img-fluid rounded mb-3" alt="Termite">
						</div>
						<div class="col-md-8">
							<h4>About Termites</h4>
							<p>Termites are small, pale insects that feed on wood and other cellulose materials. They live in colonies that can number in the millions and are one of the most destructive pests to homes and buildings.</p>
							
							<h5 class="mt-3">Signs of Infestation</h5>
							<ul>
								<li>Mud tubes on exterior walls, wooden beams, or in crawl spaces</li>
								<li>Hollow-sounding wood when tapped</li>
								<li>Crumbling or damaged wood structures</li>
								<li>Discarded wings near windowsills or door frames</li>
								<li>Swarms of winged termites, typically in spring</li>
							</ul>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col-12">
							<h5>Types of Termites</h5>
							<p>There are several types of termites that may infest homes in our area:</p>
							
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead class="table-light">
										<tr>
											<th>Type</th>
											<th>Description</th>
											<th>Damage Potential</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Subterranean Termites</td>
											<td>Most common type; build mud tubes; nest in soil</td>
											<td>Very high; can collapse structures if left untreated</td>
										</tr>
										<tr>
											<td>Drywood Termites</td>
											<td>Live entirely in wood; don't require contact with soil</td>
											<td>Moderate to high; damage occurs more slowly</td>
										</tr>
										<tr>
											<td>Formosan Termites</td>
											<td>Aggressive subterranean species; larger colonies</td>
											<td>Extremely high; can destroy structures rapidly</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<h5 class="mt-4">Treatment Options</h5>
							<p>Bug Masters offers comprehensive termite control services including:</p>
							<ul>
								<li>Termidor SC Perimeter Plus treatments</li>
								<li>Pre-construction treatments for new builds</li>
								<li>Termite baiting systems</li>
								<li>Annual termite inspections</li>
							</ul>
							
							<div class="alert alert-warning mt-3">
								<i class="fa-solid fa-triangle-exclamation me-2"></i>Early detection is crucial! Most homeowner's insurance policies <strong>do not cover</strong> termite damage.
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<a href="../contact-us/" class="btn btn-danger">Contact Us for Inspection</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Ant Modal -->
	<div class="modal fade" id="antModal" tabindex="-1" aria-labelledby="antModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-danger text-white">
					<h5 class="modal-title" id="antModalLabel"><i class="fa-solid fa-ant me-2"></i>Ants</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<img src="../../assets/images/library/ant.jpg" class="img-fluid rounded mb-3" alt="Ant">
						</div>
						<div class="col-md-8">
							<h4>About Ants</h4>
							<p>Ants are social insects that live in organized colonies. While they play important roles in ecosystems, certain species can become household pests when they invade homes in search of food or shelter.</p>
							
							<h5 class="mt-3">Signs of Infestation</h5>
							<ul>
								<li>Visible ant trails in or around your home</li>
								<li>Small piles of dirt or sand near cracks in concrete</li>
								<li>Wood shavings (with carpenter ants)</li>
								<li>Food contamination</li>
							</ul>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col-12">
							<h5>Common Ant Species</h5>
							
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead class="table-light">
										<tr>
											<th>Species</th>
											<th>Description</th>
											<th>Concerns</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Carpenter Ants</td>
											<td>Large black or red ants; nest in wood</td>
											<td>Can damage wooden structures</td>
										</tr>
										<tr>
											<td>Odorous House Ants</td>
											<td>Small brown or black ants; emit smell when crushed</td>
											<td>Food contamination</td>
										</tr>
										<tr>
											<td>Pavement Ants</td>
											<td>Small dark ants; nest under pavement</td>
											<td>Food contamination</td>
										</tr>
										<tr>
											<td>Fire Ants</td>
											<td>Reddish ants; build mounds; aggressive</td>
											<td>Painful stings; can cause allergic reactions</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<h5 class="mt-4">Treatment Options</h5>
							<p>Bug Masters offers effective ant control services including:</p>
							<ul>
								<li>Interior and exterior treatments</li>
								<li>Targeted baiting systems</li>
								<li>Nest removal</li>
								<li>Preventative treatments</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<a href="../contact-us/" class="btn btn-danger">Contact Us for Treatment</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Cockroach Modal -->
	<div class="modal fade" id="roachModal" tabindex="-1" aria-labelledby="roachModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-danger text-white">
					<h5 class="modal-title" id="roachModalLabel"><i class="fa-solid fa-bug me-2"></i>Cockroaches</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<img src="../../assets/images/library/cockroach.jpg" class="img-fluid rounded mb-3" alt="Cockroach">
						</div>
						<div class="col-md-8">
							<h4>About Cockroaches</h4>
							<p>Cockroaches are highly adaptable insects that have been around for millions of years. They are nocturnal, omnivorous, and can survive in almost any environment. Cockroaches are known carriers of bacteria and pathogens that can cause disease.</p>
							
							<h5 class="mt-3">Signs of Infestation</h5>
							<ul>
								<li>Live or dead roaches visible in your home</li>
								<li>Small, dark droppings that resemble coffee grounds or pepper</li>
								<li>Egg casings (oothecae) in hidden areas</li>
								<li>A musty, oily odor in heavily infested areas</li>
								<li>Smear marks along walls where roaches travel regularly</li>
							</ul>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col-12">
							<h5>Common Cockroach Species</h5>
							
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead class="table-light">
										<tr>
											<th>Species</th>
											<th>Description</th>
											<th>Habitat</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>German Cockroach</td>
											<td>Small (0.5"), light brown with two dark stripes</td>
											<td>Prefers warm, humid areas like kitchens and bathrooms</td>
										</tr>
										<tr>
											<td>American Cockroach</td>
											<td>Large (1.5"-2"), reddish-brown</td>
											<td>Typically found in basements, sewers, and drains</td>
										</tr>
										<tr>
											<td>Oriental Cockroach</td>
											<td>Medium (1"), dark brown to black, slower moving</td>
											<td>Prefers cool, damp areas like crawl spaces</td>
										</tr>
										<tr>
											<td>Brown-Banded Cockroach</td>
											<td>Small (0.5"), light brown with bands across wings</td>
											<td>Prefers warmer, drier areas; often found in electronics</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<h5 class="mt-4">Health Concerns</h5>
							<p>Cockroaches pose several health risks, including:</p>
							<ul>
								<li>Triggering asthma and allergies, especially in children</li>
								<li>Spreading bacteria like Salmonella and E. coli</li>
								<li>Contaminating food and food preparation surfaces</li>
								<li>Carrying parasitic worms</li>
							</ul>
							
							<h5 class="mt-4">Treatment Options</h5>
							<p>Bug Masters offers comprehensive cockroach control services including:</p>
							<ul>
								<li>Targeted treatments for infested areas</li>
								<li>Gel baits and insect growth regulators</li>
								<li>Preventative treatments</li>
								<li>Follow-up monitoring and maintenance</li>
							</ul>
							
							<div class="alert alert-warning mt-3">
								<i class="fa-solid fa-triangle-exclamation me-2"></i>Cockroaches can reproduce quickly. A single female German cockroach and her offspring can produce up to 30,000 roaches in a year!
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<a href="../contact-us/" class="btn btn-danger">Contact Us for Treatment</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Spider Modal -->
	<div class="modal fade" id="spiderModal" tabindex="-1" aria-labelledby="spiderModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-danger text-white">
					<h5 class="modal-title" id="spiderModalLabel"><i class="fa-solid fa-spider me-2"></i>Spiders</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<img src="../../assets/images/library/spider.jpg" class="img-fluid rounded mb-3" alt="Spider">
						</div>
						<div class="col-md-8">
							<h4>About Spiders</h4>
							<p>Spiders are arachnids, not insects, characterized by eight legs and the ability to produce silk. While most spiders are beneficial predators that control other pest populations, some species can be concerning when they establish themselves in homes.</p>
							
							<h5 class="mt-3">Signs of Spider Activity</h5>
							<ul>
								<li>Visible spiders in your home</li>
								<li>Cobwebs in corners, ceilings, and other undisturbed areas</li>
								<li>Egg sacs (small silk sacs containing eggs)</li>
								<li>Small insect carcasses near webs</li>
							</ul>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col-12">
							<h5>Common Spider Species in Our Area</h5>
							
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead class="table-light">
										<tr>
											<th>Species</th>
											<th>Description</th>
											<th>Risk Level</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>House Spider</td>
											<td>Small (0.25"), tan or brown with spotted abdomen</td>
											<td>Harmless, beneficial predator</td>
										</tr>
										<tr>
											<td>Wolf Spider</td>
											<td>Medium to large, brown, fast-moving hunting spider</td>
											<td>Low risk, painful but non-toxic bite</td>
										</tr>
										<tr>
											<td>Black Widow</td>
											<td>Black with red hourglass marking on abdomen</td>
											<td>High risk, seek medical attention if bitten</td>
										</tr>
										<tr>
											<td>Brown Recluse</td>
											<td>Light brown with violin-shaped marking</td>
											<td>High risk, seek medical attention if bitten</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<div class="row mt-4">
								<div class="col-md-6">
									<h5>Benefits of Spiders</h5>
									<p>While often feared, most spiders provide several benefits:</p>
									<ul>
										<li>Control other pest populations</li>
										<li>Reduce disease-carrying insects</li>
										<li>Serve as indicators of overall ecosystem health</li>
										<li>Most are harmless to humans</li>
									</ul>
								</div>
								
								<div class="col-md-6">
									<h5>When to Be Concerned</h5>
									<p>Spider control may be necessary when:</p>
									<ul>
										<li>Venomous species are identified in your home</li>
										<li>Spider populations become excessive</li>
										<li>Family members have arachnophobia</li>
										<li>Webs become unsightly or intrusive</li>
									</ul>
								</div>
							</div>
							
							<h5 class="mt-4">Treatment Options</h5>
							<p>Bug Masters offers spider control services including:</p>
							<ul>
								<li>Targeted removal of dangerous species</li>
								<li>Perimeter treatments</li>
								<li>Web removal</li>
								<li>Prevention and exclusion measures</li>
							</ul>
							
							<div class="alert alert-info mt-3">
								<i class="fa-solid fa-circle-info me-2"></i>If you find a spider in your home, try to capture it safely for identification rather than killing it immediately. Most spiders are beneficial and harmless!
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<a href="../contact-us/" class="btn btn-danger">Contact Us for Treatment</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Bed Bug Modal -->
	<div class="modal fade" id="bedbugModal" tabindex="-1" aria-labelledby="bedbugModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-danger text-white">
					<h5 class="modal-title" id="bedbugModalLabel"><i class="fa-solid fa-bed me-2"></i>Bed Bugs</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<img src="../../assets/images/library/bedbug.jpg" class="img-fluid rounded mb-3" alt="Bed Bug">
						</div>
						<div class="col-md-8">
							<h4>About Bed Bugs</h4>
							<p>Bed bugs are small, oval, brownish insects that feed exclusively on blood. Adult bed bugs have flat bodies about the size of an apple seed. After feeding, their bodies swell and become reddish. They do not fly, but can move quickly over floors, walls, and ceilings.</p>
							
							<h5 class="mt-3">Signs of Infestation</h5>
							<ul>
								<li>Rusty or reddish stains on bed sheets or mattresses (crushed bed bugs)</li>
								<li>Dark spots (about the size of a period) which is bed bug excrement</li>
								<li>Eggs and eggshells, which are tiny (about 1mm) and pale yellow</li>
								<li>Live bed bugs</li>
								<li>Itchy welts on skin, often in a line or cluster</li>
								<li>Sweet, musty odor in heavily infested areas</li>
							</ul>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col-12">
							<h5>Bed Bug Life Cycle</h5>
							<p>Understanding the bed bug life cycle is important for effective treatment:</p>
							
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead class="table-light">
										<tr>
											<th>Stage</th>
											<th>Description</th>
											<th>Duration</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Eggs</td>
											<td>Pinhead-sized, pearly white</td>
											<td>6-10 days to hatch</td>
										</tr>
										<tr>
											<td>Nymphs</td>
											<td>5 immature stages, each requiring a blood meal to grow</td>
											<td>5 weeks (optimal conditions)</td>
										</tr>
										<tr>
											<td>Adults</td>
											<td>Apple seed-sized, can survive for months without feeding</td>
											<td>Lifespan of 6-12 months</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<div class="row mt-4">
								<div class="col-md-6">
									<h5>How Bed Bugs Spread</h5>
									<p>Bed bugs can be transported through:</p>
									<ul>
										<li>Used furniture</li>
										<li>Luggage and clothing after travel</li>
										<li>Purses and backpacks</li>
										<li>Adjacent apartments or hotel rooms</li>
										<li>Used clothing and soft goods</li>
									</ul>
								</div>
								
								<div class="col-md-6">
									<h5>Health Concerns</h5>
									<p>While bed bugs are not known to transmit diseases, they can cause:</p>
									<ul>
										<li>Skin rashes and allergic reactions</li>
										<li>Secondary infections from scratching bites</li>
										<li>Sleep loss and anxiety</li>
										<li>Psychological distress</li>
									</ul>
								</div>
							</div>
							
							<h5 class="mt-4">Treatment Options</h5>
							<p>Bug Masters offers comprehensive bed bug control services including:</p>
							<ul>
								<li>Thorough inspection and identification</li>
								<li>Heat treatments (bed bugs cannot survive temperatures above 120°F)</li>
								<li>Targeted chemical treatments</li>
								<li>Follow-up inspections</li>
								<li>Preventative advice and education</li>
							</ul>
							
							<div class="alert alert-danger mt-3">
								<i class="fa-solid fa-triangle-exclamation me-2"></i>Do not attempt to treat bed bugs yourself with over-the-counter products. This can spread the infestation and make professional treatment more difficult.
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<a href="../contact-us/" class="btn btn-danger">Contact Us for Treatment</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Rodent Modal -->
	<div class="modal fade" id="rodentModal" tabindex="-1" aria-labelledby="rodentModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header bg-danger text-white">
					<h5 class="modal-title" id="rodentModalLabel"><i class="fa-solid fa-mouse-field me-2"></i>Rodents</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-4">
							<img src="../assets/images/library/mouse.png" class="img-fluid rounded mb-3" alt="Mouse">
						</div>
						<div class="col-md-8">
							<h4>About Rodents</h4>
							<p>Rodents, particularly mice and rats, are common household pests that can cause significant damage to homes and pose health risks. They have continuously growing incisor teeth that require constant gnawing to keep them at a manageable length.</p>
							
							<h5 class="mt-3">Signs of Infestation</h5>
							<ul>
								<li>Droppings, especially near food sources or nesting areas</li>
								<li>Gnaw marks on food packaging, walls, electrical wiring, or furniture</li>
								<li>Scratching sounds in walls, ceilings, or under floors</li>
								<li>Nests made of shredded materials in secluded areas</li>
								<li>Tracks or runways (dark, greasy marks) along walls</li>
								<li>Unusual pet behavior, such as pawing at walls or cabinets</li>
							</ul>
						</div>
					</div>
					
					<div class="row mt-3">
						<div class="col-12">
							<h5>Common Rodent Pests</h5>
							
							<div class="table-responsive">
								<table class="table table-bordered">
									<thead class="table-light">
										<tr>
											<th>Species</th>
											<th>Description</th>
											<th>Habits</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>House Mouse</td>
											<td>Small (3-4"), dusty gray with cream belly, large ears</td>
											<td>Curious, good climbers, nest near food sources</td>
										</tr>
										<tr>
											<td>Norway Rat</td>
											<td>Large (7-9"), brown with shaggy coat, blunt nose</td>
											<td>Ground-dwellers, burrow near foundations, strong swimmers</td>
										</tr>
										<tr>
											<td>Roof Rat</td>
											<td>Medium (6-8"), sleek black/brown, pointed nose</td>
											<td>Excellent climbers, nest in upper parts of buildings</td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<div class="row mt-4">
								<div class="col-md-6">
									<h5>Health Risks</h5>
									<p>Rodents can pose several health risks, including:</p>
									<ul>
										<li>Spread of diseases through urine, droppings, and saliva</li>
										<li>Contamination of food and food preparation surfaces</li>
										<li>Trigger of allergies and asthma</li>
										<li>Introduction of parasites like fleas, ticks, and mites</li>
									</ul>
								</div>
								
								<div class="col-md-6">
									<h5>Property Damage</h5>
									<p>Rodents can cause significant damage to property:</p>
									<ul>
										<li>Gnawing on electrical wires (fire hazard)</li>
										<li>Damaging insulation and HVAC ducts</li>
										<li>Creating entry points through gnawing</li>
										<li>Damaging stored items and documents</li>
										<li>Weakening structural components through burrowing</li>
									</ul>
								</div>
							</div>
							
							<h5 class="mt-4">Treatment Options</h5>
							<p>Bug Masters offers comprehensive rodent control services including:</p>
							<ul>
								<li>Thorough inspection to identify entry points and nesting areas</li>
								<li>Exclusion services (sealing entry points)</li>
								<li>Trapping and removal</li>
								<li>Baiting programs</li>
								<li>Sanitation recommendations</li>
								<li>Follow-up monitoring</li>
							</ul>
							
							<div class="alert alert-warning mt-3">
								<i class="fa-solid fa-triangle-exclamation me-2"></i>A female mouse can have 5-10 litters per year with 5-6 young per litter. This means a single mouse can lead to an infestation of dozens within months!
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<a href="../contact-us/" class="btn btn-danger">Contact Us for Treatment</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap 5 JS Bundle -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </body>
</html>