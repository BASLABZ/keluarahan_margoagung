<?php include 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Penduduk Masuk</title>
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
<p align="center"> <h4 align="center"> Laporan Data Masuk Penduduk</h4></p>
<center>
<table border="1">
<head>
										                        <th>No</th>
                                           <th>Tanggal Pindah</th>
                                           <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat/<br>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Status Perkawinan</th>
                                            <th>Pekerjaan</th>
                                            <th>Pendidikan</th>
                                            <th>Alamat Asal</th>
                                            <th>Alamat Di Tuju</th>
                                            <th>Pengikut</th>
</head>
<tbody>
	<?php $no =1;
	$sqlpindah= mysql_query("SELECT * from penduduk_pindah pi 
                    inner join penduduk p 
                    on pi.id_penduduk = p.id_penduduk where p.stastus='masuk'");
	while ($data = mysql_fetch_array($sqlpindah)) {
		 ?>
		 <tr>
											 <td><?php echo $no; ?></td>
                    <td><?php echo $data['tgl_pindah']; ?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['gender']; ?></td>
                    <td><?php echo $data['tempatlahir']; ?>/<br>
                        <?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td><?php echo $data['status_perkawinan']; ?></td>
                    <td><?php echo $data['pekerjaan']; ?></td>
                    <td><?php echo $data['pendidikan']; ?></td>
                    <td><?php echo $data['alamat_asal']; ?></td>
                    <td><?php echo $data['alamat_dituju']; ?></td>
                    <td><?php echo $data['pengikut']; ?></td>
                                                                                    
	
	</tr>
<?php $no++;} ?>
</tbody>
</table>
</center>
</body>
</html>