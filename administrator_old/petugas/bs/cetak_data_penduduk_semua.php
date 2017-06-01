<?php include 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CETAK DATA SEMUA PENDUDUK :: CATURHARJO</title>
</head>
<body onload="print">
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  <center>
                   <table>
        <th><img src="images/logo.png" width="100" height="100 "></th>

        <th><p align="center">Keluarahan Caturharjo Kabupaten Sleman, DIY</p>
            
            <p>Jln Catur Harjo,Kelurahan Caturharjo, Kabupaten Sleman Propinsi DIY 5490<br>
                (0274) 0898 9897 978 || Email : caturharjo@gmail.com|| Fax (0274) 098 098 987</p>
            
        </th>
        </table>
        <hr>
        </center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                
                
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                    
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>No</th>
                                            <th>Nomor Kepala Keluarga</th>
                                            <th>Nama Lengkap</th>
                                    
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Status Perkawinan</th>
                                         
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    if (isset($_GET['hapus'])) 
                                    {
                                        $sql_hapus = mysql_query(("DELETE from penduduk where id_penduduk = '$_GET[hapus]'"));
                                        if ($sql_hapus) 
                                        {
                                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                                            location.href='index.php?pos=penduduk' </script>";exit;
                                            # code...
                                        }
                                        # code...
                                    }

                                    $no = 1;
                                    $sql = "SELECT * from penduduk where stastus='hidup' ORDER BY id_penduduk DESC ";
                                    $hasil = mysql_query($sql);
                                    while ($data = mysql_fetch_row($hasil)) {
                                                                            # code...
                                                                
                                     ?>
                                    
                                        <tr class="odd gradeX">
                                            <td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[2]; ?></td>
                                            <td><?php echo $data[7]; ?></td>
                                            <td><?php echo $data[3]; ?></td>
                                            <td><?php echo $data[9]; ?></td>
                                            <td><?php echo $data[12]; ?></td>

                                            
                                            
                                           

                                            


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
        </body>
</html>