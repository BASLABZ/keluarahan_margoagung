
<?php 
if (isset($_POST['simpan']))
 {

    $sql_dusun = mysql_query("INSERT into dusun (nama_dusun,iddesa)
        values('$_POST[nama_dusun]','$_POST[iddesa]')");

    if ($sql_dusun) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=dusun' </script>";exit();
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
                            Form Inputan Data Dusun
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                        
                                        
                                        <div class="form-group">
                                            <label>Nama Dusun</label>
                                            <input class="form-control"name="nama_dusun">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Desa</label>
                                            <select name="iddesa" class="form-control">
                                                <?php $desa=mysql_query("SELECT * FROM desa");
                                            while ($des=mysql_fetch_array($desa)) {
                                                 # code...
                                              ?>
                                              <option value="<?php echo $des[0]; ?>"><?php echo $des[1]; ?></option>
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
                            Daftar Data Dusun
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Nama Dusun</th>
                                            <th>Desa</th>
                                            <th>Aksi</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from dusun where iddusun = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=dusun' </script>";exit;
                                            # code...
                                        }
                                        # code...
                                    }

                                    $no = 1;
                                    $sql = "SELECT dus.iddusun, dus.nama_dusun, des.nama_desa 
                                    from dusun dus 
                                    INNER JOIN desa des 
                                    on dus.iddesa = des.iddesa ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                                                            # code...
                                                                
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[2]; ?></td>
                                            
                                            
                                            <td class="center">
                                                <a href="index.php?pos=edit_dusun&iddusun=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=dusun&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger">Hapus Data</a>
                                                
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