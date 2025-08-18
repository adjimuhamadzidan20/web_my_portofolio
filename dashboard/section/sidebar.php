<?php  
    $pages = @$_GET['halaman'];

    if ($pages == 'dashboard') {
        $active1 = 'active';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = '';
        $active6 = '';
        $active7 = '';
        $active8 = '';
    } 
    else if ($pages == 'profil') {
        $active1 = '';
        $active2 = 'active';
        $active3 = '';
        $active4 = '';
        $active5 = '';
        $active6 = '';
        $active7 = '';
        $active8 = '';
    }
    else if ($pages == 'tentang') {
        $active1 = '';
        $active2 = '';
        $active3 = 'active';
        $active4 = '';
        $active5 = '';
        $active6 = '';
        $active7 = '';
        $active8 = '';
    }
    else if ($pages == 'kemampuan') {
        $active1 = '';
        $active2 = '';
        $active3 = '';
        $active4 = 'active';
        $active5 = '';
        $active6 = '';
        $active7 = '';
        $active8 = '';
    }
    else if ($pages == 'basis') {
        $active1 = '';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = 'active';
        $active6 = '';
        $active7 = '';
        $active8 = '';
    }
    else if ($pages == 'status') {
        $active1 = '';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = '';
        $active6 = 'active';
        $active7 = '';
        $active8 = '';
    }
    else if ($pages == 'portofolio') {
        $active1 = '';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = '';
        $active6 = '';
        $active7 = 'active';
        $active8 = '';
    }
    else if ($pages == 'sosial_media') {
        $active1 = '';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = '';
        $active6 = '';
        $active7 = '';
        $active8 = 'active';
    }
    else {
        $active1 = 'active';
        $active2 = '';
        $active3 = '';
        $active4 = '';
        $active5 = '';
        $active6 = '';
        $active7 = '';
        $active8 = '';
    }
?>

<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link <?= $active1; ?>" href="index.php?halaman=dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link <?= $active2; ?>" href="index.php?halaman=profil">
                <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                Profil
            </a>
            <a class="nav-link <?= $active3; ?>" href="index.php?halaman=tentang">
                <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                Tentang
            </a>
            <a class="nav-link <?= $active4; ?>" href="index.php?halaman=kemampuan">
                <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                Kemampuan
            </a>
            <a class="nav-link <?= $active5; ?>" href="index.php?halaman=basis">
                <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                Basis Projek
            </a>
            <a class="nav-link <?= $active6; ?>" href="index.php?halaman=status">
                <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                Status Profil
            </a>
            <a class="nav-link <?= $active7; ?>" href="index.php?halaman=portofolio">
                <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                Portofolio
            </a>
            <a class="nav-link <?= $active8; ?>" href="index.php?halaman=sosial_media">
                <div class="sb-nav-link-icon"><i class="far fa-circle"></i></div>
                Sosial Media
            </a>
        </div>
    </div>
</nav>