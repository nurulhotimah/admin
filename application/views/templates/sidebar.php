<!-- Sidebar -->
<ul class="navbar-nav bg-gradient sidebar sidebar-dark accordion " id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon ">
            <img src="assets/img/pelnus/logo.ico" width="60px" alt="">
        </div>
        <div class="sidebar-brand-text text-dark ml-2">SMK PELNUS</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-dark">
        Administrator
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link text-black-50" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt text-black-50"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-dark">
        User
    </div>

    <!-- Nav Item -Profile -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-user text-black-50"></i>
            <span class="text-black-50">My Profile</span></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" href="<?= base_url('user/edit'); ?>">
            <i class="fas fa-fw fa-user-edit"></i>
            <span> Edit My Profile</span></a>
    </li> -->

    <hr class="sidebar-divider ">
    <!-- Heading -->
    <div class="sidebar-heading text-dark">
        Menu
    </div>
    <!-- menu management -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder text-black-50"></i>
            <span class="text-black-50">Kelola Menu</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-light py-2 collapse-inner rounded">

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
                <a class="collapse-item" href="<?= base_url('prestasi'); ?>">
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

                <div class="collapse-divider"></div>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt  text-black-50"></i>
            <span class=" text-black-50">Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->