<?php
  require 'config/koneksi_db.php';

  $id = $_GET['edit'];

  $sql = "SELECT * FROM dt_tentang WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);

?>

<h2 class="mt-3">Edit Tentang</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Data Tentang</li>
  <li class="breadcrumb-item active">Edit Tentang</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-edit me-2"></i>Edit tentang anda
      </div>
      <form method="post" action="config/edit_process/edit_tentang.php">
        <div class="card-body">
          <input type="text" class="form-control" name="id" value="<?= $data['id']; ?>" hidden>
          <div class="mb-3">
            <label for="tentang" class="form-label">Tentang Deskripsi</label>
            <textarea class="form-control" id="tentang" name="tentang" rows="5" required><?= $data['deskripsi']; ?></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <a href="index.php?halaman=tentang" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary text-white">Edit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>