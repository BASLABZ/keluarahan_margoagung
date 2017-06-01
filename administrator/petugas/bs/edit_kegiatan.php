<?php 
$idkegiatan = $_GET['idkegiatan'];
$ubahkegiatan = mysql_fetch_array(mysql_query("SELECT * FROM kegiatan where idkegiatan = '$idkegiatan' "));
$gambar = $ubahkegiatan['gambar'];
if (isset($_POST['edit_kegiatan'])) {
    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
    if ($move) {
        $query = mysql_query("UPDATE berita SET judul_kegitan='$_POST[judul_kegitan]',
                                tgl_posting=NOW(),deskripsi='$_POST[deskripsi]',
                                gambar='$fileName' where idkegiatan = '$idkegiatan'");
    }
    }else{
         $query = mysql_query("UPDATE berita SET judul_kegitan='$_POST[judul_kegitan]',
                                tgl_posting=NOW(),deskripsi='$_POST[deskripsi]'
                                 where idkegiatan = '$idkegiatan'");
    }
    if ($query) {
        echo "<script> alert('Terimakasih Data Berhasil Di Inputkan');
        location.href='index.php?pos=daftarkegiatan' </script>";exit;
     
    }else{
        echo "<script> alert('Data Gagal Masuk!!');
        location.href='index.php?pos=edit_kegiatan' </script>";exit;
    }
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Kegiatan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <form class="role" method="POST" enctype="multipart/form-data" action="?pos=proses_tambah_kegiatan">
                    <div class="form-group">
                        <label>Judul Kegiatan</label>
                        <input type="text" name="judul_kegiatan" value="<?php echo $ubahkegiatan[1]; ?>" class="form-control" ></div>
                        <div class="form-group">
                        <label>Deskripsi Kegiatan</label>
                        <textarea type="text" name="deskripsi" class="form-control"><?php echo $ubahkegiatan[3]; ?></textarea></div>

                        <div class="form-group">
                            <input type="file" name="gambar">
                            <?php echo "<img src='images/$gambar' width='100' height='100'>"; ?>                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit_kegiatan" class="btn btn-warning">Simpan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>