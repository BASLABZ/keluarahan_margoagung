<?php 
	$idpenduduk = $_GET['id_penduduk'];
	$tampil = mysql_fetch_array(mysql_query("SELECT * from penduduk where id_penduduk='$idpenduduk'"));

 ?>
	<?php 
		if (isset($_POST['edit'])) {
			$editdata = mysql_query("UPDATE penduduk SET no_kepala_keluarga='$_POST[no_kepala_keluarga]',nama_lengkap='$_POST[nama_lengkap]',gender='$_POST[gender]',agama='$_POST[agama]',tempatlahir='$_POST[tempatlahir]',tgl_lahir='$_POST[tgl_lahir]',
						alamat='$_POST[alamat]',iddusun='$_POST[iddusun]',kwarganegaraan='$_POST[kwarganegaraan]',pendidikan='$_POST[pendidikan]',pekerjaan='$_POST[pekerjaan]',status_perkawinan='$_POST[status_perkawinan]',status_keluarga='$_POST[status_keluarga]',nama_ayah='$_POST[nama_ayah]',nama_ibu='$_POST[nama_ibu]',stastus='hidup' 
							where id_penduduk='$idpenduduk'");
			if ($editdata) {
				 echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=penduduk' </script>";exit();
       
			}
		}
 	?>

 <!-- query edit data penduduk -->
 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Data Penduduk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Edit Data Penduduk
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" method="POST">
                                <div class="col-lg-6">
                                      
                                        <div class="form-group">
                                            <label>Nomor Kepala Keluarga</label>
                                            <input value="<?php echo $tampil['no_kepala_keluarga']; ?>" class="form-control"name="no_kepala_keluarga">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control"name="nama_lengkap" value="<?php echo $tampil['nama_lengkap']; ?>">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agama">
                                            <option value="null">Pilih Agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="protestan">Protestan</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katholik">Katholik</option>
                                            <option value="budha">Budha</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="konghucu">Konghucu</option>
                                            </select>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input value="<?php echo $tampil['tempatlahir']; ?>" class="form-control"name="tempatlahir">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control"name="tgl_lahir" value="<?php echo $tampil['tgl_lahir']; ?>" type="date">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class ="form-control"name="alamat">
                                            	<?php 
                                            		echo $tampil['alamat'];
                                            	 ?>
                                            </textarea>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class ="form-control"name="gender"> 
                                            <option value="null">pilih jenis kelamin</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                            </select>
                                            
                                        </div>
                                        
                                         

                                         <div class="form-group">
                                            <label>Dusun</label>
                                            <select class ="form-control" name="iddusun"> 
                                            <option>pilih Dusun</option>
                                            <?php $dusun=mysql_query("select * from dusun") ;
                                            while ($dus=mysql_fetch_array($dusun)) {
                                                 # code...
                                             ?>
                                            <option value="<?php echo $dus[0]; ?>"><?php echo "$dus[1]"; ?></option>
                                            <?php } ?>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kewarganegaraan</label>
                                            <select class ="form-control" name="kwarganegaraan"> 
                                            <option value="null">pilih Kewarganegaraan</option>
                                            <option value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan</label>
                                            <select class ="form-control" name="pendidikan"> 
                                            <option value="null">pilih Pendidikan</option>
                                            <option value="SD">SD</option>
                                            <option value="SLTP">SLTP</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input value="<?php echo $tampil['pekerjaan']; ?>" class="form-control"name="pekerjaan">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Status Perkawinan</label>
                                            <select class ="form-control" name="status_perkawinan"> 
                                            <option value="null">pilih Perkawinan</option>
                                            <option value="Belum Kawin">Belum Kawin</option>
                                            <option value="Sudah Kawin">Sudah Kawin</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Status Keluarga</label>
                                            <input class="form-control"name="status_keluarga" value="<?php echo $tampil['status_keluarga']; ?>">
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input class="form-control"name="nama_ayah" value="<?php echo $tampil['nama_ayah']; ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input class="form-control"name="nama_ibu" value="<?php echo $tampil['nama_ibu']; ?>">
                                            
                                        </div>
                                         </div>
                                         <div class="col-sm-8"></div>
                                        <div class="col-sm-4">
                                            <button type="submit" name="edit" class="btn btn-primary btn-lg">Ubah</button>
                                           
                                        </div>
                                
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>