<?php 
if (isset($_POST['simpan'])) {
    $sql_kematian = mysql_query("INSERT into kematian (id_penduduk,tgl_input,tgl_kematian,usia,alamat_kematian,keterangan)
        values('$_POST[id_penduduk]',NOW(),'$_POST[tgl_kematian]','$_POST[usia]','$_POST[alamat_kematian]','$_POST[keterangan]')");
        if ($sql_kematian)
         {
            $idpenduduk = $_POST['id_penduduk'];
            $sqlhapusdatapenduduk = mysql_query("UPDATE penduduk set stastus = 'mati' where id_penduduk='$idpenduduk'");
            echo "<script> alert('Terima Kasih Data Berhasil Disimpan');
            location.href='index.php?pos=daftarkematian   '</script>";exit;  
        }
}
?>
<div class="page-heading">
    <h3>
      <span class="fa fa-users"></span>  Tambah data Kematian
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Tambah</a>
        </li>
        <li class="active"> Data Kematian </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Kematian
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
                                               <?php $sqlpenduduk=mysql_query("SELECT * FROM penduduk");
                                                while ($kolompenuduk = mysql_fetch_array($sqlpenduduk)) {
                                                     
                                                  ?>
                                                  <option value="<?php echo $kolompenuduk[0]; ?>"><?php echo $kolompenuduk[2]; ?></option>
                                                  <?php } ?>
                                           </select>
                                    	</div>
                                    	</div>
                                    	<div class="row">
                                    			
                                    		<div class="col-md-6">
                                    			<label>Tanggal Kematian</label>
                                    			<input type="date" name="tgl_kematian"  class="form-control">
                                    		</div>
                                    		<div class="col-md-6">
                                    			<label>Usia</label>
                                    		 	<input type="text" name="usia" class="form-control"/>
                                    		</div>
                                    		
                                    	</div>
                                    	<div class="form-group">
                                    		<div class="col-md-12">
                                    			<label>Alamat Kematian</label>
                                    		  	<textarea name="alamat_kematian" class="form-control"></textarea>
                                    		</div>
                                    	</div>
                                    	<div class="form-group">
                                    		<div class="col-md-12">
                                            	<label>Keterangan</label>
	                                          	<textarea name="keterangan" class="form-control"></textarea>
	                                        </div>
                                    	</div>
                                    	
                                     <div class="form-group">
                                       <div class="col-md-12 pull-right">
                                            <button type="submit" name="simpan" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
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