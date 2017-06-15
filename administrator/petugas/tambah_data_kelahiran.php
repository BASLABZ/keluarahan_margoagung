
<?php 
if (isset($_POST['simpan']))
 {

    $sql_kelahiran = mysql_query("INSERT into kelahiran (nama,gender,tgl_lahir,hari_lahir,jenis_lahir,tempat_lahir,alamatanak,agamaanak,anakke,id_kk)
        values('$_POST[nama]','$_POST[gender]','$_POST[tgl_lahir]','$_POST[hari_lahir]','$_POST[jenis_lahir]','$_POST[tempat_lahir]','$_POST[alamatanak]','$_POST[agamaanak]','$_POST[anakke]','$_POST[id_kk]')");

    if ($sql_kelahiran) 
    {
        echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=data_kelahiran' </script>";exit();
    }
  
}
 ?>
<div class="page-heading">
    <h3>
      <span class="fa fa-users"></span>  Tambah Data Kelahiran
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Tambah</a>
        </li>
        <li class="active"> Data Kelahiran </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Kelahiran
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
                                       <select class="form-control select2" name="id_kk">
                                           <option value="null">Pilih Kartu Keluarga</option>
                                           <?php $nokk = mysql_query("SELECT * FROM detail_kartu_keluarga d
                                            inner join kartu_keluarga kk
                                            on d.id_kk = kk.id_kk
                                            inner join penduduk p 
                                            on d.no_kepala_keluarga = p.no_kepala_keluarga where p.status_keluarga = 'AYAH'
                                           ");
                                           while ($kolomkokartu = mysql_fetch_array($nokk)) {  
                                             ?>
                                             <option  value="<?php echo $kolomkokartu['id_kk']; ?>"><?php echo $kolomkokartu['no_kartu_keluarga']; ?><br>||<br>
                                                <?php echo $kolomkokartu['nama_lengkap']; ?></option>
                                             <?php } ?>
                                       </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="gender" class="form-control">
                                                    <option value="null"> pilih jenis kelamin</option>
                                                    <option value="LAKI-LAKI">Laki - Laki</option>
                                                    <option value="PEREMPUAN">PEREMPUAN</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                            <label>Hari Lahir</label>
                                            <select class="form-control" name="hari_lahir">
                                                <option value="">Pilih Hari</option>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Kamis">Kamis</option>
                                                <option value="Jumat">Jumat</option>
                                                <option value="Sabtu">Sabtu</option>
                                                <option value="Minggu">Minggu</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Jenis Lahir</label>
                                                <select name="jenis_lahir" class="form-control">
                                                    <option value="null"> pilih jenis lahir</option>
                                                    <option value="TUNGGAL">TUNGGAL</option>
                                                    <option value="KEMBAR">KEMBAR</option>
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
                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                             <div class="form-group">
                                                <label>Anak Ke</label>
                                                <input type="text" name="anakke" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamatanak" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-success btn-lg"><span class="fa fa-save"></span> Simpan</button>
                                         <button type="reset" class="btn btn-warning btn-lg"><span class="fa fa-refresh"></span> Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>