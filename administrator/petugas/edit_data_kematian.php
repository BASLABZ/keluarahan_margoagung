<?php 
    $idkematian = $_GET['id_kematian'];
    $tampildata = mysql_fetch_array(mysql_query("SELECT * From kematian where id_kematian = '$idkematian'"));
    // proses edit
    if (isset($_POST['edit'])) {
      $editdata = mysql_query("UPDATE kematian set id_penduduk ='$_POST[id_penduduk]', tgl_input=NOW(), tgl_kematian='$_POST[tgl_kematian]',usia = '$_POST[usia]', alamat_kematian='$_POST[alamat_kematian]',keterangan = '$_POST[keterangan]' where id_kematian = '$idkematian' ");
      if ($editdata) {
         echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=daftarkematian' </script>";exit();
      }else{
         echo "<script> alert('data gagal diubah');
        location.href='index.php?pos=daftarkematian' </script>";exit();
      }
    }
 ?>
<div class="page-heading">
    <h3>
      <span class="fa fa-users"></span>  Ubah Data Kematian
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Ubah</a>
        </li>
        <li class="active"> Data Kematian </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Data Kematian
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
                                         <label>Nama Penduduk</label>
                                             <select name="id_penduduk" class="form-control select2">
                                               <option value="null">Pilih Nama Penduduk</option>
                                               <?php $id_penduduk = mysql_query("select * from penduduk");
                                                      while ($kolom = mysql_fetch_array($id_penduduk)) {
                                                        ?>
                                                         <option value="<?php echo $kolom['id_penduduk']; ?>" <?php if($kolom['id_penduduk']==$tampildata['id_penduduk']){echo "selected=selected";} ?>>
                                                        <?php echo $kolom['nama_lengkap']; ?></option>
                                                        <?php } ?>
                                                </select>
                                    	   </div>
                                    	</div>
                                    	<div class="row">
                                    		<div class="col-md-6">
                                    			<label>Tanggal Kematian</label>
                                    			<input type="date" name="tgl_kematian"  class="form-control" value="<?php echo $tampildata['tgl_kematian']; ?>">
                                    		</div>
                                    		<div class="col-md-6">
                                    			<label>Usia</label>
                                    		 	<input type="text" name="usia" class="form-control" value="<?php echo $tampildata['usia']; ?>" />
                                    		</div>
                                    		
                                    	</div>
                                    	<div class="form-group">
                                    		<div class="col-md-12">
                                    			<label>Alamat Kematian</label>
                                    		  	<textarea name="alamat_kematian" class="form-control">
                                                    <?php echo $tampildata['alamat_kematian']; ?>       
                                                </textarea>
                                    		</div>
                                    	</div>
                                    	<div class="form-group">
                                    		<div class="col-md-12">
                                            	<label>Keterangan</label>
	                                          	<textarea name="keterangan" class="form-control">
                                                    <?php echo $tampildata['keterangan']; ?>    
                                                </textarea>
	                                        </div>
                                    	</div>
                                    	
                                     <div class="form-group">
                                       <div class="col-md-12 pull-right">
                                            <button type="submit" name="edit" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
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