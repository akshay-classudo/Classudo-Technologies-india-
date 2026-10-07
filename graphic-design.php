<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <?php include './partials/head.php'?>
</head>
<body>
    <?php include './partials/preloader.php'?>
    <?php include './partials/header.php'?>

<div class="curser"></div>
<div class="curser2"></div>

<!-- ================================================== -->
<!-- 1. Semantic Breadcrumbs & Hero Section -->
<!-- ================================================== -->
<div class="hero-crumb-bar bg-light border-bottom py-2">
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb m-0" style="font-size: 13px; font-family: 'Poppins', sans-serif;">
				<li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Home</a></li>
				<li class="breadcrumb-item"><a href="service.php" class="text-decoration-none text-muted">Services</a></li>
				<li class="breadcrumb-item active fw-semibold" style="color: #f7764c;" aria-current="page">Graphic Design Services</li>
			</ol>
		</nav>
	</div>
</div>

<div class="about-area py-5 position-relative">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="section-title text-left">
					<div class="d-inline-flex align-items-center px-3 py-1 mb-3 rounded-pill bg-danger bg-opacity-10 text-danger fw-semibold" style="font-size: 13px; font-family: 'Poppins', sans-serif;">
						<i class="fas fa-paint-brush me-2"></i> CREATIVE DESIGN SERVICES
					</div>
					<h1 class="section-main-title fw-bold text-dark" style="font-size: 40px; line-height: 1.2;">
						Graphic Design Services That Make Your Brand <span>Stand Out</span>
					</h1>
					<p class="section-title-descr mt-3 text-muted" style="font-size: 16px; line-height: 1.6;">
						From logos and brand identity to social media creatives, packaging, and marketing collateral, Classudo creates high-impact designs that help businesses communicate, connect, and convert.
					</p>
				</div>
				<div class="d-flex flex-wrap gap-3 align-items-center mt-4">
					<div class="Classudo-btn">
						<a href="contact.php">GET FREE DESIGN CONSULTATION
							<div class="Classudo-hover-btn hover-bx"></div>
							<div class="Classudo-hover-btn hover-bx2"></div>
							<div class="Classudo-hover-btn hover-bx3"></div>
							<div class="Classudo-hover-btn hover-bx4"></div>
						</a>
					</div>
					<a href="#portfolio" class="btn btn-outline-dark px-4 py-3 rounded-pill fw-semibold" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
						VIEW OUR PORTFOLIO <i class="fas fa-arrow-down ms-1"></i>
					</a>
				</div>
				<!-- Trust Badges Row -->
				<div class="row mt-4 pt-3 border-top g-3">
					<div class="col-6 col-sm-3">
						<span class="fw-semibold text-dark" style="font-size: 13px; font-family: 'Poppins', sans-serif;"><i class="fas fa-check-circle text-danger me-1"></i> Professional Designers</span>
					</div>
					<div class="col-6 col-sm-3">
						<span class="fw-semibold text-dark" style="font-size: 13px; font-family: 'Poppins', sans-serif;"><i class="fas fa-check-circle text-danger me-1"></i> Custom Designs</span>
					</div>
					<div class="col-6 col-sm-3">
						<span class="fw-semibold text-dark" style="font-size: 13px; font-family: 'Poppins', sans-serif;"><i class="fas fa-check-circle text-danger me-1"></i> Fast Turnaround</span>
					</div>
					<div class="col-6 col-sm-3">
						<span class="fw-semibold text-dark" style="font-size: 13px; font-family: 'Poppins', sans-serif;"><i class="fas fa-check-circle text-danger me-1"></i> Revisions Included</span>
					</div>
				</div>
			</div>
			<div class="col-lg-5 mt-4 mt-lg-0 text-center">
				<div class="about-thumb position-relative p-2 bg-white rounded-4 shadow">
					<img src="assets/images/inner/service-thumb4.png" alt="Graphic Design Classudo" class="img-fluid rounded-3">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 2. Trust Stats Counter -->
<!-- ================================================== -->
<div class="py-4 bg-light border-top border-bottom">
	<div class="container">
		<div class="row text-center g-3">
			<div class="col-6 col-md-3">
				<h2 class="fw-bold text-danger m-0" style="font-family: 'Poppins', sans-serif;">10+</h2>
				<span class="text-muted" style="font-size: 13px;">Years Experience</span>
			</div>
			<div class="col-6 col-md-3">
				<h2 class="fw-bold text-danger m-0" style="font-family: 'Poppins', sans-serif;">1000+</h2>
				<span class="text-muted" style="font-size: 13px;">Projects Delivered</span>
			</div>
			<div class="col-6 col-md-3">
				<h2 class="fw-bold text-danger m-0" style="font-family: 'Poppins', sans-serif;">500+</h2>
				<span class="text-muted" style="font-size: 13px;">Happy Clients</span>
			</div>
			<div class="col-6 col-md-3">
				<h2 class="fw-bold text-danger m-0" style="font-size: 13px;">15+</h2>
				<span class="text-muted" style="font-size: 13px;">Industries Served</span>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 3. Real Design Portfolio Section -->
