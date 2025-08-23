<?php  
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_profil";
  $query = mysqli_query($koneksi, $sql);
  $dataProfil = mysqli_num_rows($query);

  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3">Data Profil</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Data Profil</li>
</ol>
<div class="row">
  <?php if ($dataProfil == 0) { ?>

    <!-- Profile Image -->
    <div class="col-12 mb-3 col-lg-4 mb-lg-0">
      <div class="card h-100">
        <div class="card-header">
          Background Profil
        </div>
        <div class="card-body p-4 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle mb-4 img-thumbnail" 
              src="profil_pict/admin_user.png"
              alt="admin_user" style="border-radius: 100%; width: 180px; height: 180px; object-fit: cover;">
            <h6>Foto Profil</h6>
          </div>
        </div>
      </div>
    </div>

    <!-- data profile -->
    <div class="col-12 mb-5 col-lg-8 mb-lg-0">
      <div class="card h-100">
        <div class="card-header">
          Data Singkat
        </div>
        <div class="card-body p-4">
          <div class="mb-3">
            <strong>Nama Lengkap</strong>
            <p>Belum ada nama</p>
          </div>
          <div class="mb-3">
            <strong>Status</strong>
            <p>Belum ada status<p>
          </div>
          <div class="mb-4">
            <strong>Alamat</strong>
            <p>Belum ada alamat<p>
          </div>
          <div>
            <button type="buttonbs-" class="btn text-white btn-primary col-12 col-lg-auto mb-2 mt-3 mb-lg-0 mt-lg-0" 
            data-bs-toggle="modal" 
            data-bs-target="#tambahProfil">
            <i class="fas fa-plus me-1"></i>Tambah Profil</button>

            <button class="btn text-white btn-primary col-12 col-lg-auto" disabled="disabled"><i class="fas fa-undo me-1"></i>Reset Profil</button>
          </div>
        </div>
      </div>
    </div>

  <?php 
    } else { 
      foreach ($row as $profil) :
  ?>

    <!-- Profile Image -->
    <div class="col-12 mb-3 col-lg-4 mb-lg-0">
      <div class="card h-100">
        <div class="card-header">
          Background Profil
        </div>
        <div class="card-body p-4 d-flex justify-content-center align-items-center">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle mb-4 img-thumbnail" 
              src="file_foto/<?= $profil['foto']; ?>"
              alt="admin_user" style="border-radius: 100%; width: 180px; height: 180px; object-fit: cover;">
            <h6><?= $profil['nama_lengkap']; ?></h6>
          </div>
        </div>
      </div>
    </div>

    <!-- data profile -->
    <div class="col-12 mb-5 col-lg-8 mb-lg-0">
      <div class="card h-100">
        <div class="card-header">
          Data singkat
        </div>
        <div class="card-body p-4">
          <div class="mb-3">
            <strong>Nama Lengkap</strong>
            <p><?= $profil['nama_lengkap']; ?></p>
          </div>
          <div class="mb-3">
            <strong>Alamat</strong>
            <p><?= $profil['alamat']; ?><p>
          </div>
          <div class="mb-3">
            <strong>Telepon</strong>
            <p><?= $profil['no_telp']; ?><p>
          </div>
          <div class="mb-4">
            <strong>Email</strong>
            <p><?= $profil['email']; ?><p>
          </div>
          <div>
            <button type="button" class="btn btn-primary text-white col-12 col-lg-auto mb-2 mt-3 mb-lg-0 mt-lg-0" 
            data-bs-toggle="modal" 
            data-bs-target="#suntingProfil"
            data-id="<?= $profil['id']; ?>"
            data-nama="<?= $profil['nama_lengkap']; ?>"
            data-alamat="<?= $profil['alamat']; ?>"
            data-email="<?= $profil['email']; ?>"
            data-telp="<?= $profil['no_telp']; ?>"
            data-foto="<?= $profil['foto']; ?>">
            <i class="fas fa-edit me-1"></i>Sunting Profil</button>

            <button type="button" class="btn btn-primary text-white col-12 col-lg-auto" data-bs-toggle="modal" 
            data-bs-target="#resetProfil<?= $profil['id']; ?>"><i class="fas fa-undo me-1"></i>Reset Profil</button>

            <!-- modal hapus -->
            <div class="modal fade" tabindex="-1" id="resetProfil<?= $profil['id']; ?>">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title font-weight-normal"><i class="fas fa-undo me-2"></i>Reset data profil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Anda yakin ingin reset profil anda?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="config/reset_profil.php?foto=<?= $profil['foto']; ?>" class="btn btn-primary text-white">Hapus</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  <?php 
      endforeach; 
    }
  ?>
</div>

<!-- Modal tambah -->
<div class="modal fade" id="tambahProfil">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal"><i class="fas fa-plus me-2"></i>Tambah profil anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="config/add_process/add_profil.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap anda" required>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Alamat anda" name="alamat" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="telp" name="telp" placeholder="No telepon anda" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email anda" required>
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Upload Latar Profil</label><br>
            <input type="file" class="form-control" id="foto" name="foto" title="*Ukuran gambar max 2MB" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss=" modal">Kembali</button>
          <button type="submit" class="btn btn-primary text-white">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal sunting -->
<div class="modal fade" id="suntingProfil">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal"><i class="fas fa-edit me-2"></i>Sunting profil anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="config/edit_process/edit_profil.php" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" class="form-control" id="id" name="id">
          <input type="hidden" class="form-control" id="foto_lama" name="foto_lama">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="telp" name="telp" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-1">
            <label for="foto" class="form-label">Upload Latar Profil</label><br>
            <img class="profile-user-img img-fluid mb-3 img-thumbnail" src="" alt="admin_user" id="admin_user" 
            style="width: 85px; height: 85px; object-fit: cover;">
          </div>
          <div class="mb-3">
            <input type="file" class="form-control" id="foto" name="foto" title="*Ukuran gambar max 2MB">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary text-white">Sunting</button>
        </div>
      </form>
    </div>
  </div>
</div>