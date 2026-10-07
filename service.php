<!DOCTYPE HTML>
<html lang="en-US">

  <!-- Head -->
  <?php include './partials/head.php'?>

<body>
    <!-- preloader -->
    <?php include './partials/preloader.php'?>

    <!-- Start Header Section -->
    <?php include './partials/header.php'?>
    <!-- End Header Section -->


<!--==================================================-->
<!-- Start Curser Section Here -->
<!--==================================================-->
<div class="curser"></div>
<div class="curser2"></div>
<!--==================================================-->
<!-- Ends Curser Section Here -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Classudo breadcumb Area -->
<!--==================================================-->

    <?php 
      $title = 'Services';
    ?>
    <?php include './partials/hero.php'?>

<!--==================================================-->
<!-- end Classudo breadcumb Area -->
<!--==================================================-->






<!--==================================================-->
<!-- start Classudo service Area style-two-->
<!--==================================================-->

<div class="sservice-area style-two">
	<div class="container">
		<!-- Section Header -->
		<div class="row align-items-center">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">CLASSUDO SERVICES</h5>
					<h1 class="section-main-title">Core Solutions & Specialized</h1>
					<h1 class="section-main-title">Digital <span>Services.</span></h1>
				</div>
			</div>
		</div>

		<!-- 4 MAIN FEATURED SERVICES (Matching index.php) -->
		<div class="row align-items-center mb-5">
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="assets/images/inner/service-thumb1.png" alt="Digital Marketing">
					</div>
					<div class="service-content">
						<div class="service-header-wrap">
							<h3 class="service-title"><a href="digital-marketing.php">Digital Marketing</a></h3>
							<div class="service-icon">
								<img src="assets/images/service3.png" alt="Digital Marketing Icon">
							</div>
						</div>
						<p class="service-text">We offer a wide range of digital marketing services to help businesses boost their online presence and achieve their goals.</p>
						<div class="service-btn">
							<a href="digital-marketing.php"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="assets/images/inner/serice-shape.png" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="assets/images/inner/service-thumb2.png" alt="Web Development">
					</div>
					<div class="service-content">
						<div class="service-header-wrap">
							<h3 class="service-title"><a href="web-development.php">Web Development</a></h3>
							<div class="service-icon">
								<img src="assets/images/service2.png" alt="Web Development Icon">
							</div>
						</div>
						<p class="service-text">We develop and design websites that are user-friendly, visually appealing, and optimized for search engine and social rankings.</p>
						<div class="service-btn">
							<a href="web-development.php"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="assets/images/inner/serice-shape.png" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="assets/images/inner/service-thumb3.png" alt="App Development">
					</div>
					<div class="service-content">
						<div class="service-header-wrap">
							<h3 class="service-title"><a href="app-development.php">App Development</a></h3>
							<div class="service-icon">
								<img src="assets/images/service1.png" alt="App Development Icon">
							</div>
						</div>
						<p class="service-text">We create native and cross-platform Android and iOS apps that are user-friendly, visually appealing, and scalable.</p>
						<div class="service-btn">
							<a href="app-development.php"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="assets/images/inner/serice-shape.png" alt="shape">
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-service-box">
					<div class="service-thumb">
						<img src="assets/images/inner/service-thumb4.png" alt="Graphic Design">
					</div>
					<div class="service-content">
						<div class="service-header-wrap">
							<h3 class="service-title"><a href="graphic-design.php">Graphic Design</a></h3>
							<div class="service-icon">
								<img src="assets/images/service4.png" alt="Graphic Design Icon">
							</div>
						</div>
						<p class="service-text">Visual communication and problem-solving through creative typography, photography, branding, and illustration.</p>
						<div class="service-btn">
							<a href="graphic-design.php"><i class="fas fa-plus"></i> READ MORE</a>
						</div>
						<div class="services-shape bounce-animate-3">
							<img src="assets/images/inner/serice-shape.png" alt="shape">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- SPECIALIZED SERVICES FILTER & GRID -->
		<div class="row align-items-center mt-5">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">SPECIALIZED SOLUTIONS</h5>
					<h1 class="section-main-title">Explore All <span>Services</span></h1>
				</div>

				<!-- Interactive Category Filter Tabs -->
				<div class="service-filter-wrap">
					<button class="service-filter-btn active" data-filter="all"><i class="fas fa-th-large"></i> All Services</button>
					<button class="service-filter-btn" data-filter="digital-marketing"><i class="fas fa-bullhorn"></i> Digital Marketing</button>
					<button class="service-filter-btn" data-filter="web-development"><i class="fas fa-code"></i> Web Development</button>
					<button class="service-filter-btn" data-filter="performance-marketing"><i class="fas fa-chart-line"></i> Performance Marketing</button>
					<button class="service-filter-btn" data-filter="app-development"><i class="fas fa-mobile-alt"></i> App Development</button>
					<button class="service-filter-btn" data-filter="graphic-design"><i class="fas fa-paint-brush"></i> Graphic Design</button>
				</div>
			</div>
		</div>

		<!-- Service Tiles Grid -->
		<div class="row" id="service-tiles-container">
			
			<!-- DIGITAL MARKETING -->
			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-bullhorn"></i></div>
							<span class="tile-cat-badge">Digital Marketing</span>
						</div>
						<h4 class="tile-title"><a href="digital-marketing.php">Digital Marketing</a></h4>
						<p class="tile-desc">Unlock your brand's full potential with Classudo's comprehensive digital marketing strategies designed to drive traffic, increase conversions, and maximize ROI.</p>
					</div>
					<div class="tile-footer">
						<a href="digital-marketing.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-hand-holding-usd"></i></div>
							<span class="tile-cat-badge">Fund Raising Marketing</span>
						</div>
						<h4 class="tile-title"><a href="services/fund-raising-marketing.php">Fund Raising Marketing Services</a></h4>
						<p class="tile-desc">Empower your startup or organization with strategic fundraising marketing. We craft compelling pitch decks, investor outreach campaigns, and donor funnels.</p>
					</div>
					<div class="tile-footer">
						<a href="services/fund-raising-marketing.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-share-alt"></i></div>
							<span class="tile-cat-badge">Social Media</span>
						</div>
						<h4 class="tile-title"><a href="services/social-media-marketing.php">Social Media Marketing Agency</a></h4>
						<p class="tile-desc">Engage your target audience across Instagram, Facebook, LinkedIn, and Twitter. Our social media experts build viral content and growth strategies.</p>
					</div>
					<div class="tile-footer">
						<a href="services/social-media-marketing.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-link"></i></div>
							<span class="tile-cat-badge">Quality Link Building</span>
						</div>
						<h4 class="tile-title"><a href="services/quality-link-building.php">High Quality Link Building Service</a></h4>
						<p class="tile-desc">Boost your domain authority and organic rankings with our ethical, high-quality white-hat link building and editorial outreach placement services.</p>
					</div>
					<div class="tile-footer">
						<a href="services/quality-link-building.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-user-astronaut"></i></div>
							<span class="tile-cat-badge">Influencer Marketing</span>
						</div>
						<h4 class="tile-title"><a href="services/influencer-marketing.php">Influencers Marketing Agency</a></h4>
						<p class="tile-desc">Collaborate with top influencers in marketing. Classudo develops creative content that resonates with your audience and delivers real results.</p>
					</div>
					<div class="tile-footer">
						<a href="services/influencer-marketing.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fab fa-youtube"></i></div>
							<span class="tile-cat-badge">YouTube Marketing</span>
						</div>
						<h4 class="tile-title"><a href="services/youtube-marketing.php">YouTube Marketing Services</a></h4>
						<p class="tile-desc">Grow your channel subscribers and video views with specialized YouTube SEO, video optimization, content strategy, and targeted video ads.</p>
					</div>
					<div class="tile-footer">
						<a href="services/youtube-marketing.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-search"></i></div>
							<span class="tile-cat-badge">SEO</span>
						</div>
						<h4 class="tile-title"><a href="services/search-engine-optimization.php">Search Engine Optimization</a></h4>
						<p class="tile-desc">Looking to hire an SEO specialist in India? Look no further! Classudo's team has the tools, experience, and passion to help you reach the top of search engine rankings.</p>
					</div>
					<div class="tile-footer">
						<a href="services/search-engine-optimization.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-ad"></i></div>
							<span class="tile-cat-badge">SEM</span>
						</div>
						<h4 class="tile-title"><a href="services/sem-specialist.php">SEM Specialist</a></h4>
						<p class="tile-desc">Get ahead of your competition with our expert SEM services. Classudo is the leading SEM agency in India and specializes in search engine marketing strategies. Contact us now!</p>
					</div>
					<div class="tile-footer">
						<a href="services/sem-specialist.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-certificate"></i></div>
							<span class="tile-cat-badge">White Label SEO</span>
						</div>
						<h4 class="tile-title"><a href="services/white-label-seo.php">White Label SEO Agency</a></h4>
						<p class="tile-desc">Scale your agency revenue seamlessly with our complete white-label SEO packages. We handle technical execution, content strategy, and unbranded client reporting.</p>
					</div>
					<div class="tile-footer">
						<a href="services/white-label-seo.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-mouse-pointer"></i></div>
							<span class="tile-cat-badge">Pay Per Clicks</span>
						</div>
						<h4 class="tile-title"><a href="services/ppc-marketing.php">PPC Marketing Agency In India</a></h4>
						<p class="tile-desc">Maximize your ad spend efficiency with precision PPC campaigns. Our certified Google Ads specialists build high-converting paid search and display funnels.</p>
					</div>
					<div class="tile-footer">
						<a href="services/ppc-marketing.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="digital-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-filter"></i></div>
							<span class="tile-cat-badge">Lead Generation</span>
						</div>
						<h4 class="tile-title"><a href="services/lead-generation-services.php">Lead Generation Services In India</a></h4>
						<p class="tile-desc">Fill your sales pipeline with verified, high-intent B2B and B2C leads. Classudo designs automated lead generation funnels optimized for high ROI.</p>
					</div>
					<div class="tile-footer">
						<a href="services/lead-generation-services.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<!-- WEB DEVELOPMENT -->
			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="web-development">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-shopping-cart"></i></div>
							<span class="tile-cat-badge">E-Commerce Development</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">E-Commerce Development</a></h4>
						<p class="tile-desc">Build fast, secure, and scalable online stores with Shopify, WooCommerce, or custom PHP. Optimized for frictionless checkout and high sales conversions.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="web-development">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-code"></i></div>
							<span class="tile-cat-badge">PHP Development</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">PHP Development</a></h4>
						<p class="tile-desc">Custom PHP web application development tailored to your exact business workflow, database architecture, and enterprise security standards.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="web-development">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-laptop-code"></i></div>
							<span class="tile-cat-badge">Website Development</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Website Development</a></h4>
						<p class="tile-desc">Craft stunning, responsive, and search-engine friendly websites that deliver flawless user experiences across mobile, tablet, and desktop devices.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="web-development">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-cogs"></i></div>
							<span class="tile-cat-badge">Software Development</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Software Development</a></h4>
						<p class="tile-desc">Custom enterprise software solutions, cloud API integrations, and SaaS platform development built with cutting-edge tech stacks for operational efficiency.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<!-- PERFORMANCE MARKETING -->
			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="performance-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-chart-line"></i></div>
							<span class="tile-cat-badge">Performance Marketing</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Performance Marketing</a></h4>
						<p class="tile-desc">Results-driven performance marketing focused exclusively on ROI, lowering customer acquisition cost (CAC), and scaling brand revenue fast.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="performance-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-map-marker-alt"></i></div>
							<span class="tile-cat-badge">Performance Marketing Delhi</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Performance Marketing Delhi</a></h4>
						<p class="tile-desc">Hyper-targeted performance marketing campaigns designed for businesses in Delhi-NCR. Dominate your local market with data-backed paid ads.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="performance-marketing">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-map-marker-alt"></i></div>
							<span class="tile-cat-badge">Performance Marketing Mumbai</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Performance Marketing Mumbai</a></h4>
						<p class="tile-desc">Premier performance marketing solutions in Mumbai. We help brands expand market share through precision-targeted paid social and Google Ads media campaigns.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<!-- APP DEVELOPMENT -->
			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="app-development">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fab fa-android"></i></div>
							<span class="tile-cat-badge">Android App Development</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Android App Development</a></h4>
						<p class="tile-desc">Build high-performance, feature-rich Android apps using Kotlin. Published on Google Play Store with top security and intuitive UI design standards.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="app-development">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fab fa-apple"></i></div>
							<span class="tile-cat-badge">IOS App Development</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">IOS App Development</a></h4>
						<p class="tile-desc">Native iOS application development for iPhone and iPad crafted with Swift, delivering smooth performance and intuitive Apple user experience.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="app-development">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-mobile-alt"></i></div>
							<span class="tile-cat-badge">Hybrid App Development</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Hybrid App Development</a></h4>
						<p class="tile-desc">Cost-effective cross-platform mobile apps built with React Native and Flutter. Single codebase targeting both iOS and Android platforms efficiently.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="app-development">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-clone"></i></div>
							<span class="tile-cat-badge">Clone App Development</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Clone App Development</a></h4>
						<p class="tile-desc">Customizable clone app development for on-demand booking, delivery, e-commerce, and marketplace platforms with fast time-to-market execution.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<!-- GRAPHIC DESIGN -->
			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="graphic-design">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-paint-brush"></i></div>
							<span class="tile-cat-badge">Creative Design</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Creative Design</a></h4>
						<p class="tile-desc">Innovative graphic design concepts that capture your brand essence, elevate marketing collateral, and leave a lasting visual impact on your audience.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="graphic-design">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-hashtag"></i></div>
							<span class="tile-cat-badge">Social Media Post</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Social Media Post Design</a></h4>
						<p class="tile-desc">High-converting social graphics, carousel templates, and ad banners designed to boost engagement, shares, and click-through rates.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="graphic-design">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-pen-nib"></i></div>
							<span class="tile-cat-badge">Logo Design</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Logo Design</a></h4>
						<p class="tile-desc">Memorable, unique, and versatile vector logo designs that define your corporate identity and distinguish you from competitors in any industry.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="graphic-design">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-box-open"></i></div>
							<span class="tile-cat-badge">Packaging Design</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Packaging Design</a></h4>
						<p class="tile-desc">Eye-catching product packaging, box designs, and label art that attract retail customers and enhance premium unboxing experiences.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="graphic-design">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-briefcase"></i></div>
							<span class="tile-cat-badge">Brand Collaterals</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Brand Collaterals</a></h4>
						<p class="tile-desc">Professional business cards, brochures, flyers, pitch decks, and letterheads engineered to project trust, authority, and brand excellence.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-6 col-md-6 service-tile-item" data-category="graphic-design">
				<div class="service-tile">
					<div>
						<div class="tile-top">
							<div class="tile-icon-box"><i class="fas fa-book-open"></i></div>
							<span class="tile-cat-badge">Brand Book Design</span>
						</div>
						<h4 class="tile-title"><a href="service-details.php">Brand Book Design</a></h4>
						<p class="tile-desc">Comprehensive brand guidelines documenting logo usage, color systems, typography rules, and visual style assets for brand consistency.</p>
					</div>
					<div class="tile-footer">
						<a href="service-details.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

		</div>

		<div class="service-shape3 bounce-animate4">
			<img src="assets/images/service8.png" alt="service5">
		</div>
	</div>
