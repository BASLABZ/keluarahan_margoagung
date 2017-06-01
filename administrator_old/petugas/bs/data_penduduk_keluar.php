
<?php 
if (isset($_POST['simpan']))
 {

    $sqlsimpan = mysql_query("INSERT INTO penduduk_keluar (id_penduduk,tgl_keluar,alamat_asal,alamat_dituju,alasan_keluar,keterangan_pindah) values ('$_POST[id_penduduk]','$_POST[tgl_keluar]','$_POST[alamat_asal]','$_POST[alamat_dituju]','$_POST[alasan_keluar]','$_POST[keterangan_pindah]')");
     $sql_updatependuduk= mysql_query("UPDATE penduduk set stastus = 'keluar' where id_penduduk='$_POST[id_penduduk]'");
    if ($sqlsimpan) {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=data_penduduk_keluar' </script>";exit();
    }else{
         echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=data_penduduk_keluar' </script>";exit();
    }
  
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">From Input Data Perpindahan Keluar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Inputan Data Perpindahan Keluar
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" method="POST">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Penduduk</label>
                                    <select class="form-control" name="id_penduduk">
                                        <option value="null">pilih nama penduduk</option>
                                        <?php $datanamapenduduk = mysql_query("select * from penduduk where stastus != 'keluar'");
                                                while ($namapenduduk = mysql_fetch_array($datanamapenduduk)) {
                                                  
                                                ?>
                                                <option value="<?php echo $namapenduduk['id_penduduk']; ?>"><?php echo $namapenduduk['nama_lengkap']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                  
                                    <div class="form-group">
                                        <label>Tanggal Keluar</label>
                                        <input type="date" name="tgl_keluar" class="form-control">
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
                                        <label>Alasan keluar</label>
                                      <textarea class="form-control" name="alasan_keluar"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Keterangan Pindah</label>
                                     <textarea name="keterangan_pindah" class="form-control"></textarea>                                    </div>
                                  
                                       
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
                            Daftar Data Penduduk Keluar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table-responsive table-bordered">
                                    <thead>
                                        <tr>
                                           <th>No</th>
                                           <th>Tanggal Keluar</th>
                                           <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat/<br>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Status Perkawinan</th>
                                            <th>Pekerjaan</th>
                                            <th>Pendidikan</th>
                                            <th>Alamat Asal</th>
                                            <th>Alamat Di Tuju</th>
                                            <th>alasan keluar</th>
                                            <th>Keterangan Pindah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
               <?php $no=1;
               if (isset($_GET['hapus'])) {
                   $datahapus = mysql_query("DELETE From penduduk_keluar where id_keluar = '$_GET[hapus]'");
                   if ($datahapus) {
                        echo "<script> alert('data berhasil dihapus');
        location.href='index.php?pos=data_pindahpenduduk' </script>";exit();
                   }
               }
                $datakeluar = mysql_query("SELECT * from penduduk_keluar pi
                    inner join penduduk p 
                    on pi.id_penduduk = p.id_penduduk where p.stastus='keluar' ");
                while ($kolomkeluar = mysql_fetch_array($datakeluar)) {
                    
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $kolomkeluar['tgl_keluar']; ?></td>
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
                    <td><?php echo $kolomkeluar['alasan_keluar']; ?></td>
                    <td><?php echo $kolomkeluar['keterangan_pindah']; ?></td>
                    <td> <a href="index.php?pos=edit_pindah_masuk&id_pindah=<?php echo $kolomkeluar['id_pindah']; ?>" class="btn btn-primary"> Edit</a>
                        <a href="index.php?pos=data_penduduk_keluar&hapus=<?php echo $kolomkeluar['id_keluar']; ?>" class="btn btn-danger">Hapus</td>

                    
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