<?php 
$idkegiatan = $_GET['idkegiatan'];
$ubahkegiatan = mysql_fetch_array(mysql_query("SELECT * FROM kegiatan where idkegiatan = '$idkegiatan' "));
$gambar = $ubahkegiatan['gambar'];
if (isset($_POST['edit_kegiatan'])) {
    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
        $fileName = $_FILES['gambar']['name'];
        $move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$fileName);
    if ($move) {
        $query = mysql_query("UPDATE kegiatan SET judul_kegiatan='$_POST[judul_kegiatan]',
                                tgl_posting=NOW(),deskripsi='$_POST[editor1]',
                                gambar='$fileName' where idkegiatan = '$idkegiatan'");
    }
    }else{
        
         $query = mysql_query("UPDATE kegiatan SET judul_kegiatan='$_POST[judul_kegiatan]',
                                tgl_posting=NOW(),deskripsi='$_POST[editor1]'
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
<div class="page-heading">
    <h3>
      <span class="fa fa-star"></span>  Edit Data Kegiatan
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data</a>
        </li>
        <li class="active">  Kegiatan </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Edit Data Kegiatan
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form  class="form-horizontal" method="POST" enctype="multipart/form-data" >
                                    <div class="form-group">
                                       <div class="col-md-12">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" placeholder="Judul Kegiatan" name="judul_kegiatan" value="<?php echo $ubahkegiatan['judul_kegiatan']; ?>">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Deskripsi Kegiatan</label>
                                            <textarea class="form-control ckeditor" name="editor1" rows="6">
                                            <?php echo $ubahkegiatan['deskripsi']; ?>
                                            </textarea >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Upload Gambar / Icon</label>
                                            <br>
                                            <?php echo "<img src='images/$gambar' width='100' height='100'>"; ?>
                                            <br>
                                            <input type="file" name="gambar">

                                        </div>
                                    </div>
                                     <div class="form-group">
                                       <div class="col-md-12">
                                            <button type="submit" class="btn btn-warning" name="edit_kegiatan"><span class="fa fa-save"></span> Simpan</button>
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