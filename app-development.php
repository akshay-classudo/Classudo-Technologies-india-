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

<!-- Breadcrumb Hero -->
<?php $title = 'App Development Services'; ?>
<?php include './partials/hero.php'?>

<!-- Overview Section -->
<div class="about-area py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 mb-4 mb-lg-0">
				<div class="about-thumb text-center">
					<img src="assets/images/inner/service-thumb3.png" alt="App Development Classudo" class="img-fluid rounded-3 shadow">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">MOBILE APP SOLUTIONS</h5>
					<h1 class="section-main-title">Native & Cross-Platform <span>Mobile Apps</span></h1>
					<p class="section-title-descr mt-3">
						Classudo Technologies builds high-performance mobile applications for iOS and Android. Whether you require native Android (Kotlin) apps, native iOS (Swift) apps, cross-platform Flutter/React Native solutions, or on-demand marketplace clones, our mobile team delivers seamless user interfaces and robust scalable backend APIs.
					</p>
				</div>
				<div class="service-details-list mt-3">
					<ul>
						<li><i class="bi bi-arrow-right"></i> Native Android & Apple iOS App Engineering</li>
						<li><i class="bi bi-arrow-right"></i> Cross-Platform Flutter & React Native Solutions</li>
						<li><i class="bi bi-arrow-right"></i> Biometric Auth, Payment Gateway & Offline Sync</li>
						<li><i class="bi bi-arrow-right"></i> End-to-End App Store & Google Play Publishing</li>
					</ul>
				</div>
				<div class="Classudo-btn mt-4">
					<a href="contact.php">DISCUSS APP IDEA
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

<!-- All App Development Sub-Services Grid -->
<div class="sservice-area style-two py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title text-center mb-5">
					<h5 class="section-sub-title">OUR SOLUTIONS</h5>
					<h1 class="section-main-title">Explore All <span>App Development</span> Services</h1>
				</div>
			</div>
		</div>

		<div class="row g-4">
			<!-- Service 1 -->
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fab fa-android"></i></div>
							<span class="tile-cat-badge">Android</span>
						</div>
						<h4 class="tile-title"><a href="services/android-app-development.php">Android App Development</a></h4>
						<p class="tile-desc">High-performance Android applications built with Kotlin and modern frameworks. Published on Google Play Store with top security and intuitive UI design standards.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<a href="services/android-app-development.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<!-- Service 2 -->
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fab fa-apple"></i></div>
							<span class="tile-cat-badge">iOS</span>
						</div>
						<h4 class="tile-title"><a href="services/ios-app-development.php">IOS App Development</a></h4>
						<p class="tile-desc">Native iOS application development for iPhone and iPad crafted with Swift, delivering smooth performance and intuitive Apple user experience.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<a href="services/ios-app-development.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<!-- Service 3 -->
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-mobile-alt"></i></div>
							<span class="tile-cat-badge">Cross-Platform</span>
						</div>
						<h4 class="tile-title"><a href="services/hybrid-app-development.php">Hybrid App Development</a></h4>
						<p class="tile-desc">Cost-effective cross-platform mobile apps built with React Native and Flutter. Single codebase targeting both iOS and Android platforms efficiently.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<a href="services/hybrid-app-development.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>

			<!-- Service 4 -->
			<div class="col-xl-6 col-lg-6 col-md-6">
				<div class="service-tile bg-white p-4 rounded-4 shadow-sm border border-light h-100 d-flex flex-column justify-content-between">
					<div>
						<div class="tile-top d-flex justify-content-between align-items-center mb-3">
							<div class="tile-icon-box" style="width:48px;height:48px;border-radius:10px;background:rgba(247, 118, 76, 0.08);color:var(--coral-600);display:flex;align-items:center;justify-content:center;font-size:18px;"><i class="fas fa-clone"></i></div>
							<span class="tile-cat-badge">Clones</span>
						</div>
						<h4 class="tile-title"><a href="services/clone-app-development.php">Clone App Development</a></h4>
						<p class="tile-desc">Customizable clone app development for on-demand booking, delivery, e-commerce, and marketplace platforms with fast time-to-market execution.</p>
					</div>
					<div class="tile-footer border-top pt-3 d-flex justify-content-between align-items-center">
						<a href="services/clone-app-development.php" class="tile-link">KNOW MORE</a>
						<div class="tile-arrow"><i class="fas fa-arrow-right"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 6-Step App Development Process Workflow & FAQ -->