<!-- ================================================== -->
<div class="py-5" id="portfolio">
	<div class="container">
		<div class="section-title text-center mb-4">
			<h5 class="section-sub-title">VISUAL PROOF OF WORK</h5>
			<h1 class="section-main-title">Selected Design <span>Work & Case Studies</span></h1>
			<p class="text-muted max-w-700 mx-auto mt-2" style="font-size: 15px;">Explore a selection of identity design, packaging, and digital marketing creatives built for our global clients.</p>
		</div>

		<!-- Portfolio Filter Buttons -->
		<div class="d-flex flex-wrap justify-content-center gap-2 mb-4" id="portfolio-filters">
			<button class="portfolio-filter-btn active" data-filter="all">All Projects</button>
			<button class="portfolio-filter-btn" data-filter="branding">Branding & Logo</button>
			<button class="portfolio-filter-btn" data-filter="social">Social Media</button>
			<button class="portfolio-filter-btn" data-filter="packaging">Packaging</button>
			<button class="portfolio-filter-btn" data-filter="print">Print & Collaterals</button>
		</div>

		<!-- Portfolio Grid -->
		<div class="row g-4" id="portfolio-grid">
			<!-- Item 1 -->
			<div class="col-lg-4 col-md-6 portfolio-item" data-category="branding">
				<div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 feature-card-hover">
					<img src="assets/images/inner/portfolio-1.png" alt="TechNova Branding" class="card-img-top" style="height: 220px; object-fit: cover;" onerror="this.src='assets/images/inner/service-details.png'">
					<div class="card-body p-4">
						<span class="badge bg-danger bg-opacity-10 text-danger mb-2">Branding • Logo Design</span>
						<h5 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">TechNova Brand Identity</h5>
						<p class="text-muted" style="font-size: 13px;">Complete visual identity system and vector logo guidelines for an AI technology enterprise.</p>
						<a href="contact.php" class="fw-semibold text-danger text-decoration-none" style="font-size: 13px;">View Case Study <i class="fas fa-arrow-right ms-1"></i></a>
					</div>
				</div>
			</div>

			<!-- Item 2 -->
			<div class="col-lg-4 col-md-6 portfolio-item" data-category="packaging">
				<div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 feature-card-hover">
					<img src="assets/images/inner/portfolio-2.png" alt="Luxe Packaging" class="card-img-top" style="height: 220px; object-fit: cover;" onerror="this.src='assets/images/inner/service-details.png'">
					<div class="card-body p-4">
						<span class="badge bg-danger bg-opacity-10 text-danger mb-2">Packaging Design</span>
						<h5 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Luxe Botanicals Packaging</h5>
						<p class="text-muted" style="font-size: 13px;">Premium organic skincare product box design, label artwork, and 3D render mockups.</p>
						<a href="contact.php" class="fw-semibold text-danger text-decoration-none" style="font-size: 13px;">View Case Study <i class="fas fa-arrow-right ms-1"></i></a>
					</div>
				</div>
			</div>

			<!-- Item 3 -->
			<div class="col-lg-4 col-md-6 portfolio-item" data-category="social">
				<div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 feature-card-hover">
					<img src="assets/images/inner/portfolio-3.png" alt="Social Media Creatives" class="card-img-top" style="height: 220px; object-fit: cover;" onerror="this.src='assets/images/inner/service-details.png'">
					<div class="card-body p-4">
						<span class="badge bg-danger bg-opacity-10 text-danger mb-2">Social Media</span>
						<h5 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">CyberEdge Social Creatives</h5>
						<p class="text-muted" style="font-size: 13px;">High-converting Instagram carousel templates, ad banners, and promotional story graphics.</p>
						<a href="contact.php" class="fw-semibold text-danger text-decoration-none" style="font-size: 13px;">View Case Study <i class="fas fa-arrow-right ms-1"></i></a>
					</div>
				</div>
			</div>

			<!-- Item 4 -->
			<div class="col-lg-4 col-md-6 portfolio-item" data-category="print">
				<div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 feature-card-hover">
					<img src="assets/images/inner/portfolio-4.png" alt="Apex Finance Pitch Deck" class="card-img-top" style="height: 220px; object-fit: cover;" onerror="this.src='assets/images/inner/service-details.png'">
					<div class="card-body p-4">
						<span class="badge bg-danger bg-opacity-10 text-danger mb-2">Print & Collaterals</span>
						<h5 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Apex Finance Pitch Deck</h5>
						<p class="text-muted" style="font-size: 13px;">Custom investor pitch deck, corporate brochure, and print-ready executive stationery.</p>
						<a href="contact.php" class="fw-semibold text-danger text-decoration-none" style="font-size: 13px;">View Case Study <i class="fas fa-arrow-right ms-1"></i></a>
					</div>
				</div>
			</div>

			<!-- Item 5 -->
			<div class="col-lg-4 col-md-6 portfolio-item" data-category="branding">
				<div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 feature-card-hover">
					<img src="assets/images/inner/portfolio-5.png" alt="OmniHealth Brand Book" class="card-img-top" style="height: 220px; object-fit: cover;" onerror="this.src='assets/images/inner/service-details.png'">
					<div class="card-body p-4">
						<span class="badge bg-danger bg-opacity-10 text-danger mb-2">Brand Book</span>
						<h5 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">OmniHealth Brand Guidelines</h5>
						<p class="text-muted" style="font-size: 13px;">Full 30-page brand guidelines manual specifying typography, logo clear space, and color palettes.</p>
						<a href="contact.php" class="fw-semibold text-danger text-decoration-none" style="font-size: 13px;">View Case Study <i class="fas fa-arrow-right ms-1"></i></a>
					</div>
				</div>
			</div>

			<!-- Item 6 -->
			<div class="col-lg-4 col-md-6 portfolio-item" data-category="branding">
				<div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 feature-card-hover">
					<img src="assets/images/inner/portfolio-6.png" alt="Veloce Motors Logo" class="card-img-top" style="height: 220px; object-fit: cover;" onerror="this.src='assets/images/inner/service-details.png'">
					<div class="card-body p-4">
						<span class="badge bg-danger bg-opacity-10 text-danger mb-2">Logo Design</span>
						<h5 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Veloce Motors Logo</h5>
						<p class="text-muted" style="font-size: 13px;">Dynamic vector logo mark and automotive brand identity for an EV luxury vehicle brand.</p>
						<a href="contact.php" class="fw-semibold text-danger text-decoration-none" style="font-size: 13px;">View Case Study <i class="fas fa-arrow-right ms-1"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 4. Expanded Graphic Design Services Grid (12 Cards) -->
