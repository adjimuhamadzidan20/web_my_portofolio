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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- Toastr -->
    <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">

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
      }

      .lebar-kolom-tentang {
        width: 80%;
      }

      @media screen and (max-width: 480px) {
        .lebar-kolom-tentang {
          width: 800px;
          text-wrap: nowrap;
        }
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
        <?php require 'section/navbar.php'; ?>
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
                  <div class="d-flex align-items-center justify-content-center justify-content-md-between small">
                      <div class="text-muted">My Portofolio | 2024 - <?= date('Y'); ?></div>
                  </div>
              </div>
          </footer>
        </div>
      </div>

      <!-- Modal logout -->
      <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fas fa-sign-out fa-fw me-2"></i>Logout dashboard</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Anda yakin ingin meninggalkan dashboard?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <a href="logout.php" class="btn btn-primary">Logout</a>
            </div>
          </div>
        </div>
      </div>

      <script src="assets/js/jquery-3.6.0.js"></script>
      <script src="assets/js/scripts.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

      <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script> -->
      <!-- <script src="assets/js/datatables-simple-demo.js"></script> -->
      
      <!-- Toastr -->
      <script src="assets/plugins/toastr/toastr.min.js"></script>

      <?php if (isset($_SESSION['status']) && isset($_SESSION['pesan'])) : ?>
        <script>
          toastr.<?= $_SESSION['status']; ?>('<?= $_SESSION['pesan']; ?>');
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

          $('#tabel_kontak').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
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
        $('#suntingAkun').on('show.bs.modal', function(event) {
          let target = $(event.relatedTarget);

          let id = target.data('id');
          let nama = target.data('nama');
          let user = target.data('user');

          $(this).find('#id').val(id);
          $(this).find('#nama_admin').val(nama);
          $(this).find('#username').val(user);

        });
      </script>

      <script>
        $('#resetPass').on('show.bs.modal', function(event) {
          let target = $(event.relatedTarget);
          let id = target.data('id');
          $(this).find('#id').val(id);
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
          $('#deskripsi').summernote({
            placeholder: "Masukan deskripsi portfolio",
            height: 150,
            toolbar: [
              ['view', ['undo', 'redo']],
              ['font', ['bold', 'underline', 'italic', 'clear']],
              ['font', ['strikethrough', 'superscript']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['insert', ['link']],
            ]
          })
        })

        $(function () {
          // Summernote
          $('#tentang').summernote({
            placeholder: "Masukan tentang diri anda",
            height: 150,
            toolbar: [
              ['view', ['undo', 'redo']],
              ['font', ['bold', 'underline', 'italic', 'clear']],
              ['font', ['strikethrough', 'superscript']],
              ['para', ['ul', 'ol', 'paragraph']],
              ['insert', ['link']],
            ]
          })
        })
      </script>
  </body>
</html>