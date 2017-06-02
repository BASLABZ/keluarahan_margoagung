<?php  	include '../administrator/koneksi/koneksi.php'; ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>SIM Kelurahan Margoagung Seyegan | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.ico">
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js" type="text/javascript"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/jquery.BlackAndWhite.js"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
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
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">
	<!-- PAGE -->
	<div id="page">
		<?php  include 'menuatas_home.php'; ?>
		<?php  include 'slider_home.php'; ?>
		
		
		<!-- ABOUT -->
		<section id="about">
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<center> 
								<img src="../administrator/logo/logo.png" class="img-responsive" width="40%">
								</center>
							</a>
						</div>
						<div class="col-lg-8 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Keluarahan</b> Margoagung Seyegan</p>
								<span>Mewujudkan Masyarakat Margoagung Seyegan  yang rukun dan sejahtera. Melaksanakan Pelayanan Masyarakat dengan prima. Memelihara stabilitas keamanan, ketertiban dan kenyamanan didalam masyarakat. Melaksanakan pemberdayaan masyarakat sesuai dengn potensi lokal. Meningkatkan kualitas dan kuantitas sarana pendidikan. Melestarikan kebudayaan. Profesionalisme aparatur kelurahan..</span>
							</a>
						</div>
						
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->
			
			<!-- CLEAN CODE -->
				<!-- CLEAN CODE -->
			<div class="cleancode_block">
				
				<!-- CONTAINER -->
				<div class="container" data-appear-top-offset="-200" data-animated="fadeInUp">
					
					<!-- CASTOM TAB -->
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active clearfix" id="tab1">
							<p class="title"><b>Clean</b> Code</p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab2">
							<p class="title"><b>Technical</b> Support</p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab3">
							<p class="title"><b>Responsive</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab4">
							<p class="title"><b>Documentation</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab5">
							<p class="title"><b>Quality</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
						<div class="tab-pane fade clearfix" id="tab6">
							<p class="title"><b>Support</b></p>
							<span>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</span>
						</div>
					</div>
					<ul id="myTab" class="nav nav-tabs">
						<li class="active"><a class="i1" href="#tab1" data-toggle="tab" ><i></i><span>Clean Code</span></a></li>
						<li><a class="i2" href="#tab2" data-toggle="tab" ><i></i><span>Support</span></a></li>
						<li><a class="i3" href="#tab3" data-toggle="tab" ><i></i><span>Responsive</span></a></li>
						<li><a class="i4" href="#tab4" data-toggle="tab" ><i></i><span>Documentation</span></a></li>
						<li><a class="i5" href="#tab5" data-toggle="tab" ><i></i><span>Quality</span></a></li>
						<li><a class="i6" href="#tab6" data-toggle="tab" ><i></i><span>Support</span></a></li>
					</ul><!-- CASTOM TAB -->
				</div><!-- //CONTAINER -->
			</div><!-- //CLEAN CODE -->
			<div class="purpose_block">
				<div class="container">
					<div class="row">
					
						<div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
							<h2><b>Multi-purpose</b> WordPress Theme</h2>
							<p>We tried to make very high-quality product and so our code is very neat and clean. Whatever anyone could improve and modify the template to your liking.</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
							<a class="btn btn-active" href="javascript:void(0);" ><span data-hover="Yes I want it">Byu This theme</span></a>
							<a class="btn" href="javascript:void(0);" >View more templates</a>
						</div>
						
						<div class="col-lg-5 col-md-5 col-sm-5 ipad_img_in" data-appear-top-offset="-200" data-animated="fadeInRight">
							<img class="ipad_img1" src="images/img1.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="projects" class="padbot20">
			<div class="container">
				<h2><b>Featured</b> Works</h2>
			</div>
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<div class="owl-demo owl-carousel projects_slider">
					<?php  
						$querygaleri = mysql_query("SELECT * from galeri order by idgaleri DESC");
						while ($rowgaleri = mysql_fetch_array($querygaleri)) {
					 ?>
					<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="../administrator/admin/images/<?php echo $rowgaleri['gambar']; ?>" alt=""  width="368px" height="276px" />
								<a class="zoom" href="../administrator/admin/images/<?php echo $rowgaleri['gambar']; ?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="portfolio-post.html" ><?php  echo $rowgaleri['nama_galeri']; ?></a>
								</div>
							</div>
						</div>
					</div>
					<?php  } ?>
				</div>
			</div>
		</section>
		<section id="news">
			<div class="container">
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
				<?php  
					$queryberita = mysql_query("SELECT * FROM berita ORDER BY idberita DESC");
					while ($rowberita = mysql_fetch_array($queryberita)) {
				 ?>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="post_item_img">
								<img src="../administrator/admin/images/<?php echo $rowberita['gambar']; ?>" alt=""   style='width: 370px; height: 213px;'/>
								<a class="link" href="blog-post.html" ></a>
							</div>
							<div class="post_item_content">
								<a class="title" href="blog-post.html" ><?php  echo $rowberita['judul_berita']; ?></a>
								<ul class="post_item_inf">
									<li><a href="javascript:void(0);" >Admin</a></li>
									<li><a href="javascript:void(0);" ><?php  echo $rowberita['tgl_posting']; ?></a> |</li>
									
								</ul>
							</div>
						</div>
					</div>
					<?php  } ?>
				</div>
			</div>
		</section>
	</div>
	<section id="contacts">
	</section>
	<footer>
		<div class="container">
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				 <p>Copyright@Ahmad Bastiar  <?php  echo date('Y'); ?></p>
				</div>
			</div>
		</div>
	</footer>
</div>
</body>
</html>