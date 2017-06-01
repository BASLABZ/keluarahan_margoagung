<!-- <div class="banner banner5">
</div> -->
<style type="text/css">
	h4 {
    font-family: 'Ubuntu', sans-serif;
    font-size: 2em;
    text-align: center;
    color: #ff6857;
    text-transform: capitalize;
    margin-bottom: 22px;
}
</style>
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
		<h4>Galeri Foto Kelurahan</h4>
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