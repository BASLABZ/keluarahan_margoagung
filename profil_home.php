<style type="text/css">
	.modal-backdrop {
    /* bug fix - no overlay */    
    display: none;    
}
</style>
<section id="about">
			<!-- SERVICES -->
			<div class="services_block padbot40" data-appear-top-offset="-200" data-animated="fadeInUp">
				
				<!-- CONTAINER -->
				<div class="container">
					<!-- ROW -->
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<center> 
								<img src="administrator/logo/logo.png" class="img-responsive" width="40%">
								</center>
							</a>
						</div>
						<div class="col-lg-8 col-md-3 col-sm-6 col-xs-6 col-ss-12 margbot30">
							<a class="services_item" href="javascript:void(0);" >
								<p><b>Keluarahan</b> Margoagung Seyegan</p>
								<span>Mewujudkan Masyarakat Margoagung Seyegan  yang rukun dan sejahtera. Melaksanakan Pelayanan Masyarakat dengan prima. Memelihara stabilitas keamanan, ketertiban dan kenyamanan didalam masyarakat. Melaksanakan pemberdayaan masyarakat sesuai dengn potensi lokal. Meningkatkan kualitas dan kuantitas sarana pendidikan. Melestarikan kebudayaan. Profesionalisme aparatur kelurahan..</span>
							</a>
						</div>
						
					</div><!-- //ROW -->
				</div><!-- //CONTAINER -->
			</div><!-- //SERVICES -->

			<div class="cleancode_block" style="background-color: #428bca; color: white;">
				<div class="container">
					<div class="row">
						<center>
								<h3 style="color: white;"> <span class="fa fa-home" style="color: white;"></span> Profil Kelurahan Margoagung Seyegan</h3>
							<?php 
								$queryProfil  =  mysql_query("SELECT * FROM profil order by idprofil asc ");
								while ($rowprofil = mysql_fetch_array($queryProfil)) {
								 ?>
									<div class="col-md-4">
										<button class="btn btn-primary" style="color: white;" data-toggle="modal" data-target="#myModal-<?php echo $rowprofil['idprofil']; ?>">
											<h1 style="color: white;"><span class="fa fa-star" style="color: white;  "></span> </h1>
											<?php echo $rowprofil['judul_profil']; ?>
										</button>
									</div>
									<div id="myModal-<?php echo $rowprofil['idprofil']; ?>" class="modal fade" role="dialog" >
								  <div class="modal-dialog" style="padding-top: 100px;" >
								    <!-- Modal content-->
								    <div class="modal-content" >
								      <div class="modal-header" style="background-color: #428bca; color: white;">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title" style="color: white;"><?php echo $rowprofil['judul_profil']; ?></h4>
								      </div>
								      <div class="modal-body">
								        <p style="color: black;"><?php echo $rowprofil['deskripsi']; ?></p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-xs btn-default" data-dismiss="modal">Tutup</button>
								      </div>
								    </div>

								  </div>
								</div>
								<?php } ?>
						</center>
					</div>

				</div>
			</div>
		</section>