<?php 
    $idpindah = $_GET['id_pindah'];
    $tampildata = mysql_fetch_array(mysql_query("SELECT * FROM penduduk_pindah where id_pindah = '$idpindah'"));
    if (isset($_POST['edit'])) {
        $ubahdata = mysql_query("UPDATE penduduk_pindah set tgl_pindah = '$_POST[tgl_pindah]', alamat_asal= '$_POST[alamat_asal]', alamat_dituju='$_POST[alamat_dituju]', pengikut = '$_POST[pengikut]' ,id_penduduk='$_POST[id_penduduk]' where id_pindah = '$idpindah'");
        if ($ubahdata) {
              echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=data_pindahpenduduk' </script>";exit();
        }else{
                     echo "<script> alert('data gagal diubah');
        location.href='index.php?pos=data_pindahpenduduk' </script>";exit();
        }
    }
 ?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">From ubah Data Perpindahan masuk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Inputan Data Perpindahan masuk
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" method="POST">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Penduduk</label>
                                    <select class="form-control" name="id_penduduk">
                                       
                                          <?php $id_penduduk = mysql_query("select * from penduduk");
                                                      while ($kolom = mysql_fetch_array($id_penduduk)) {
                                                        
                                                        ?>
                                    <option value="<?php echo $kolom['id_penduduk']; ?>" <?php if($kolom['id_penduduk']==$tampildata['id_penduduk']){echo "selected=selected";} ?>>
                                  <?php echo $kolom[2]; ?></option>
                                                        <?php } ?>
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label>Tanggal Pindah</label>
                                        <input type="date" value="<?php echo $tampildata['tgl_pindah']; ?>" name="tgl_pindah" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>Alamat Asal</label>
                                      <textarea class="form-control" name="alamat_asal"><?php echo $tampildata['alamat_asal']; ?></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Alamat Dituju</label>
                                      <textarea class="form-control" name="alamat_dituju"><?php echo $tampildata['alamat_dituju']; ?></textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Pengikut</label>
                                      <input type="text" value="<?php echo $tampildata['pengikut']; ?>" name="pengikut" class="form-control">
                                    </div>
                                  
                                       
                                        <div class="form-group">
                                            <button type="submit" name="edit" class="btn btn-primary btn-lg">Ubah</button>
                                       
                                        </div>
                                </div>
                                </form>
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