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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="web_my_portofolio" />
  <meta name="author" content="adjimuhamadzidan" />
  <title>Dashboard || Portofolio</title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="favicon/favicon.ico" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <style type="text/css">
    .dataTables_paginate .paginate_button.page-item.active a {
      background-color: #343A40;
      border-color: #343A40;
    }

    .dataTables_paginate .paginate_button.page-item:not(.active) a {
      color: #343A40;
    }  
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light sticky-top">
    <?php require 'section/navbar.php'; ?>
  </nav>
  <!-- /.navbar -->

  <!-- modal logout -->
  <div class="modal fade" tabindex="-1" id="logout">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i class="fas fa-sign-out-alt"></i> Log out dashboard</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Yakin ingin keluar dari dashboard?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="logout.php" class="btn btn-success">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary">
    <?php require 'section/sidebar.php'; ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <?php require 'config/halaman.php' ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    Copyright &copy; My Portofolio - <?= date('Y'); ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard.js"></script>

<!-- DataTables  & Plugins -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>

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
  $('#tabel_tentang').DataTable({
    "paging": false,
    "lengthChange": false,
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
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });

  $('#suntingProfil').on('show.bs.modal', function(event) {
    let target = $(event.relatedTarget);

    let id = target.data('id');
    let nama = target.data('nama');
    let status = target.data('status');
    let alamat = target.data('alamat');
    let foto = target.data('foto');

    $(this).find('#id').val(id);
    $(this).find('#nama').val(nama);
    $(this).find('#status').val(status);
    $(this).find('#alamat').val(alamat);

    $(this).find('#foto_lama').val(foto);
    $(this).find('#admin_user').attr('src', 'file_foto/' + foto);

  });

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
