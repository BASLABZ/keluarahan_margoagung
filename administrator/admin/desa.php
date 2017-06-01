
<?php 
if (isset($_POST['simpan']))
 {

    $sql_desa = mysql_query("INSERT into desa (nama_desa,idkecamatan)
        values('$_POST[nama_desa]','$_POST[idkecamatan]')");

    if ($sql_desa) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=desa' </script>";exit();
        
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
                        <label>Nama Desa</label>
                        <input type="text" class="form-control" placeholder="Nama Desa" name="nama_desa">
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                             <label>Kecamatan</label>
	                            <select name="idkecamatan" class="form-control">
	                                <?php $kecamatan=mysql_query("SELECT * FROM kecamatan");
	                            while ($kec=mysql_fetch_array($kecamatan)) {
	                              ?>
	                              <option value="<?php echo $kec['idkecamatan']; ?>"><?php echo $kec['nama_kecamatan']; ?></option>
	                              <?php } ?>
	                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                       <div class="col-md-12">
                            <button type="submit" name="simpan" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
                            <button type="reset" class="btn btn-danger"><span class="fa fa-refresh"></span> Batal</button>
                       </div>
                    </div>
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
                <th>Nama Desa</th>
                <th>Kecamatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        if (isset($_GET['hapus'])) 
        {
            $sql_hapus = mysql_query(("DELETE from desa where iddesa = '$_GET[hapus]'"));
            if ($sql_hapus) 
            {
                echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                location.href='index.php?pos=desa' </script>";exit;
            }
        }

        $no = 1;
        $sql = "SELECT des.iddesa, des.nama_desa, kec.nama_kecamatan 
        from desa des 
        INNER JOIN kecamatan kec 
        on des.idkecamatan = kec.idkecamatan ";
        $hasil = mysql_query($sql);
        while ($data = mysql_fetch_row($hasil)) {
                                                
                                    
         ?>
        
            <tr class="odd gradeX">
                <td><?php echo $no; ?></td>
                <td><?php echo $data[1]; ?></td>
                <td><?php echo $data[2]; ?></td>
                
                <td class="center">
                    <a href="index.php?pos=edit_desa&iddesa=<?php echo $data[0]; ?>" class="btn btn-success"><span class="fa fa-pencil"></span> Edit </a>
                    <a href="index.php?pos=desa&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus </a>
                    
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