
<?php 
if (isset($_POST['simpan']))
 {

    $sql_surat = mysql_query("INSERT into surat (id_penduduk,tgl_surat,jenis_surat,keperluan,isisurat)
        values('$_POST[id_penduduk]',now(),'$_POST[jenis_surat]','$_POST[keperluan]','$_POST[isisurat]')");

    if ($sql_surat) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=surat' </script>";exit();
     
    }
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Input Data Surat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            DATA SURAT
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">

                                        <div class="form-group">
                                            <label>Nama Penduduk</label>
                                            <select class ="form-control" name="id_penduduk"> 
                                            <option value="null">pilih Nama penduduk</option>
                                            <?php $penduduk=mysql_query("select * from penduduk") ;
                                            while ($pen=mysql_fetch_array($penduduk)) {
                                                 # code...
                                             ?>
                                            <option value="<?php echo $pen[0]; ?>"><?php echo "$pen[2]"; ?></option>
                                            <?php } ?>
                                            </select>
                                            
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>Jenis Surat</label>
                                            <input class="form-control"name="jenis_surat">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <textarea class ="form-control"name="keperluan"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Surat</label>
                                            <textarea class ="form-control"name="isisurat"></textarea>
                                            
                                        </div>
                                        
                                       <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-warning">Batal</button>
                                    </form>
                                </div>
                                
                            </div>
                            
                        </div>
                       
                    </div>
                    
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Data Suarat
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Penduduk</th>
                                            <th>Tanggal Surat</th>
                                            <th>Jenis Surat</th>
                                            <th>Keperluan</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from surat where id_surat = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=surat' </script>";exit;
                                        
                                        }
                                    }

                                    $no = 1;
                                    $sql = "SELECT s.id_surat,p.nama_lengkap,s.tgl_surat,s.jenis_surat,s.keperluan,s.isisurat FROM surat s INNER JOIN penduduk p ON s.id_penduduk = p.id_penduduk ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                                                            # code...
                                                                
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[2]; ?></td>
                                            <td><?php echo $data[3]; ?></td>
                                            <td><?php echo $data[4]; ?></td>
                                           
                                            <td class="center">
                                            <center>
                                                <a href="index.php?pos=printsurat&id_surat=<?php echo $data[0]; ?>" target="_blank" class="btn btn-warning">Cetak</a>
                                                <a href="index.php?pos=edit_surat&id_surat=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=surat&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger">Hapus Data</a>
                                            </center>
                                            </td>
                                        </tr>
                                        <?php 
                                        $no++;} ?>
                                    </tbody>
                                </table>
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