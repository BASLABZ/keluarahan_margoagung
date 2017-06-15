<?php 
    $idpindah = $_GET['id_pindah'];
    $tampildata = mysql_fetch_array(mysql_query("SELECT * FROM penduduk_pindah where id_pindah = '$idpindah'"));
    if (isset($_POST['edit'])) {
        $ubahdata = mysql_query("UPDATE penduduk_pindah set tgl_pindah = '$_POST[tgl_pindah]', alamat_asal= '$_POST[alamat_asal]', alamat_dituju='$_POST[alamat_dituju]', pengikut = '$_POST[pengikut]' ,id_penduduk='$_POST[id_penduduk]' where id_pindah = '$idpindah'");
        if ($ubahdata) {
              echo "<script> alert('Terima Kasih Data Berhasil Di Ubah');
        location.href='index.php?pos=data_pindahpenduduk_masuk' </script>";exit();
        }else{
                     echo "<script> alert('data gagal diubah');
        location.href='index.php?pos=data_pindahpenduduk_masuk' </script>";exit();
        }
    }
 ?>
<div class="page-heading">
    <h3>
      <span class="fa fa-users"></span>  Ubah Data Perpindahan Masuk
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Ubah</a>
        </li>
        <li class="active"> Data Perpindahan Masuk </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <header class="panel-heading">
                            Ubah Data Perpindahan Masuk
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
                                        <label>Nama Penduduk</label>
                                    <select class="form-control" name="id_penduduk">
                                    <?php $id_penduduk = mysql_query("select * from penduduk");
                                      while ($kolom = mysql_fetch_array($id_penduduk)) { ?>
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
                                        <button type="submit" name="edit" class="btn btn-primary btn-lg"><span class="fa fa-pencil"></span> Ubah</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>