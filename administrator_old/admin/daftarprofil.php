<div id="page-wrapper">
            <div class="row">
               <br>

                <div class="col-lg-12">
                    <a href="index.php?pos=tambah_profil" class="btn btn-primary">
                        Tambah Profil
                    </a>
               <br>
               <br>
             
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Data Profil
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Profil</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal Posting</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if (isset($_GET['hapus'])) {
                                        $sqlhapusprofil = mysql_query("DELETE from profil where idprofil = '$_GET[hapus]'");
                                        if ($sqlhapusprofil) {
                                            echo "<script> alert('Data Berhasil Dihapus');
                                             location.href='index.php?pos=daftarprofil' </script>";exit;
                                        }
                                    }
                                     ?>

                                    <?php 
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from profil where id_profil = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=daftarprofil' </script>";exit;
                                        }  
                                    }
                                    $no = 1;
                                    $sql = "SELECT * from profil ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                        $gambar = $data[4];
                           
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[3]; ?></td>
                                            <td><?php echo $data[2]; ?></td>
                                            
                                            <td>
                                               <center>
                                                    <?php echo "<img src='images/$gambar' width='100' height='100' class='img-thumbnail'>"; ?>
                                               </center>  
                                            </td>
                                            <td class="center">
                                                <a href="index.php?pos=edit_profil&idprofil=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=daftarprofil&hapus=<?php echo $data[0]; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')">Hapus</a>
                                                
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