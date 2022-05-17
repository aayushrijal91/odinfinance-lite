<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="./assets/images/favicon.png" type="image/png">
	<title><?= $site ?></title>
	<link rel="stylesheet" href="./assets/css/main.css?v=0.1">

	<!-- Recaptcha Here -->
	<script src="https://www.google.com/recaptcha/api.js?render=<?= $recaptcha_client_secret ?>"></script>
	<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('<?= $recaptcha_client_secret ?>', {
				action: 'contact'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token;
			});
		});
	</script>
</head>

<body>
	<header>
		<div class="header-top-bar">
			<div class="container py-4">
				<div class="row justify-content-center justify-content-lg-between align-items-center">
					<div class="col-auto">
						<a href="./">
							<?= renderImg("logo.png", "logo") ?>
						</a>
					</div>
					<div class="col-auto d-none d-lg-block">
						<div class="row font-inter">
							<div class="col-auto">
								<a href="#about" class="btn text-white">About Us</a>
							</div>
							<div class="col-auto">
								<a href="#services" class="btn text-white">Our Services</a>
							</div>
							<div class="col-auto">
								<a href="#lenders" class="btn text-white">Lenders</a>
							</div>
							<div class="col-auto">
								<a href="#testimonials" class="btn text-white">What Our Clients Say</a>
							</div>
							<div class="col-auto">
								<a href="#faqs" class="btn text-white">FAQs</a>
							</div>
						</div>
					</div>
					<div class="col-auto d-none d-lg-block">
						<a href="tel:<?= $phone_number ?>" class="btn btn-block bordered border-white rounded-pill text-white py-3 px-md-5">
							<?= $phone_number ?>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="banner">
			<div class="banner-slider-content b1">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-xl-7">
							<div class="text-center h2 fw-800 line-height-3 letter-spacing-1">No Docs?<br>No Problems</div>

							<div class="text-center h8 fw-500 banner-cta-wrapper">
								<div class="banner-cta">2 Years Active ABN and GST Registered</div>
								<div class="banner-cta">20% Deposit or Property Owner</div>
								<div class="banner-cta">Up To $250,000.00</div>
							</div>

							<div class="row justify-content-center">
								<div class="col-auto">
									<a href="#form" class="btn btn-tertiary bordered border-tertiary rounded-pill text-white py-3 px-md-5 h9 fw-700">
										Apply Now
									</a>
								</div>
								<div class="col-auto">
									<a href="#form" class="btn bordered border-white rounded-pill text-white py-3 px-md-5 h9 fw-700">
										Contact Us
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-slider-content b2">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-xl-9 col-xxl-9">
							<div class="text-center h3 fw-800 line-height-3 letter-spacing-1">Funding for up to $500,000 with just a bank statement</div>

							<div class="row justify-content-center pt-5">
								<div class="col-auto">
									<a href="#form" class="btn btn-tertiary bordered border-tertiary rounded-pill text-white py-3 px-md-5 h9 fw-700">
										Apply Now
									</a>
								</div>
								<div class="col-auto">
									<a href="tel: <?= $phone_number ?>" class="btn bordered border-white rounded-pill text-white py-3 px-md-5 h9 fw-700">
										Contact Us
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-slider-content b3">
				<div class="container">
					<div class="row justify-content-end">
						<div class="col-xl-8 col-xxl-8">
							<div class="text-center h3 fw-800 line-height-3 letter-spacing-1">Conditional Approvals Over The Phone!</div>

							<div class="row justify-content-center pt-5">
								<div class="col-auto">
									<a href="#form" class="btn btn-tertiary bordered border-tertiary rounded-pill text-white py-3 px-md-5 h9 fw-700">
										Apply Now
									</a>
								</div>
								<div class="col-auto">
									<a href="#form" class="btn bordered border-white rounded-pill text-white py-3 px-md-5 h9 fw-700">
										Contact Us
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="interest"><?= renderImg("interest.png", "lib") ?></div>
	</header>