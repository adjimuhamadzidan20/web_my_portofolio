<?php
  require 'config/koneksi_db.php';

  $id = $_GET['edit'];

  $sql = "SELECT * FROM dt_kemampuan WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);

?>

<h1 class="mt-3">Edit Kemampuan</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Edit Data Kemampuan</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-edit me-2"></i>Edit Data Kemampuan
      </div>
      <div class="card-body">
        <form method="post" action="config/edit_kemampuan.php">
          <div class="modal-body">
            <input type="text" class="form-control" name="id" value="<?= $data['id']; ?>" hidden>
            <div class="mb-3">
              <label for="kemampuan" class="form-label">Kemampuan</label>
              <input type="text" class="form-control" id="kemampuan" name="kemampuan" value="<?= $data['kemampuan']; ?>" required>
            </div>
            <div class="mb-3">
              <label for="tingkatan" class="form-label">Tingkatan</label>
              <select class="form-select" aria-label="Default select example" id="tingkatan" name="tingkatan" required>
                <option value="<?= $data['tingkatan']; ?>" selected><?= $data['tingkatan']; ?></option>
                <option value="Pemula (Beginner)">Pemula (Beginner)</option>
                <option value="Menengah (Intermediate)">Menengah (Intermediate)</option>
                <option value="Lanjutan (Advance)">Lanjutan (Advance)</option>
                <option value="Mahir (Expert)">Mahir (Expert)</option>
                <option value="Professional (Professional)">Profesional (Professional)</option>
              </select>
            </div>
            <div class="d-flex justify-content-between">
              <a href="index.php?halaman=kemampuan" class="btn btn-secondary">Kembali</a>
              <button type="submit" class="btn btn-primary text-white">Edit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>