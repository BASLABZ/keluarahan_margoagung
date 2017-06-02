<?php 
	$idkegiatan = $_GET['idkegiatan'];
	$row_detail_kegiatan = mysql_fetch_array(mysql_query("SELECT * FROM kegiatan where idkegiatan = '".$idkegiatan."'"));
 ?>
		<section id="blog">
			
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row">
				
					<!-- BLOG BLOCK -->
					<div class="blog_block col-lg-9 col-md-9 padbot50">
						
						<!-- SINGLE BLOG POST -->
						<div class="single_blog_post clearfix" data-animated="fadeInUp" style="padding-top: 10px;">
							<div class="single_blog_post_descr">
								
								<div class="single_blog_post_title"><?php echo $row_detail_kegiatan['judul_kegiatan']; ?></div>
								<ul class="single_blog_post_info">
									<li><a href="javascript:void(0);" >Admin</a></li>
									<li><a href="javascript:void(0);" ><?php echo $row_detail_kegiatan['tgl_posting']; ?></a></li>
								</ul>
							</div>
							<div class="single_blog_post_img"><img src="administrator/admin/images/<?php echo $row_detail_kegiatan['gambar']; ?>" style="width: 870px; height: 500px;" /></div>
							
							<div class="single_blog_post_content">
								<p class="margbot50"><?php echo $row_detail_kegiatan['deskripsi']; ?></p>
							</div>
							
						</div>
						
						<hr>
						
						<!-- COMMENTS -->
						<div id="comments" class="margbot30" data-animated="fadeInUp">
							<h3><b>Comments </b><span class="comments_count">(152)</span></h3>
							
							<ul>
							   <li class="clearfix" data-animated="fadeInUp">
									<div class="pull-left avatar">
										<a href="javascript:void(0);" ><img src="assets_home/images/avatar1.jpg" alt="" /></a>
									</div>
									<div class="comment_right">
										<div class="comment_info clearfix">
											<div class="pull-left comment_author">Stanislav Kerimov</div>
											<div class="pull-left comment_inf_sep">|</div>
											<div class="pull-left comment_date">13 January 2014</div>
										</div>
										<p>Thank you so much for putting this together Jeremy. Most of these seem like common sense but it is amazing how many times I see new employees having the worst days of their life because managers/leaders don’t want to be “bothered” with the new guy.</p>
									</div>
								</li>
								<li class="clearfix" data-animated="fadeInUp">
									<div class="pull-left avatar">
										<a href="javascript:void(0);" ><img src="assets_home/images/avatar2.jpg" alt="" /></a>
									</div>
									<div class="comment_right">
										<div class="comment_info clearfix">
											<div class="pull-left comment_author">Anna Balashova</div>
											<div class="pull-left comment_inf_sep">|</div>
											<div class="pull-left comment_date">10 January 2014</div>
										</div>
										<p>I would add under “keep the busy” to make sure that every team member is aware of the new team member starting, and even thought the first 1-2 days may be meet and greats, to have them up with access to everything they need to preform their tasks.</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- //COMMENTS -->
						
						<hr class="margbot80">
						
						<!-- LEAVE A COMMENT -->
						<div class="leave_comment" data-animated="fadeInUp">
							<h3><b>Leave a</b> Comment</h3>
							
							<form id="comment_form" class="row" action="#" method="post">
								<div class="col-lg-4 col-md-4">
									<input type="text" name="name" value="Your Name *" onFocus="if (this.value == 'Your Name *') this.value = '';" onBlur="if (this.value == '') this.value = 'Your Name *';" />
									<input type="text" name="phone" value="E-mail *" onFocus="if (this.value == 'E-mail *') this.value = '';" onBlur="if (this.value == '') this.value = 'E-mail *';" />
									<input type="text" name="phone" value="Web site" onFocus="if (this.value == 'Web site') this.value = '';" onBlur="if (this.value == '') this.value = 'Web site';" />
									<div class="comment_note">All fields marked with an asterisk (*) are required</div>
								</div>
								<div class="col-lg-8 col-md-8">
									<textarea name="message" onFocus="if (this.value == 'Your message *') this.value = '';" onBlur="if (this.value == '') this.value = 'Your message *';">Your message *</textarea>
									<input class="contact_btn pull-right" type="submit" value="Send message" />
								</div>
							</form>
						</div><!-- //LEAVE A COMMENT -->
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
