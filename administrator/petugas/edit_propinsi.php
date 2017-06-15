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
<div class="page-heading">
    <h3>
      <span class="fa fa-star"></span>  Ubah Propinsi
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data</a>
        </li>
        <li class="active">  Propinsi </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Data Propinsi
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form  class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                       <div class="col-md-12">
                                        <label>Nama Propinsi</label>
                                        <input type="text" class="form-control" placeholder="Nama Propinsi" name="nama_propinsi" value="<?php echo $kolompropinsi['nama_propinsi']; ?>">
                                       </div>
                                    </div>
                                     <div class="form-group">
                                       <div class="col-md-12">
                                            <button type="submit" name="editpropinsi" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
                                            <button type="reset" class="btn btn-danger"><span class="fa fa-refresh"></span> Batal</button>
                                       </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
        </div>