<!-- ================================================== -->
<div class="sservice-area style-two py-5 bg-light">
	<div class="container">
		<div class="section-title text-center mb-5">
			<h5 class="section-sub-title">OUR FULL DESIGN CAPABILITIES</h5>
			<h1 class="section-main-title">Explore All <span>Graphic Design</span> Services</h1>
		</div>

		<div class="row g-4">
			<!-- 1. Logo Design -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/logo-design.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-pen-nib"></i></div>
							<span class="tile-cat-badge">Logo</span>
						</div>
						<h4 class="tile-title"><a href="services/logo-design.php">Logo Design</a></h4>
						<p class="tile-desc">Memorable, unique vector logos built to reflect your brand identity across all media formats.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 2. Brand Identity & Guidelines -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/brand-book-design.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-book-open"></i></div>
							<span class="tile-cat-badge">Brand Book</span>
						</div>
						<h4 class="tile-title"><a href="services/brand-book-design.php">Brand Identity Design</a></h4>
						<p class="tile-desc">Complete visual identity manuals specifying color palettes, typography, clear space rules, and brand voice guidelines.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 3. Social Media Design -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/social-media-post-design.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-hashtag"></i></div>
							<span class="tile-cat-badge">Social Creatives</span>
						</div>
						<h4 class="tile-title"><a href="services/social-media-post-design.php">Social Media Post Design</a></h4>
						<p class="tile-desc">High-engagement Instagram carousels, Facebook ad banners, and LinkedIn graphic templates engineered for clicks.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 4. Packaging & Label Design -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/packaging-design.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-box-open"></i></div>
							<span class="tile-cat-badge">Packaging</span>
						</div>
						<h4 class="tile-title"><a href="services/packaging-design.php">Packaging & Label Design</a></h4>
						<p class="tile-desc">Retail product box artwork, pouch designs, die-cut labels, and 3D product rendering for physical goods.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 5. Brochure & Catalog Design -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/brand-collaterals.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-file-alt"></i></div>
							<span class="tile-cat-badge">Brochures</span>
						</div>
						<h4 class="tile-title"><a href="services/brand-collaterals.php">Brochure & Catalog Design</a></h4>
						<p class="tile-desc">Tri-fold brochures, multi-page corporate product catalogs, and print-ready marketing pamphlets.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 6. Pitch Deck & Presentation Design -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/creative-design.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-desktop"></i></div>
							<span class="tile-cat-badge">Presentation</span>
						</div>
						<h4 class="tile-title"><a href="services/creative-design.php">Presentation & Pitch Decks</a></h4>
						<p class="tile-desc">Custom PowerPoint and Keynote investor pitch decks designed to persuade funding partners and enterprise clients.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 7. Business Card & Stationery -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/brand-collaterals.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-id-card"></i></div>
							<span class="tile-cat-badge">Stationery</span>
						</div>
						<h4 class="tile-title"><a href="services/brand-collaterals.php">Business Card & Stationery</a></h4>
						<p class="tile-desc">Premium executive business cards, letterheads, invoice templates, and branded corporate envelopes.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 8. Marketing Collateral Design -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/brand-collaterals.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-briefcase"></i></div>
							<span class="tile-cat-badge">Marketing</span>
						</div>
						<h4 class="tile-title"><a href="services/brand-collaterals.php">Marketing Collateral Design</a></h4>
						<p class="tile-desc">Flyers, trade show booth banners, roll-up banners, and promotional print media engineered for high visibility.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 9. Ad Creative & Banner Design -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/social-media-post-design.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-ad"></i></div>
							<span class="tile-cat-badge">Paid Ads</span>
						</div>
						<h4 class="tile-title"><a href="services/social-media-post-design.php">Banner & Ad Creative Design</a></h4>
						<p class="tile-desc">Conversion-focused display banners for Google Display Ads, Meta sponsored posts, and remarketing campaigns.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 10. Infographic & Visual Assets -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/creative-design.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-chart-pie"></i></div>
							<span class="tile-cat-badge">Infographics</span>
						</div>
						<h4 class="tile-title"><a href="services/creative-design.php">Infographic Design</a></h4>
						<p class="tile-desc">Transform complex data, statistics, and workflows into engaging, highly shareable visual infographic diagrams.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 11. Creative Custom Design -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/creative-design.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-magic"></i></div>
							<span class="tile-cat-badge">Custom</span>
						</div>
						<h4 class="tile-title"><a href="services/creative-design.php">Creative Artwork & Graphics</a></h4>
						<p class="tile-desc">Custom vector illustrations, icon sets, brand mascots, and bespoke artwork tailored for unique visual requirements.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>

			<!-- 12. Print Design & Signage -->
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between" onclick="location.href='services/brand-collaterals.php';" style="cursor: pointer;">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-map-signs"></i></div>
							<span class="tile-cat-badge">Signage</span>
						</div>
						<h4 class="tile-title"><a href="services/brand-collaterals.php">Print & Signage Design</a></h4>
						<p class="tile-desc">Large format store signage, billboards, vehicle wraps, and commercial exhibition graphics prepared for high-res printing.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<span class="tile-link fw-semibold text-danger" style="font-size: 13px;">Explore Service <i class="fas fa-arrow-right ms-1"></i></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 5. Why Businesses Choose Classudo (6 Feature Blocks) -->
