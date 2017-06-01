<style type="text/css">
    hr{
        border-width: 3px;
        border-color: black;   
    }
</style>
<?php 
    $no_kartu_keluarga = $_GET['no_kartu_keluarga'];
       $sql_lihat_kartu = mysql_query("SELECT * from detail_kartu_keluarga d 
                                        inner join kartu_keluarga kk on d.id_kk = kk.id_kk
                                        inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga 
                                        inner join dusun dus on p.iddusun = dus.iddusun 
                                        inner join desa des on dus.iddesa = des.iddesa 
                                        inner join kecamatan kec on des.idkecamatan = kec.idkecamatan 
                                        inner join kabupaten kab on kec.idkabupaten = kab.idkabupaten 
                                        inner join propinsi pro on kab.idpropinsi = pro.idpropinsi 
                                        where no_kartu_keluarga = '$no_kartu_keluarga'");
       $tampilheader = mysql_fetch_array($sql_lihat_kartu);
       $sql_lihat_kartu2 = mysql_query("SELECT * from detail_kartu_keluarga d 
                                        inner join kartu_keluarga kk on d.id_kk = kk.id_kk
                                        inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga 
                                        inner join dusun dus on p.iddusun = dus.iddusun 
                                        inner join desa des on dus.iddesa = des.iddesa 
                                        inner join kecamatan kec on des.idkecamatan = kec.idkecamatan 
                                        inner join kabupaten kab on kec.idkabupaten = kab.idkabupaten 
                                        inner join propinsi pro on kab.idpropinsi = pro.idpropinsi 
                                        where no_kartu_keluarga = '$no_kartu_keluarga' 
        ");


 ?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Kartu Keluarga             
                    </h1>
                    
                 
                </div>
                <br>
                
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                         <img src="logokopkk/logogarudas.jpg" width="20" height="20">   Daftar Data Kartu Keluarga
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                        <p align="right">No.K.<?php echo $tampilheader['no_kartu_keluarga']; ?></p>
                        <p align="left">
                         <img src="logokopkk/logogarudas.jpg" width="100" height="100">
                         </p>
                        <h1 align="center">KARTU KELUARGA</h1>

                        <h4 align="center">No.<?php echo $tampilheader['no_kartu_keluarga']; ?></h4>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Nama Kepala Keluarga : </label>
                                <label><?php echo $tampilheader['nama_lengkap']; ?>
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Alamat : </label>
                                <label><?php echo $tampilheader['nama_dusun']; ?>,<br>
                                </label>
                                <label><?php echo $tampilheader['alamat']; ?></label>
                            </div>
                            <div class="form-group">
                                <b> Desa :
                                <?php echo $tampilheader['nama_desa']; ?></b>
                                <br>
                            </div>
                           

                        </div>
                        <div class="col-sm-6">

                            <div class="form-group">

                               <p align="right"><b> Kecamatan :
                                <?php echo $tampilheader['nama_kecamatan']; ?></b>
                                <br>
                              <b> Kabupaten :
                                <?php echo $tampilheader['nama_kabupaten']; ?></b>
                                <br>
                            <b>    Propinsi :
                               <?php echo $tampilheader['nama_propinsi']; ?></b>

                            </div>
                         
                        </div>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap Kepala Keluarga</th>
                                            <th>NIK</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Agama</th>
                                            <th>Pendidikan</th>
                                            <th>Jenis Pekerjaan</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                            $no = 1;
                            $sqllihatkartu = mysql_query("SELECT * from detail_kartu_keluarga d 
                                        inner join kartu_keluarga kk on d.id_kk = kk.id_kk
                                        inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga 
                                        inner join dusun dus on p.iddusun = dus.iddusun 
                                        inner join desa des on dus.iddesa = des.iddesa 
                                        inner join kecamatan kec on des.idkecamatan = kec.idkecamatan 
                                        inner join kabupaten kab on kec.idkabupaten = kab.idkabupaten 
                                        inner join propinsi pro on kab.idpropinsi = pro.idpropinsi 
                                        where no_kartu_keluarga = '$no_kartu_keluarga'");
                            while ($kolom = mysql_fetch_array($sqllihatkartu)) {
                            $namalengkap = $kolom['nama_lengkap'];
                           
                         ?>
                         <tr>
                             <td><?php echo $no; ?></td>
                             <td><?php echo $namalengkap; ?></td>
                             <td><?php echo $kolom['no_kepala_keluarga']; ?></td> 
                             <td><?php echo $kolom['gender']; ?></td>
                             <td><?php echo $kolom['tempatlahir']; ?></td>
                             <td><?php echo $kolom['tgl_lahir']; ?></td>
                             <td><?php echo $kolom['agama']; ?></td>
                             <td><?php echo $kolom['pendidikan']; ?></td>
                             <td><?php echo $kolom['pekerjaan']; ?></td>
                         </tr>
                         <?php  $no++;} ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Statu Perkawinan</th>
                                            <th rowspan="2">Status Hubungan Dalam Keluarga</th>
                                            <th rowspan="2">Kewarganegaraan</th>
                                            <th colspan="2"><center>Nama Orang Tua</center></th>
                                        </tr>
                                        <tr>
                                            <th> <center>Nama Ayah</center></th>
                                            <th><center>Nama Ibu</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                            $no2 = 1;
                            while ($kolom2 = mysql_fetch_array($sql_lihat_kartu2)) {
                                
                           
                         ?>
                         <tr>
                             <td><?php echo $no2; ?></td>
                             <td><?php echo $kolom2['status_perkawinan']; ?></td>
                             <td><?php echo $kolom2['status_keluarga']; ?></td> 
                             <td><?php echo $kolom2['kwarganegaraan']; ?></td>
                             <td><?php echo $kolom2['nama_ayah']; ?></td>
                             <td><?php echo $kolom2['nama_ibu']; ?></td>
                         </tr>
                         <?php  $no2++;} ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                           <div class="col-sm-4">
                               <div class="form-group">
                                   
                                   <table>
                                   <tr>
                                       <td>Dikeluarkan Tanggal</td> 
                                       <td width="20">:</td>
                                       <td><?php echo date('d-m-Y'); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Lembar</td>
                                        <td width="">:
                                       
                                        </td>
                                        <td>
                                         <p>
                                            I. Kepala Keluarga<br>
                                            II. Dukuh<br>
                                            III. Desa/Kelurahan<br>
                                            IV. Kecamatan
                                        </p>
                                        </td>

                                        
                                    </tr>
                                   </table>

                               </div>
                           </div>
                           <div class="col-sm-3">
                               <div class="form-group">
                                   <p align="center"><b>KAPALA KELUARGA</b></p>
                                   <br>
                                   <?php 
                                    $namakepalakk= mysql_query("SELECT * from detail_kartu_keluarga d inner join kartu_keluarga kk on d.id_kk = kk.id_kk inner join penduduk p on d.no_kepala_keluarga = p.no_kepala_keluarga inner join dusun dus on p.iddusun = dus.iddusun inner join desa des on dus.iddesa = des.iddesa inner join kecamatan kec on des.idkecamatan = kec.idkecamatan inner join kabupaten kab on kec.idkabupaten = kab.idkabupaten inner join propinsi pro on kab.idpropinsi = pro.idpropinsi where no_kartu_keluarga = '$no_kartu_keluarga' and status_keluarga='ayah' ");
                                    $namakepala = mysql_fetch_array($namakepalakk);
                                     ?>
                                   <p align="center"><b>
                                       <?php echo $namakepala['nama_lengkap']; ?><b>
                                       <hr>
                                     <center>  Tanda Tangan / Cap Jempol</center>
                                   </p>
                               </div>
                           </div>
                           <div class="col-sm-5">
                               <div class="form-group">
                                   <p align="center"><b>DINAS KEPENDUDUKAN DAN 
                                    PENCATATAN SIPIL </b></p>
                                    <BR>
                                
                                   
                                   <p align="center"><b>H.SUPARDI, SH</b>
                                       <hr>
                                     <center>NIP : 195708291986031003</center>
                                   </p>
                               </div>
                           </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>