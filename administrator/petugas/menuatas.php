<div class="header-section">
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="user.gif" alt="" />
                            <?php echo $_SESSION['nama_user']; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  Profil</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  Pengaturan</a></li>
                            <li><a href="index.php?logout=1"><i class="fa fa-sign-out"></i> Keluar</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>