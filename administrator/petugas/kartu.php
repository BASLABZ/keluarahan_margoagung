
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Penduduk  
            <a href="index.php?pos=tambah_kartu" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data Penduduk</a>
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
                <th>Nomor Kepala Keluarga</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Kewarganegaraan</th>
                <th>Status Perkawinan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        if (isset($_GET['hapus'])) 
        {
            $sql_hapus = mysql_query(("DELETE from penduduk where id_penduduk = '$_GET[hapus]'"));
            if ($sql_hapus) 
            {
                echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                location.href='index.php?pos=penduduk' </script>";exit;
                
            }
        }

        $no = 1;
        if (isset($_POST['cari'])) {
            $cari = $_POST['cari'];
         
           
        }else{
        $sql = "SELECT p.id_penduduk,p.no_kepala_keluarga,p.nama_lengkap,p.alamat,d.nama_dusun,
                des.nama_desa,kec.nama_kecamatan,kab.nama_kabupaten,pro.nama_propinsi,p.kwarganegaraan,p.status_perkawinan,p.gender
                 from penduduk p inner join dusun d on p.iddusun = d.iddusun 
                inner join desa des on d.iddesa = des.iddesa inner join kecamatan kec
                on des.idkecamatan = kec.idkecamatan inner join kabupaten kab 
                on kec.idkabupaten = kab.idkabupaten inner join propinsi pro 
                on kab.idpropinsi = pro.idpropinsi where p.stastus='hidup' ORDER BY p.id_penduduk DESC";
       
       } $hasil = mysql_query($sql);
        while ($data = mysql_fetch_row($hasil)) {
                                                                                                               
         ?>
        
            <tr class="odd gradeX">
                <td><?php echo $no; ?></td>
                <td><?php echo $data[1]; ?></td>
                <td><?php echo $data[2]; ?></td>
                <td><?php echo $data[3]; ?>,Dusun :<?php echo $data[4]; ?> ,
                     Desa :<?php echo $data[5]; ?>,Kecamatan : <?php echo $data[6]; ?> ,
                     Kabupaten : <?php echo $data[7]; ?>, Propinsi : <?php echo $data[8]; ?>   </td>
                <td><?php echo $data[11]; ?></td>
                <td><?php echo $data[9]; ?></td>
                <td><?php echo $data[10]; ?></td>
                <td class="center">
                    <a href="index.php?pos=lihatdatapenduduk&id_penduduk=<?php echo "$data[0]"; ?>" class="btn btn-primary"><span class="fa fa-eye"></span> Lihat </a> <br><br>
                    <a href="index.php?pos=edit_penduduk&id_penduduk=<?php echo $data[0]; ?>" class="btn btn-success"><span class="fa fa-pencil"></span> Edit </a> <br><br>
                    <a href="index.php?pos=penduduk&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus </a>
                </td>
            </tr>
            <?php 
            $no++;} ?>
        </tbody>
        </table>
      </div>
    </div>
   </section>
</div>