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

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Lihat Data Penduduk <a href="index.php?pos=cetak_data_penduduk&id_penduduk=<?php echo $kolom[0]; ?>" target="_blank" class="btn btn-primary">Cetak</a></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <center>
                <form class="role">
                <div class="panel panel-primary">
                    <div class="panel-heading">Data Penduduk/Orang</div>
                    <div class="panel-body">
                    <table>
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
                            <td><label><?php echo $kolom[15]; ?>,<br>
                            <?php echo $kolom[16]; ?>,<?php echo $kolom[17]; ?>,
                            <?php echo $kolom[18]; ?>,<br><?php echo $kolom[19]; ?></label></td>

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
                    </form>
                    </div>
                </div>
                    </center>
                    <!-- /.panel -->
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>