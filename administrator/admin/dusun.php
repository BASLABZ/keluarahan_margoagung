
<?php 
if (isset($_POST['simpan']))
 {

    $sql_dusun = mysql_query("INSERT into dusun (nama_dusun,iddesa)
        values('$_POST[nama_dusun]','$_POST[iddesa]')");

    if ($sql_dusun) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=dusun' </script>";exit();
     
    }
 
}
 ?>

 <div class="col-sm-6">
     <section class="panel">
        <header class="panel-heading">
            Tambah Data Desa
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
                        	<input class="form-control"name="nama_dusun">
                    	</div>
                        
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                        	<label>Desa</label>
	                        <select name="iddesa" class="form-control">
	                            <?php $desa=mysql_query("SELECT * FROM desa");
	                        while ($des=mysql_fetch_array($desa)) {
	                             
	                          ?>
	                          <option value="<?php echo $des[0]; ?>"><?php echo $des[1]; ?></option>
	                          <?php } ?>
	                        </select>
                        </div>
                    </div>
                   <button type="submit" name="simpan" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
                    <button type="reset" class="btn btn-default"><span class="fa fa-refresh"></span> Batal</button>
                </form>
            </div>
        </div>
    </section>
 </div>
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Desa  
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
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
             
            }
           
        }

        $no = 1;
        $sql = "SELECT dus.iddusun, dus.nama_dusun, des.nama_desa 
        from dusun dus 
        INNER JOIN desa des 
        on dus.iddesa = des.iddesa ";
        $hasil = mysql_query($sql);
        while ($data = mysql_fetch_array($hasil)) {
                                    
         ?>
        
            <tr class="odd gradeX">
                <td><?php echo $no; ?></td>
                <td><?php echo $data['nama_dusun']; ?></td>
                <td><?php echo $data['nama_desa']; ?></td>
                <td class="center">
                    <a href="index.php?pos=edit_dusun&iddusun=<?php echo $data['iddusun']; ?>" class="btn btn-success"><span class="fa fa-pencil"></span> Edit </a>
                    <a href="index.php?pos=dusun&hapus=<?php echo $data['iddusun']; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus </a>
                    
                </td>
            </tr>
            <?php 
            $no++;} ?>
        </tbody>
        </table>
      </div>
    </div>
   </section>
</div>