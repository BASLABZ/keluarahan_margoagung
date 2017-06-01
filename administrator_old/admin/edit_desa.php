<?php $iddesa = $_GET['iddesa'];
        $datadesa = mysql_fetch_array(mysql_query("SELECT * from desa where iddesa='$iddesa'"));
     ?>
<?php 
if (isset($_POST['edit']))
 {

    $sql_desa = mysql_query("UPDATE desa set nama_desa='$_POST[nama_desa]', idkecamatan='$_POST[idkecamatan]' where iddesa='$iddesa'");

    if ($sql_desa) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=desa' </script>";exit();
   
    }
    
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Data Kecamatan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Inputan Data Desa
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                        
                                        
                                        <div class="form-group">
                                            <label>Nama Desa</label>
                                            <input class="form-control"name="nama_desa" value="<?php echo $datadesa['nama_desa']; ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select name="idkecamatan" class="form-control">
                                                <?php $kecamatan=mysql_query("SELECT * FROM kecamatan");
                                            while ($kec=mysql_fetch_array($kecamatan)) {
                                                 # code...
                                              ?>
                                              <option value="<?php echo $kec[0]; ?>"><?php echo $kec[1]; ?></option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                        
                                        
                                        
                                       <button type="submit" name="edit" class="btn btn-default">Simpan</button>
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
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>