
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Galeri</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <a href="index.php?pos=tambah_galeri" class="btn btn-primary">Tambah Galeri</a>
                <br></br>
                <br></br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Data Galeri
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Nama Galeri</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                         </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if (isset($_GET['hapus'])) {
                                        $sqlhapusgaleri = mysql_query("DELETE from galeri where idgaleri = '$_GET[hapus]'");
                                        if ($sqlhapusgaleri) {
                                            echo "<script> alert('Data Berhasil Dihapus');
                                     location.href='index.php?pos=daftargaleri' </script>";exit;
                                        }
                                       
                                    }
                                     ?>

                                    <?php 
                                    
                                     
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from galeri where id_galeri = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=daftargaleri' </script>";exit;
                                            # code...
                                        }
                                        # code...
                                    }

                                    $no = 1;
                                    $sql = "SELECT * from galeri ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                        $gambar = $data[2];
                           
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                        
                                            <td>
                                               <center> <?php echo "<img src='images/$gambar' width='100' height='100' class='img-thumbnail'>"; ?> </center>
                                            </td>
                                            <td class="center">
                                                <a href="index.php?pos=edit_galeri&idgaleri=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=daftargaleri&hapus=<?php echo $data[0]; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')">Hapus</a>
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