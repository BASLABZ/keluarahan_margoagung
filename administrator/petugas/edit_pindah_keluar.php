<?php 
    $id = $_GET['id_keluar'];
    $query_tampil = mysql_query("SELECT * from penduduk_keluar pi
                                inner join penduduk p 
                                on pi.id_penduduk = p.id_penduduk where p.stastus='keluar' AND pi.id_keluar = '".$id."'");
    $tampil_data = mysql_fetch_array($query_tampil);
    if (isset($_POST['edit'])) {
        $queryEdit = mysql_query("UPDATE penduduk_keluar SET id_penduduk = '".$_POST['id_penduduk']."',
                                                            tgl_keluar = '".$_POST['tgl_keluar']."',
                                                            alamat_asal = '".$_POST['alamat_asal']."',
                                                            alamat_dituju = '".$_POST['alamat_dituju']."',
                                                            alasan_keluar = '".$_POST['alasan_keluar']."',
                                                            keterangan_pindah = '".$_POST['keterangan_pindah']."'
                                                        WHERE id_keluar = '".$d."'");              
        if ($queryEdit) {
             echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
             location.href='index.php?pos=data_pindahpenduduk_keluar' </script>";exit();
        }
    }


 ?>
 
<div class="page-heading">
    <h3> <span class="fa fa-users"></span>  Ubah Data Perpindahan Keluar</h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Ubah</a>
        </li>
        <li class="active"> Data Perpindahan Keluar </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Data Perpindahan Keluar
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form  class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                     <div class="form-group">
                                    <label>Nama Penduduk</label>
                                    
                                         <select name="id_penduduk" class="form-control select2">
                                               
                                               <?php $id_penduduk = mysql_query("SELECT * from penduduk  ");
                                                      while ($kolom = mysql_fetch_array($id_penduduk)) {
                                                        ?>
                                                         <option value="<?php echo $kolom['id_penduduk']; ?>" <?php if($kolom['id_penduduk']==$tampil_data['id_penduduk']){echo "selected=selected";} ?>>
                                                        <?php echo $kolom['nama_lengkap']; ?></option>
                                                        <?php } ?>
                                        
                                                </select>
                                </div>


                                <div class="form-group">
                                        <label>Tanggal Keluar</label>
                                        <input type="date" name="tgl_keluar" class="form-control" value="<?php echo $tampil_data['tgl_keluar']; ?>">
                                    </div>
                                </div>
                                  <div class="col-lg-12">
                                    
                                     <div class="form-group">
                                        <label>Alamat Asal</label>
                                      <textarea class="form-control ckeditor" name="alamat_asal">
                                          <?php echo $tampil_data['alamat_asal']; ?>
                                      </textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Alamat Dituju</label>
                                      <textarea class="form-control ckeditor" name="alamat_dituju">
                                          <?php echo $tampil_data['alamat_dituju']; ?>
                                      </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Alasan keluar</label>
                                      <textarea class="form-control ckeditor" name="alasan_keluar">
                                      <?php echo $tampil_data['alasan_keluar']; ?>
                                      </textarea>
                                    </div>
                                     <div class="form-group">
                                        <label>Keterangan Pindah</label>
                                     <textarea name="keterangan_pindah" class="form-control ckeditor">
                                         <?php echo $tampil_data['keterangan_pindah']; ?>
                                     </textarea>                                    </div>
                                        <div class="form-group">
                                            <button type="submit" name="edit" class="btn btn-primary btn-lg"><span class="fa fa-pencil"></span> Simpan</button>
                                             <button type="reset" class="btn btn-warning btn-lg">
                                             <span class="fa fa-refresh"></span> Batal</button>
                                    
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>