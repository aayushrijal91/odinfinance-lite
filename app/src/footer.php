<footer>
	<div class="container py-3 py-lg-4">
		<div class="row justify-content-center justify-content-lg-between align-items-center">
			<div class="col-auto col-md-12 col-lg-auto text-center">
				<?= renderImg("footer-logo.png", "logo") ?>
			</div>
			<div class="col-auto py-5 py-lg-0">
				<div class="row no-gutters justify-content-center align-items-center h10 fw-500 text-dark-grey">
					<div class="col-auto">Copyright <?= date('Y') ?></div>
					<div class="col-auto px-2 px-md-4 px-xxl-5 text-primary">/</div>
					<div class="col-auto"><?= $site ?></div>
					<div class="col-auto px-2 px-md-4 px-xxl-5 text-primary">/</div>
					<div class="col-auto">All Rights Reserved</div>
				</div>
			</div>
			<div class="col-auto col-md-12 col-lg-auto text-center">
				<a href="https://www.aiims.com.au/like-our-work/" target="_blank"><?= renderImg("aiims.png", "logo") ?></a>
			</div>
		</div>
	</div>
</footer>
<a href="javascript:" id="return-to-top">
	<?= renderImg("arrow-up.png","icons") ?>
</a>
<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>