<?php 
if (isset($_POST['simpan_no'])) {
    $sql_nokartu = mysql_query("INSERT INTO kartu_keluarga (no_kartu_keluarga) 
        values('$_POST[no_kartu_keluarga]')");
        if ($sql_nokartu) {
            echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=kartu' </script>";exit();
        }
}
 ?>
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
<div class="col-sm-6">
     <section class="panel">
        <header class="panel-heading">
            Form Tambah data No Kartu Keluarga
            <span class="tools pull-right">
                <a class="fa fa-chevron-down" href="javascript:;"></a>
                <a class="fa fa-times" href="javascript:;"></a>
             </span>
        </header>
        <div class="panel-body">
            <div class="form">
                <form  class="form-horizontal" method="POST">
                    <div class="form-group">
                       <div class="col-md-12">
                         <label>No Kartu Keluarga</label>
                         <input type="number" class="form-control" name="no_kartu_keluarga">
                       </div>
                    </div>
                     <div class="form-group">
                       <div class="col-md-12">
                            <button type="submit" name="simpan_no" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
                            <button type="reset" class="btn btn-danger"><span class="fa fa-refresh"></span> Batal</button>
                       </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
 </div>
 <div class="col-sm-6">
     <section class="panel">
        <header class="panel-heading">
            Tambah Data Desa
            <span class="tools pull-right">
                <a class="fa fa-chevron-down" href="javascript:;"></a>
                <a class="fa fa-times" href="javascript:;"></a>
             </span>
        </header>
        <div class="panel-body">
            <div class="form">
                <form  class="form-horizontal" method="POST">
                    <div class="col-md-12">      
                    <div class="form-group">
                        <label>NO Kartu</label>
                       <select name="no_kartus" class="form-control">
                       <?php $sqlkartu = mysql_query("SELECT * FROM kartu_keluarga order by id_kk DESC");
                                while ($kolom = mysql_fetch_array($sqlkartu)) {
                                    
                                 ?>
                           <option value="<?php echo $kolom[0]; ?>"><?php echo $kolom[1]; ?></option>
                           <?php } ?>
                       </select>
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input class="form-control"name="no_kepala_keluarga">
                        
                    </div>
                    
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input class="form-control"name="nama_lengkap">
                        
                    </div>

                    <div class="form-group">
                        <label>Agama</label>
                        <select class="form-control select2" name="agama">
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
                        <label>Tempat Lahir</label>
                        <input class="form-control"name="tempatlahir">
                        
                    </div>

                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input class="form-control"name="tgl_lahir" type="date">
                        
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class ="form-control"name="alamat"></textarea>
                        
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class ="form-control"name="gender"> 
                        <option value="null">pilih jenis kelamin</option>
                        <option value="LAKI-LAKI">Laki-Laki</option>
                        <option value="PEREMPUAN">Perempuan</option>
                        </select>
                        
                    </div>
                    
                     

                     <div class="form-group">
                        <label>Dusun</label>
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
                    <div class="form-group">
                        <label>Kewarganegaraan</label>
                        <select class ="form-control" name="kwarganegaraan"> 
                        <option value="null">pilih Kewarganegaraan</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <select class ="form-control select2" name="pendidikan"> 
                        <option value="null">pilih Pendidikan</option>
                        <option value="SD">SD</option>
                        <option value="SLTP">SLTP</option>
                        <option value="SLTA">SLTA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input class="form-control"name="pekerjaan">
                        
                    </div>
                    <div class="form-group">
                        <label>Status Perkawinan</label>
                        <select class ="form-control" name="status_perkawinan"> 
                        <option value="null">pilih Perkawinan</option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Sudah Kawin">Sudah Kawin</option>
                        <option value="Cerai Hidup">Cerai Hidup</option>
                        <option value="Cerai Mati">Cerai Mati</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label>Status Keluarga</label>
                        <input class="form-control"name="status_keluarga">
                        
                        
                    </div>
                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input class="form-control"name="nama_ayah">
                        
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input class="form-control"name="nama_ibu">
                        
                    </div>
                     
                     
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