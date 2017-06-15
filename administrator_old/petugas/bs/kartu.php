<?php 
if (isset($_POST['simpan_no'])) {
    $sql_nokartu = mysql_query("INSERT INTO kartu_keluarga (no_kartu_keluarga) 
        values('$_POST[no_kartu_keluarga]')");
        if ($sql_nokartu) {
            echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=kartu' </script>";exit();
        }
}
 ?>
<?php 
if (isset($_POST['simpan']))
 {

    $sql_penduduk = mysql_query("INSERT into penduduk (no_kepala_keluarga,nama_lengkap,gender,agama,tempatlahir,tgl_lahir,alamat,iddusun,kwarganegaraan,pendidikan,pekerjaan,status_perkawinan,status_keluarga,nama_ayah,nama_ibu,staStus)
        values('$_POST[no_kepala_keluarga]','$_POST[nama_lengkap]','$_POST[gender]','$_POST[agama]','$_POST[tempatlahir]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[iddusun]','$_POST[kwarganegaraan]','$_POST[pendidikan]','$_POST[pekerjaan]','$_POST[status_perkawinan]','$_POST[status_keluarga]','$_POST[nama_ayah]','$_POST[nama_ibu]','hidup')");
    $sqldetailkartu = mysql_query("INSERT INTO detail_kartu_keluarga (id_kk,no_kepala_keluarga) values ('$_POST[no_kartus]','$_POST[no_kepala_keluarga]')");

    if ($sql_penduduk) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=kartu' </script>";exit();
       
    }else{
         echo "<script> alert('data gagak masuk');
        location.href='index.php?pos=kartu' </script>";exit();
    }
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  
                    <h3 class="page-header"><img src="logokopkk/logogarudas.jpg" width="100" height="100">Form Input Data Penduduk Dan Pembuatan Kartu Keluarga</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Form Tambah data No Kartu Keluarga</div>
                        <div class="panel-body">
                            <form class="role" method="POST">
                                <div class="form-group">
                                    <label>No Kartu Keluarga</label>
                                    <input type="number" class="form-control" name="no_kartu_keluarga">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" name="simpan_no">SIMPAN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Inputan Data Penduduk
                        </div>
                        <div class="panel-body">
                       
                            <form role="form" method="POST">

                                        <div class="form-group">
                                            <label>NO Kartu</label>
                                           <select name="no_kartus" class="form-control">
                                           <?php $sqlkartu = mysql_query("SELECT * FROM kartu_keluarga order by id_kk DESC");
                                                    while ($kolom = mysql_fetch_array($sqlkartu)) {
                                                        
                                                     ?>
                                               <option value="<?php echo $kolom[0]; ?>"><?php echo $kolom[1]; ?></option>
                                               <?php } ?>
                                           </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input class="form-control"name="no_kepala_keluarga">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control"name="nama_lengkap">
                                            
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
                                            <input class="form-control"name="tempatlahir">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control"name="tgl_lahir" type="date">
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class ="form-control"name="alamat"></textarea>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class ="form-control"name="gender"> 
                                            <option value="null">pilih jenis kelamin</option>
                                            <option value="LAKI-LAKI">Laki-Laki</option>
                                            <option value="PEREMPUAN">Perempuan</option>
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
                                            <input class="form-control"name="pekerjaan">
                                            
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
                                            <input class="form-control"name="status_keluarga">
                                            
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ayah</label>
                                            <input class="form-control"name="nama_ayah">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu</label>
                                            <input class="form-control"name="nama_ibu">
                                            
                                        </div>
                                         
                                         
                                       <div class="form-group">
                                            <button type="submit" name="simpan" class="btn btn-primary btn-lg">Simpan</button>
                                             <button type="reset" class="btn btn-warning btn-lg">Batal</button>
                                    </div>
                                      
                                
                                </form>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                           
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Data Penduduk
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Nomor Kepala Keluarga</th>
                                            <th>Nama Lengkap</th>
                                    
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Status Perkawinan</th>
                                            <th>Aksi</th>
                                            
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from penduduk where id_penduduk = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=penduduk' </script>";exit;
                                            # code...
                                        }
                                        # code...
                                    }

                                    $no = 1;
                                    $sql = "SELECT * from penduduk where stastus='hidup' ORDER BY id_penduduk DESC ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                                                            # code...
                                                                
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[2]; ?></td>
                                            <td><?php echo $data[7]; ?></td>
                                            <td><?php echo $data[3]; ?></td>
                                            <td><?php echo $data[9]; ?></td>
                                            <td><?php echo $data[12]; ?></td>

                                            
                                            
                                            <td class="center">
                                                <a href="index.php?pos=lihatdatapenduduk&id_penduduk=<?php echo "$data[0]"; ?>" class="btn btn-primary">Lihat Data</a>
                                                <a href="#" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=penduduk&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger">Hapus Data</a>

                                                
                                            </td>

                                            


                                        </tr>
                                        <?php 
                                        $no++;} ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>