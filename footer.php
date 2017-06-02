<section id="contacts">
	</section>
		<footer>
		<div class="container">
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
					<h4><b>Featured</b> posts</h4>
					<?php 
					$query  = mysql_query("SELECT * FROM berita order by idberita DESC limit 3");
					while ($rowberita = mysql_fetch_array($query)) {
					 ?>
					<div class="recent_posts_small clearfix">
						<div class="post_item_img_small">
							<img src="administrator/admin/images/<?php echo $rowberita['gambar']; ?>" alt=""  style='width: 87px; height: 50px;'/>
						</div>
						<div class="post_item_content_small">
							<a class="title" href="blog.html" ><?php echo $rowberita['judul_berita']; ?></a>
							<ul class="post_item_inf_small">
								<li><?php echo $rowberita['tgl_posting']; ?></li>
							</ul>
						</div>
					</div>
					<?php } ?>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>About</b> us</h4>
					<p align="justify">Mewujudkan Masyarakat Margoagung Seyegan yang rukun dan sejahtera. Melaksanakan Pelayanan Masyarakat dengan prima. Memelihara stabilitas keamanan, ketertiban dan kenyamanan didalam masyarakat. Melaksanakan pemberdayaan masyarakat sesuai dengn potensi lokal. Meningkatkan kualitas dan kuantitas sarana pendidikan. Melestarikan kebudayaan. Profesionalisme aparatur kelurahan</p>
					<ul class="social">
						<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
					</ul>
				</div>
				
				<div class="respond_clear"></div>
				
				<div class="col-lg-4 col-md-4 padbot30">
					<h4><b>Contacts</b> Us</h4>
					
					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="#">
								<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<input class="contact_btn" type="submit" value="Send message" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row copyright">
				<div class="col-lg-12 text-center">
				 <p>@Copyright Ahmad Bastiar <?php echo date('Y'); ?></p>
				</div>
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer>