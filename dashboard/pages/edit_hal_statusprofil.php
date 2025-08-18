<?php
  require 'config/koneksi_db.php';

  $id = $_GET['edit'];

  $sql = "SELECT * FROM dt_statusprofil WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);
?>

<h2 class="mt-3">Edit Status Profil</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Data Status Profil</li>
  <li class="breadcrumb-item active">Edit Status Profil</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-edit me-2"></i>Edit data status profil
      </div>
      <div class="card-body">
        <form method="post" action="config/edit_statusprofil.php">
          <input type="text" class="form-control" name="id" value="<?= $data['id']; ?>" hidden>
          <div class="modal-body">
            <div class="mb-3">
              <label for="status" class="form-label">Nama Status Profil</label>
              <input type="text" class="form-control" id="status" name="status" value="<?= $data['nama_status']; ?>" required>
            </div>
            <div class="d-flex justify-content-between">
              <a href="index.php?halaman=status" class="btn btn-secondary">Kembali</a>
              <button type="submit" class="btn btn-primary text-white">Edit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>