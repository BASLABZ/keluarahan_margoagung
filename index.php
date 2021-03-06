<?php  	include 'administrator/koneksi/koneksi.php'; ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>SIM Kelurahan Margoagung Seyegan | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- CSS -->
	<link href="assets_home/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets_home/css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="assets_home/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="assets_home/css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="assets_home/css/owl.carousel.css" rel="stylesheet">
	<link href="assets_home/css/style.css" rel="stylesheet" type="text/css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
	<script src="assets_home/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets_home/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets_home/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="assets_home/js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="assets_home/js/superfish.min.js" type="text/javascript"></script>
	<script src="assets_home/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="assets_home/js/owl.carousel.js" type="text/javascript"></script>
	<script src="assets_home/js/animate.js" type="text/javascript"></script>
	<script src="assets_home/js/jquery.BlackAndWhite.js"></script>
	<script src="assets_home/js/myscript.js" type="text/javascript"></script>
	<script>
		
		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
		
		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height 
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});
		
	</script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="assets_home/images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">
	<!-- PAGE -->
	<div id="page">
		<?php  include 'menuatas_home.php'; ?>
		 <?php
			if(empty( $_GET['p']) || $_GET['p'] ==""){
			$_GET['p'] = "konten.php";
			}
			if(file_exists( $_GET['p'].".php")){
			include $_GET['p'].".php";
			}else {
			include"konten.php";
			}
			?>
	</div>
	<?php include 'footer.php'; ?>
</div>
</body>
</html>