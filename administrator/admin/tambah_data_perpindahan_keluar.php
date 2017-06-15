
<?php 
if (isset($_POST['simpan']))
 {

    $sqlsimpan = mysql_query("INSERT INTO penduduk_keluar (id_penduduk,tgl_keluar,alamat_asal,alamat_dituju,alasan_keluar,keterangan_pindah) values ('$_POST[id_penduduk]','$_POST[tgl_keluar]','$_POST[alamat_asal]','$_POST[alamat_dituju]','$_POST[alasan_keluar]','$_POST[keterangan_pindah]')");
     $sql_updatependuduk= mysql_query("UPDATE penduduk set stastus = 'keluar' where id_penduduk='$_POST[id_penduduk]'");
    if ($sqlsimpan) {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=data_pindahpenduduk_keluar' </script>";exit();
    }else{
         echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=data_pindahpenduduk_keluar' </script>";exit();
    }
  
}
 ?>
<div class="page-heading">
    <h3> <span class="fa fa-users"></span>  Tambah Data Perpindahan Keluar</h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Tambah</a>
        </li>
        <li class="active"> Data Perpindahan Keluar </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Perpindahan Keluar
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form  class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                     <div class="form-group">
                                    <label>Nama Penduduk</label>
                                    <select class="form-control select2" name="id_penduduk">
                                        <option value="null">pilih nama penduduk</option>
                                        <?php $datanamapenduduk = mysql_query("select * from penduduk where stastus != 'keluar'");
                                                while ($namapenduduk = mysql_fetch_array($datanamapenduduk)) {
                                                  
                                                ?>
                                                <option value="<?php echo $namapenduduk['id_penduduk']; ?>"><?php echo $namapenduduk['nama_lengkap']; ?></option>
                                        <?php } ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                        <label>Tanggal Keluar</label>
                                        <input type="date" name="tgl_keluar" class="form-control">
                                    </div>
                                </div>
                                  <div class="col-lg-12">
                                    
                                     <div class="form-group">
                                        <label>Alamat Asal</label>
                                      <textarea class="form-control ckeditor" name="alamat_asal"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Alamat Dituju</label>
                                      <textarea class="form-control ckeditor" name="alamat_dituju"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Alasan keluar</label>
                                      <textarea class="form-control ckeditor" name="alasan_keluar"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Keterangan Pindah</label>
                                     <textarea name="keterangan_pindah" class="form-control ckeditor"></textarea>                                    </div>
                                        <div class="form-group">
                                            <button type="submit" name="simpan" class="btn btn-primary btn-lg">Simpan</button>
                                             <button type="reset" class="btn btn-warning btn-lg">Batal</button>
                                    
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>