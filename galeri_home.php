<section id="projects" class="padbot20">
			<div class="container">
				<h2><b>Galeri</b> Kelurahan</h2>
			</div>
			<div class="projects-wrapper" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<div class="owl-demo owl-carousel projects_slider">
					<?php  
						$querygaleri = mysql_query("SELECT * from galeri order by idgaleri DESC");
						while ($rowgaleri = mysql_fetch_array($querygaleri)) {
					 ?>
					<div class="item" >
						<div class="work_item">
							<div class="work_img">
								<img src="administrator/admin/images/<?php echo $rowgaleri['gambar']; ?>" style="width: 387px; height: 191px;" />
								<a class="zoom" href="administrator/admin/images/<?php echo $rowgaleri['gambar']; ?>" rel="prettyPhoto[portfolio1]" ></a>
							</div>
							<div class="work_description">
								<div class="work_descr_cont">
									<a href="#" ><?php  echo $rowgaleri['nama_galeri']; ?></a>
								</div>
							</div>
						</div>
					</div>
					<?php  } ?>
				</div>
			</div>
		</section>