<!-- ================================================== -->
<div class="py-5">
	<div class="container">
		<div class="section-title text-center mb-5">
			<h5 class="section-sub-title">THE CLASSUDO ADVANTAGE</h5>
			<h1 class="section-main-title">Why Businesses Choose <span>Classudo Design</span></h1>
		</div>

		<div class="row g-4">
			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100 feature-card-hover">
					<div class="tile-icon-box mb-3 text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; background: var(--coral-600); font-size: 20px;">
						<i class="fas fa-layer-group"></i>
					</div>
					<h4 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Custom Design</h4>
					<p class="text-muted m-0" style="font-size: 14px; line-height: 1.6;">Every design is created from scratch specifically for your brand—no generic templates or stock clip art used.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100 feature-card-hover">
					<div class="tile-icon-box mb-3 text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; background: var(--coral-600); font-size: 20px;">
						<i class="fas fa-palette"></i>
					</div>
					<h4 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Brand Consistency</h4>
					<p class="text-muted m-0" style="font-size: 14px; line-height: 1.6;">Maintain a cohesive visual identity across social media, website, print collateral, and packaging channels.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100 feature-card-hover">
					<div class="tile-icon-box mb-3 text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; background: var(--coral-600); font-size: 20px;">
						<i class="fas fa-bullseye"></i>
					</div>
					<h4 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Conversion-Focused</h4>
					<p class="text-muted m-0" style="font-size: 14px; line-height: 1.6;">Designs aren't just beautiful—they are strategically engineered to communicate value, engage users, and drive sales.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100 feature-card-hover">
					<div class="tile-icon-box mb-3 text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; background: var(--coral-600); font-size: 20px;">
						<i class="fas fa-user-check"></i>
					</div>
					<h4 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Experienced Designers</h4>
					<p class="text-muted m-0" style="font-size: 14px; line-height: 1.6;">Senior graphic designers with extensive multi-industry experience across B2B, retail, SaaS, and healthcare.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100 feature-card-hover">
					<div class="tile-icon-box mb-3 text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; background: var(--coral-600); font-size: 20px;">
						<i class="fas fa-redo"></i>
					</div>
					<h4 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Multiple Revisions</h4>
					<p class="text-muted m-0" style="font-size: 14px; line-height: 1.6;">Collaborate smoothly with our creative team with revision rounds until your designs match your exact vision.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100 feature-card-hover">
					<div class="tile-icon-box mb-3 text-white rounded-3 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; background: var(--coral-600); font-size: 20px;">
						<i class="fas fa-file-export"></i>
					</div>
					<h4 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Complete Deliverables</h4>
					<p class="text-muted m-0" style="font-size: 14px; line-height: 1.6;">Full handover of raw vector source files (AI, EPS, SVG), print PDFs, web PNGs, and detailed style specs.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 6. What You Get With Every Project (Deliverables) -->
<!-- ================================================== -->
<div class="py-5 bg-light border-top border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">TRANSPARENT DELIVERABLES</h5>
					<h1 class="section-main-title">What You Get With <span>Every Design Project</span></h1>
					<p class="section-title-descr mt-3">
						We provide complete, production-ready design assets with zero hidden conditions. You receive all vector source files and commercial usage rights.
					</p>
				</div>
				<div class="row g-3 mt-2">
					<div class="col-md-6">
						<div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border">
							<i class="fas fa-check-circle text-danger me-2 fs-5"></i>
							<span class="fw-semibold text-dark" style="font-size: 14px;">High-Resolution Files (300 DPI)</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border">
							<i class="fas fa-check-circle text-danger me-2 fs-5"></i>
							<span class="fw-semibold text-dark" style="font-size: 14px;">Web-Optimized Vector Assets</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border">
							<i class="fas fa-check-circle text-danger me-2 fs-5"></i>
							<span class="fw-semibold text-dark" style="font-size: 14px;">Print-Ready CMYK Files</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border">
							<i class="fas fa-check-circle text-danger me-2 fs-5"></i>
							<span class="fw-semibold text-dark" style="font-size: 14px;">Raw Source Files (AI, EPS, SVG)</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border">
							<i class="fas fa-check-circle text-danger me-2 fs-5"></i>
							<span class="fw-semibold text-dark" style="font-size: 14px;">Brand Color Specifications (HEX/CMYK)</span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="d-flex align-items-center p-3 bg-white rounded-3 shadow-sm border">
							<i class="fas fa-check-circle text-danger me-2 fs-5"></i>
							<span class="fw-semibold text-dark" style="font-size: 14px;">Full Commercial Copyright Ownership</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<!-- Audience Segment Section -->
				<div class="p-4 bg-white rounded-4 shadow-sm border">
					<h4 class="fw-bold mb-3" style="font-family: 'Poppins', sans-serif;">Who Is This Service Ideal For?</h4>
					<div class="mb-3 border-bottom pb-2">
						<h6 class="fw-bold text-danger m-0 mb-1">🚀 Startups</h6>
						<p class="text-muted m-0" style="font-size: 13px;">Build a high-converting, professional visual identity and pitch deck from day one.</p>
					</div>
					<div class="mb-3 border-bottom pb-2">
						<h6 class="fw-bold text-danger m-0 mb-1">🏢 Small Businesses</h6>
						<p class="text-muted m-0" style="font-size: 13px;">Create consistent marketing materials and social graphics without hiring an in-house designer.</p>
					</div>
					<div class="mb-3 border-bottom pb-2">
						<h6 class="fw-bold text-danger m-0 mb-1">📈 Growing Enterprises</h6>
						<p class="text-muted m-0" style="font-size: 13px;">Refresh existing brand assets, design new product packaging, and standardize guidelines.</p>
					</div>
					<div>
						<h6 class="fw-bold text-danger m-0 mb-1">🤝 Agencies</h6>
						<p class="text-muted m-0" style="font-size: 13px;">Get reliable white-label creative design fulfillment for client projects under strict NDAs.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 7. Design Solutions By Industry -->
