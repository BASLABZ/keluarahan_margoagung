<?php include 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK KK :: CaturHarjo</title>
</head>
<body onload="print">

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <center>
	<table>
		<th><img src="../admin/images/logo.png" width="100" height="100 "></th>

		<th><p align="center">Keluarahan Caturharjo Kabupaten Sleman, DIY</p>
			
			<p>Jln Catur Harjo,Kelurahan Caturharjo, Kabupaten Sleman Propinsi DIY 5490<br>
				(0274) 0898 9897 978 || Email : caturharjo@gmail.com|| Fax (0274) 098 098 987</p>
			
		</th>
		</table>
		<hr>
</center>
                   <center> <h1 class="page-header">Daftar Kartu Keluarga Keseluruhan</h1></center>
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
                                            <th>Nomor Kartu Keluarga</th>
                                            <th>NIK Kepala Keluarga</th>
                                            <th>Nama Lengkap Kepala Keluarga</th>
                                            <th>Alamat</th>
                                            <th>Dusun</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php 
                                   $no = 1;
                                    $sqlkartukeluarga = mysql_query("SELECT * from detail_kartu_keluarga d inner join kartu_keluarga kk on d.id_kk = kk.id_kk inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga inner join dusun dus on p.iddusun = dus.iddusun inner join desa des on dus.iddesa = des.iddesa inner join kecamatan kec on des.idkecamatan = kec.idkecamatan inner join kabupaten kab on kec.idkabupaten = kab.idkabupaten inner join propinsi pro on kab.idpropinsi = pro.idpropinsi where p.status_keluarga = 'AYAH' ") ;
                                    while ($kolom = mysql_fetch_array($sqlkartukeluarga)) {
                                       
                                  
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $kolom['no_kartu_keluarga']; ?></td>
                                        <td><?php echo $kolom['no_kepala_keluarga']; ?></td>
                                        <td><?php echo $kolom['nama_lengkap']; ?></td>
                                        
                                        <td><?php echo $kolom['nama_dusun']; ?>,
                                            <?php echo $kolom['nama_desa']; ?>,
                                            <?php echo $kolom['nama_kecamatan']; ?>,
                                            <?php echo $kolom['nama_kabupaten']; ?>,
                                            <?php echo $kolom['nama_propinsi']; ?></td>
                                        <td><?php echo $kolom['alamat']; ?></td>
                                       
                                    </tr>
                                        <?php $no++;  } ?>
                                        
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