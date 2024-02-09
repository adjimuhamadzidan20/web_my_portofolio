<!-- Left navbar links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  </li>
  <li class="nav-item d-none d-sm-flex align-items-center">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel d-flex align-items-center">
        <div class="info">
            <span class="text-secondary"><i class="fas fa-user mr-2"></i><?= $_SESSION['admin']; ?> | Administrator</span>
        </div>
    </div>
  </li>
</ul>

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <a class="nav-link" role="button" data-toggle="modal" data-target="#logout">
      <i class="fas fa-sign-out-alt"></i> Logout
    </a>
  </li>
</ul>
