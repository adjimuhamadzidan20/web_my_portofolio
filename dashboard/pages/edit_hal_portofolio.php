<?php
  require 'config/koneksi_db.php';

  $id = $_GET['edit'];

  $sql = "SELECT * FROM dt_portofolio WHERE id = $id";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_assoc($query);

?>

<h2 class="mt-3">Edit Portofolio</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Data Portofolio</li>
  <li class="breadcrumb-item active">Edit Portofolio</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <i class="fas fa-edit me-2"></i>Edit Data Portofolio
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
            <img class="img-fluid mb-3 img-thumbnail" src="file_thumbnail/<?= $data['thumbnail']; ?>" alt="admin_user" width="170" height="170" id="thumb">
          </div>
          <div class="mb-3">
            <input type="file" class="form-control" id="thumbnail" name="thumbnail" title="*Ukuran gambar max 2MB">
          </div>
          <div class="mb-3">
            <label for="tahun" class="form-label">Basis Projek</label>
            <select class="form-select" aria-label="Default select example" id="basis" name="basis" required>
              <option value="<?= $data['judul_portofolio']; ?>" selected><?= $data['basis_projek']; ?></option>
              <?php
                $sqlBasis = "SELECT nama_basis FROM dt_basisprojek";
                $queryBasis = mysqli_query($koneksi, $sqlBasis);

                $rowBasis = [];
                while ($dataBasis = mysqli_fetch_assoc($queryBasis)) {
                  $rowBasis[] = $dataBasis;
                }

                foreach ($rowBasis as $basis) :
              ?>
                <option value="<?= $basis['nama_basis']; ?>"><?= $basis['nama_basis']; ?></option>
              <?php  
                endforeach;
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun Pembuatan</label>
            <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $data['tahun_pembuatan']; ?>" required>
          </div>
          <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" required><?= $data['deskripsi']; ?></textarea>
          </div>
          <div class="d-flex justify-content-between">
            <a href="index.php?halaman=portofolio" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary text-white">Edit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
