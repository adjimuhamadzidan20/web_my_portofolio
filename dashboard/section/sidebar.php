<?php  
    $pages = @$_GET['halaman'];

    if ($pages == 'dashboard') {
        $active1 = 'active bg-light';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = '';
    } 
    else if ($pages == 'profil') {
        $active1 = '';
        $active2 = 'active bg-light';
        $active3 = '';
        $active4 = '';
        $active5 = '';
    }
    else if ($pages == 'tentang') {
        $active1 = '';
        $active2 = '';
        $active3 = 'active bg-light';
        $active4 = '';
        $active5 = '';
    }
    else if ($pages == 'portofolio') {
        $active1 = '';
        $active2 = '';
        $active3 = '';
        $active4 = 'active bg-light';
        $active5 = '';
    }
    else if ($pages == 'sosial_media') {
        $active1 = '';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = 'active bg-light';
    }
    else {
        $active1 = 'active bg-light';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = '';
    }
?>

<!-- Brand Logo -->
<a href="index.php" class="brand-link text-center">
    <span class="brand-text font-weight-bold" style="color: #FFC800;">MY PORTOFOLIO</span>
</a>

<!-- Sidebar -->
<div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-header text-uppercase">Core</li>
            <li class="nav-item">
                <a class="nav-link <?= $active1; ?>" href="index.php?halaman=dashboard">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header text-uppercase">Interface</li>
            <li class="nav-item">
                <a class="nav-link <?= $active2; ?>" href="index.php?halaman=profil">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Profil</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active3; ?>" href="index.php?halaman=tentang">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Tentang</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active4; ?>" href="index.php?halaman=portofolio">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Portofolio</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $active5; ?>" href="index.php?halaman=sosial_media">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Sosial Media</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->