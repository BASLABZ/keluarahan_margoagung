<?php 
    $idkabupaten = $_GET['idkabupaten'];
    $datakabupaten = mysql_fetch_array(mysql_query("SELECT * FROM kabupaten where idkabupaten='$idkabupaten'"));
 ?>
<?php 
if (isset($_POST['edit']))
 {

    $sql_kabupaten = mysql_query("UPDATE kabupaten SET nama_kabupaten='$_POST[nama_kabupaten]',idpropinsi='$_POST[idpropinsi]' where idkabupaten='$idkabupaten'");

    if ($sql_kabupaten) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=kabupaten' </script>";
        exit();
        
    }
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Kabupaten</h1>
                </div>
                </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Inputan Data Kabupaten
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                            <div class="form-group">
                            <label>Nama Kabupaten</label>
      <input class="form-control"name="nama_kabupaten" value="<?php echo $datakabupaten['nama_kabupaten']; ?>">
      </div>
      <div class="form-group">
      <label>Propinsi</label>
      <select class="form-control" name="idpropinsi">
      <?php $propinsi=mysql_query("SELECT * FROM propinsi");
      while ($pro=mysql_fetch_array($propinsi)) {
      ?>
      <option value="<?php echo $pro[0]; ?>">
      <?php echo $pro[1];?></option>
      <?php } ?>
      </select>
      </div>
     <button type="submit" name="edit" class="btn btn-default">Ubah</button>
    <button type="reset" class="btn btn-default">Batal</button>
    </form>
     </div>
    </div>
                            </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>