<h2 class="mt-3">Tambah Kemampuan</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Tambah Data Kemampuan</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-plus me-2"></i>Tambah Data Kemampuan
      </div>
      <div class="card-body">
        <form method="post" action="config/add_process/add_kemampuan.php">
          <div class="modal-body">
            <div class="mb-3">
              <label for="kemampuan" class="form-label">Kemampuan</label>
              <input type="text" class="form-control" id="kemampuan" name="kemampuan" placeholder="Masukkan Kemampuan Anda" required>
            </div>
            <div class="mb-3">
              <label for="tingkatan" class="form-label">Tingkatan</label>
              <select class="form-select" aria-label="Default select example" id="tingkatan" name="tingkatan" required>
                <option value="" selected>-- Pilih Tingkat Kemampuan --</option>
                <option value="Pemula (Beginner)">Pemula (Beginner)</option>
                <option value="Menengah (Intermediate)">Menengah (Intermediate)</option>
                <option value="Lanjutan (Advance)">Lanjutan (Advance)</option>
                <option value="Mahir (Expert)">Mahir (Expert)</option>
                <option value="Professional (Professional)">Profesional (Professional)</option>
              </select>
            </div>
            <div class="d-flex justify-content-between">
              <a href="index.php?halaman=kemampuan" class="btn btn-secondary">Kembali</a>
              <button type="submit" class="btn btn-primary text-white">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>