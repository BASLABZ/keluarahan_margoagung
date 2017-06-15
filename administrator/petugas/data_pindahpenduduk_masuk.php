<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span>Daftar Data Penduduk Pindah  <a href="index.php?pos=tambah_data_perpindahan_masuk" class="btn btn-success"><span class="fa fa-plus"></span> Tambah Data </a>
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
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
      <?php $no=1;
               if (isset($_GET['hapus'])) {
                   $datahapus = mysql_query("DELETE From penduduk_pindah where id_pindah = '$_GET[hapus]'");
                   if ($datahapus) {
                        echo "<script> alert('data berhasil dihapus');
                        location.href='index.php?pos=data_pindahpenduduk_masuk' </script>";exit();
                   }
               }
                $datakeluar = mysql_query("SELECT * from penduduk_pindah pi 
                    inner join penduduk p 
                    on pi.id_penduduk = p.id_penduduk where p.stastus='masuk' ");
                while ($kolomkeluar = mysql_fetch_array($datakeluar)) {  
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $kolomkeluar['tgl_pindah']; ?></td>
                    <td><?php echo $kolomkeluar['nama_lengkap']; ?></td>
                    <td><?php echo $kolomkeluar['gender']; ?></td>
                    <td><?php echo $kolomkeluar['tempatlahir']; ?>/<br>
                        <?php echo $kolomkeluar['tgl_lahir']; ?></td>
                    <td><?php echo $kolomkeluar['agama']; ?></td>
                    <td><?php echo $kolomkeluar['status_perkawinan']; ?></td>
                    <td><?php echo $kolomkeluar['pekerjaan']; ?></td>
                    <td><?php echo $kolomkeluar['pendidikan']; ?></td>
                    <td><?php echo $kolomkeluar['alamat_asal']; ?></td>
                    <td><?php echo $kolomkeluar['alamat_dituju']; ?></td>
                    <td><?php echo $kolomkeluar['pengikut']; ?></td>
                    <td> <a href="index.php?pos=edit_pindah_masuk&id_pindah=<?php echo $kolomkeluar['id_pindah']; ?>" class="btn btn-primary"><span class="fa fa-pencil"></span>  Edit</a>
                        <a href="index.php?pos=data_pindahpenduduk&hapus=<?php echo $kolomkeluar['id_pindah']; ?>" class="btn btn-danger"><span class="fa fa-times"></span> Hapus</td>
                </tr>
                <?php $no++;} ?>
        </tbody>
    </table>
        </table>
        </div>
        </div>
        </section>
        </div>