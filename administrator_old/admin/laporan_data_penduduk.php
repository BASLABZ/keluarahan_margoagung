<?php include 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Penduduk</title>
</head>
<body onload="window.print()">
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
<p align="center"> <h4 align="center"> Laporan Data Penduduk Keseluruhan </h4></p>
<table border="1">
<head>
	<th>No</th>
	<th>No Kepala Keluarga</th>
	<th>Nama Lengkap</th>
	<th>Jenis Kelamin</th>
	<th>Agama</th>
	<th>Tempat/TGl Lahir</th>
	<th>Alamat</th>
	<th>Dusun</th>
	<th>Kwarganegaraan</th>
	<th>Pendidikan</th>
	<th>Pekerjaan</th>
	<th>Status Perkawinan</th>
	<th>Status Keluarga</th>
	<th>Nama Ayah</th>
	<th>Nama Ibu</th>
</head>
<tbody>
	<?php $no =1;
	$sqlpenduduk= mysql_query("SELECT p.id_penduduk,p.no_kepala_keluarga,p.nama_lengkap,p.gender,p.agama,
                                    p.tempatlahir,p.tgl_lahir,p.alamat,p.kwarganegaraan,p.pendidikan, 
                                    p.pekerjaan,p.status_perkawinan,p.status_keluarga,p.nama_ayah,p.nama_ibu,
                                    dus.nama_dusun, des.nama_desa,kec.nama_kecamatan,kab.nama_kabupaten, 
                                    pro.nama_propinsi 
                                    FROM penduduk p 
                                    inner join dusun dus 
                                    on p.iddusun = dus.iddusun 
                                    cross join desa des 
                                    on dus.iddesa = des.iddesa 
                                    inner join kecamatan kec 
                                    on des.idkecamatan = kec.idkecamatan 
                                    inner join kabupaten kab 
                                    on kec.idkabupaten = kab.idkabupaten 
                                    inner join propinsi pro 
                                    on kab.idpropinsi = pro.idpropinsi where p.stastus='hidup'");
	while ($kolom = mysql_fetch_array($sqlpenduduk)) {
		
	
		 ?>
		 <tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $kolom[1]; ?></td>
	<td><?php echo $kolom[2]; ?></td>
	<td><?php echo $kolom[3]; ?></td>
	<td><?php echo $kolom[4]; ?></td>
	<td><?php echo $kolom[5]; ?>/<?php echo $kolom[6]; ?></td>
	<td><?php echo $kolom[7]; ?></td>
	<td>
		<?php echo $kolom[15]; ?>,<?php echo $kolom[16]; ?>,
		<br>
		<?php echo $kolom[17]; ?>,<?php echo $kolom[18]; ?>,
		<?php echo $kolom[19]; ?></td>
	<td><?php echo $kolom[8]; ?></td>
	<td><?php echo $kolom[9]; ?></td>
	<td><?php echo $kolom[10]; ?></td>
	<td><?php echo $kolom[11]; ?></td>
	<td><?php echo $kolom[12]; ?></td>
	<td><?php echo $kolom[13]; ?></td>
	<td><?php echo $kolom[14]; ?></td>
	
	</tr>
<?php $no++;} ?>
</tbody>
</table>

</body>
</html>