<!-- ================================================== -->
<div class="py-5">
	<div class="container">
		<div class="section-title text-center mb-5">
			<h5 class="section-sub-title">TAILORED CREATIVE SOLUTIONS</h5>
			<h1 class="section-main-title">Design Solutions for <span>Every Industry</span></h1>
		</div>

		<div class="row g-3 text-center">
			<div class="col-6 col-md-3">
				<div class="p-3 bg-light rounded-3 border fw-semibold text-dark feature-card-hover" style="font-family: 'Poppins', sans-serif;">
					<i class="fas fa-laptop-code text-danger mb-2 fs-4 d-block"></i> Technology & SaaS
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="p-3 bg-light rounded-3 border fw-semibold text-dark feature-card-hover" style="font-family: 'Poppins', sans-serif;">
					<i class="fas fa-shopping-bag text-danger mb-2 fs-4 d-block"></i> E-Commerce & Retail
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="p-3 bg-light rounded-3 border fw-semibold text-dark feature-card-hover" style="font-family: 'Poppins', sans-serif;">
					<i class="fas fa-user-md text-danger mb-2 fs-4 d-block"></i> Healthcare & Pharma
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="p-3 bg-light rounded-3 border fw-semibold text-dark feature-card-hover" style="font-family: 'Poppins', sans-serif;">
					<i class="fas fa-building text-danger mb-2 fs-4 d-block"></i> Real Estate & Construction
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="p-3 bg-light rounded-3 border fw-semibold text-dark feature-card-hover" style="font-family: 'Poppins', sans-serif;">
					<i class="fas fa-graduation-cap text-danger mb-2 fs-4 d-block"></i> Education & EdTech
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="p-3 bg-light rounded-3 border fw-semibold text-dark feature-card-hover" style="font-family: 'Poppins', sans-serif;">
					<i class="fas fa-chart-line text-danger mb-2 fs-4 d-block"></i> Finance & Banking
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="p-3 bg-light rounded-3 border fw-semibold text-dark feature-card-hover" style="font-family: 'Poppins', sans-serif;">
					<i class="fas fa-utensils text-danger mb-2 fs-4 d-block"></i> Hospitality & Food
				</div>
			</div>
			<div class="col-6 col-md-3">
				<div class="p-3 bg-light rounded-3 border fw-semibold text-dark feature-card-hover" style="font-family: 'Poppins', sans-serif;">
					<i class="fas fa-briefcase text-danger mb-2 fs-4 d-block"></i> Professional Services
				</div>
			</div>
		</div>
		<p class="text-center text-muted mt-4 mb-0" style="font-size: 14px;">
			Don't see your industry? <a href="contact.php" class="text-danger fw-semibold">Talk to our design team →</a>
		</p>
	</div>
</div>

