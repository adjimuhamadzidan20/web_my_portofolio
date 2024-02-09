<?php
  require 'config/koneksi_db.php';

  $id = $_GET['edit'];

  $sql = "SELECT * FROM dt_portofolio WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);

?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Edit Portofolio</h1>
      </div>
      <div class="col-sm-6 d-none d-sm-block">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?halaman=portofolio">Portofolio</a></li>
          <li class="breadcrumb-item active">Edit Portofolio</li>
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
            <div class="card-title"><i class="fas fa-edit mr-2"></i>Edit Data Portofolio</div>
          </div>
          <form method="post" action="config/edit_porto.php" enctype="multipart/form-data">
            <div class="card-body">
              <input type="text" class="form-control" name="id" value="<?= $data['id']; ?>" hidden>
              <input type="text" class="form-control" name="thumb_lama" value="<?= $data['thumbnail']; ?>" hidden>
              <div class="mb-3">
                <label for="judul" class="form-label">Judul Portfolio</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul_portofolio']; ?>" required>
              </div>
              <div class="mb-1">
                <label for="thumbnail" class="form-label">Upload Thumbnail</label><br>
                <img class="img-fluid mb-3 img-thumbnail" src="file_thumbnail/<?= $data['thumbnail']; ?>" alt="admin_user" width="160" height="160" id="thumb">
              </div>
              <div class="mb-1">
                <input type="file" class="form-group" id="thumbnail" name="thumbnail" title="*Ukuran gambar max 2MB">
              </div>
              <div class="mb-3">
                <label for="tahun" class="form-label">Tahun Pembuatan</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $data['tahun_pembuatan']; ?>" required>
              </div>
              <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" required><?= $data['deskripsi']; ?></textarea>
              </div>
              <div class="d-flex justify-content-between">
                <a href="index.php?halaman=portofolio" class="btn btn-secondary">Kembali</a>
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
