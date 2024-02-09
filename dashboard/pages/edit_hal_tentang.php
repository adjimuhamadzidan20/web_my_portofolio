<?php
  require 'config/koneksi_db.php';

  $id = $_GET['edit'];

  $sql = "SELECT * FROM dt_tentang WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);

?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Edit Tentang</h1>
      </div>
      <div class="col-sm-6 d-none d-sm-block">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?halaman=tentang">Tentang</a></li>
          <li class="breadcrumb-item active">Edit Tentang</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col mb-4">
        <div class="card">
          <div class="card-header">
            <div class="card-title"><i class="fas fa-edit mr-2"></i>Edit Tentang</div>
          </div>
          <form method="post" action="config/edit_tentang.php">
            <div class="card-body">
              <input type="text" class="form-control" name="id" value="<?= $data['id']; ?>" hidden>
              <div class="mb-4">
                <label for="tentang" class="form-label">Tentang Deskripsi</label>
                <textarea class="form-control" id="tentang" name="tentang" required><?= $data['deskripsi']; ?></textarea>
              </div>
              <div class="d-flex justify-content-between">
                <a href="index.php?halaman=tentang" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Edit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->