<!-- tambah data profil -->
<?php 
if (isset($_GET['hapus'])) {
    $sqlhapusprofil = mysql_query("DELETE from profil where idprofil = '$_GET[hapus]'");
    if ($sqlhapusprofil) {
        echo "<script> alert('Data Berhasil Dihapus');
         location.href='index.php?pos=daftarprofil' </script>";exit;
    }
}
 ?>
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Profil  
            <a href="index.php?pos=tambah_profil" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data Profil</a>
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
                <th>Judul Profil</th>
                <th>Deskripsi</th>
                <th>Tanggal Posting</th>
                <th>Gambar</th>
                <th>Aksi</th>    
        </tr>
        </thead>
        <tbody>

            <?php 
            if (isset($_GET['hapus'])) 
            {
                $sql_hapus = mysql_query(("DELETE from profil where id_profil = '$_GET[hapus]'"));
                if ($sql_hapus) 
                {
                    echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                    location.href='index.php?pos=daftarprofil' </script>";exit;
                }  
            }
            $no = 1;
            $sql = "SELECT * from profil ORDER BY idprofil DESC ";
            $hasil = mysql_query($sql);
            while ($data = mysql_fetch_array($hasil)) {
                $gambar = $data['gambar'];
   
             ?>
            
                <tr class="odd gradeX">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['judul_profil']; ?></td>
                    <td><?php echo $data['tgl_posting']; ?></td>
                    <td width="50%"><?php echo $data['deskripsi']; ?></td>
                    <td>
                       <center>
                            <?php echo "<img src='images/$gambar' width='100' height='100' class='img-thumbnail'>"; ?>
                       </center>  
                    </td>
                    <td class="center">
                        <a href="index.php?pos=edit_profil&idprofil=<?php echo $data['idprofil']; ?>" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a>
                        <br><br>
                        <a href="index.php?pos=daftarprofil&hapus=<?php echo $data['idprofil']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')"> <span class="fa fa-times"></span> Hapus</a>
                        
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