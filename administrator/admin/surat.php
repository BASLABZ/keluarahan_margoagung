
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Surat  
            <a href="index.php?pos=tambah_surat" class="btn btn-success"> <span class="fa fa-plus"></span> Tambah Data Surat</a>
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
            <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penduduk</th>
                        <th>Tanggal Surat</th>
                        <th>Jenis Surat</th>
                        <th>Keperluan</th>
                        <th>Aksi</th>
                        
                    </tr>
            </thead>
            <tbody>
                   <?php 
                    if (isset($_GET['hapus'])) 
                    {
                        $sql_hapus = mysql_query(("DELETE from surat where id_surat = '$_GET[hapus]'"));
                        if ($sql_hapus) 
                        {
                            echo "<script> alert('Terimakasih Data Berhasil Di Hapus')
                            location.href='index.php?pos=surat' </script>";exit;
                        }
                    }

                    $no = 1;
                    $sql = "SELECT s.id_surat,p.nama_lengkap,s.tgl_surat,s.jenis_surat,s.keperluan,s.isisurat FROM surat s INNER JOIN penduduk p ON s.id_penduduk = p.id_penduduk ";
                    $hasil = mysql_query($sql);
                    while ($data = mysql_fetch_row($hasil)) {                         
                     ?>
                        <tr class="odd gradeX">
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data[1]; ?></td>
                            <td><?php echo $data[2]; ?></td>
                            <td><?php echo $data[3]; ?></td>
                            <td width="50%"><?php echo $data[4]; ?></td>
                           
                            <td class="center">
                            <center>
                                <a href="index.php?pos=printsurat&id_surat=<?php echo $data[0]; ?>" target="_blank" class="btn btn-warning"><span class="fa fa-print"></span> Cetak</a><br><br>
                                <a href="index.php?pos=edit_surat&id_surat=<?php echo $data[0]; ?>" class="btn btn-primary"><span class="fa fa-pencil"></span> Edit Data</a><br><br>
                                <a href="index.php?pos=surat&hapus=<?php echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus Data</a>
                            </center>
                            </td>
                        </tr>
                        <?php 
                        $no++;} ?>
            </tbody>
        </table>
        </div>
        </div>
        </section>
        </div>