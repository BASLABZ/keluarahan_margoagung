
<?php 
if (isset($_POST['simpan']))
 {

    $sql_kelahiran = mysql_query("INSERT into kelahiran (nama,gender,tgl_lahir,hari_lahir,jenis_lahir,tempat_lahir,alamatanak,agamaanak,anakke,id_kk)
        values('$_POST[nama]','$_POST[gender]','$_POST[tgl_lahir]','$_POST[hari_lahir]','$_POST[jenis_lahir]','$_POST[tempat_lahir]','$_POST[alamatanak]','$_POST[agamaanak]','$_POST[anakke]','$_POST[id_kk]')");

    if ($sql_kelahiran) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=data_kelahiran' </script>";exit();
    }
  
}
 ?>
 <!-- fungsi untuk hapus data -->

<?php 
        if (isset($_GET['hapus'])) {
                   $datahapus = mysql_query("DELETE From kelahiran where id_kalahiran = '$_GET[hapus]'");
                   if ($datahapus) {
                        echo "<script> alert('data berhasil dihapus');
        location.href='index.php?pos=data_kelahiran' </script>";exit();
                   }
               }
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">From Input Data Kelahiran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Inputan Data Kelahiran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" method="POST">
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                       <select class="form-control" name="id_kk">
                                           <option value="null">Pilih Kartu Keluarga</option>
                                           <?php $nokk = mysql_query("SELECT * FROM detail_kartu_keluarga d
                                            inner join kartu_keluarga kk
                                            on d.id_kk = kk.id_kk
                                            inner join penduduk p 

                                            on d.no_kepala_keluarga = p.no_kepala_keluarga where p.status_keluarga = 'AYAH'

                                           ");
                                           while ($kolomkokartu = mysql_fetch_array($nokk)) {
                                                
                                             ?>
                                             <option  value="<?php echo $kolomkokartu['id_kk']; ?>"><?php echo $kolomkokartu['no_kartu_keluarga']; ?><br>||<br>
                                                                                            <?php echo $kolomkokartu['nama_lengkap']; ?></option>
                                             <?php } ?>
                                       </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="gender" class="form-control">
                                            <option value="null"> pilih jenis kelamin</option>
                                            <option value="LAKI-LAKI">Laki - Laki</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>hari Lahir</label>
                                        <input type="text" name="hari_lahir" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>Jenis Lahir</label>
                                      <select name="jenis_lahir" class="form-control">
                                            <option value="null"> pilih jenis lahir</option>
                                            <option value="TUNGGAL">TUNGGAL</option>
                                            <option value="KEMBAR">KEMBAR</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamatanak" class="form-control">
                                    </div>
                                   <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agamaanak">
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
                                        <input type="text" name="anakke" class="form-control">
                                    </div>
                                       
                                        <div class="form-group">
                                            <button type="submit" name="simpan" class="btn btn-primary btn-lg">Simpan</button>
                                             <button type="reset" class="btn btn-warning btn-lg">Batal</button>
                                    
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
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Data Kelahiran
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Tanggal Lahir</th>
                                            <th rowspan="2">Nama Lengkap</th>
                                            <th rowspan="2">Jenis Kelamin</th>
                                            <th rowspan="2">Jenis Lahir</th>
                                            <th rowspan="2">Hari Lahir</th>
                                            <th rowspan="2">Tempat Lahir</th>
                                            <th rowspan="2">Alamat</th>
                                            <th rowspan="2">Agama</th>
                                            <th rowspan="2">Anak Ke</th>
                                                <th> <center>Ayah</center></th>
                                               
                                            
                                            <th rowspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $no=1;
                                        $datakelahiran = mysql_query("SELECT ke.id_kalahiran,ke.nama,ke.gender,ke.tgl_lahir,ke.hari_lahir,ke.jenis_lahir,ke.tempat_lahir, ke.alamatanak,ke.agamaanak,ke.anakke,p.nama_lengkap from kelahiran ke inner join detail_kartu_keluarga d on ke.id_kk = d.id_kk inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga where p.status_keluarga = 'AYAH'");
                                        while ($kolomlahir=mysql_fetch_array($datakelahiran)) {
                                         
                                     ?>
                                     <tr>
                                         <td><?php echo $no; ?></td>
                                         <td><?php echo $kolomlahir[3]; ?></td>
                                         <td><?php echo $kolomlahir[1]; ?></td>
                                         <td><?php echo $kolomlahir[2]; ?></td>
                                         <td><?php echo $kolomlahir[5]; ?></td>
                                         <td><?php echo $kolomlahir[4]; ?></td>
                                         <td><?php echo $kolomlahir[6]; ?></td>
                                         <td><?php echo $kolomlahir[7]; ?></td>
                                         
                                         <td><?php echo $kolomlahir[8]; ?></td>
                                         <td><?php echo $kolomlahir[9]; ?></td>
                                         <td><?php echo $kolomlahir[10]; ?></td>
                                        
                                        <td><a href="index.php?pos=edit_kelahiran=<?php echo $kolomlahir[0]; ?>" class="btn btn-primary">Ubah</a>
                                            <a href="index.php?pos=data_kelahiran&hapus=<?php echo $kolomlahir[0]; ?>" class="btn btn-danger">Hapus</td>
                                           </td> 
                                         
                                     </tr>

                                     <?php 
                                        $no++;
                                        } ?>
                                   
                                        
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