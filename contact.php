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
  $title = 'Contact';
?>
<?php include './partials/hero.php'?>

<!--==================================================-->
<!-- end Classudo breadcumb Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start Classudo contact Area -->
<!--==================================================-->

<div class="contact-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="section-title text-left">
					<h5 class="section-sub-title">CONTACT US</h5>
					<h1 class="section-main-title">Make a appointment</h1>
					<h1 class="section-main-title">To Increase Your <span>Business.</span></h1>
				</div>
					<div class="contact_from_box">
						<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
							<div class="row">
								<div class="col-lg-6">
									<div class="form_box">
										<input type="text" name="name" placeholder="Your Name *">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box">
										<input type="email" name="email" placeholder="Your E-Mail *">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box">
										<input type="text" name="subject" placeholder="Subject *">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form_box">
										<input type="text" name="phone" placeholder="Phone *">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form_box">
										<textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
									</div>
									<div class="quote_button">
										<button class="btn" type="submit">SUBMIT<i class="bi bi-arrow-right"></i></button>
									</div>
								</div>
							</div>
						</form>
					<div id="status" class="error"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--==================================================-->
<!-- end Classudo contact Area -->
<!--==================================================-->




<!--==================================================-->
<!-- Start Classudo google map area-->
<!--==================================================-->
<div class="google-map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.216716254595!2d81.01316647609234!3d26.833058563508022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be32f47e7e24b%3A0xa7665f27f2507d7c!2sClassudo%20Technologies%20Pvt.%20Ltd.%20-%20Digital%20Marketing%20Agency!5e0!3m2!1sen!2sin!4v1785330715244!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
			</div>
		</div>
	</div>
</div>
<!--==================================================-->
<!--End Classudo google map area-->
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