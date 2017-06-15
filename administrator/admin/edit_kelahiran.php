<?php 
$id_kalahiran = $_GET['id_kalahiran'];
 $tampildata = mysql_fetch_array(mysql_query("SELECT * FROM kelahiran WHERE id_kalahiran='$id_kalahiran' "));
 if (isset($_POST['edit'])) {
     $ubahdata = mysql_query("UPDATE kelahiran set nama = '$_POST[nama]',gender = '$_POST[gender]', tgl_lahir ='$_POST[tgl_lahir]', hari_lahir='$_POST[hari_lahir]', jenis_lahir = '$_POST[jenis_lahir]', tempat_lahir='$_POST[tempat_lahir]', alamatanak='$_POST[alamatanak]', agamaanak = '$_POST[agamaanak]', anakke='$_POST[anakke]' , id_kk = '$_POST[id_kk]' where id_kalahiran = '$id_kalahiran'");
     if ($ubahdata) {
            echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=daftarkelahiran' </script>";exit();
     }else{
           echo "<script> alert('gagal ubah data');
        location.href='index.php?pos=daftarkelahiran' </script>";exit();
     }
 }
?>
<div class="page-heading">
    <h3>
      <span class="fa fa-users"></span>  Ubah Data Kelahiran
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Ubah</a>
        </li>
        <li class="active"> Data Kelahiran </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Data Kelahiran
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
                                              No : <?php echo $kolom['no_kartu_keluarga']; ?> | Kepala Keluarga : <?php echo $kolom['nama_lengkap']; ?></option>
                                                       <?php } ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $tampildata['nama']; ?>">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                   <label>Jenis Kelamin</label>
                                                    <select name="gender" class="form-control">
                                                        <option value="LAKI-LAKI" <?php if($tampildata['gender']=='LAKI-LAKI'){echo "selected=selected";}?>>LAKI-LAKI</option>
                                                         <option value="PEREMPUAN" <?php if($tampildata['gender']=='PEREMPUAN'){echo "selected=selected";}?>>PEREMPUAN</option>
                                                        </select>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $tampildata['tgl_lahir']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                            <label>Hari Lahir</label>
                                            <select class="form-control" name="hari_lahir">
                                                 <option value="Senin" <?php if($tampildata['hari_lahir']=='Senin'){echo "selected=selected";}?>>Senin</option>
                                                 <option value="Selasa" <?php if($tampildata['hari_lahir']=='Selasa'){echo "selected=selected";}?>>Selasa</option>
                                                 <option value="Rabu" <?php if($tampildata['hari_lahir']=='Rabu'){echo "selected=selected";}?>>Rabu</option>
                                                 <option value="Kamis" <?php if($tampildata['hari_lahir']=='Kamis'){echo "selected=selected";}?>>Kamis</option>
                                                 <option value="Jumat" <?php if($tampildata['hari_lahir']=='Jumat'){echo "selected=selected";}?>>Jumat</option>
                                                 <option value="Sabtu" <?php if($tampildata['hari_lahir']=='Sabtu'){echo "selected=selected";}?>>Sabtu</option>
                                                 <option value="Minggu" <?php if($tampildata['hari_lahir']=='Minggu'){echo "selected=selected";}?>>Minggu</option>
                                                </select>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Jenis Lahir</label>
                                                <select name="jenis_lahir" class="form-control">
                                                    <option value="null"> pilih jenis lahir</option>
                                                    <option value="TUNGGAL" <?php if($tampildata['jenis_lahir']=='TUNGGAL'){echo "selected=selected";}?>>TUNGGAL</option>
                                                    <option value="KEMBAR" <?php if($tampildata['jenis_lahir']=='KEMBAR'){echo "selected=selected";}?>>KEMBAR</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                            <label>Agama</label>
                                                <select class="form-control" name="agamaanak">
                                                <option value="null">Pilih Agama</option>
                                                <option value="islam" <?php if($tampildata['agamaanak']=='islam'){echo "selected=selected";}?>>islam</option>
                                                <option value="protestan" <?php if($tampildata['agamaanak']=='protestan'){echo "selected=selected";}?>>protestan</option>
                                                <option value="kristen" <?php if($tampildata['agamaanak']=='kristen'){echo "selected=selected";}?>>kristen</option>
                                                <option value="katholik" <?php if($tampildata['agamaanak']=='katholik'){echo "selected=selected";}?>>katholik</option>
                                                <option value="budha" <?php if($tampildata['agamaanak']=='budha'){echo "selected=selected";}?>>budha</option>
                                                <option value="hindu" <?php if($tampildata['agamaanak']=='hindu'){echo "selected=selected";}?>>hindu</option>
                                                <option value="konghucu" <?php if($tampildata['agamaanak']=='konghucu'){echo "selected=selected";}?>>konghucu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                             <div class="form-group">
                                                <label>Anak Ke</label>
                                                <input type="text" name="anakke" class="form-control" value="<?php echo $tampildata['anakke']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tampildata['tempat_lahir']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea class="form-control" name="alamatanak" required="">
                                            <?php echo $tampildata['alamatanak']; ?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="edit" class="btn btn-success btn-lg"><span class="fa fa-save"></span> Simpan</button>
                                         <button type="reset" class="btn btn-warning btn-lg"><span class="fa fa-refresh"></span> Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>