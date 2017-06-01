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
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Input Data Kematian</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Inputan Data Kematian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                         
                                        <div class="form-group">
                                            <label>Nama Penduduk</label>
                                            <select name="id_penduduk" class="form-control">
                                               <option value="null">Pilih Nama Penduduk</option>
                                               <?php $sqlpenduduk=mysql_query("SELECT * FROM penduduk");
                                                while ($kolompenuduk = mysql_fetch_array($sqlpenduduk)) {
                                                     
                                                  ?>
                                                  <option value="<?php echo $kolompenuduk[0]; ?>"><?php echo $kolompenuduk[2]; ?></option>
                                                  <?php } ?>
                                           </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kematian</label>
                                            <input type="date" name="tgl_kematian"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Usia</label>
                                            <input type="text" name="usia" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Kematian</label>
                                          <textarea name="alamat_kematian" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                          <textarea name="keterangan" class="form-control"></textarea>
                                        </div>
                                          <div class="form-group">
                                           <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
                                           <button type="reset" class="btn btn-warning">Batal</button>
                                        </div>

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
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Data Kematian
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tanggal Kematian</th>
                                            <th>Tanggal Input Kematian</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Alamat kematian</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if (isset($_GET['del'])){

                                        $sql_hapus = mysql_query("DELETE FROM kematian where id_kematian = '$_GET[del]'");
                                    
                                    if ($sql_hapus) {
                                        echo "<script> alert('Terima Kasih Data Berhasil di Hapus');
                                        location.href='index.php?pos=daftarkematian'</script>";exit;
                                  
                                    }
                                }
                                     ?>

                                     <?php 
                                     $no = 1;
                                     $sql = "SELECT ke.id_kematian,p.nama_lengkap,p.gender,
                                     p.tgl_lahir,p.alamat,ke.tgl_kematian,ke.tgl_input,ke.usia,
                                     ke.keterangan,ke.alamat_kematian from kematian ke 
                                      inner join penduduk p 
                                      on ke.id_penduduk = p.id_penduduk
                                       order by ke.id_kematian DESC ";
                                     $hasil = mysql_query($sql);
                                     while ($data = mysql_fetch_row($hasil)) {
                                      
                                      ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[5] ?></td>
                                           <td><?php echo $data[6]; ?></td>
                                            <td><?php echo $data[3] ?></td>
                                           <td><?php echo $data[2]; ?></td>
                                            <td><?php echo $data[4] ?></td>
                                           <td><?php echo $data[9] ?></td>
                                           <td><?php echo $data[8]; ?></td>
                                          
                                            
                                            <td class="center">
                                                <a href="index.php?pos=edit_kematian&id_kematian=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=daftarkematian&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakiin?')" class="btn btn-danger">Hapus Data</a>
                                            </td>
                                            
                                        </tr>
                                        <?php 
                                           $no++;} 
                                         ?>
                                        
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