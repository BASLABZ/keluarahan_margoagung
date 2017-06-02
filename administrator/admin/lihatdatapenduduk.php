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
  <div class="col-sm-12">
    <div class="col-md-1"></div>
    <div class="col-lg-10 col-sm-1">
        <div class="pricing-table">
            <div class="pricing-head">
                <h1> </h1>
            </div>
            <div class="pricing-quote">
                <p><a href="index.php?pos=cetak_data_penduduk&id_penduduk=<?php echo $kolom[0]; ?>" target="_blank" class="btn btn-success"><span class="fa fa-print"></span> Cetak</a> </p>
            </div>

            <!-- <ul class="list-unstyled">
                <li>24/7 Tech Support</li>
                <li>Advanced Options</li>
                <li>100GB Storage</li>
                <li>1GB Bandwidth</li>
            </ul> -->
            <form class="role">
            <ul class="list-unstyled">
                        <li>
                            <td><label>No kepala Keluarga</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[1]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Nama Lengkap</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[2]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Genger</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[3]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Agama</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[4]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Tempat Lahir</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[5]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Tanggal lahir</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[6]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Alamat</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[7]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Dusun</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[15]; ?>,<br>
                            <?php echo $kolom[16]; ?>,<?php echo $kolom[17]; ?>,
                            <?php echo $kolom[18]; ?>,<br><?php echo $kolom[19]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Kwarganegaraan</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[8]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Pendidikan</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[9]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Pekerjaan</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[10]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Status Perkawinan</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[11]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Status Keluarga</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[12]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Nama Ayah</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[13]; ?></label></td>

                        </li>
                        <li>
                            <td><label>Nama Ibu</label></td>
                            <td>  :  </td>
                            <td><label><?php echo $kolom[14]; ?></label></td>

                        </li>
                    </ul> 
                    </form>
            <div class="price-actions">
                <a href="javascript:;" class="btn">get it now</a>
            </div>
        </div>
    </div>
</div>