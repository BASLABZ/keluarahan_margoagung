
<?php 
if (isset($_POST['simpan']))
 {

    $sql_pindah= mysql_query("INSERT into penduduk_pindah (tgl_pindah,alamat_asal,alamat_dituju,pengikut,id_penduduk)
        values('$_POST[tgl_pindah]','$_POST[alamat_asal]','$_POST[alamat_dituju]','$_POST[pengikut]','$_POST[id_penduduk]')");
    $sql_updatependuduk= mysql_query("UPDATE penduduk set stastus = 'masuk' where id_penduduk='$_POST[id_penduduk]'");
    if ($sql_pindah) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=data_pindahpenduduk' </script>";exit();
    }
  
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">From Input Data Perpindahan Masuk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Inputan Data Perpindahan Masuk
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" method="POST">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Penduduk</label>
                                    <select class="form-control" name="id_penduduk">
                                        <option value="null">pilih nama penduduk</option>
                                        <?php $datanamapenduduk = mysql_query("select * from penduduk");
                                                while ($namapenduduk = mysql_fetch_array($datanamapenduduk)) {
                                                     # code...
                                                ?>
                                                <option value="<?php echo $namapenduduk['id_penduduk']; ?>"><?php echo $namapenduduk['nama_lengkap']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label>Tanggal Pindah</label>
                                        <input type="date" name="tgl_pindah" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>Alamat Asal</label>
                                      <textarea class="form-control" name="alamat_asal"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Alamat Dituju</label>
                                      <textarea class="form-control" name="alamat_dituju"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Pengikut</label>
                                      <input type="text" name="pengikut" class="form-control">
                                    </div>
                                  
                                       
                                        <div class="form-group">
                                            <button type="submit" name="simpan" class="btn btn-primary btn-lg">Simpan</button>
                                             <button type="reset" class="btn btn-warning btn-lg">Batal</button>
                                    
                                        </div>
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
                            Daftar Data Penduduk Pindah
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                           <th>No</th>
                                           <th>Tanggal Pindah</th>
                                           <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat/<br>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Status Perkawinan</th>
                                            <th>Pekerjaan</th>
                                            <th>Pendidikan</th>
                                            <th>Alamat Asal</th>
                                            <th>Alamat Di Tuju</th>
                                            <th>Pengikut</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
               <?php $no=1;
               if (isset($_GET['hapus'])) {
                   $datahapus = mysql_query("DELETE From penduduk_pindah where id_pindah = '$_GET[hapus]'");
                   if ($datahapus) {
                        echo "<script> alert('data berhasil dihapus');
        location.href='index.php?pos=data_pindahpenduduk' </script>";exit();
                   }
               }
                $datakeluar = mysql_query("SELECT * from penduduk_pindah pi 
                    inner join penduduk p 
                    on pi.id_penduduk = p.id_penduduk where p.stastus='masuk' ");
                while ($kolomkeluar = mysql_fetch_array($datakeluar)) {
                    
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $kolomkeluar['tgl_pindah']; ?></td>
                    <td><?php echo $kolomkeluar['nama_lengkap']; ?></td>
                    <td><?php echo $kolomkeluar['gender']; ?></td>
                    <td><?php echo $kolomkeluar['tempatlahir']; ?>/<br>
                        <?php echo $kolomkeluar['tgl_lahir']; ?></td>
                    <td><?php echo $kolomkeluar['agama']; ?></td>
                    <td><?php echo $kolomkeluar['status_perkawinan']; ?></td>
                    <td><?php echo $kolomkeluar['pekerjaan']; ?></td>
                    <td><?php echo $kolomkeluar['pendidikan']; ?></td>
                    <td><?php echo $kolomkeluar['alamat_asal']; ?></td>
                    <td><?php echo $kolomkeluar['alamat_dituju']; ?></td>
                    <td><?php echo $kolomkeluar['pengikut']; ?></td>
                    <td> <a href="index.php?pos=edit_pindah_masuk&id_pindah=<?php echo $kolomkeluar['id_pindah']; ?>" class="btn btn-primary"> Edit</a>
                        <a href="index.php?pos=data_pindahpenduduk&hapus=<?php echo $kolomkeluar['id_pindah']; ?>" class="btn btn-danger">Hapus</td>

                    
                </tr>
                <?php $no++;} ?>
                                        
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