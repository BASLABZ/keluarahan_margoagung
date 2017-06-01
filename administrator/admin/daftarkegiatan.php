
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Kegiatan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <a href="index.php?pos=tambah_kegiatan" class="btn btn-primary">Tambah Kegiatan</a>
                <br></br>
                <br></br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Data Kegiatan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Judul Kegiatan</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal Posting</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    if (isset($_GET['hapus'])) {
                                        $sqlhapuskegiatan = mysql_query("DELETE from kegiatan where idkegiatan = '$_GET[hapus]'");
                                        if ($sqlhapuskegiatan) {
                                            echo "<script> alert('Data Berhasil Dihapus');
                                             location.href='index.php?pos=daftarkegiatan' </script>";exit;
                                        }
                                      
                                    }
                                     ?>
                                    <?php   
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from kegiatan where id_kegiatan = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=daftarkegiatan' </script>";exit;
                                          
                                        }
                                    }
                                    $no = 1;
                                    $sql = "SELECT * from kegiatan ";
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
                                                <a href="index.php?pos=edit_kegiatan&idkegiatan=<?php echo $data[0]; ?>" class="btn btn-primary">Edit Data</a>
                                                <a href="index.php?pos=daftarkegiatan&hapus=<?php echo $data[0]; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')">Hapus</a>
                                               
                                            </td>
                                        </tr>
                                        <?php 
                                        $no++;} ?>
                                    </tbody>
                                </table>
                            </div>
                          
                            
                        </div>
                        
                    </div>
                   
                </div>
                
            </div>
           
        </div>