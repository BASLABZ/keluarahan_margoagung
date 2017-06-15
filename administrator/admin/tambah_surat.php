
<?php 
if (isset($_POST['simpan']))
 {

    $sql_surat = mysql_query("INSERT into surat (id_penduduk,tgl_surat,jenis_surat,keperluan,isisurat)
        values('".$_POST['id_penduduk']."',now(),'".$_POST['jenis_surat']."','".$_POST['keperluan']."','".$_POST['isisurat']."')");

    if ($sql_surat) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=surat' </script>";exit();
     
    }
}
 ?>
<div class="page-heading">
    <h3>
      <span class="fa fa-star"></span>  Tambah Data Surat
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data</a>
        </li>
        <li class="active">  Surat </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Surat
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
                                        <div class="col-lg-6">
                                            <label>Nama Penduduk</label>
                                            <select class ="form-control" name="id_penduduk"> 
                                            <option value="null">pilih Nama penduduk</option>
                                            <?php $penduduk=mysql_query("select * from penduduk") ;
                                            while ($pen=mysql_fetch_array($penduduk)) {
                                                 # code...
                                             ?>
                                            <option value="<?php echo $pen[0]; ?>"><?php echo "$pen[2]"; ?></option>
                                            <?php } ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label>Jenis Surat</label>
                                            <input class="form-control" name="jenis_surat">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <textarea class ="form-control ckeditor" name="keperluan"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Surat</label>
                                            <textarea class ="form-control ckeditor" name="isisurat"></textarea>
                                            
                                        </div>
                                     <div class="form-group">
                                       <div class="col-md-12">
                                            <button type="submit" name="simpan" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
                                            <button type="reset" class="btn btn-danger"><span class="fa fa-refresh"></span> Batal</button>
                                       </div>
                                    </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
        </div>