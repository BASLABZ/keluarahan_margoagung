
<?php 
if (isset($_POST['simpan']))
 {

    $sql_kelahiran = mysql_query("INSERT into kelahiran (nama,gender,tgl_lahir,hari_lahir,jenis_lahir,tempat_lahir,alamat,agama,anakke,id_kk)
        values('$_POST[nama]','$_POST[gender]','$_POST[tgl_lahir]','$_POST[hari_lahir]','$_POST[jenis_lahir]','$_POST[tempat_lahir]','$_POST[alamat]','$_POST[agama]','$_POST[anakke]','$_POST[id_kk]')");

    if ($sql_kelahiran) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=dusun' </script>";exit();
    }
  
}
 ?>
 <?php 
    if (isset($_GET['hapus'])) 
                                    {
                                       $sql_hapus = mysql_query(("DELETE from kelahiran where id_kalahiran = '$_GET[hapus]'"));
                                         if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=kelahiran' </script>";exit;
                                            # code...
                                        }
                                        # code...
                                    }
  ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Input Data Kelahiran </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Input Data Kelahiran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                        
                                        <div class="form-group">
                                            <label>Kepala Keluarga</label>
                                            <select name="id_kk" class="form-control">
                                                <option value="null">Pilih Kepala Keluarga</option>
                                                <?php $kk=mysql_query("SELECT * from detail_kartu_keluarga dt inner join penduduk px 
                                                                        on dt.no_kepala_keluarga = px.no_kepala_keluarga where px.status_keluarga ='AYAH' ");
                                            while ($k=mysql_fetch_array($kk)) {
                                                 # code...
                                             ?>
                                             <option value="<?php echo $k['id_kk']; ?>"><?php echo $k['no_kepala_keluarga']; ?> || <?php echo $k['nama_lengkap']; ?></option>
                                             <?php } ?>

                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control"name="nama">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="gender" class="form-control">
                                                <option value="null">Pilih Jenis Kelamin</option>
                                                <option value="Pria">Laki-Laki</option>
                                                <option value="wanita">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Hari Lahir</label>
                                            <input type="text" name="hari_lahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Lahir</label>
                                            <select name="jenis_lahir" class="form-control">
                                                <option value="null">Pilih Jenis kelamin</option>
                                                <option value="tunggal">Tunggal</option>
                                                <option value="kembar">Kembar</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="alamat"></textarea>
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
                                            <label>Anak Ke</label>
                                            <input type="number" name="anakke" class="form-control">
                                        </div>
                        
                                       <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-warning">Batal</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Data Kelahiran Penduduk
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tempat & Waktu Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jenis Lahir</th>
                                            <th>Alamat</th>
                                            <th>Agama</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Anak Ke</th>
                                            <th>Aksi</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    

                                    $no = 1;
                                    $sql = "SELECT * FROM kelahiran ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_array($hasil)) {
                                                                            # code...
                                                                
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[2]; ?></td>
                                            <td><?php echo $data[3]; ?></td>
                                            <td><?php echo $data[4]; ?></td>
                                            <td><?php echo $data[5]; ?></td>
                                            <td><?php echo $data[6]; ?></td>
                                            <td><?php echo $data[7]; ?></td>
                                            <td><?php echo $data[8]; ?></td>
                                            <td><?php echo $data[9]; ?></td>
                                            <td class="center">
                                                <a href="index.php?pos=edit_kelahiran&id_kalahiran=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                               <a href="index.php?pos=kelahiran&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger">Hapus Data</a>
                                                 
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