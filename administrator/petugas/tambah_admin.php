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
                        <input class="form-control" name="nama_user" required="">
                        
                    </div>
                    
                    <div class="form-group">
                        <label>Alamat</label>
                        <input class="form-control" name="alamat" required="">
                        
                    </div>
                    
                    <div class="form-group">
                        <label>No Telephone</label>
                        <input class="form-control" name="kontak" required="">
                        
                    </div>
                    <div class="form-group">
                        <label>Nomor Induk Karyawan</label>
                        <input class="form-control" name="nik" required="">
                        
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" required="">
                        
                    </div>
                    <div class="form-group">
                        <label>password</label>
                        <input class="form-control" name="password" required="">
                        
                    </div>
                    <div class="form-group">
                        <label>Level User</label>
                      <select name="level" class="form-control" required="">
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
</div>
            