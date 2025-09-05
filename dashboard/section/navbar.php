<!-- Navbar Brand-->
<a class="navbar-brand ps-3 text-center" href="index.php?halaman=dashboard">MY PORTOFOLIO</a>
<!-- Sidebar Toggle-->
<button class="btn btn-link btn-sm order-1 order-lg-0 me-3 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
<!-- Navbar-->
<div class="d-flex justify-content-end align-items-center w-100">
  <ul class="navbar-nav ms-md-0 me-0 me-lg-3">
    <li class="nav-item text-light d-none d-md-flex align-items-md-center"><?= $_SESSION['admin']; ?></li>
    <li class="nav-item dropdown">  
      <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="index.php?halaman=akun">Pengaturan Akun</a></li>
        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal" style="cursor: pointer;">Logout</a></li>
      </ul>
    </li>
  </ul>
</div>