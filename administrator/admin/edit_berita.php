<?php 
$idberita = $_GET['idberita'];
$ubahberita = mysql_fetch_array(mysql_query("SELECT * FROM berita where idberita = '$idberita' "));
$gambar = $ubahberita['gambar'];
if (isset($_POST['edit_berita'])) {
    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
    if ($move) {
        $query = mysql_query("UPDATE berita SET judul_berita='$_POST[judul_berita]',
                                tgl_posting=NOW(),deskripsi='$_POST[deskripsi]',
                                gambar='$fileName' where idberita = '$idberita'");
    }
    }else{
         $query = mysql_query("UPDATE berita SET judul_berita='$_POST[judul_berita]',
                                tgl_posting=NOW(),deskripsi='$_POST[deskripsi]' where idberita = '$idberita'");
    }
    if ($query) {
        echo "<script> alert('Terimakasih Data Berhasil Di Inputkan');
        location.href='index.php?pos=daftarberita' </script>";exit;
     
    }else{
        echo "<script> alert('Data Gagal Masuk!!');
        location.href='index.php?pos=edit_berita' </script>";exit;

    }
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Berita</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <form class="role" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul Berita</label>
                        <input type="text" name="judul_berita" class="form-control" value="<?php echo $ubahberita[1]; ?>"></div>
                        <div class="form-group">
                        <label>Deskripsi Berita</label>
                        <textarea type="text" name="deskripsi" class="form-control"><?php echo $ubahberita[3]; ?></textarea></div>

                        <div class="form-group">
                            <input type="file" name="gambar">
                            <?php echo "<img src='images/$gambar' width='100' height='100'>"; ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit_berita" class="btn btn-warning">Simpan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>
                    </div>
                </form>
                </div>
               
            </div>
            <!-- /.row -->
        </div>