</div>

<!-- Inline JavaScript for Filtering Service Tiles -->
<script>
document.addEventListener('DOMContentLoaded', function() {
	var filterBtns = document.querySelectorAll('.service-filter-btn');
	var serviceItems = document.querySelectorAll('.service-tile-item');

	filterBtns.forEach(function(btn) {
		btn.addEventListener('click', function() {
			filterBtns.forEach(function(b) { b.classList.remove('active'); });
			this.classList.add('active');

			var filterValue = this.getAttribute('data-filter');

			serviceItems.forEach(function(item) {
				if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
					item.classList.remove('hide');
				} else {
					item.classList.add('hide');
				}
			});
		});
	});
});
</script>

<!--==================================================-->
<!-- end Classudo service Area style-two-->
<!--==================================================-->





<!--==================================================-->
<!--start Classudo team Area style-two-->
<!--==================================================-->
<div class="team-area style-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center">
					<h5 class="section-sub-title">OUR TEAM MEMBER</h5>
					<h1 class="section-main-title">Dedicated Team Members</h1>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/home-two/team-thu.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="team-details.php">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/home-two/team-thu2.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="team-details.php">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/home-two/team-thu3.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="team-details.php">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6">
				<div class="single-team-box">
					<div class="single-team-thumb">
						<img src="assets/images/home-two/team-thu4.png" alt="thumb">
						<div class="team-content">
							<div class="team-inner-title">
								<h4><a href="team-details.php">Al-Amin Hossain</a></h4>
								<p>UI/UX DESIGNER</p>
							</div>
							<div class="team-social-icon">
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">behance</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end Classudo team Area style-two-->
<!--==================================================-->






