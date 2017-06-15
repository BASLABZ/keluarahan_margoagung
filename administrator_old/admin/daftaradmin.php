<?php 
if (isset($_POST['simpan'])) {
    $sql_admin = mysql_query("INSERT into user (nama_user,alamat,kontak,nik,username,password,level)
        values('$_POST[nama_user]','$_POST[alamat]','$_POST[kontak]','$_POST[nik]','$_POST[username]','$_POST[password]','$_POST[level]')");
        if ($sql_admin)
         {
            echo "<script> alert('Terima Kasih Data Berhasil Disimpan');
            location.href='index.php?pos=daftaradmin   '</script>";exit;
            # code...
        }
}


 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Inputan Data Admin
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control"name="nama_user">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control"name="alamat">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>No Telephone</label>
                                            <input class="form-control"name="kontak">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Induk Karyawan</label>
                                            <input class="form-control"name="nik">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control"name="username">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>password</label>
                                            <input class="form-control"name="password">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Level User</label>
                                          <select name="level" class="form-control">
                                          <option value="NULL">--Pilih Level User--</option>
                                              <option value="admin">Admin</option>
                                              <option value="petugas">Petugas</option>
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
                            Daftar Data Admin
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Kontak</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if (isset($_GET['del'])){

                                        $sql_hapus = mysql_query("DELETE FROM user where id_user = '$_GET[del]'");
                                    
                                    if ($sql_hapus) {
                                        echo "<script> alert('Terima Kasih Data Berhasil di Hapus');
                                        location.href='index.php?pos=daftaradmin'</script>";exit;
                                        # code...
                                    }
                                }

                                    

                                     ?>

                                     <?php 
                                     $no = 1;
                                     $sql = "SELECT * from user ORDER BY id_user DESC";
                                     $hasil = mysql_query($sql);
                                     while ($data = mysql_fetch_row($hasil)) {
                                         # code...
                                     

                                      ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[3] ?></td>
                                            <td class="center"><?php echo $data[5]; ?></td>
                                            <td class="center"><?php echo $data[6]; ?></td>
                                            <td class="center"><?php echo $data[7]; ?></td>
                                            
                                            <td class="center">
                                                <a href="#" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=daftaradmin&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakiin?')" class="btn btn-danger">Hapus Data</a>
                                            </td>
                                            


                                        </tr>
                                        <?php 
                                           $no++;} 
                                         ?>
                                        
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