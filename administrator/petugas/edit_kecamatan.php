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

 <div class="col-sm-6">
     <section class="panel">
        <header class="panel-heading">
            Tambah Data kecamatan
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
                        <label>Nama kecamatan</label>
                        <input type="text" class="form-control" placeholder="Nama kecamatan" name="nama_kecamatan" value="<?php echo $datakecamatan['nama_kecamatan']; ?>">
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
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