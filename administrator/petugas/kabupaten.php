
<?php 
if (isset($_POST['simpan']))
 {
   
    $sql_kabupaten = mysql_query("INSERT into kabupaten (nama_kabupaten,idpropinsi)
        values('$_POST[nama_kabupaten]','$_POST[idpropinsi]')");

    if ($sql_kabupaten) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=kabupaten' </script>";exit();
   
    }
   
}
 ?>
 <div class="col-sm-6">
     <section class="panel">
        <header class="panel-heading">
            Tambah Data Kabupaten
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
                        <input type="text" class="form-control" placeholder="Nama Kabupaten" name="nama_kabupaten">
                       </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                             <label>Propinsi</label>
                            <select class="form-control" name="idpropinsi">
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
            <span class="fa fa-list"></span> Daftar Kabupaten  
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
                        <th>Nama Kabupaten</th>
                        <th>Propinsi</th>
                        <th>Aksi</th> 
                    </tr>
                </thead>
                <tbody>

                <?php 
                if (isset($_GET['hapus'])) 
                {
                    $sql_hapus = mysql_query(("DELETE from kabupaten where idkabupaten = '$_GET[hapus]'"));
                    if ($sql_hapus) 
                    {
                        echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                        location.href='index.php?pos=kabupaten' </script>";exit;
                    
                    }
                    
                }

                $no = 1;
                $sql = "SELECT kab.idkabupaten, kab.nama_kabupaten, p.nama_propinsi 
                FROM kabupaten kab 
                INNER JOIN propinsi p 
                on kab.idpropinsi = p.idpropinsi ";
                $hasil = mysql_query($sql);
                while ($data = mysql_fetch_array($hasil)) {
                                            
                 ?>
                
                    <tr class="odd gradeX">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama_kabupaten']; ?></td>
                        <td><?php echo $data['nama_propinsi']; ?></td>
                        <td class="center">
                            <a href="index.php?pos=edit_kabupaten&idkabupaten=<?php echo $data['idkabupaten']; ?>" class="btn btn-success"><span class="fa fa-pencil"></span> Edit </a>
                            <a href="index.php?pos=kabupaten&hapus=<?php echo $data['idkabupaten']; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus </a>
                            
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
