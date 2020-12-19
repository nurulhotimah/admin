<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SMK PELNUS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item -Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>My Profile</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span> Edit My Profile</span></a>
    </li>

    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>
    <!-- menu management -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Kelola Menu</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="<?= base_url('berita'); ?>">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Berita</span>
                </a>
                <a class="collapse-item" href="<?= base_url('galeri'); ?>">
                    <i class="far fa-fw fa-image"></i>
                    <span>Galeri</span>
                </a>
                <a class="collapse-item" href="<?= base_url('guru'); ?>">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Data Guru</span>
                </a>
                <a class="collapse-item" href="<?= base_url('galeri'); ?>">
                    <i class="fas fa-fw fa-trophy"></i>
                    <span>Prestasi</span>
                </a>
                <a class="collapse-item" href="<?= base_url('ekstrakulikuler'); ?>">
                    <i class="fas fa-fw fa-snowboarding"></i>
                    <span>Ekstrakulikuler</span>
                </a>
                <a class="collapse-item" href="<?= base_url('alumni'); ?>">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Alumni</span>
                </a>
                <a class="collapse-item" href="<?= base_url('carousel'); ?>">
                    <i class="fab fa-fw fa-slideshare"></i>
                    <span>Carousel</span>
                </a>
                <a class="collapse-item" href="<?= base_url('profile'); ?>">
                    <i class="fas fa-fw fa-school"></i>
                    <span>Profile</span>
                </a>


                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->