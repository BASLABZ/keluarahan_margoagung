<?php 
$idgaleri = $_GET['idgaleri'];
$ubahgaleri = mysql_fetch_array(mysql_query("SELECT * FROM galeri where idgaleri = '$idgaleri' "));
$gambar = $ubahgaleri['gambar'];
if (isset($_POST['edit_galeri'])) {
    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
    if ($move) {
        $query = mysql_query("UPDATE galeri SET nama_galeri='$_POST[nama_galeri]',
                               
                                gambar='$fileName' where idgaleri = '$idgaleri'");
    }
    }else{
         $query = mysql_query("UPDATE galeri SET nama_galeri='$_POST[nama_galeri]'
                               
                                 where idgaleri = '$idgaleri'");
    }
    if ($query) {
        echo "<script> alert('Terimakasih Data Berhasil Di Inputkan');
        location.href='index.php?pos=daftargaleri' </script>";exit;
     
    }else{
        echo "<script> alert('Data Gagal Masuk!!');
        location.href='index.php?pos=edit_galeri' </script>";exit;

    }
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Galeri</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <form class="role" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Galeri</label>
                        <input type="text" name="nama_galeri" class="form-control" value="<?php echo $ubahgaleri[1]; ?>"></div>
                        <div class="form-group">
                            <input type="file" name="gambar">
                            
                            <?php echo "<img src='images/$gambar' width='100' height='100'>"; ?>

                        </div>
                        <div class="form-group">
                            <button type="submit" name="edit_galeri" class="btn btn-warning">Simpan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>


                    </div>
                </form>
                
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>