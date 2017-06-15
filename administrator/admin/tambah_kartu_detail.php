<?php 
if (isset($_POST['simpan']))
 {

    $sql_penduduk = mysql_query("INSERT into penduduk (no_kepala_keluarga,nama_lengkap,gender,agama,tempatlahir,tgl_lahir,alamat,iddusun,kwarganegaraan,pendidikan,pekerjaan,status_perkawinan,status_keluarga,nama_ayah,nama_ibu,staStus)
        values('$_POST[no_kepala_keluarga]','$_POST[nama_lengkap]','$_POST[gender]','$_POST[agama]','$_POST[tempatlahir]','$_POST[tgl_lahir]','$_POST[alamat]','$_POST[iddusun]','$_POST[kwarganegaraan]','$_POST[pendidikan]','$_POST[pekerjaan]','$_POST[status_perkawinan]','$_POST[status_keluarga]','$_POST[nama_ayah]','$_POST[nama_ibu]','hidup')");
    $sqldetailkartu = mysql_query("INSERT INTO detail_kartu_keluarga (id_kk,no_kepala_keluarga) values ('$_POST[no_kartus]','$_POST[no_kepala_keluarga]')");

    if ($sql_penduduk) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=kartu' </script>";exit();
       
    }else{
         echo "<script> alert('data gagak masuk');
        location.href='index.php?pos=kartu' </script>";exit();
    }
}
 ?>
<div class="row">
                <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h4>Form Tambah Data Kartu</h4>
                    </header>
                    <div class="panel-body">
                        <div class="form">
                                 <div class="box-widget">
                        <div class="widget-head clearfix">
                            <div id="top_tabby" class="block-tabby pull-left">
                            </div>
                        </div>
                        <div class="widget-container">
                            <div class="widget-block">
                                <div class="widget-content box-padding">
                                    <form id="stepy_form" class=" form-horizontal left-align form-well" method="POST">
                                        <fieldset title="Step 1">
                                            <legend>Pilih No KTP & Identitas</legend>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">No KTP</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select name="no_kartus" class="form-control">
                                                       <?php $sqlkartu = mysql_query("SELECT * FROM kartu_keluarga order by id_kk DESC");
                                                                while ($kolom = mysql_fetch_array($sqlkartu)) {
                                                                    
                                                                 ?>
                                                           <option value="<?php echo $kolom[0]; ?>"><?php echo $kolom[1]; ?></option>
                                                           <?php } ?>
                                                       </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">
                                                    NIK
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="no_kepala_keluarga">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">
                                                    Nama Lengkap
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="nama_lengkap">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">
                                                    Agama
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select class="form-control select2" name="agama">
                                                        <option value="">Pilih Agama</option>
                                                        <option value="islam">Islam</option>
                                                        <option value="protestan">Protestan</option>
                                                        <option value="kristen">Kristen</option>
                                                        <option value="katholik">Katholik</option>
                                                        <option value="budha">Budha</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">
                                                    Tempat Lahir
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                      <input class="form-control" name="tempatlahir">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">
                                                    Tanggal Lahir
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                      <input class="form-control" name="tgl_lahir" type="date">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">
                                                    Jenis Kelamin
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                      <select class ="form-control"name="gender"> 
                                                        <option value="">pilih jenis kelamin</option>
                                                        <option value="LAKI-LAKI">Laki-Laki</option>
                                                        <option value="PEREMPUAN">Perempuan</option>
                                                        </select>
                                                </div>
                                            </div>
                                            
                                        </fieldset>
                                        <fieldset title="Step 2">
                                            <legend>Alamat & Kwarganegaraan</legend>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Alamat</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <textarea class ="form-control" name="alamat"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Dusun </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select class ="form-control select2" name="iddusun"> 
                                                    <option>pilih Dusun</option>
                                                    <?php $dusun=mysql_query("select * from dusun") ;
                                                    while ($dus=mysql_fetch_array($dusun)) {
                                                         # code...
                                                     ?>
                                                    <option value="<?php echo $dus[0]; ?>"><?php echo "$dus[1]"; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Kewarganegaraan </label>
                                                <div class="col-md-6 col-sm-6">
                                                   <select class ="form-control" name="kwarganegaraan"> 
                                                    <option value="">pilih Kewarganegaraan</option>
                                                    <option value="WNI">Warga Negara Indonesi</option>
                                                    <option value="WNA">Warga Negara Asing</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset title="Step 3">
                                            <legend>Pendidikan</legend>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Pendidikan</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <select class ="form-control select2" name="pendidikan"> 
                                                        <option value="">pilih Pendidikan</option>
                                                        <option value="SD">SD</option>
                                                        <option value="SLTP">SLTP</option>
                                                        <option value="SLTA">SLTA</option>
                                                        <option value="D3">D3</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Pekerjaan</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="pekerjaan">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Perkawinan</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <label class="radio">
                                                      <select class ="form-control" name="status_perkawinan"> 
                                                        <option value="">pilih Perkawinan</option>
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Sudah Kawin">Sudah Kawin</option>
                                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                                        <option value="Cerai Mati">Cerai Mati</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Status Keluarga</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input class="form-control" name="status_keluarga">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Nama Ayah</label>
                                                <div class="col-md-6 col-sm-6">
                                                     <input class="form-control" name="nama_ayah">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 col-sm-2 control-label">Nama Ibu</label>
                                                <div class="col-md-6 col-sm-6">
                                                       <input class="form-control" name="nama_ibu">
                                                </div>
                                            </div>
                                        </fieldset>
                                        <button type="submit" name="simpan" class="finish btn btn-success btn-lg btn-extend"><span class="fa fa-check"></span> Selesai!</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                    </div>
                </div>
        </section>
    </div>
</div>