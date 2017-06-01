<?php 
$idprofil = $_GET['idprofil'];
$ubahprofil = mysql_fetch_array(mysql_query("SELECT * FROM profil where idprofil = '$idprofil' "));
$gambar = $ubahprofil['gambar'];
if (isset($_POST['edit_profil'])) {
    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
    if ($move) {
        $query = mysql_query("UPDATE profil SET judul_profil='$_POST[judul_profil]',tgl_posting=NOW(),deskripsi='$_POST[deskripsi]',gambar='$fileName' where idprofil = '$idprofil'");
    }
    }else{
         $query = mysql_query("UPDATE profil SET judul_profil='$_POST[judul_profil]',tgl_posting=NOW(),deskripsi='$_POST[deskripsi]' where idprofil = '$idprofil'");
    }
    if ($query) {
        echo "<script> alert('Terimakasih Data Berhasil Di Inputkan');
        location.href='index.php?pos=daftarprofil' </script>";exit;
     
    }else{
        echo "<script> alert('Data Gagal Masuk!!');
        location.href='index.php?pos=tambah_profil' </script>";exit;

    }
}
 ?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Profil</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                <form class="role" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul Profil</label>
                        <input type="text" name="judul_profil" class="form-control" value="<?php echo $ubahprofil[1]; ?>"></div>
                        <div class="form-group">
                        <label>Deskripsi Profil</label>
                        <textarea type="text" name="deskripsi" class="form-control"><?php echo $ubahprofil[3]; ?></textarea></div>
                        <div class="form-group">
                            <input type="file" name="gambar" >
                            <?php echo "<img src='images/$gambar' widht='150' height='150'>"; ?> 
                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit_profil" class="btn btn-warning">Simpan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </div>
                </form>
                   
                </div>
                
            </div>
           
        </div>