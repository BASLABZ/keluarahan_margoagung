
<?php 
if (isset($_POST['simpan']))
 {

    $sql_kecamatan = mysql_query("INSERT into kecamatan (nama_kecamatan,idkabupaten)
        values('$_POST[nama_kecamatan]','$_POST[idkabupaten]')");

    if ($sql_kecamatan) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=kecamatan' </script>";exit();
        # code...
    }
    # code...
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
                                            <input class="form-control"name="nama_kecamatan">
                                            
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
                                        
                                        
                                        
                                       <button type="submit" name="simpan" class="btn btn-default">Simpan</button>
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
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Data Kecamatan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                            # code...
                                        }
                                        # code...
                                    }

                                    $no = 1;
                                    $sql = "SELECT kec.idkecamatan, kec.nama_kecamatan, kab.nama_kabupaten 
                                    FROM kecamatan kec 
                                    inner join kabupaten kab 
                                    on kec.idkabupaten = kab.idkabupaten ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                                                            # code...
                                                                
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[2]; ?></td>
                                            
                                            
                                            <td class="center">
                                                <a href="index.php?pos=edit_kecamatan&idkecamatan=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=kecamatan&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger">Hapus Data</a>
                                                
                                            </td>

                                            


                                        </tr>
                                        <?php 
                                        $no++;} ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>