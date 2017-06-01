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
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.moments-bottom a').Chocolat();
		});
		</script>
<div class="gallery">
	<div class="container">
		<h3>Gallery</h3>
			<div class="moments-bottom">
			<?php $datagaleri = mysql_query("select * from galeri");
							while ($kolomgaleri = mysql_fetch_array($datagaleri)) {
							 $gambar=$kolomgaleri['gambar'];	
							 ?>
				<div class="moments-1">
					<div class="col-md-4 moments-left">

						<?php echo "<a href='administrator/admin/images/$gambar'>
							<img src='administrator/admin/images/$gambar' width='360' height='260' />
						</a>"; ?>
					</div>
					
				</div>
				<?php } ?>
					
			</div>
		</div>
	</div>