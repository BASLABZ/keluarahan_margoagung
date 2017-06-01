
<div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            <span class="fa fa-list"></span> Daftar Propinsi  
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
                <th>Nama Propinsi</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $no = 1;
            $sql = "SELECT * from propinsi ORDER BY idpropinsi DESC";
            $hasil = mysql_query($sql);
            while ($data = mysql_fetch_array($hasil)) {                            
         ?>
        
            <tr class="odd gradeX">
                <td><?php echo $no; ?></td>
                <td><?php echo $data['nama_propinsi']; ?></td>
                <td class="center">
                    <a href="index.php?pos=edit_propinsi&idpropinsi=<?php echo $data[0]; ?>" class="btn btn-success"><span class="fa fa-pencil"></span>  Edit</a>
                    <!-- <a href="index.php?pos=propinsi&hapus=<?php //echo $data[0]; ?>" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><span class="fa fa-times"></span> Hapus </a> -->
                </td>
            </tr>
            <?php 
            $no++;} ?>
            
            
        </tbody>
    </table>
        </table>
        </div>
        </div>
        </section>
        </div>