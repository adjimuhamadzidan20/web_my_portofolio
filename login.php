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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="web_my_portofolio" />
    <meta name="author" content="adjimuhamadzidan" />
    <title>Login || Portofolio</title>
    <link href="dashboard/assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Toastr -->
    <link rel="stylesheet" href="dashboard/assets/plugins/toastr/toastr.min.css">

    <style type="text/css">
      .login-admin {
        margin-top: 80px;
      }

      .title-login {
        letter-spacing: 2px;
        font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
        color: #2c2c54;
      }

      .title-admin {
        color: #2c2c54;
        font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
      }

      .btn-primary {
        background-color: #40407a;
        border-color: #40407a;
      }

      .btn-primary:hover {
        background-color: #2c2c54;
        border-color: #2c2c54;
      }

      .btn-primary:active {
        background-color: #2c2c54 !important;
        border-color: #2c2c54 !important;
      }

      .form-control:focus {
        border-color: #40407a !important;
        box-shadow: 0 0 0 0.2rem rgba(64, 64, 122, 0.25) !important;
        outline: none;
      }
    </style>
  </head>
  <body>
    <div id="layoutAuthentication">
      <div id="layoutAuthentication_content">
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-4">
                <div class="login-admin card shadow border-0 rounded-lg">
                  <div class="card-header">
                    <h4 class="text-center font-weight-light my-3 title-login">MY PORTOFOLIO</h4>
                  </div>
                  <div class="card-body">
                    <h6 class="text-uppercase text-center mb-3 title-admin">Admin Login</h6>
                    <form action="dashboard/config/proses_login.php" method="post">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="inputUsername" required>
                        <label for="inputUsername">Username</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="inputPassword" name="password" required>
                        <label for="inputPassword">Password</label>
                      </div>
                      <div class="form-check mb-3 d-flex justify-content-between">
                        <div>
                          <input class="form-check-input" id="inputRememberPassword" type="checkbox" name="remember" />
                          <label class="form-check-label" for="inputRememberPassword">Remember Me</label>
                        </div>
                      </div>
                      <div class="mt-4 mb-0">
                        <button type="submit" class="btn btn-primary w-100">Masuk</button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center py-3"></div>
                </div>
              </div>
            </div>
          </div>
        </main>
      </div>
      <div id="layoutAuthentication_footer">
        <footer class="py-4 mt-auto">
          <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-center justify-content-md-between small">
              <div class="text-dark">My Portofolio | 2024 - <?= date('Y'); ?></div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="dashboard/assets/js/scripts.js"></script>
    <script src="dashboard/assets/js/jquery-3.6.0.js"></script>

    <!-- Toastr -->
    <script src="dashboard/assets/plugins/toastr/toastr.min.js"></script>

    <?php if (isset($_SESSION['status']) && isset($_SESSION['pesan'])) : ?>
      <script>
        toastr.<?= $_SESSION['status']; ?>('<?= $_SESSION['pesan']; ?>');
      </script>
    <?php
      unset($_SESSION['status']);  
      unset($_SESSION['pesan']);  
      endif; 
    ?>
  </body>
</html>