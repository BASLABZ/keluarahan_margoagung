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
                    		<label>Nama Dusun</label>
                        	<input class="form-control"name="nama_dusun" value="<?php echo $datadusun['nama_dusun']; ?>">
                    	</div>
                        
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                        	<label>Desa</label>
                            <select name="iddesa" class="form-control">
                                <?php $desa=mysql_query("SELECT * FROM desa");
                            while ($des=mysql_fetch_array($desa)) {
                                 
                              ?>
                              <option value="<?php echo $des['iddesa']; ?>"><?php echo $des['nama_desa']; ?></option>
                              <?php } ?>
                            </select>
                        </div>
                    </div>
                   <button type="submit" name="edit" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
                    <button type="reset" class="btn btn-default"><span class="fa fa-refresh"></span> Batal</button>
                </form>
            </div>
        </div>
    </section>
 </div>
