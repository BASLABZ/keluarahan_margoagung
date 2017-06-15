<?php 
if (isset($_POST['simpan_no'])) {
    $sql_nokartu = mysql_query("INSERT INTO kartu_keluarga (no_kartu_keluarga) 
        values('$_POST[no_kartu_keluarga]')");
        if ($sql_nokartu) {
            echo "<script> alert('Terima Kasih Data Berhasil Di Simpan');
        location.href='index.php?pos=tambah_kartu_detail' </script>";exit();
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
