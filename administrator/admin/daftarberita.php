
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Berita  
            <a href="index.php?pos=tambah_berita" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data Berita</a>
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
                    <th>Judul Berita</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Posting</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            if (isset($_GET['hapus'])) {
                $sqlhapusberita = mysql_query("DELETE from berita where idberita = '$_GET[hapus]'");
                if ($sqlhapusberita) {
                    echo "<script> alert('Data Berhasil Dihapus');location.href='index.php?pos=daftarberita' </script>";exit;
                }
                
            }
             ?>

            <?php 
            $no = 1;
            $sql = "SELECT * from berita ORDER BY idberita DESC";
            $hasil = mysql_query($sql);
            while ($data = mysql_fetch_array($hasil)) {
                $gambar = $data['gambar'];
   
             ?>
            
                <tr class="odd gradeX">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['judul_berita']; ?></td>
                    <td><?php echo $data['tgl_posting']; ?></td>
                    <td width="50%"><?php echo $data['deskripsi']; ?></td>
                    
                    <td>
                        <?php echo "<img src='images/$gambar' width='100' height='100' class='img-thumbnail'>"; ?>
                        
                    </td>
                    <td class="center">
                        <a href="index.php?pos=edit_berita&idberita=<?php echo $data['idberita']; ?>" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a><br> <br>
                        <a href="index.php?pos=daftarberita&hapus=<?php echo $data['idberita']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')"> <span class="fa fa-times"></span> Hapus</a>
                        
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