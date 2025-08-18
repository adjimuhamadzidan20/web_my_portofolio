<h2 class="mt-3">Tambah Tentang</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Data Tentang</li>
  <li class="breadcrumb-item active">Tambah Tentang</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-plus me-2"></i>Tambah tentang baru anda  
      </div>
      <div class="card-body">
        <form method="post" action="config/add_tentang.php">
          <div class="modal-body">
            <div class="mb-3">
              <label for="tentang" class="form-label">Tentang Deskripsi</label>
              <textarea class="form-control" id="tentang" placeholder="Masukan tentang diri anda" name="tentang" rows="5" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
              <a href="index.php?halaman=tentang" class="btn btn-secondary">Kembali</a>
              <button type="submit" class="btn btn-primary text-white">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>