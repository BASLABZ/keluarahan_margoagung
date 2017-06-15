<?php 
$id_surat = $_GET['id_surat'];
$ubahsurat = mysql_fetch_array(mysql_query("SELECT * FROM surat where id_surat = '$id_surat'"));
if (isset($_POST['edit_surat']))
 {
        
    $sql_surat = mysql_query("UPDATE surat  SET id_penduduk='".$_POST['id_penduduk']."',tgl_surat= NOW(),keperluan='".$_POST['keperluan']."',isisurat='".$_POST['isisurat']."' where id_surat='".$id_surat."'");

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
                                             <select class="form-control" name="id_penduduk">
                                                <?php $id_penduduk = mysql_query("SELECT * from penduduk");
                                                  while ($kolom = mysql_fetch_array($id_penduduk)) { ?>
                                                <option value="<?php echo $kolom['id_penduduk']; ?>" <?php if($kolom['id_penduduk']==$ubahsurat['id_penduduk']){echo "selected=selected";} ?>>
                                                    <?php echo $kolom[2]; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <label>Jenis Surat</label>
                                            <input class="form-control" name="jenis_surat" value="<?php echo $ubahsurat['jenis_surat']; ?>">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <textarea class ="form-control ckeditor" name="keperluan">
                                                <?php echo $ubahsurat['keperluan']; ?>
                                            </textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Surat</label>
                                            <textarea class ="form-control ckeditor" name="isisurat">
                                                <?php echo $ubahsurat['isisurat']; ?>
                                            </textarea>
                                            
                                        </div>
                                     <div class="form-group">
                                       <div class="col-md-12">
                                            <button type="submit" name="edit_surat" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
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