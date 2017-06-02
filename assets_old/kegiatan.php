<style type="text/css">
	.banner-bottom-strip {
    background: #3d9b4e;
    background-size: cover;
    min-height: 205px;

}
.img-responsives, .thumbnail > img, .thumbnail a > img, .carousel-inner > .item > img, .carousel-inner > .item > a > img {
    display: block;
    max-width: 1140;
    height: 200px;
}
</style>
<div class="banner-bottom-strip">
	<div class="container">
		<center><h3>Kelurahan Caturharjo</h3></center>
		<div class="row">
			
			<p>
		Mewujudkan Masyarakat Caturharjo yang rukun dan sejahtera. 
		Melaksanakan Pelayanan Masyarakat dengan prima. 
		Memelihara stabilitas keamanan, ketertiban dan kenyamanan didalam masyarakat.
		Melaksanakan pemberdayaan masyarakat sesuai dengn potensi lokal.
		Meningkatkan kualitas dan kuantitas sarana pendidikan.
		Melestarikan kebudayaan. Profesionalisme aparatur kelurahan.
	</p>
			
			
		</div>
		
	</div>
</div>	
<div class="blog">
	<div class="container">
		<h3>kegiatan Populer</h3>
			<div class="single-inline">
				
					<?php $datakegiatan = mysql_query("select * from kegiatan");
							while ($kolomkegiatan = mysql_fetch_array($datakegiatan)) {
							 $gambar=$kolomkegiatan['gambar'];	
							 ?>
							 <div class="blog-to">		
					
						<a href="single.html">
						<?php echo "<img class='img-responsives' src='administrator/admin/images/$gambar' widht='' height='' />"; ?>
						</a>
							<div class="blog-top">
							<div class="blog-left">
								<span><?php echo $kolomkegiatan['tgl_posting']; ?></span>
							</div>
							<div class="top-blog">
								<a class="fast" href="single.html"><?php echo $kolomkegiatan['judul_kegiatan']; ?></a>
								<p>Posted by <a href="single.html">| Admin</a></p> 
								<p class="sed"><?php echo $kolomkegiatan['deskripsi']; ?></p> 
								
								
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>		
						<?php } ?>
					
				</div>
				
			</div>
			</div>