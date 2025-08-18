<h2 class="mt-3">Tambah Status Profil</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Data Status Profil</li>
  <li class="breadcrumb-item active">Tambah Status Profil</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-plus me-2"></i>Tambah data status profil
      </div>
      <div class="card-body">
        <form method="post" action="config/add_statusprofil.php">
          <div class="modal-body">
            <div class="mb-3">
              <label for="status" class="form-label">Nama Status Profil</label>
              <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan Status Profil Anda" required>
            </div>
            <div class="d-flex justify-content-between">
              <a href="index.php?halaman=status" class="btn btn-secondary">Kembali</a>
              <button type="submit" class="btn btn-primary text-white">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>