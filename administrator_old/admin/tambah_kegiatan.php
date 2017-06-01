
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Data Kegiatan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <form class="role" method="POST" enctype="multipart/form-data" action="?pos=proses_tambah_kegiatan">
                    <div class="form-group">
                        <label>Judul Kegiatan</label>
                        <input type="text" name="judul_kegiatan" class="form-control" ></div>
                        <div class="form-group">
                        <label>Deskripsi Kegiatan</label>
                        <textarea type="text" name="deskripsi" class="form-control"></textarea></div>

                        <div class="form-group">
                            <input type="file" name="gambar">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-warning">Simpan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </div>


                    </div>
                </form>
                
                


                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>