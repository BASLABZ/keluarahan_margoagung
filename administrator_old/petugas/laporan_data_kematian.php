<?php include 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Kematian Penduduk</title>
</head>
<body onload="window.print()">
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
<p align="center"> <h4 align="center"> Laporan Data Kematian Penduduk</h4></p>
<center>
<table border="1">
<head>
											<th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tanggal Kematian</th>
                                            <th>Tanggal Input Kematian</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Alamat kematian</th>
                                            <th>Keterangan</th>
</head>
<tbody>
	<?php $no =1;
	$sqlkematian= mysql_query("SELECT ke.id_kematian,p.nama_lengkap,p.gender,
                                     p.tgl_lahir,p.alamat,ke.tgl_kematian,ke.tgl_input,ke.usia,
                                     ke.keterangan,ke.alamat_kematian from kematian ke 
                                      inner join penduduk p 
                                      on ke.id_penduduk = p.id_penduduk
                                       order by ke.id_kematian DESC ");
	while ($data = mysql_fetch_array($sqlkematian)) {
		 ?>
		 <tr>
											<td><?php echo $no; ?></td>
                                            <td><?php echo $data[1]; ?></td>
                                            <td><?php echo $data[5] ?></td>
                                           <td><?php echo $data[6]; ?></td>
                                            <td><?php echo $data[3] ?></td>
                                           <td><?php echo $data[2]; ?></td>
                                            <td><?php echo $data[4] ?></td>
                                           <td><?php echo $data[9] ?></td>
                                           <td><?php echo $data[8]; ?></td>
                                                                                    
	
	</tr>
<?php $no++;} ?>
</tbody>
</table>
</center>
</body>
</html>