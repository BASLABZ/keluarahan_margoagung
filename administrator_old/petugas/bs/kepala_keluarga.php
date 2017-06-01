
<?php 
if (isset($_POST['simpan']))
 {

    $sql_kepala_keluarga = mysql_query("INSERT into kepala_keluarga (no_kk,id_penduduk)
        values('$_POST[no_kk]','$_POST[id_penduduk]')");

    if ($sql_kepala_keluarga) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=kepala_keluarga' </script>";exit();
        # code...
    }
    # code...
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Inputan Data Kepala Keluarga
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                        
                                        
                                        <div class="form-group">
                                            <label>Nomor KK</label>
                                            <input class="form-control"name="no_kk">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kepala keluarga</label>
                                            <select class ="form-control" name="id_penduduk"> 
                                            <option value="null">pilih Nama Kepala Keluarga</option>
                                            <?php $penduduk=mysql_query("select * from penduduk") ;
                                            while ($pen=mysql_fetch_array($penduduk)) {
                                                 # code...
                                             ?>
                                            <option value="<?php echo $pen[0]; ?>"><?php echo "$pen[2]"; ?></option>
                                            <?php } ?>
                                            </select>
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                       <button type="submit" name="simpan" class="btn btn-default">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
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
                            Daftar Data Kepala Keluarga
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
                                            <th>Aksi</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    
                                     
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from kepala_keluarga where id_kk = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=kepala_keluarga' </script>";exit;
                                            # code...
                                        }
                                        # code...
                                    }

                                    $no = 1;
                                    $sql = "SELECT k.id_kk,k.no_kk,p.nama_lengkap FROM kepala_keluarga k INNER JOIN penduduk p on k.id_penduduk = p.id_penduduk ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                                                            # code...
                                                                
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[2]; ?></td>
                                            
                                            
                                            
                                            <td class="center">
                                                <a href="#" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=kepala_keluarga&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger">Hapus Data</a>
                                                
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