<div class="about-area py-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">MOBILE WORKFLOW</h5>
					<h1 class="section-main-title">Classudo <span>6-Step App</span> Process</h1>
					<p class="section-title-descr mt-3">
						From initial wireframing to App Store and Google Play Store deployment, we deliver high-performing mobile applications.
					</p>
				</div>
				<div class="mt-4">
					<div class="d-flex mb-3">
						<div class="me-3 text-danger fs-4 fw-bold">01.</div>
						<div>
							<h5 class="fw-bold mb-1" style="font-family:'Poppins',sans-serif;">Concept & Feature Mapping</h5>
							<p class="text-muted m-0" style="font-size:14px;">Defining mobile app scope, user personas, tech stack, and API endpoints.</p>
						</div>
					</div>
					<div class="d-flex mb-3">
						<div class="me-3 text-danger fs-4 fw-bold">02.</div>
						<div>
							<h5 class="fw-bold mb-1" style="font-family:'Poppins',sans-serif;">UI/UX Mobile Design</h5>
							<p class="text-muted m-0" style="font-size:14px;">Designing intuitive mobile wireframes, screen transitions, and Figma prototypes.</p>
						</div>
					</div>
					<div class="d-flex mb-3">
						<div class="me-3 text-danger fs-4 fw-bold">03.</div>
						<div>
							<h5 class="fw-bold mb-1" style="font-family:'Poppins',sans-serif;">Native / Cross-Platform Coding</h5>
							<p class="text-muted m-0" style="font-size:14px;">Writing robust Kotlin (Android), Swift (iOS), or Flutter/React Native frontend code.</p>
						</div>
					</div>
					<div class="d-flex mb-3">
						<div class="me-3 text-danger fs-4 fw-bold">04.</div>
						<div>
							<h5 class="fw-bold mb-1" style="font-family:'Poppins',sans-serif;">Backend Cloud Integration</h5>
							<p class="text-muted m-0" style="font-size:14px;">Integrating push notifications, payment gateways, biometric auth, and cloud databases.</p>
						</div>
					</div>
					<div class="d-flex mb-3">
						<div class="me-3 text-danger fs-4 fw-bold">05.</div>
						<div>
							<h5 class="fw-bold mb-1" style="font-family:'Poppins',sans-serif;">Beta Testing & Performance Audit</h5>
							<p class="text-muted m-0" style="font-size:14px;">End-to-end device testing across varied screen sizes, OS versions, and network speeds.</p>
						</div>
					</div>
					<div class="d-flex">
						<div class="me-3 text-danger fs-4 fw-bold">06.</div>
						<div>
							<h5 class="fw-bold mb-1" style="font-family:'Poppins',sans-serif;">App Store & Play Store Launch</h5>
							<p class="text-muted m-0" style="font-size:14px;">Full compliance verification, metadata submission, and public store publishing.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<div class="p-4 bg-light rounded-4 border shadow-sm">
					<h4 class="fw-bold mb-3" style="font-family:'Poppins',sans-serif;color:#050a1e;">Frequently Asked Questions</h4>
					<div class="accordion" id="appFAQ">
						<div class="accordion-item mb-2 border-0 rounded">
							<h2 class="accordion-header" id="appHeadingOne">
								<button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#appCollapseOne">
									Should I choose Native App or Cross-Platform (Hybrid) Development?
								</button>
							</h2>
							<div id="appCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#appFAQ">
								<div class="accordion-body text-muted" style="font-size:14px;">
									Native apps (Kotlin/Swift) deliver maximum performance and hardware integration (Bluetooth, camera, offline processing). Cross-platform (Flutter/React Native) offers a single codebase for faster, cost-effective launch across both iOS and Android.
								</div>
							</div>
						</div>
						<div class="accordion-item mb-2 border-0 rounded">
							<h2 class="accordion-header" id="appHeadingTwo">
								<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#appCollapseTwo">
									Do you assist with Google Play and Apple App Store publishing?
								</button>
							</h2>
							<div id="appCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#appFAQ">
								<div class="accordion-body text-muted" style="font-size:14px;">
									Yes! Classudo handles developer account setup, store guideline compliance, App Store Optimization (ASO), and live store approval.
								</div>
							</div>
						</div>
						<div class="accordion-item border-0 rounded">
							<h2 class="accordion-header" id="appHeadingThree">
								<button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#appCollapseThree">
									Can you integrate custom APIs and Payment Gateways?
								</button>
							</h2>
							<div id="appCollapseThree" class="accordion-collapse collapse" data-bs-parent="#appFAQ">
								<div class="accordion-body text-muted" style="font-size:14px;">
									Yes, we integrate Razorpay, Stripe, Paytm, WhatsApp APIs, Twilio OTPs, Google Maps, and custom REST/GraphQL backends seamlessly.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Address Contact Bar -->
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

    <?php include './partials/footer.php'?>
    <?php include './partials/script.php'?>
</body>
</html>
