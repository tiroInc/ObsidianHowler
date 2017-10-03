<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Page</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />

		<link rel="icon" href="<?php echo site_url('assets/images/favicon.ico'); ?>">
		<link rel="shortcut icon" href="<?php echo site_url('assets/images/favicon.ico'); ?>" />

		<link rel="stylesheet" href="<?php echo site_url('assets/css/booking.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/css/camera.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/css/owl.carousel.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/css/form.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/css/ie.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/css/skeleton.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/css/superfish.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/css/font_awesome.css'); ?>">
		

		<script src="<?php echo site_url('assets/js/jquery.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery-migrate-1.2.1.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/script.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/superfish.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.ui.totop.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.equalheights.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.mobilemenu.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/owl.carousel.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/camera.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/jquery.mobile.customized.min.js'); ?>"></script>
		<script src="<?php echo site_url('assets/js/booking.js'); ?>"></script>

		<script>
			$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '444',
				thumbnails: false,
				height: '48.375%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			/*carousel*/
			var owl=$("#owl");
				owl.owlCarousel({
				items : 2, 
				itemsDesktop : [995,2], 
				itemsDesktopSmall : [767, 2], 
				itemsTablet: [700, 2], 
				itemsMobile : [479, 1], 
				navigation : true,
				pagination : false
				});
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
	</head>	
	<body class="page1" id="top">