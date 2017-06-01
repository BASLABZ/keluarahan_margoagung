<div class="work">
	<div class="container">
		<div class="work-main">
			<?php $datagaleri = mysql_query("SELECT * FROM galeri");
				while ($kolom = mysql_fetch_array($datagaleri)) {
				$gambar = $kolom['gambar'];
				
			 ?>
			   <div class="col-md-6 work-wrapper">
			   	<?php echo "<a href='administrator/admin/images/$gambar' class='b-link-stripe b-animate-go  swipebox' >
						     <img src='administrator/admin/images/$gambar' widht='540' height='400'  class='img-responsive'>
						     <div class='b-wrapper'><h2 class='b-animate b-from-left    b-delay03'><i class='glyphicon glyphicon-zoom-in'>
						      </i> </h2>
						  		</div></a>"; ?>		
							     
			   </div>
			   
			   <?php } ?>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>