<!--==================================================-->
<!-- Start Classudo blog Area -->
<!--==================================================-->

<div class="blog-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">OUR LATEST BLOG</h5>
					<h1 class="section-main-title">Exploring Its Potential in</h1>
					<h1 class="section-main-title">Various <span>Industries.</span></h1>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="project-right">
					<div class="Classudo-btn">
						<a href="blog-grid.php">VIEW  all post
							<div class="Classudo-hover-btn hover-bx"></div>
							<div class="Classudo-hover-btn hover-bx2"></div>
							<div class="Classudo-hover-btn hover-bx3"></div>
							<div class="Classudo-hover-btn hover-bx4"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-5 col-lg-6 col-md-6">
				<div class="blog-singele-box">
					<div class="blog-thumb">
						<img src="assets/images/blog1.png" alt="blog1">
					</div>
					<div class="blog-content">
						<div class="blog-date">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
						<h3 class="blog-title"><a href="blog-details.php">Leveraging Descriptive Solutions for Business Growth.</a></h3>
						<p class="blog-tex">Appropriatel promote enterprise-wide vortals throuh in information
						without equity best  revolutioniz</p>
						<div class="blog-btn">
							<a href="blog-details.php">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-6 col-md-6">
				<div class="blog-singele-box-tow">
					<div class="blog-thumb-tow">
						<img src="assets/images/blog2.png" alt="blog1">
					</div>
					<div class="blog-content-tow">
						<div class="blog-date-tow">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
						<h3 class="blog-title-two"><a href="blog-details.php">How to Create Modern Web Site For Your Business..</a></h3>
						<p class="blog-tex-tow">Appropriatel promote enterprise-wide throuh in information
						without best  revolutioniz</p>
						<div class="blog-btn-tow">
							<a href="blog-details.php">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="blog-singele-box-tow">
					<div class="blog-thumb-tow">
						<img src="assets/images/blog3.png" alt="blog1">
					</div>
					<div class="blog-content-tow">
						<div class="blog-date-tow">
							<h4><i class="bi bi-calendar2-check"></i>20 June 2024 <span><i class="bi bi-chat-left-text"></i>Comment-05</span></h4>
						</div>
						<h3 class="blog-title-two"><a href="blog-details.php">How to Create Modern Web Site For Your Business..</a></h3>
						<p class="blog-tex-tow">Appropriatel promote enterprise-wide throuh in information
						without best  revolutioniz</p>
						<div class="blog-btn-tow">
							<a href="blog-details.php">READ MORE<i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<!--==================================================-->
<!-- end Classudo blog Area -->
<!--==================================================-->






<!--==================================================-->
<!-- Start Classudo address Area -->
<!--==================================================-->


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
						<a href="contact.php">+91 7398380048
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




<!--==================================================-->
<!-- end Classudo address Area -->
<!--==================================================-->



    <!-- Start Footer -->
    <?php include './partials/footer.php'?>
    <!-- End Footer -->

    <!-- Script -->
    <?php include './partials/script.php'?>
</body>
</html>