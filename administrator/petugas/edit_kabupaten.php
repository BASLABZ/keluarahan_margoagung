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
<div class="col-sm-6">
     <section class="panel">
        <header class="panel-heading">
            Edit Data Kabupaten
            <span class="tools pull-right">
                <a class="fa fa-chevron-down" href="javascript:;"></a>
                <a class="fa fa-times" href="javascript:;"></a>
             </span>
        </header>
        <div class="panel-body">
            <div class="form">
                <form  class="form-horizontal" method="POST">
                    <div class="form-group">
                       <div class="col-md-12">
                        <label>Nama Kabupaten</label>
                        <input type="text" class="form-control" placeholder="Nama Kabupaten" name="nama_kabupaten" value="<?php echo $datakabupaten['nama_kabupaten']; ?>">
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                             <label>Propinsi</label>
                            <select class="form-control" name="idpropinsi" readonly>
                            <?php $propinsi=mysql_query("SELECT * FROM propinsi");
                            while ($pro=mysql_fetch_array($propinsi)) {
                                 # code...
                              ?>
                             <option value="<?php echo $pro[0]; ?>"><?php echo $pro[1]; ?></option>
                             <?php } ?>
                             </select>
                        </div>
                    </div>
                     <div class="form-group">
                       <div class="col-md-12">
                            <button type="submit" name="edit" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
                            <button type="reset" class="btn btn-danger"><span class="fa fa-refresh"></span> Batal</button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
 </div>