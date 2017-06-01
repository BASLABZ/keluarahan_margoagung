
<?php 
if (isset($_POST['simpan']))
 {

    $sql_kecamatan = mysql_query("INSERT into kecamatan (nama_kecamatan,idkabupaten)
        values('$_POST[nama_kecamatan]','$_POST[idkabupaten]')");

    if ($sql_kecamatan) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=kecamatan' </script>";exit();
        
    }
    
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
                        <input type="text" class="form-control" placeholder="Nama kecamatan" name="nama_kecamatan">
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
                        <th>Nama Kecamatan</th>
                        <th>Kabupaten</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                if (isset($_GET['hapus'])) 
                {
                    $sql_hapus = mysql_query(("DELETE from kecamatan where idkecamatan = '$_GET[hapus]'"));
                    if ($sql_hapus) 
                    {
                        echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                        location.href='index.php?pos=kecamatan' </script>";exit;
                    }
                }

                $no = 1;
                $sql = "SELECT kec.idkecamatan, kec.nama_kecamatan, kab.nama_kabupaten 
                FROM kecamatan kec 
                inner join kabupaten kab 
                on kec.idkabupaten = kab.idkabupaten ";
                $hasil = mysql_query($sql);
                while ($data = mysql_fetch_array($hasil)) {
                 ?>
                    <tr class="odd gradeX">
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama_kecamatan']; ?></td>
                        <td><?php echo $data['nama_kabupaten']; ?></td>
                        <td class="center">
                            <a href="index.php?pos=edit_kecamatan&idkecamatan=<?php echo $data['idkecamatan']; ?>" class="btn btn-success"><span class="fa fa-pencil"> </span> Edit </a>
                            <a href="index.php?pos=kecamatan&hapus=<?php echo $data['idkecamatan']; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus </a>
                            
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