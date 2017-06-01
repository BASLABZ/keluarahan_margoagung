<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	.kotak{
		width: 300px

	}
	.jaraktitik{
		width: 50px;
	}
	.ttg{
		width: 1000px;
	}
</style>
	<title>Cetak Surat Kelurahan Caturharjo Yogyakarta</title>
</head>
<body>
	<center>
	<table>
		<th><img src="../admin/images/logo.png" width="100" height="100 "></th>

		<th><p align="center">Keluarahan Caturharjo Kabupaten Sleman, DIY</p>
			
			<p>Jln Catur Harjo,Kelurahan Caturharjo, Kabupaten Sleman Propinsi DIY 5490<br>
				(0274) 0898 9897 978 || Email : caturharjo@gmail.com|| Fax (0274) 098 098 987</p>
			<hr>
		</th>
<?php
include 'koneksi/koneksi.php';
$idsurat = $_GET['id_surat'] ;
$datasurat = mysql_fetch_array(mysql_query("SELECT * From surat where id_surat='$idsurat'")); 


?>
		
	</table>
	</center>
	<center> 
	<table>
	<th>No Surat: <?php echo $datasurat['id_surat']; ?> </th>
	</table>
	</center>
	<table>
	<tbody>
		<br><br>
		<tr>
			<td><div class="kotak"></div></td>
			<td><b>Tanggal </b> </td>
			<td><div class="jaraktitik"></div>:</td>
			<td><?php echo $datasurat['tgl_surat']; ?></td>

		</tr>
		<tr><td><div class="kotak"></div></td>
			<td><b>Jenis Surat </b>  </td>
			<td><div class="jaraktitik"></div>:</td>
			<td><?php echo $datasurat['jenis_surat']; ?></td>
			
		</tr>
		
		<tr>
			<td><div class="kotak"></div></td>
			<td><b>Keperluan </b> </td>
			<td><div class="jaraktitik"></div>:</td>
			<td><?php echo $datasurat['keperluan']; ?></td>
			<br> 	
				
		</tr>
		
	</tbody>
	</table>
	<br>
	<center>
	<table>
		<tr>
			<td class="kotak"></td>
			<td><td><p align="justify">
				<?php echo $datasurat['isisurat']; ?>
			</p></td></td>
		</tr>
	</table>
</center>
<table>
	<tr>
		
		<td><div class="ttg"></div></td>
		<td>
		<br>
		<br>
		
		<br>
		<p align="right"> <b>Yogyakarta, <?php echo $datasurat['tgl_surat']; ?></b>
		</p>
		</td>

		</tr>
		<td><div class="ttg"></div></td>
		<td>
		<br>
		<br>
		
		<br>
		<p align="right"> (...................................)</b><br>
		<p>NIP.</p>
		</p>
		</td>

		</tr>

		
</table>
</body>
</html>