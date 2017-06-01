<?php 
    $iddusun  = $_GET['iddusun'];
    $datadusun = mysql_fetch_array(mysql_query("SELECT * FROM dusun where iddusun='$iddusun'"));
 ?>
<?php 
if (isset($_POST['edit']))
 {

    $sql_dusun = mysql_query("UPDATE dusun set nama_dusun='$_POST[nama_dusun]',iddesa='$_POST[iddesa]' where iddusun='$iddusun'");

    if ($sql_dusun) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
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
                                            <input class="form-control"name="nama_dusun" value="<?php echo $datadusun['nama_dusun']; ?>">
                                            
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
                                        
                                        
                                        
                                       <button type="submit" name="edit" class="btn btn-default">Ubah</button>
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