
<?php 
if (isset($_POST['simpan']))
 {

    $sql_propinsi = mysql_query("INSERT into propinsi (nama_propinsi)
        values('$_POST[nama_propinsi]')");

    if ($sql_propinsi) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=propinsi' </script>";exit();
        # code...
    }
    # code...
}
 ?>
<div id="page-wrapper">
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Inputan Data Propinsi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                        
                                        
                                        <div class="form-group">
                                            <label>Nama Propinsi</label>
                                            <input class="form-control"name="nama_propinsi">
                                            
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
                            Daftar Data Propinsi
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Nama Propinsi</th> 
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from propinsi where idpropinsi = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=propinsi' </script>";exit;
                                            # code...
                                        }
                                        # code...
                                    }

                                    $no = 1;
                                    $sql = "SELECT * from propinsi ORDER BY idpropinsi DESC";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                                                            # code...
                                                                
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>

                                            <td class="center">
                                                <a href="index.php?pos=edit_propinsi&idpropinsi=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=propinsi&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger">Hapus Data</a>
                                                
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