<?php 
$idprofil = $_GET['idprofil'];
$ubahprofil = mysql_fetch_array(mysql_query("SELECT * FROM profil where idprofil = '$idprofil' "));
$gambar = $ubahprofil['gambar'];
if (isset($_POST['edit_profil'])) {
    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
    if ($move) {
        $query = mysql_query("UPDATE profil SET judul_profil='$_POST[judul_profil]',tgl_posting=NOW(),deskripsi='$_POST[editor1]',gambar='$fileName' where idprofil = '$idprofil'");
    }
    }else{
         $query = mysql_query("UPDATE profil SET judul_profil='$_POST[judul_profil]',tgl_posting=NOW(),deskripsi='$_POST[editor1]' where idprofil = '$idprofil'");
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
<div class="page-heading">
    <h3>
      <span class="fa fa-star"></span>  Ubah data Profil
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data</a>
        </li>
        <li class="active">Ubah  Profil </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Data Profil
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
                                        <input type="text" class="form-control" placeholder="Judul Profil" name="judul_profil" value="<?php echo $ubahprofil['judul_profil']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Deskripsi Profil</label>
                                            <textarea class="form-control ckeditor" name="editor1" rows="6">
                                            <?php echo $ubahprofil['deskripsi']; ?>
                                            </textarea >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">

                                            <label>Upload Gambar / Icon</label>

                                            <input type="file" name="gambar">
                                            <br>
                                            <?php echo "<img src='images/$gambar' widht='150' height='150'>"; ?> 
                                        </div>
                                    </div>
                                     <div class="form-group">
                                       <div class="col-md-12">
                                            <button type="submit" name="edit_profil" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
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