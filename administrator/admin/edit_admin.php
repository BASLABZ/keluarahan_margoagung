 <?php 
    $id = $_GET['id'];
    $row_detail = mysql_fetch_array(mysql_query("SELECT * from user where id_user = '".$id."'"));

    if (isset($_POST['ubah'])) {
            $qwuery_ubah = mysql_query("UPDATE user set nama_user = '".$_POST['nama_user']."' , alamat = '".$_POST['alamat']."' , kontak = '".$_POST['kontak']."' , nik = '".$_POST['nik']."' , username = '".$_POST['username']."' , level = '".$_POST['level']."' WHERE id_user = '".$id."'");

            if ($qwuery_ubah) {
                echo "<script> alert('Terima Kasih Data Berhasil Diubah');
            location.href='index.php?pos=daftaradmin   '</script>";exit;
            }
    }

  ?>
 <div class="wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <header class="panel-heading">
                            <span class="fa fa-pencil"></span> Form Edit Data Admin
                             <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <form role="form" method="POST">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input class="form-control" name="nama_user" required="" value="<?php echo $row_detail['nama_user']; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" name="alamat" required="" value="<?php echo $row_detail['alamat']; ?>">
                                    
                                </div>
                                
                                <div class="form-group">
                                    <label>No Telephone</label>
                                    <input class="form-control" name="kontak" required="" value="<?php echo $row_detail['kontak']; ?>">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Nomor Induk Karyawan</label>
                                    <input class="form-control" name="nik" required="" value="<?php echo $row_detail['nik']; ?>">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="form-control" name="username" required="" value="<?php echo $row_detail['username']; ?>">
                                    
                                </div>
                                <div class="form-group">
                                    <label>Level User</label>
                                  <select name="level" class="form-control" required="">
                                     <option value="NULL">--Pilih Level User--</option>
                                     <option value="admin" <?php if($row_detail['level']=='admin'){echo "selected=selected";}?>>Admin</option>
                                     <option value="petugas" <?php if($row_detail['level']=='petugas'){echo "selected=selected";}?>>Petugas</option>
                                  </select>
                                </div>
                               <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                                <button type="reset" class="btn btn-danger">Batal</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

        </div>
