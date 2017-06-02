<div class="container">
<div class="grid">
	<h4>Kegiatan Terbaru</h4>
	<?php $datakegiatan = mysql_query("SELECT * from kegiatan");
			while ($kolomkegiatan = mysql_fetch_array($datakegiatan)) {
			$gambar = $kolomkegiatan['gambar'];
			
	 ?>
		
					<figure class="effect-julia">
						<?php echo "<img src='administrator/admin/images/$gambar'/>"; ?>
						<figcaption>
							<h5><?php echo $kolomkegiatan['judul_kegiatan']; ?></h5>
							<div>
								<p><?php echo $kolomkegiatan['tgl_posting']; ?></p>
								<p><?php echo $kolomkegiatan['deskripsi']; ?></p>
							</div>
							<a href="#">Baca Selengkapnya</a>
						</figcaption>			
					</figure>
					<?php } ?>

					<div class="clearfix"> </div>
					</div>
</div>