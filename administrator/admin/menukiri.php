 <div class="left-side sticky-left-side">
        <div class="logo">
            <a href="index.php"><img src="../assets_admin/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.php"><img src="../assets_admin/images/logo_icon.png" alt=""></a>
        </div>
        <div class="left-side-inner">
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="user.gif" class="media-object">
                    <div class="media-body">
                        <h4><a href="#"> <?php echo $_SESSION['nama_user']; ?></a></h4>
                        <span><?php echo $_SESSION['level']; ?></span>
                    </div>
                </div>
                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i>  Profil</a></li>
                <li><a href="#"><i class="fa fa-cog"></i>  Pengaturan</a></li>
                <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Keluar</a></li>
                </ul>
            </div>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li><a href="index.php?pos=daftaradmin"><i class="fa fa-users"></i> <span>Data Admin</span></a></li>
                <li><a href="index.php?pos=daftarprofil"><i class="fa fa-star"></i> <span>Data Profil</span></a></li>
                <li><a href="index.php?pos=daftargaleri"><i class="fa fa-picture-o"></i> <span>Data Galeri</span></a></li>
                <li><a href="index.php?pos=daftarberita"><i class="fa fa-hdd-o"></i> <span>Data Berita</span></a></li>
                <li><a href="index.php?pos=daftarkegiatan"><i class="fa fa-hdd-o"></i> <span>Data Kegiatan</span></a></li>

                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>Data Alamat</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="index.php?pos=propinsi"> Propinsi</a></li>
                        <li><a href="index.php?pos=kabupaten"> Kabupaten</a></li>
                        <li><a href="index.php?pos=kecamatan"> Kecamatan</a></li>
                        <li><a href="index.php?pos=desa"> Desa</a></li>
                        <li><a href="index.php?pos=dusun"> Dusun</a></li>

                    </ul>
                </li>
                <li><a href="index.php?pos=kartu"><i class="fa fa-hdd-o"></i> <span>Data Penduduk</span></a></li>
                <li><a href="index.php?pos=daftarkegiatan"><i class="fa fa-hdd-o"></i> <span>Data Kartu  Penduduk</span></a></li>
                <li><a href="index.php?pos=daftarkegiatan"><i class="fa fa-hdd-o"></i> <span>Data Kematian</span></a></li>
                <li><a href="index.php?pos=daftarkegiatan"><i class="fa fa-hdd-o"></i> <span>Data Kelahiran</span></a></li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>Data Perpindahan</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="general.php"> Perpindahan Masuk</a></li>
                        <li><a href="buttons.php"> Perpindahan Keluar</a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Laporan</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="grids.php"> Laporan Penduduk</a></li>
                        <li><a href="gallery.php"> Laporan Penduduk Masuk</a></li>
                        <li><a href="calendar.php"> Laporan Penduduk Keluar</a></li>
                        <li><a href="tree_view.php"> Laporan Kematian</a></li>
                        <li><a href="nestable.php">    Laporan Kelahiran</a></li>
                        <li><a href="nestable.php">     Laporan KK Penduduk</a></li>
                        <li><a href="nestable.php">       Pembuatan Surat</a></li>

                    </ul>
                </li>
                <li><a href="index.php?logout=1"><i class="fa fa-sign-in"></i> <span>Keluar</span></a></li>
            </ul>
        </div>
    </div>