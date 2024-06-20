<?php  
  session_start(); 

  if (isset($_SESSION['login'])) {
    header('Location: dashboard/index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="web_my_portofolio" />
  <meta name="author" content="adjimuhamadzidan" />
  <title>Login || Portofolio</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="dashboard/favicon/favicon.ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dashboard/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="dashboard/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dashboard/assets/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="dashboard/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <style type="text/css">
    body {
      background-image: url("landing_page/assets/img/background_header_new.jpg");
      background-size: cover;
      background-position: center;
    }

    .btn-dark {
      background-color: black;
    }

    .btn-dark:hover {
      background-color: #343A40;
      border-color: #343A40;
    }
  </style>
  
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo mb-1">
    <a href="login.php" class="text-uppercase text-light">Login <b>Portofolio</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card py-2">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk Sebagai Admin</p>

      <form action="dashboard/config/proses_login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-4">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-dark btn-block">Masuk<i class="fas fa-sign-in-alt ml-2"></i></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="dashboard/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="dashboard/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dashboard/assets/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="dashboard/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<?php if (isset($_SESSION['status']) && isset($_SESSION['pesan'])) : ?>
  <script>
    $(function() {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000
      });
      
      Toast.fire({
        icon: '<?= $_SESSION['status']; ?>',
        title: '<?= $_SESSION['pesan']; ?>'
      })
    });
  </script>
<?php
  unset($_SESSION['status']);  
  unset($_SESSION['pesan']);  
  endif; 
?>

</body>
</html>
