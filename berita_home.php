<section id="news" style="background-color: #428bca; color: white;">
	<div class="container">
		<h2 style="color: white;"><b>Berita</b> Kelurahan</h2>
	</div>
	<div class="container">
		<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
		<?php  
			$queryberita = mysql_query("SELECT * FROM berita ORDER BY idberita DESC");
			while ($rowberita = mysql_fetch_array($queryberita)) {
		 ?>
			<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
				<div class="post_item">
					<div class="post_item_img">
						<img src="administrator/admin/images/<?php echo $rowberita['gambar']; ?>" alt=""   style='width: 370px; height: 313px; '/>
						<a class="link" href="index.php?p=detail_berita&idberita=<?php echo $rowberita['idberita']; ?>" ></a>
					</div>
					<div class="post_item_content">
						<a class="title" href="index.php?p=detail_berita&idberita=<?php echo $rowberita['idberita']; ?>" style="color: white;"><?php  echo $rowberita['judul_berita']; ?></a>
						<ul class="post_item_inf">
							<li><a href="javascript:void(0);" style="color: white;">Admin</a> | </li>
							<li><a href="javascript:void(0);" style="color: white;"><?php  echo $rowberita['tgl_posting']; ?></a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<?php  } ?>
		</div>
	</div>
		</section>