<!-- ================================================== -->
<!-- 8. 6-Step Visual Timeline Process -->
<!-- ================================================== -->
<div class="py-5 bg-light border-top border-bottom">
	<div class="container">
		<div class="section-title text-center mb-5">
			<h5 class="section-sub-title">THE CREATIVE PROCESS</h5>
			<h1 class="section-main-title">Classudo <span>6-Step Design</span> Flow</h1>
		</div>

		<div class="row g-4 position-relative">
			<!-- Step 1 -->
			<div class="col-lg-2 col-md-4 col-6 text-center">
				<div class="p-3 bg-white rounded-4 shadow-sm border h-100">
					<div class="process-step-badge mx-auto mb-3">01</div>
					<h6 class="fw-bold mb-1" style="font-family: 'Poppins', sans-serif;">Creative Brief</h6>
					<p class="text-muted m-0" style="font-size: 12px;">Understanding goals & brand vision</p>
				</div>
			</div>

			<!-- Step 2 -->
			<div class="col-lg-2 col-md-4 col-6 text-center">
				<div class="p-3 bg-white rounded-4 shadow-sm border h-100">
					<div class="process-step-badge mx-auto mb-3">02</div>
					<h6 class="fw-bold mb-1" style="font-family: 'Poppins', sans-serif;">Moodboard</h6>
					<p class="text-muted m-0" style="font-size: 12px;">Visual directions & color palettes</p>
				</div>
			</div>

			<!-- Step 3 -->
			<div class="col-lg-2 col-md-4 col-6 text-center">
				<div class="p-3 bg-white rounded-4 shadow-sm border h-100">
					<div class="process-step-badge mx-auto mb-3">03</div>
					<h6 class="fw-bold mb-1" style="font-family: 'Poppins', sans-serif;">Concept Dev</h6>
					<p class="text-muted m-0" style="font-size: 12px;">100% vector art drafting</p>
				</div>
			</div>

			<!-- Step 4 -->
			<div class="col-lg-2 col-md-4 col-6 text-center">
				<div class="p-3 bg-white rounded-4 shadow-sm border h-100">
					<div class="process-step-badge mx-auto mb-3">04</div>
					<h6 class="fw-bold mb-1" style="font-family: 'Poppins', sans-serif;">Revisions</h6>
					<p class="text-muted m-0" style="font-size: 12px;">Refining details until approved</p>
				</div>
			</div>

			<!-- Step 5 -->
			<div class="col-lg-2 col-md-4 col-6 text-center">
				<div class="p-3 bg-white rounded-4 shadow-sm border h-100">
					<div class="process-step-badge mx-auto mb-3">05</div>
					<h6 class="fw-bold mb-1" style="font-family: 'Poppins', sans-serif;">Final Delivery</h6>
					<p class="text-muted m-0" style="font-size: 12px;">Master vector files AI, EPS, SVG</p>
				</div>
			</div>

			<!-- Step 6 -->
			<div class="col-lg-2 col-md-4 col-6 text-center">
				<div class="p-3 bg-white rounded-4 shadow-sm border h-100">
					<div class="process-step-badge mx-auto mb-3">06</div>
					<h6 class="fw-bold mb-1" style="font-family: 'Poppins', sans-serif;">Brand Book</h6>
					<p class="text-muted m-0" style="font-size: 12px;">Comprehensive brand guide</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 9. Transparent Design Packages Guidance -->
<!-- ================================================== -->
<div class="py-5">
	<div class="container">
		<div class="section-title text-center mb-5">
			<h5 class="section-sub-title">TRANSPARENT PACKAGES</h5>
			<h1 class="section-main-title">Graphic Design <span>Solutions</span></h1>
		</div>

		<div class="row g-4">
			<!-- Package 1 -->
			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100 d-flex flex-column justify-content-between feature-card-hover">
					<div>
						<span class="badge bg-secondary bg-opacity-10 text-secondary mb-2">FOR SMALL BUSINESSES</span>
						<h3 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Starter Brand Package</h3>
						<p class="text-muted" style="font-size: 14px;">Essential logo design and basic stationery for startups launching their visual presence.</p>
						<ul class="list-unstyled my-3 text-muted" style="font-size: 14px;">
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> 3 Custom Vector Logo Concepts</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Business Card & Letterhead Design</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> 3 Revision Rounds</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Full Vector Source Files (AI, PNG, PDF)</li>
						</ul>
					</div>
					<a href="contact.php" class="btn btn-outline-danger w-100 rounded-pill fw-semibold mt-3">Get Custom Quote</a>
				</div>
			</div>

			<!-- Package 2 -->
			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-lg border border-danger border-2 h-100 d-flex flex-column justify-content-between feature-card-hover position-relative">
					<span class="position-absolute top-0 end-0 bg-danger text-white px-3 py-1 rounded-bl-4 fs-7 fw-bold" style="border-bottom-left-radius: 12px; font-size: 11px;">MOST POPULAR</span>
					<div>
						<span class="badge bg-danger bg-opacity-10 text-danger mb-2">FOR GROWING BUSINESSES</span>
						<h3 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Growth Identity Suite</h3>
						<p class="text-muted" style="font-size: 14px;">Comprehensive brand identity, social media creatives, and collateral suite.</p>
						<ul class="list-unstyled my-3 text-muted" style="font-size: 14px;">
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> 5 Custom Vector Logo Concepts</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Complete Brand Book & Color Palette</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> 10 Social Media Post & Banner Templates</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Brochure & Stationery Design</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Unlimited Revisions</li>
						</ul>
					</div>
					<a href="contact.php" class="btn btn-danger text-white w-100 rounded-pill fw-semibold mt-3">Get Custom Quote</a>
				</div>
			</div>

			<!-- Package 3 -->
			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100 d-flex flex-column justify-content-between feature-card-hover">
					<div>
						<span class="badge bg-secondary bg-opacity-10 text-secondary mb-2">ENTERPRISE & AGENCIES</span>
						<h3 class="fw-bold mb-2" style="font-family: 'Poppins', sans-serif;">Enterprise Brand Suite</h3>
						<p class="text-muted" style="font-size: 14px;">Full 360-degree brand system, packaging design, pitch decks, and dedicated design support.</p>
						<ul class="list-unstyled my-3 text-muted" style="font-size: 14px;">
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Bespoke Brand Guidelines System</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Product Packaging & 3D Renders</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Investor Pitch Deck & Presentations</li>
							<li class="mb-2"><i class="fas fa-check text-danger me-2"></i> Dedicated Senior Design Lead</li>
						</ul>
					</div>
					<a href="contact.php" class="btn btn-outline-danger w-100 rounded-pill fw-semibold mt-3">Talk to Us</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 10. Client Testimonials -->
