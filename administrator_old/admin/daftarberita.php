
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Berita</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-lg-12">
                <a href="index.php?pos=tambah_berita" class="btn btn-primary">Tambah Berita</a>
                <br></br>
                <br></br>


                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Data Berita
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Judul Berita</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal Posting</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if (isset($_GET['hapus'])) {
                                        $sqlhapusberita = mysql_query("DELETE from berita where idberita = '$_GET[hapus]'");
                                        if ($sqlhapusberita) {
                                            echo "<script> alert('Data Berhasil Dihapus');
        location.href='index.php?pos=daftarberita' </script>";exit;
                                        }
                                        # code...
                                    }
                                     ?>

                                    <?php 
                                    
                                     
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from berita where id_berita = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=daftarberita' </script>";exit;
                                            # code...
                                        }
                                        # code...
                                    }

                                    $no = 1;
                                    $sql = "SELECT * from berita ";
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
                                                <?php echo "<img src='images/$gambar' width='100' height='100' class='img-thumbnail'>"; ?>
                                                
                                            </td>
                                            <td class="center">
                                                <a href="index.php?pos=edit_berita&idberita=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=daftarberita&hapus=<?php echo $data[0]; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')">Hapus</a>
                                                
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