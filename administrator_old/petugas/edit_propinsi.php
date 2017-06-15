<?php
//menampilkan data yang diedit 
	$idpropinsi = $_GET['idpropinsi'];
	$tampildatapropinsi  = mysql_query("SELECT * FROM propinsi where idpropinsi = '$idpropinsi'");
 	$kolompropinsi = mysql_fetch_array($tampildatapropinsi);

 ?>

 <?php 
 // eksekusi data yang diedit
 if (isset($_POST['editpropinsi'])) {
 	$ubahpropinsi = mysql_query("UPDATE propinsi set 
 		nama_propinsi='$_POST[nama_propinsi]' 
 		where idpropinsi = '$idpropinsi'");
 	//dibawah ini untuk pesan yang tampil
 	if ($ubahpropinsi) {
 		  echo "<script> alert('Terima Kasih Data Berhasil Diubah');
            location.href='index.php?pos=propinsi'</script>";exit;
 	}
 }
  ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-sm-6">
			<h5>Edit Data Propinsi</h5>
			<div class="panel panel-primary">
				<div class="panel-heading">Form Edit Data propinsi</div>
				<div class="panel-body">
					
					<form method="POST" class="role">
					<div class="form-group">
						<label>Nama Propinsi</label>
						<input type="text" class="form-control" name="nama_propinsi" value="<?php echo $kolompropinsi[1]; ?>">
					</div>
					<div class="form-group">
					<button type="submit" name="editpropinsi" class="btn btn-warning">
						Ubah</button>
					</div>
					</form>

				</div>
			</div>
			
		</div>
	</div>
</div>