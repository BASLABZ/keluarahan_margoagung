<style type="text/css">
	.grid h4 {
    font-family: 'Ubuntu', sans-serif;
    font-size: 2em;
    text-align: center;
    color: #ff6857;
    text-transform: capitalize;
    margin-bottom: 22px;
}
</style>
<div class="container">
<div class="grid">
	<h4>Berita Populer</h4>
	<hr>
	<?php $databerita = mysql_query("SELECT * from berita");
			while ($kolomberita = mysql_fetch_array($databerita)) {
			$gambar = $kolomberita['gambar'];
			
	 ?>
					<figure class="effect-julia">
					<?php echo "<img src='administrator/admin/images/$gambar'/>"; ?>
					
						<figcaption>

							<div>
								<p><?php echo $kolomberita['tgl_posting']; ?></p>
								<p> <a href="index.php?p=detail_berita&idberita=<?php echo $kolomberita[0]; ?>"><?php echo $kolomberita['judul_berita']; ?></a> </p>
	
							</div>
							
							</figcaption>			
					</figure>
<?php } ?>
					<div class="clearfix"> </div>
					</div>
</div>