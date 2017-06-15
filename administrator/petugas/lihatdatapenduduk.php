<?php 
      $idpenduduk = $_GET['id_penduduk'];
      $lihatdata = mysql_query("SELECT p.id_penduduk,p.no_kepala_keluarga,p.nama_lengkap,p.gender,p.agama,
                                    p.tempatlahir,p.tgl_lahir,p.alamat,p.kwarganegaraan,p.pendidikan, 
                                    p.pekerjaan,p.status_perkawinan,p.status_keluarga,p.nama_ayah,p.nama_ibu,
                                    dus.nama_dusun, des.nama_desa,kec.nama_kecamatan,kab.nama_kabupaten, 
                                    pro.nama_propinsi 
                                    FROM penduduk p 
                                    inner join dusun dus 
                                    on p.iddusun = dus.iddusun 
                                    cross join desa des 
                                    on dus.iddesa = des.iddesa 
                                    inner join kecamatan kec 
                                    on des.idkecamatan = kec.idkecamatan 
                                    inner join kabupaten kab 
                                    on kec.idkabupaten = kab.idkabupaten 
                                    inner join propinsi pro 
                                    on kab.idpropinsi = pro.idpropinsi where p.id_penduduk = '$idpenduduk' " );

      $kolom = mysql_fetch_array($lihatdata);
 ?>
          <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                      <span class="fa fa-user"></span>   Identitas Penduduk
                    </header>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group row">
                                <label for="inputEmail1" class="col-lg-3 control-label">No Kepala Keluarga</label>
                                <div class="col-lg-9">
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $kolom['no_kepala_keluarga']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail1" class="col-lg-3 control-label">Nama Lengkap</label>
                                <div class="col-lg-9">
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $kolom['nama_lengkap']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail1" class="col-lg-3 control-label">Jenis Kelamin</label>
                                <div class="col-lg-9">
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $kolom['gender']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail1" class="col-lg-3 control-label">Agama</label>
                                <div class="col-lg-9">
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $kolom['agama']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail1" class="col-lg-3 control-label">Tempat Lahir</label>
                                <div class="col-lg-9">
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $kolom['tempatlahir']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail1" class="col-lg-3 control-label">Tanggal Lahir</label>
                                <div class="col-lg-9">
                                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?php echo $kolom['tgl_lahir']; ?>" disabled>
                                </div>
                            </div>
                           
                            
                        </form>

                    </div>

                </section>
                <a href="" class="btn btn-success btn-lg pull-right btn-block"><span class="fa fa-print"></span> CETAK</a>
            </div>
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                     <span class="fa fa-map-marker"></span>   Alamat , Pendidikan & Status
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-3 control-label">Rt/Rw</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="inputEmail1" value="<?php echo $kolom['alamat']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-3 control-label">Dusun</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control" style="height: 100px;" disabled>
                                        <?php echo $kolom[15]; ?>,
                                        <?php echo $kolom[16]; ?>,<?php echo $kolom[17]; ?>,
                                        <?php echo $kolom[18]; ?>,<?php echo $kolom[19]; ?>
                                    </textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-3 control-label">Pendidikan</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="inputEmail1" value="<?php echo $kolom['pendidikan']; ?>" disabled>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="inputEmail1" class="col-lg-3 control-label">Pekerjaan</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="inputEmail1" value="<?php echo $kolom['pekerjaan']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-3 control-label">Status Perkawinan</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="inputEmail1" value="<?php echo $kolom['status_perkawinan']; ?>" disabled>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="inputEmail1" class="col-lg-3 control-label">Status Keluarga</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="inputEmail1" value="<?php echo $kolom['status_keluarga']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-3 control-label">Nama Ayah</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="inputEmail1" value="<?php echo $kolom['nama_ayah']; ?>" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-3 control-label">Nama Ibu</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="inputEmail1" value="<?php echo $kolom['nama_ibu']; ?>" disabled>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </div>
</section>