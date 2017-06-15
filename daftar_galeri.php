<section id="news" style="background-color: #428bca; color: white;">
	<div class="container">
				<h2 style="color: white;"><b>Galeri</b> Kelurahan</h2>
	</div>
			<div class="container">
				<div class="row recent_posts" data-appear-top-offset="-200" data-animated="fadeInUp">
				<?php  
					$querygaleri = mysql_query("SELECT * FROM galeri ORDER BY idgaleri DESC");
					while ($rowgaleri = mysql_fetch_array($querygaleri)) {
				 ?>
					<div class="col-lg-4 col-md-4 col-sm-4 padbot30 post_item_block">
						<div class="post_item">
							<div class="item">
						<div class="work_item">
							<div class="work_img">
								<img src="administrator/admin/images/<?php echo $rowgaleri['gambar']; ?>"  style="width: 360px; height: 276px;" />
								<a class="zoom" href="administrator/admin/images/<?php echo $rowgaleri['gambar']; ?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" ><?php  echo $rowgaleri['nama_galeri']; ?></a>
								</div>
							</div>
						</div>
					</div>
						</div>
					</div>
					<?php  } ?>
				</div>
			</div>
		</section>