<?php 
	$idberita = $_GET['idberita'];
	$sqldetailberita = mysql_query("SELECT * FROM berita where idberita = '$idberita'");
	$kolomberita = mysql_fetch_array($sqldetailberita);
	$gambar = $kolomberita['gambar'];
 ?>
<div class="banner banner5">
</div>	
<div class="single">
	<div class="container">
				<div class="single wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<div class="blog-to1 service_info">		
					<?php echo "<img src='administrator/admin/images/$gambar'>"; ?>

						<!-- <img class="img-responsive sin-on" src="images/sin2.jpg" alt="" /> -->
							<div class="blog-top">
							<div class="blog-left">
								<b><?php echo $kolomberita[2]; ?></b>
								<!-- <span>July</span> -->
							</div>
							<div class="top-blog">
								<a class="fast" href="#"><?php echo $kolomberita[1]; ?></a>
								<p>Posted by Administrator Kelurahan Caturharjo</p> 
								<p><?php echo $kolomberita[3]; ?></p>
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>		
		</div>
	</div>
</div>