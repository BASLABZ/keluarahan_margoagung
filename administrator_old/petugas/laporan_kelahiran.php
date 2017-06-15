<?php include 'koneksi/koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Kelahiran </title>
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
<p align="center"> <h4 align="center"> Laporan Data Kelahiran</h4></p>
<center>
<table border="1">
<head>  
				                      							
                                             <th rowspan="2">No</th>
                                            <th rowspan="2">Tanggal Lahir</th>
                                            <th rowspan="2">Nama Lengkap</th>
                                            <th rowspan="2">Jenis Kelamin</th>
                                            <th rowspan="2">Jenis Lahir</th>
                                            <th rowspan="2">Hari Lahir</th>
                                            <th rowspan="2">Tempat Lahir</th>
                                            <th rowspan="2">Alamat</th>
                                            <th rowspan="2">Agama</th>
                                            <th rowspan="2">Anak Ke</th>
                                                <th> <center>Ayah</center></th>
                                               
                                                                                           
                                            
</head>
<tbody>
	<?php $no =1;
	$sqlkelahiran= mysql_query("SELECT ke.id_kalahiran,ke.nama,ke.gender,ke.tgl_lahir,ke.hari_lahir,ke.jenis_lahir,ke.tempat_lahir, ke.alamatanak,ke.agamaanak,ke.anakke,p.nama_lengkap from kelahiran ke inner join detail_kartu_keluarga d on ke.id_kk = d.id_kk inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga where p.status_keluarga = 'AYAH'");
	while ($kolomlahir = mysql_fetch_array($sqlkelahiran)) {
		 ?>
		 <tr>
                                         <td><?php echo $no; ?></td>
                                         <td><?php echo $kolomlahir[3]; ?></td>
                                         <td><?php echo $kolomlahir[1]; ?></td>
                                         <td><?php echo $kolomlahir[2]; ?></td>
                                         <td><?php echo $kolomlahir[5]; ?></td>
                                         <td><?php echo $kolomlahir[4]; ?></td>
                                         <td><?php echo $kolomlahir[6]; ?></td>
                                         <td><?php echo $kolomlahir[7]; ?></td>
                                         
                                         <td><?php echo $kolomlahir[8]; ?></td>
                                         <td><?php echo $kolomlahir[9]; ?></td>
                                         <td><?php echo $kolomlahir[10]; ?></td>
                                    
                                     </tr>
<?php $no++;} ?>
</tbody>
</table>
</center>
</body>
</html>