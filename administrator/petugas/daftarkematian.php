
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Data Kematian  <a href="index.php?pos=tambah_data_kematian" class="btn btn-success"><span class="fa fa-plus"></span> Tambah Data </a>
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table scrollmenu">
        <table  class="display table table-bordered table-striped tablex" id="dynamic-table">
         <thead>
             <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Umur</th>
                <th>Tanggal Kematian</th>
                <th>Tanggal Input Kematian</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Alamat kematian</th>
                <th>Keterangan</th>
                <th>Aksi</th>
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
             $no = 1;
             $sql = "SELECT ke.id_kematian,p.nama_lengkap,p.gender,
             p.tgl_lahir,p.alamat,ke.tgl_kematian,ke.tgl_input,ke.usia,
             ke.keterangan,ke.alamat_kematian from kematian ke 
              inner join penduduk p 
              on ke.id_penduduk = p.id_penduduk
               order by ke.id_kematian DESC ";
             $hasil = mysql_query($sql);
             while ($data = mysql_fetch_array($hasil)) {
              
              ?>
                <tr class="odd gradeX">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                    <td><?php echo $data['usia']; ?></td>
                    <td><?php echo $data['tgl_kematian'] ?></td>
                   <td><?php echo $data['tgl_input']; ?></td>
                    <td><?php echo $data['tgl_lahir'] ?></td>
                   <td><?php echo $data['gender']; ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                   <td><?php echo $data['alamat_kematian'] ?></td>
                   <td><?php echo $data['keterangan']; ?></td>
                    <td class="center">
                        <a href="index.php?pos=edit_data_kematian&id_kematian=<?php echo $data[0]; ?>" class="btn btn-primary"><span class="fa fa-pencil"></span> Edit Data</a><br><br>
                        <a href="index.php?pos=daftarkematian&del=<?php echo $data[0]; ?>" onclick="return confirm('Anda Yakiin?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus Data</a>
                    </td>
                    
                </tr>
                <?php 
                   $no++;} 
                 ?>
            
            
        </tbody>
    </table>
        </table>
        </div>
        </div>
        </section>
        </div>