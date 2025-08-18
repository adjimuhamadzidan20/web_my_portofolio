<?php  
  session_start();

  if (!isset($_SESSION['login'])) {
    header('Location: ../login.php');
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="web_portofolio" />
    <meta name="author" content="adjimuhamadzidan" />
    <title>Portfolio || Dashboard</title>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <style type="text/css">
      .gambar-porto {
        width: 70px;
        height: 70px;
        object-fit: cover;
        background-size: cover;
      }

      .deskripsi-port {
        height: 50px;
        overflow: hidden;
        text-align: justify;
      }

      /*.dataTables_paginate .paginate_button.page-item.active a {
        background-color: black;
        border-color: black;
      }

      .dataTables_paginate .paginate_button.page-item:not(.active) a {
        color: black;
      }  */
    </style>

  </head>
  <body class="sb-nav-fixed">
      <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">MY PORTOFOLIO</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
          <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
              <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
          </div>
        </form>
          <!-- Navbar-->
          <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
          </ul>
      </nav>
      <div id="layoutSidenav">
          <div id="layoutSidenav_nav">
            <?php require 'section/sidebar.php'; ?>
          </div>
          
          <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                  <?php require 'config/halaman.php'; ?>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Web My Portofolio - <?= date('Y'); ?></div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
          </div>
      </div>

      <script src="assets/js/jquery-3.6.0.js"></script>
      <script src="assets/js/scripts.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script> -->
      <!-- <script src="assets/js/datatables-simple-demo.js"></script> -->
      
      <!-- SweetAlert2 -->
      <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>

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

      <script type="text/javascript">
        $(document).ready(function () {
          $('#tabel_tentang').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

          $('#tabel_kemampuan').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

          $('#tabel_basis').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

          $('#tabel_status').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

          $('#tabel_porto').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

          $('#tabel_sosial').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });

      </script>

      <script>
        $('#suntingProfil').on('show.bs.modal', function(event) {
          let target = $(event.relatedTarget);

          let id = target.data('id');
          let nama = target.data('nama');
          let alamat = target.data('alamat');
          let telp = target.data('telp');
          let email = target.data('email');
          let foto = target.data('foto');

          console.log(target.data(status));

          $(this).find('#id').val(id);
          $(this).find('#nama').val(nama);
          $(this).find('#telp').val(telp);
          $(this).find('#alamat').val(alamat);
          $(this).find('#email').val(email);

          $(this).find('#foto_lama').val(foto);
          $(this).find('#admin_user').attr('src', 'file_foto/' + foto);

        });
      </script>

      <script>
        $('#editSosial').on('show.bs.modal', function(event) {
          let target = $(event.relatedTarget);

          let id = target.data('id');
          let sosial = target.data('sosial');
          let link = target.data('link');

          $(this).find('#id').val(id);
          $(this).find('#sosial').val(sosial);
          $(this).find('#link').val(link);

        });
      </script>

      <script>
        $(function () {
          // Summernote
          $('#deskripsi').summernote()
        })

        $(function () {
          // Summernote
          $('#tentang').summernote()
        })
      </script>
  </body>
</html>