<!-- ================================================== -->
<div class="py-5 bg-light border-top border-bottom">
	<div class="container">
		<div class="section-title text-center mb-5">
			<h5 class="section-sub-title">CLIENT FEEDBACK</h5>
			<h1 class="section-main-title">What Our <span>Clients Say</span></h1>
		</div>

		<div class="row g-4">
			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100">
					<div class="text-warning mb-2">★★★★★</div>
					<p class="text-muted fst-italic mb-3" style="font-size: 14px; line-height: 1.6;">
						"Classudo completely transformed our visual identity. The team understood our requirements and delivered designs that matched our corporate brand perfectly."
					</p>
					<h6 class="fw-bold m-0" style="font-family: 'Poppins', sans-serif;">Vikram Sharma</h6>
					<span class="text-muted" style="font-size: 12px;">CEO, TechNova Solutions</span>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100">
					<div class="text-warning mb-2">★★★★★</div>
					<p class="text-muted fst-italic mb-3" style="font-size: 14px; line-height: 1.6;">
						"Our product packaging design was handled flawlessly by Classudo. The retail box art and labels stand out on store shelves and improved our sales conversions."
					</p>
					<h6 class="fw-bold m-0" style="font-family: 'Poppins', sans-serif;">Ananya Patel</h6>
					<span class="text-muted" style="font-size: 12px;">Founder, Luxe Botanicals</span>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="p-4 bg-white rounded-4 shadow-sm border h-100">
					<div class="text-warning mb-2">★★★★★</div>
					<p class="text-muted fst-italic mb-3" style="font-size: 14px; line-height: 1.6;">
						"Classudo provides our agency with white-label graphic design support. Fast turnaround times, clean vector source files, and outstanding attention to detail."
					</p>
					<h6 class="fw-bold m-0" style="font-family: 'Poppins', sans-serif;">Rajesh Malhotra</h6>
					<span class="text-muted" style="font-size: 12px;">Director, Apex Digital Agency</span>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 11. Expanded Comprehensive FAQ Section (10 Q&As) -->
<!-- ================================================== -->
<div class="py-5">
	<div class="container">
		<div class="section-title text-center mb-5">
			<h5 class="section-sub-title">CLEAR ANSWERS</h5>
			<h1 class="section-main-title">Frequently Asked <span>Questions</span></h1>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="accordion" id="graphicDesignFAQ">
					<div class="accordion-item mb-3 border-0 shadow-sm rounded-3 overflow-hidden">
						<h2 class="accordion-header" id="faqH1">
							<button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqC1">
								What graphic design services does Classudo offer?
							</button>
						</h2>
						<div id="faqC1" class="accordion-collapse collapse show" data-bs-parent="#graphicDesignFAQ">
							<div class="accordion-body text-muted" style="font-size: 14px; line-height: 1.6;">
								We offer complete graphic design services including vector logo design, full brand identity guidelines, social media creative design, product packaging & label art, tri-fold brochures, presentation pitch decks, business cards, infographics, and print signage.
							</div>
						</div>
					</div>

					<div class="accordion-item mb-3 border-0 shadow-sm rounded-3 overflow-hidden">
						<h2 class="accordion-header" id="faqH2">
							<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqC2">
								How long does a graphic design project take?
							</button>
						</h2>
						<div id="faqC2" class="accordion-collapse collapse" data-bs-parent="#graphicDesignFAQ">
							<div class="accordion-body text-muted" style="font-size: 14px; line-height: 1.6;">
								Initial logo concepts are delivered within 48 to 72 business hours. Full brand identity guidelines, pitch decks, or product packaging suites typically take 5 to 7 business days depending on project complexity.
							</div>
						</div>
					</div>

					<div class="accordion-item mb-3 border-0 shadow-sm rounded-3 overflow-hidden">
						<h2 class="accordion-header" id="faqH3">
							<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqC3">
								Do I own 100% full commercial copyright of the final designs?
							</button>
						</h2>
						<div id="faqC3" class="accordion-collapse collapse" data-bs-parent="#graphicDesignFAQ">
							<div class="accordion-body text-muted" style="font-size: 14px; line-height: 1.6;">
								Yes, 100%. Upon project completion and final payment, complete commercial copyright and intellectual property rights transfer entirely to your business.
							</div>
						</div>
					</div>

					<div class="accordion-item mb-3 border-0 shadow-sm rounded-3 overflow-hidden">
						<h2 class="accordion-header" id="faqH4">
							<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqC4">
								Which file formats will I receive upon project completion?
							</button>
						</h2>
						<div id="faqC4" class="accordion-collapse collapse" data-bs-parent="#graphicDesignFAQ">
							<div class="accordion-body text-muted" style="font-size: 14px; line-height: 1.6;">
								You receive all raw editable vector source files in Adobe Illustrator (.AI), EPS, SVG, High-Res Print PDF (CMYK, 300 DPI), transparent PNG, and web JPG formats.
							</div>
						</div>
					</div>

					<div class="accordion-item mb-3 border-0 shadow-sm rounded-3 overflow-hidden">
						<h2 class="accordion-header" id="faqH5">
							<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqC5">
								How many revision rounds are included?
							</button>
						</h2>
						<div id="faqC5" class="accordion-collapse collapse" data-bs-parent="#graphicDesignFAQ">
							<div class="accordion-body text-muted" style="font-size: 14px; line-height: 1.6;">
								We include multiple revision rounds (ranging from 3 to unlimited revisions depending on your selected package) until your visual assets match your exact expectations.
							</div>
						</div>
					</div>

					<div class="accordion-item mb-3 border-0 shadow-sm rounded-3 overflow-hidden">
						<h2 class="accordion-header" id="faqH6">
							<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqC6">
								Can you design graphics following our existing brand guidelines?
							</button>
						</h2>
						<div id="faqC6" class="accordion-collapse collapse" data-bs-parent="#graphicDesignFAQ">
							<div class="accordion-body text-muted" style="font-size: 14px; line-height: 1.6;">
								Yes! If you already have established brand guidelines, color codes, or font specs, our design team will adhere strictly to your brand book standards.
							</div>
						</div>
					</div>

					<div class="accordion-item mb-3 border-0 shadow-sm rounded-3 overflow-hidden">
						<h2 class="accordion-header" id="faqH7">
							<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqC7">
								Do you create social media posts and ad creatives?
							</button>
						</h2>
						<div id="faqC7" class="accordion-collapse collapse" data-bs-parent="#graphicDesignFAQ">
							<div class="accordion-body text-muted" style="font-size: 14px; line-height: 1.6;">
								Yes, we design custom Instagram carousels, Facebook ad banners, LinkedIn graphics, and YouTube thumbnail banners optimized for high click-through rates (CTR).
							</div>
						</div>
					</div>

					<div class="accordion-item mb-3 border-0 shadow-sm rounded-3 overflow-hidden">
						<h2 class="accordion-header" id="faqH8">
							<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqC8">
								Do you provide white-label graphic design for agencies?
							</button>
						</h2>
						<div id="faqC8" class="accordion-collapse collapse" data-bs-parent="#graphicDesignFAQ">
							<div class="accordion-body text-muted" style="font-size: 14px; line-height: 1.6;">
								Yes, we partner with marketing agencies and IT companies worldwide under strict NDAs, providing silent, white-label design fulfillment.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 12. Cross-Service Internal Links ("Related Services") -->
