<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT nama_basis FROM dt_basisprojek";
  $query = mysqli_query($koneksi, $sql);

  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3">Tambah Portofolio</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Data Portofolio</li>
  <li class="breadcrumb-item active">Tambah Portofolio</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-plus me-2"></i>Tambah data portofolio
      </div>
      <div class="card-body">
        <form method="post" action="config/add_process/add_porto.php" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="mb-3">
              <label for="judul" class="form-label">Judul Portfolio</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul portfolio anda" required>
            </div>
            <div class="mb-3">
              <label for="thumbnail" class="form-label">Upload Thumbnail</label><br>
              <input type="file" class="form-control" id="thumbnail" name="thumbnail" title="*Ukuran gambar max 2MB" placeholder="Upload thumbnail portfolio" required>
            </div>
            <div class="mb-3">
              <label for="tahun" class="form-label">Basis Projek</label>
              <select class="form-select" aria-label="Default select example" id="basis" name="basis" required>
                <option value="" selected>-- Pilih Basis Projek --</option>
                <?php  
                  foreach ($row as $basis) :
                ?>
                  <option value="<?= $basis['nama_basis']; ?>"><?= $basis['nama_basis']; ?></option>
                <?php  
                  endforeach;
                ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="tahun" class="form-label">Tahun Pembuatan</label>
              <input type="text=" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun pembuatan" required>
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="deskripsi" placeholder="Masukan deskripsi portfolio" name="deskripsi" rows="5" required></textarea>
            </div>
            <div class="d-flex justify-content-between">
              <a href="index.php?halaman=portofolio" class="btn btn-secondary">Kembali</a>
              <button type="submit" class="btn btn-primary text-white">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>