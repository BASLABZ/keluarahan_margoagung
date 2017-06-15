
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Galeri  
            <a href="index.php?pos=tambah_galeri" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data Galeri</a>
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
                    <th>Nama Galeri</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                 </tr>
            </thead>
            <tbody>
            <?php 
            
             
            if (isset($_GET['hapus'])) 
            {
                $sql_hapus = mysql_query(("DELETE from galeri where idgaleri = '$_GET[hapus]'"));
                if ($sql_hapus) 
                {
                    echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                    location.href='index.php?pos=daftargaleri' </script>";exit;
                    
                }
            }

            $no = 1;
            $sql = "SELECT * from galeri ORDER BY idgaleri DESC";
            $hasil = mysql_query($sql);
            while ($data = mysql_fetch_array($hasil)) {
                $gambar = $data['gambar'];

             ?>
            
                <tr class="odd gradeX">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_galeri']; ?></td>
                
                    <td>
                       <center> <?php echo "<img src='images/$gambar' width='100' height='100' class='img-thumbnail'>"; ?> </center>
                    </td>
                    <td class="center">
                        <a href="index.php?pos=edit_galeri&idgaleri=<?php echo $data['idgaleri']; ?>" class="btn btn-success"><span class="fa fa-pencil"></span> Edit </a>
                        <a href="index.php?pos=daftargaleri&hapus=<?php echo $data['idgaleri']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')"><span class="fa fa-times"></span> Hapus</a>
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