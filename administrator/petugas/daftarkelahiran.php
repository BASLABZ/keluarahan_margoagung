
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Data Data Kelahiran  <a href="index.php?pos=tambah_data_kelahiran" class="btn btn-success"><span class="fa fa-plus"></span> Tambah Data </a>
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table scrollmenu">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
         <thead>
             <tr>
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
                <th rowspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            if (isset($_GET['del'])){
                $sql_hapus = mysql_query("DELETE FROM kematian where id_kematian = '$_GET[del]'");
            if ($sql_hapus) {
                echo "<script> alert('Terima Kasih Data Berhasil di Hapus');
                location.href='index.php?pos=daftarkematian'</script>";exit;
                    }
                 }
             ?>
             <?php 
                $no=1;
                    $datakelahiran = mysql_query("SELECT ke.id_kalahiran,ke.nama,ke.gender,ke.tgl_lahir,ke.hari_lahir,ke.jenis_lahir,ke.tempat_lahir, ke.alamatanak,ke.agamaanak,ke.anakke,p.nama_lengkap from kelahiran ke inner join detail_kartu_keluarga d on ke.id_kk = d.id_kk inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga where p.status_keluarga = 'AYAH'");
                    while ($kolomlahir=mysql_fetch_array($datakelahiran)) {
                     
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
                     <td>
                        <a href="index.php?pos=edit_kelahiran&id_kalahiran=<?php echo $kolomlahir[0]; ?>" class="btn btn-primary"><span class="fa fa-pencil"></span> Ubah</a>
                        <a href="index.php?pos=data_kelahiran&hapus=<?php echo $kolomlahir[0]; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Hapus
                    </td> 
                 </tr>
                 <?php $no++; } ?>
        </tbody>
    </table>
        </table>
        </div>
        </div>
        </section>
        </div>