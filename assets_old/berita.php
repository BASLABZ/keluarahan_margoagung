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
		<h3>Berita Kelurahan Caturharjo</h3>
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
		<h3>Berita Populer</h3>
			<div class="single-inline">
				
					<?php $databerita = mysql_query("select * from berita");
							while ($kolomberita = mysql_fetch_array($databerita)) {
							 $gambar=$kolomberita['gambar'];	
							 ?>
							 <div class="blog-to">		
					
						<a href="single.html">
						<?php echo "<img class='img-responsives' src='administrator/admin/images/$gambar' widht='' height='' />"; ?>
						</a>
							<div class="blog-top">
							<div class="blog-left">
								<span><?php echo $kolomberita['tgl_posting']; ?></span>
							</div>
							<div class="top-blog">
								<a class="fast" href="single.html"><?php echo $kolomberita['judul_berita']; ?></a>
								<p>Posted by <a href="single.html">| Admin</a></p> 
								<p class="sed"><?php echo $kolomberita['deskripsi']; ?></p> 
								<a  href="index.php?p=detail_berita&idberita=<?php echo $kolomberita[0]; ?>" class="more">Baca Selengkapnya<span> </span></a>
								
							</div>
							<div class="clearfix"> </div>
					</div>
					</div>		
						<?php } ?>
					
				</div>
				
			</div>
			</div>