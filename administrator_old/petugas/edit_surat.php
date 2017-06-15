<?php 
$id_surat = $_GET['id_surat'];
$ubahsurat = mysql_fetch_array(mysql_query("SELECT * FROM surat where id_surat = '$id_surat'"));
if (isset($_POST['edit_surat']))
 {
    $sql_surat = mysql_query("UPDATE surat  SET id_penduduk='$_POST[id_penduduk]',tgl_posting='$_POST[tgl_posting]',keperluan='$_POST[keperluan]',isisurat='$_POST[isisurat]' where id_surat='$id_surat')");
    if ($sql_surat) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=surat' </script>";exit();   
    }
}
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit Surat</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            DATA SURAT
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">

                                        <div class="form-group">
                                            <label>Nama Penduduk</label>
                                            <select class ="form-control" name="id_penduduk"> 
                                            <option value="null">pilih Nama penduduk</option>
                                            <?php $penduduk=mysql_query("select * from penduduk") ;
                                            while ($pen=mysql_fetch_array($penduduk)) {
                                                 
                                             ?>
                                            <option value="<?php echo $pen[0]; ?>"><?php echo "$pen[2]"; ?></option>
                                            <?php } ?>
                                            </select>  
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Surat</label>
                                            <input class="form-control"name="jenis_surat" value="<?php echo $ubahsurat[3]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Keperluan</label>
                                            <textarea class ="form-control"name="keperluan"><?php echo $ubahsurat[4]; ?></textarea>  
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Surat</label>
                                            <textarea class ="form-control"name="isisurat"><?php echo $ubahsurat[5]; ?></textarea>   
                                        </div>
                                       <button type="submit" name="edit_surat" class="btn btn-primary">Edit</button>
                                        <button type="reset" class="btn btn-danger">Batal</button>
                                    </form>
                                </div>
                              
                            </div>
                          
                        </div>
                    </div>
                </div>
                
            </div>
           
        </div>