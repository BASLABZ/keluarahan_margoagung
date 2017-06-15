
<div class="page-heading">
    <h3>
      <span class="fa fa-star"></span>  Tambah Data Berita
    </h3>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data</a>
        </li>
        <li class="active">  Berita </li>
    </ul>
</div>
<div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Tambah Data Berita
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form  class="form-horizontal" method="POST" enctype="multipart/form-data" action="?pos=proses_tambah_berita">
                                    <div class="form-group">
                                       <div class="col-md-12">
                                        <label>Judul</label>
                                        <input type="text" class="form-control" placeholder="Judul Berita" name="judul_berita">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Deskripsi Berita</label>
                                            <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Upload Gambar / Icon</label>
                                            <input type="file" name="gambar">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                       <div class="col-md-12">
                                            <button type="submit" class="btn btn-warning"><span class="fa fa-save"></span> Simpan</button>
                                            <button type="reset" class="btn btn-danger"><span class="fa fa-refresh"></span> Batal</button>
                                       </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            
        </div>