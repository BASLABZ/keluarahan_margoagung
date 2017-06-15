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

<div class="page-heading">
    <h3>
      <span class="fa fa-star"></span>  Edit data Galeri
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data</a>
        </li>
        <li class="active">  Galeri </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Data Galeri
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form  class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                       <div class="col-md-12">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" placeholder="Judul Galeri" name="nama_galeri" value="<?php echo $ubahgaleri['nama_galeri']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Upload Gambar / Icon</label>
                                            <br>
                                            <?php echo "<img src='images/$gambar' width='100' height='100'>"; ?>
                                            <input type="file" name="gambar">

                                        </div>
                                    </div>
                                     <div class="form-group">
                                       <div class="col-md-12">
                                            <button type="submit" class="btn btn-warning" name="edit_galeri"><span class="fa fa-save"></span> Simpan</button>
                                            <button type="reset" class="btn btn-danger"><span class="fa fa-refresh"></span> Batal</button>
                                       </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
        </div>