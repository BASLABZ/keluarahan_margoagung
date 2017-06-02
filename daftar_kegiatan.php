<!-- BREADCRUMBS -->
<section class="breadcrumbs_block clearfix parallax">
	<div class="container center">
		<h2><b>Kegiatan</b>Margoagung</h2>
		<p>Informasi Kegiatan terbaru dari kelurahan margoagung seyegan, yogyakarta.</p>
	</div>
</section><!-- //BREADCRUMBS -->

		<section id="blog" style="padding-top: 10px;">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
				
					<!-- BLOG BLOCK -->
					<div class="blog_block col-lg-9 col-md-9 padbot50">
						
						<?php $query = mysql_query("SELECT * FROM kegiatan order by idkegiatan DESC ");
						while ($rowkegiatan = mysql_fetch_array($query)) {
						 ?>
						 <div class="blog_post margbot50 clearfix" data-animated="fadeInUp">
							<div class="blog_post_img">
								<img src="administrator/admin/images/<?php echo $rowkegiatan['gambar']; ?>" alt="" />
								<!-- <a class="zoom" href="blog-post.html" ></a> -->
							</div>
							<div class="blog_post_descr">
								<div class="blog_post_date"><?php echo $rowkegiatan['tgl_posting']; ?></div>
								<a class="blog_post_title" href="index.php?p=detail_kegiatan&idkegiatan=<?php echo $rowkegiatan['idkegiatan']; ?>" ><?php echo $rowkegiatan['judul_kegiatan']; ?></a>
								<ul class="blog_post_info">
									<li><a href="javascript:void(0);" >Admin</a></li>
									<li><a href="javascript:void(0);" ><?php echo $rowkegiatan['tgl_posting']; ?></a></li>
								</ul>
								<hr>
								<div class="blog_post_content"><?php echo $rowkegiatan['deskripsi']; ?></div>
								<a class="read_more_btn" href="index.php?p=detail_kegiatan&idkegiatan=<?php echo $rowkegiatan['idkegiatan']; ?>" >Read More</a>
							</div>
						</div><!-- //BLOG POST -->
						<?php } ?>
						<!-- PAGINATION -->
						<ul class="pagination clearfix">
							<li><a href="javascript:void(0);" >1</a></li>
							<li><a href="javascript:void(0);" >2</a></li>
							<li class="active"><a href="javascript:void(0);" >3</a></li>
							<li><a href="javascript:void(0);" >4</a></li>
							<li><a href="javascript:void(0);" >5</a></li>
							<li><a href="javascript:void(0);" >. . .</a></li>
							<li><a href="javascript:void(0);" >75</a></li>
						</ul><!-- //PAGINATION -->
					</div><!-- //BLOG BLOCK -->
					<div class="sidebar col-lg-3 col-md-3 padbot50">
						<div class="sidepanel widget_popular_posts">
							<h3><b>Popular</b> Posts</h3>
							<?php 
							$query_resent = mysql_query("select * from kegiatan order by idkegiatan desc limit 5");
							while ($row_resent = mysql_fetch_array($query_resent)) {
							 ?>
							<div class="recent_posts_widget clearfix">
								<div class="post_item_img_widget">
									<img src="administrator/admin/images/<?php echo $row_resent['gambar']; ?>" style="width: 313px; height: 180px;" />
								</div>
								<div class="post_item_content_widget">
									<a class="title" href="index.php?p=detail_kegiatan&idkegiatan=<?php echo $row_resent['idkegiatan']; ?>" >
										<?php echo $row_resent['judul_kegiatan'] ; ?>
									</a>
									<ul class="post_item_inf_widget">
										<li><?php echo $row_resent['tgl_posting']; ?></li>
									</ul>
								</div>
							</div>
							<?php } ?>

						</div>
						<hr>
					</div><!-- //SIDEBAR -->
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
		</section><!-- //BLOG -->