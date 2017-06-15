
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

        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    <span class="fa fa-users"></span> Data Pengguna  <a href="index.php?pos=tambah_admin" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data</a>
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
                                                <a href="index.php?pos=edit_admin&id=<?php echo $data['id_user']; ?>" style="color: white;" class="btn btn-success"><span class="fa fa-pencil"></span> Edit Data</a>
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
