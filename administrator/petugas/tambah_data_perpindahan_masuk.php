
<?php 
if (isset($_POST['simpan']))
 {

    $sql_pindah= mysql_query("INSERT into penduduk_pindah (tgl_pindah,alamat_asal,alamat_dituju,pengikut,id_penduduk)
        values('$_POST[tgl_pindah]','$_POST[alamat_asal]','$_POST[alamat_dituju]','$_POST[pengikut]','$_POST[id_penduduk]')");
    $sql_updatependuduk= mysql_query("UPDATE penduduk set stastus = 'masuk' where id_penduduk='$_POST[id_penduduk]'");
    if ($sql_pindah) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=data_pindahpenduduk_masuk' </script>";exit();
    }
  
}
 ?>
<div class="page-heading">
    <h3>
      <span class="fa fa-users"></span>  Tambah Data Perpindahan Masuk
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Tambah</a>
        </li>
        <li class="active"> Data Perpindahan Masuk </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Perpindahan Masuk
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form  class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-12">
                                    <div class="form-group">
                                        <select class="form-control select2" name="id_penduduk">
                                        <option value="null">pilih nama penduduk</option>
                                        <?php $datanamapenduduk = mysql_query("select * from penduduk");
                                                while ($namapenduduk = mysql_fetch_array($datanamapenduduk)) {
                                                ?>
                                                <option value="<?php echo $namapenduduk['id_penduduk']; ?>"><?php echo $namapenduduk['nama_lengkap']; ?></option>
                                        <?php } ?>

                                    </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Tanggal Pindah</label>
                                        <input type="date" name="tgl_pindah" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>Alamat Asal</label>
                                      <textarea class="form-control" name="alamat_asal"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Alamat Dituju</label>
                                      <textarea class="form-control" name="alamat_dituju"></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Pengikut</label>
                                      <input type="text" name="pengikut" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-primary btn-lg"><span class="fa fa-save"></span> Simpan</button>
                                         <button type="reset" class="btn btn-warning btn-lg"><span class="fa fa-refresh"></span> Batal</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>