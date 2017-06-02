<section>
	<div class="purpose_block">
	<div class="container">
		<?php 
		$query = mysql_query("SELECT * FROM kegiatan order by idkegiatan DESC limit 3");
		while ($rowkegiatan = mysql_fetch_array($query)) {
		 ?>
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-7" data-appear-top-offset="-200" data-animated="fadeInLeft">
				<h2><?php echo $rowkegiatan['judul_kegiatan']; ?></h2>
				<p><?php echo $rowkegiatan['deskripsi']; ?></p>
				<a class="btn btn-active" href="javascript:void(0);" ><span data-hover="Yes I want it">Byu This theme</span></a>
				<a class="btn" href="javascript:void(0);" >View more templates</a>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 ipad_img_in" data-appear-top-offset="-200" data-animated="fadeInRight">
				<img class="ipad_img1" src="../administrator/admin/images/<?php echo $rowkegiatan['gambar']; ?>" alt=""  class="img-responsive" />
			</div>
		</div>
		<?php } ?>
	</div>
</div>
</section>