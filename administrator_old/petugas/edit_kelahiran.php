<?php 
$id_kalahiran = $_GET['id_kalahiran'];
 $tampildata = mysql_fetch_array(mysql_query("SELECT * FROM kelahiran WHERE id_kalahiran='$id_kalahiran' "));
 if (isset($_POST['edit'])) {
     $ubahdata = mysql_query("UPDATE kelahiran set nama = '$_POST[nama]',gender = '$_POST[gender]', tgl_lahir ='$_POST[tgl_lahir]', hari_lahir='$_POST[hari_lahir]', jenis_lahir = '$_POST[jenis_lahir]', tempat_lahir='$_POST[tempat_lahir]', alamatanak='$_POST[alamatanak]', agamaanak = '$_POST[agamaanak]', anakke='$_POST[anakke]' , id_kk = '$_POST[id_kk]' where id_kalahiran = '$id_kalahiran'");
     if ($ubahdata) {
            echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=kelahiran' </script>";exit();
     }else{
           echo "<script> alert('gagal ubah data');
        location.href='index.php?pos=kelahiran' </script>";exit();
     }
 }
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">From Ubah Data Kelahiran</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form Ubah Data Kelahiran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            <form role="form" method="POST">
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label>No Kartu Keluarga</label>
                                       <select class="form-control" name="id_kk">
                                           <option value="null">Pilih Kartu Keluarga</option>
                                           <?php $nokk = mysql_query("SELECT * FROM detail_kartu_keluarga d
                                            inner join kartu_keluarga kk
                                            on d.id_kk = kk.id_kk
                                            inner join penduduk p 

                                            on d.no_kepala_keluarga = p.no_kepala_keluarga where p.status_keluarga = 'AYAH'

                                           ");
                                           while ($kolom = mysql_fetch_array($nokk)) {
                                            ?>
                                            <option value="<?php echo $kolom['id_kk']; ?>" <?php if($kolom['id_kk']==$tampildata['id_kk']){echo "selected=selected";} ?>>
                                  <?php echo $tampildata['id_kk']; ?></option>
                                           <?php } ?>
                                       </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $tampildata['nama']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="gender" class="form-control">
                                            <option value="null"> pilih jenis kelamin</option>
                                      
                                            <option value="LAKI-LAKI">Laki - Laki</option>
                                                <option value="PEREMPUAN">PEREMPUAN</option>
                                     
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" value="<?php echo $tampildata['tgl_lahir']; ?>" name="tgl_lahir" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>hari Lahir</label>
                                        <input type="text" name="hari_lahir" class="form-control" value="<?php echo $tampildata['hari_lahir']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" value="<?php echo $tampildata['tempat_lahir']; ?>" name="tempat_lahir" class="form-control">
                                    </div>
                                     <div class="form-group">
                                        <label>Jenis Lahir</label>
                                      <select name="jenis_lahir" class="form-control">
                                            <option value="null"> pilih jenis lahir</option>
                                            <option value="TUNGGAL">TUNGGAL</option>
                                            <option value="KEMBAR">KEMBAR</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamatanak" class="form-control" value="<?php echo $tampildata['alamatanak']; ?>">
                                    </div>
                                   <div class="form-group">
                                            <label>Agama</label>
                                            <select class="form-control" name="agamaanak">
                                            <option value="null">Pilih Agama</option>
                                            <option value="islam">Islam</option>
                                            <option value="protestan">Protestan</option>
                                            <option value="kristen">Kristen</option>
                                            <option value="katholik">Katholik</option>
                                            <option value="budha">Budha</option>
                                            <option value="hindu">Hindu</option>
                                            <option value="konghucu">Konghucu</option>
                                            </select>
                                            
                                        </div>
                                    <div class="form-group">
                                        <label>Anak Ke</label>
                                        <input type="text" value="<?php echo $tampildata['anakke']; ?>" name="anakke" class="form-control">
                                    </div>
                                       
                                        <div class="form-group">
                                            <button type="submit" name="edit" class="btn btn-primary btn-lg">Ubah</button>
                                           
                                        </div>
                                
                                </form>
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