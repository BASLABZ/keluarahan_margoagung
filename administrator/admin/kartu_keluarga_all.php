
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Kartu Keluarga  
            <a href="cetak_data_kk_semua.php" class="btn btn-warning"> <span class="fa fa-print"></span> Cetak Semua Kartu Keluarga</a>
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
         <thead>
           <tr>
                <th>No</th>
                <th>Nomor Kartu Keluarga</th>
                <th>NIK Kepala Keluarga</th>
                <th>Nama Lengkap Kepala Keluarga</th>
                <th>Alamat</th>
                <th>Dusun</th>
                <th>Aksi</th> 
            </tr>
        </thead>
        <tbody>
             <?php 
                   $no = 1;
                    $sqlkartukeluarga = mysql_query("SELECT * from detail_kartu_keluarga d 
                        inner join kartu_keluarga kk on d.id_kk = kk.id_kk 
                        inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga 
                        inner join dusun dus on p.iddusun = dus.iddusun inner join desa des
                         on dus.iddesa = des.iddesa inner join kecamatan kec 
                         on des.idkecamatan = kec.idkecamatan inner join kabupaten kab 
                         on kec.idkabupaten = kab.idkabupaten inner join propinsi pro 
                         on kab.idpropinsi = pro.idpropinsi where p.status_keluarga = 'AYAH' ") ;
                    while ($kolom = mysql_fetch_array($sqlkartukeluarga)) {
                  
             ?>
             <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $kolom['no_kartu_keluarga']; ?></td>
                <td><?php echo $kolom['no_kepala_keluarga']; ?></td>
                <td><?php echo $kolom['nama_lengkap']; ?></td>
                <td><?php echo $kolom['alamat']; ?></td>
                <td><?php echo $kolom['nama_dusun']; ?>,
                    <?php echo $kolom['nama_desa']; ?>,
                    <?php echo $kolom['nama_kecamatan']; ?>,
                    <?php echo $kolom['nama_kabupaten']; ?>,
                    <?php echo $kolom['nama_propinsi']; ?></td>
                <td>
                    <a href="index.php?pos=lihat_data_kartu_keluarga&no_kartu_keluarga=<?php echo $kolom['no_kartu_keluarga']; ?>" class="btn btn-primary"><span class="fa fa-eye"></span> Lihat Data</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
      </div>
    </div>
   </section>
</div>