<?php require_once('header.php'); ?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<?php include_once("analyticstracking.php") ?>
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <!-- Section: Navigation -->
    <?php include_once('navigation.php'); ?>
		<!-- /Section: Navigation -->

	<!-- Section: intro -->
    <section id="intro" class="intro overlay1">
			<img src="img/cerebroit_logo.png" style="height:200px; margin-left: 42%;">
		<div class="slogan">
			<h2>WELCOME TO <span class="text_color">CEREBROIT</span> </h2>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->


    <?php include_once('about.php'); ?>

		<?php include_once('services.php'); ?>

		<?php include_once('products.php'); ?>

		<?php include_once('contact.php'); ?>

		<?php require_once('footer.php'); ?>
