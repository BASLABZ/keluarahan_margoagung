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
 <div class="col-sm-6">
     <section class="panel">
        <header class="panel-heading">
            Edit Data Desa
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
                        <label>Nama Desa</label>
                        <input type="text" class="form-control" placeholder="Nama Desa" name="nama_desa" value="<?php echo $datadesa['nama_desa']; ?>">
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                             <label>Kecamatan</label>
	                            <select name="idkecamatan" class="form-control">
                                                <?php $kecamatan=mysql_query("SELECT * FROM kecamatan");
                                while ($kec=mysql_fetch_array($kecamatan)) {
                                     # code...
                                  ?>
                                  <option value="<?php echo $kec['idkecamatan']; ?>"><?php echo $kec['nama_kecamatan']; ?></option>
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
