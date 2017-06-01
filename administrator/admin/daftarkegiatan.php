
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Kegiatan  
            <a href="index.php?pos=tambah_kegiatan" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data Kegiatan</a>
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
                    <th>Judul Kegiatan</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Posting</th>
                    <th>Gambar</th>
                    <th>Aksi</th> 
                </tr>
            </thead>
            <tbody>
            <?php 
            if (isset($_GET['hapus'])) {
                $sqlhapuskegiatan = mysql_query("DELETE from kegiatan where idkegiatan = '$_GET[hapus]'");
                if ($sqlhapuskegiatan) {
                    echo "<script> alert('Data Berhasil Dihapus');
                     location.href='index.php?pos=daftarkegiatan' </script>";exit;
                }
            }
             ?>
            <?php   
            $no = 1;
            $sql = "SELECT * from kegiatan  ORDER BY idkegiatan DESC";
            $hasil = mysql_query($sql);
            while ($data = mysql_fetch_array($hasil)) {
                $gambar = $data['gambar'];
             ?>
                <tr class="odd gradeX">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['judul_kegiatan']; ?></td>
                    <td width="50%"><?php echo $data['deskripsi']; ?></td>
                    <td><?php echo $data['tgl_posting']; ?></td>
                    
                    <td>
                        <?php echo "<img src='images/$gambar' width='100' height='100' class='img-thumbnail'>"; ?>
                        
                    </td>
                    <td class="center">
                        <a href="index.php?pos=edit_kegiatan&idkegiatan=<?php echo $data[0]; ?>" class="btn btn-success"><span class="fa fa-pencil"></span> Edit </a> <br> <br>
                        <a href="index.php?pos=daftarkegiatan&hapus=<?php echo $data[0]; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')"><span class="fa fa-times"></span> Hapus</a>
                       
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