<?php 
$idpenduduk = $_GET['id_penduduk'];
$lihatdata = mysql_query("SELECT p.id_penduduk,p.no_kepala_keluarga,p.nama_lengkap,p.gender,p.agama,
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
                                    on kab.idpropinsi = pro.idpropinsi where p.id_penduduk = '$idpenduduk' " );

$kolom = mysql_fetch_array($lihatdata);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Penduduk Per Orang</title>
</head>
<body onload="window.print()">
<h3 align="center">Kantor Kelurahan Desa Catur Harjo</h3>
<p align="center">Alamat : , Kontak : , Email</p>
<hr>

<p align="center"> <h4> Laporan Data Penduduk Per Orang </h4></p>
	<center>
		<table border="0">
                        <tr>
                            <td><label>No kepala Keluarga</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[0]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Nama Lengkap</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[1]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Genger</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[2]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Agama</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[3]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Tempat Lahir</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[4]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Tanggal lahir</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[5]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Alamat</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[6]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Dusun</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[15]; ?>, 
                            <?php echo $kolom[16]; ?>,<?php echo $kolom[17]; ?>,<br>
                            <?php echo $kolom[18]; ?>,<?php echo $kolom[19]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Kwarganegaraan</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[7]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Pendidikan</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[8]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Pekerjaan</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[9]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Status Perkawinan</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[10]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Status Keluarga</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[11]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Nama Ayah</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[12]; ?></label></td>

                        </tr>
                        <tr>
                            <td><label>Nama Ibu</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[13]; ?></label></td>

                        </tr>
                    </table>
	</center>
</body>
</html>