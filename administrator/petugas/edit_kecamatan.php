<?php 
    $idkecamatan = $_GET['idkecamatan'];
    $datakecamatan = mysql_fetch_array(mysql_query("SELECT * from kecamatan where idkecamatan='$idkecamatan'"));
 ?>
<?php 
if (isset($_POST['edit']))
 {

    $sql_kecamatan = mysql_query("UPDATE kecamatan set nama_kecamatan='$_POST[nama_kecamatan]',idkabupaten='$_POST[idkabupaten]' where idkecamatan='$idkecamatan'");

    if ($sql_kecamatan) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di ubah');
        location.href='index.php?pos=kecamatan' </script>";exit();    }
    
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
                            Form Inputan Data Kecamatan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">                                    
                                        <div class="form-group">
                                            <label>Nama Kecamatan</label>
                                            <input class="form-control"name="nama_kecamatan" value="<?php echo $datakecamatan['nama_kecamatan']; ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Kabupaten</label>
                                            <select name="idkabupaten" class="form-control">
                                                <?php $kabupaten=mysql_query("SELECT * FROM kabupaten");
                                            while ($kab=mysql_fetch_array($kabupaten)) {
                                                 # code...
                                              ?>
                                              <option value="<?php echo $kab[0]; ?>"><?php echo $kab[1]; ?></option>
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