<!-- ================================================== -->
<div class="py-4 bg-light border-top border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3 fw-bold text-dark" style="font-family: 'Poppins', sans-serif;">Explore Related Services:</div>
			<div class="col-md-9 d-flex flex-wrap gap-3">
				<a href="web-development.php" class="text-decoration-none text-muted fw-semibold" style="font-size: 14px;"><i class="fas fa-code text-danger me-1"></i> Web Development →</a>
				<a href="digital-marketing.php" class="text-decoration-none text-muted fw-semibold" style="font-size: 14px;"><i class="fas fa-bullhorn text-danger me-1"></i> Digital Marketing →</a>
				<a href="services/search-engine-optimization.php" class="text-decoration-none text-muted fw-semibold" style="font-size: 14px;"><i class="fas fa-search text-danger me-1"></i> SEO Services →</a>
				<a href="app-development.php" class="text-decoration-none text-muted fw-semibold" style="font-size: 14px;"><i class="fas fa-mobile-alt text-danger me-1"></i> App Development →</a>
			</div>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 13. High-Impact Final Callout CTA Strip -->
<!-- ================================================== -->
<div class="py-5" style="background: linear-gradient(135deg, #050a1e 0%, #0d1636 100%); color: #ffffff;">
	<div class="container text-center py-3">
		<h2 class="fw-bold text-white mb-2" style="font-size: 34px; font-family: 'Poppins', sans-serif;">Ready to Elevate Your Brand's Visual Identity?</h2>
		<p class="lead text-white-50 mb-4 mx-auto" style="font-size: 16px; max-width: 650px; font-family: 'Fira Sans', sans-serif;">
			Let's create visuals that make your business impossible to ignore. Contact Classudo Technologies today for a free design consultation.
		</p>
		<div class="d-flex justify-content-center flex-wrap gap-3">
			<a href="contact.php" class="btn px-4 py-3 bg-white text-danger fw-bold rounded-pill shadow-sm" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
				GET A FREE DESIGN CONSULTATION <i class="fas fa-arrow-right ms-2"></i>
			</a>
			<a href="tel:+917398380048" class="btn px-4 py-3 border border-white text-white fw-bold rounded-pill" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
				<i class="fas fa-phone-alt me-2"></i> CALL +91 7398380048
			</a>
		</div>
	</div>
</div>

<!-- ================================================== -->
<!-- 14. Address Contact Bar -->
<!-- ================================================== -->
<div class="address-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="address-box">
					<div class="address-icon">
						<img src="assets/images/address1.png" alt="address1">
					</div>
					<div class="address-title">
						<h3>Elevating Customer Experience.</h3>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="address-box2">
					<div class="address-icon">
						<img src="assets/images/address2.png" alt="address1">
					</div>
					<div class="Classudo-btn">
						<a href="tel:+917398380048">+91 7398380048
							<div class="Classudo-hover-btn hover-bx"></div>
							<div class="Classudo-hover-btn hover-bx2"></div>
							<div class="Classudo-hover-btn hover-bx3"></div>
							<div class="Classudo-hover-btn hover-bx4"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Portfolio Filter JS -->
<script>
document.addEventListener("DOMContentLoaded", function() {
	const filterBtns = document.querySelectorAll("#portfolio-filters .portfolio-filter-btn");
	const items = document.querySelectorAll("#portfolio-grid .portfolio-item");

	filterBtns.forEach(btn => {
		btn.addEventListener("click", function() {
			filterBtns.forEach(b => b.classList.remove("active"));
			this.classList.add("active");
			const filter = this.getAttribute("data-filter");

			items.forEach(item => {
				if (filter === "all" || item.getAttribute("data-category") === filter) {
					item.style.display = "block";
				} else {
					item.style.display = "none";
				}
			});
		});
	});
});
</script>

    <?php include './partials/footer.php'?>
    <?php include './partials/script.php'?>
</body>
</html>
