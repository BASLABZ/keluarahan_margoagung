 <?php 
 // simpan data pengguna
if (isset($_POST['simpan'])) {
    $sql_admin = mysql_query("INSERT into user (nama_user,alamat,kontak,nik,username,password,level)
        values('$_POST[nama_user]','$_POST[alamat]','$_POST[kontak]','$_POST[nik]','$_POST[username]',md5('".$_POST['password']."'),'$_POST[level]')");
        if ($sql_admin)
         {
            echo "<script> alert('Terima Kasih Data Berhasil Disimpan');
            location.href='index.php?pos=daftaradmin   '</script>";exit;
        }
}
?>
<!-- hapus data pengguna -->
<?php 
    if (isset($_GET['del'])){
        $sql_hapus = mysql_query("DELETE FROM user where id_user = '$_GET[del]'");
    if ($sql_hapus) {
        echo "<script> alert('Terima Kasih Data Berhasil di Hapus');
        location.href='index.php?pos=daftaradmin'</script>";exit;
    }
    }?>
 <div class="wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                            <span class="fa fa-pencil"></span> Form Inputan Data Admin
                             <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
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
                    </section>
                </div>

            </div>
               <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    <span class="fa fa-users"></span> Data Pengguna
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="display table table-bordered table-striped dataTable" id="dynamic-table">
                            <thead>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Kontak</th>
                                <th>Username</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                             <?php 
                             $no = 1;
                             $sql = "SELECT * from user ORDER BY id_user DESC";
                             $hasil = mysql_query($sql);
                             while ($data = mysql_fetch_array($hasil)) {
                              ?>
                                        <tr class="odd gradeX">

                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data['nama_user']; ?></td>
                                            <td><?php echo $data['kontak']; ?></td>
                                            <td class="center"><?php echo $data['username']; ?></td>
                                            <td class="center"><?php echo $data['level']; ?></td>
                                            <td class="center">
                                                <a href="#" style="color: white;" class="btn btn-success"><span class="fa fa-pencil"></span> Edit Data</a>
                                                <a style="color: white;" href="index.php?pos=daftaradmin&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakiin?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus Data</a>
                                            </td>
                                        </tr>
                            <?php 
                               $no++;} 
                             ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>

        </div>
