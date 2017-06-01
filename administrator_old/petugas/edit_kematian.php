<?php 
    $idkematian = $_GET['id_kematian'];
    $tampildata = mysql_fetch_array(mysql_query("SELECT * From kematian where id_kematian = '$idkematian'"));
    // proses edit
    if (isset($_POST['edit'])) {
      $editdata = mysql_query("UPDATE kematian set id_penduduk ='$_POST[id_penduduk]', tgl_input=NOW(), tgl_kematian='$_POST[tgl_kematian]',usia = '$_POST[usia]', alamat_kematian='$_POST[alamat_kematian]',keterangan = '$_POST[keterangan]' where id_kematian = '$idkematian' ");
      if ($editdata) {
         echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=daftarkematian' </script>";exit();
      }else{
         echo "<script> alert('data gagal diubah');
        location.href='index.php?pos=daftarkematian' </script>";exit();
      }
    }
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Ubah Data Kematian</h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Ubah Data Kematian
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST">
                                         
                                        <div class="form-group">
                                            <label>Nama Penduduk</label>
                                            <select name="id_penduduk" class="form-control">
                                               <option value="null">Pilih Nama Penduduk</option>
                                               <?php $id_penduduk = mysql_query("select * from penduduk");
                                                      while ($kolom = mysql_fetch_array($id_penduduk)) {
                                                        
                                                        ?>
                                                         <option value="<?php echo $kolom['id_penduduk']; ?>" <?php if($kolom['id_penduduk']==$tampildata['id_penduduk']){echo "selected=selected";} ?>>
                                  <?php echo $tampildata['id_penduduk']; ?></option>
                                                        <?php } ?>
                                           </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kematian</label>
                                            <input type="date" name="tgl_kematian" value="<?php echo $tampildata['tgl_kematian']; ?>"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Usia</label>
                                            <input type="text" value="<?php echo $tampildata['usia']; ?>" name="usia" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Kematian</label>
                                          <textarea name="alamat_kematian" class="form-control"> <?php echo $tampildata['alamat_kematian']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                          <textarea name="keterangan" class="form-control"><?php echo $tampildata['keterangan']; ?></textarea>
                                        </div>
                                          <div class="form-group">
                                           <button name="edit" type="submit" class="btn btn-lg btn-primary">Ubah</button>
                                        </div>

                                 </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>