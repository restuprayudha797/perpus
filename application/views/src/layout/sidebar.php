<div class="side_bar scroll_auto">
    <div class="user-panel">
        <div class="user_image">
            <img src="<?= base_url('assets') ?>/images/about-1.jpg" class="box_all_shedo img-circle mCS_img_loaded" alt="User Image">
        </div>
        <div class="info">
            <p>
                Peter Siddle
            </p>
        </div>
    </div>
    <ul id="dc_accordion" class="sidebar-menu tree">
        <li class="menu_sub">
            <a href="<?= base_url('dashboard') ?>"> <i class="fa fa-home"></i> <span>Dashboard</span></a>
           
        </li>
        <li class="menu_sub">
            <a href="#"> <i class="fa fa-list-ul"></i> <span>Master Data </span> <span class="arrow"></span> </a>
            <ul class="down_menu">
                <li>
                    <a href="<?= base_url('jurusan') ?>">Data Jurusan</a>
                </li>
                <li>
                    <a href="<?= base_url('kelas') ?>">Data Kelas</a>
                </li>
                <li>
                    <a href="widgets-base.html">Data Siswa</a>
                </li>
                <li>
                    <a href="widgets-chart.html">Data Petugas</a>
                </li>
                <li>
                    <a href="widgets-base.html">Data Buku</a>
                </li>
                <li>
                    <a href="widgets-chart.html">Data Tipe Buku</a>
                </li>
            </ul>
        </li>
        <li class="menu_sub">
            <a href="#"> <i class="fa fa-shopping-cart"></i> <span>Daftar Peminjaman</span> <span class="arrow"></span> </a>
            <ul class="down_menu">
                <li>
                    <a href="portlet-base.html">Daftar</a>
                </li>
            </ul>
        </li>
        <li class="menu_sub">
            <a href="#"> <i class="fa fa-gear"></i> <span>Pengaturan</span> <span class="arrow"></span> </a>
            <ul class="down_menu">
                <li>
                    <a href="profile.html">Logo</a>
                </li>
            </ul>
        </li>
    </ul>
</div>