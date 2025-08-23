<?php  
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_admin";
  $query = mysqli_query($koneksi, $sql);

  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3 mb-4">Pengaturan Akun</h2>
<div class="row">
  <?php 
      foreach ($row as $admin) :
  ?>
    <!-- data profile -->
    <div class="col col-lg-7">
      <div class="card">
        <div class="card-header">
          Data Akun Portofolio
        </div>
        <div class="card-body p-4">
          <div class="mb-3">
            <strong>Nama Admin</strong>
            <p><?= $admin['nama_admin']; ?></p>
          </div>
          <div class="mb-3">
            <strong>Username</strong>
            <p><?= $admin['username']; ?><p>
          </div>
          <div class="mb-4">
            <strong>Password</strong>
            <p>Dirahasiakan untuk privasi<p>
          </div>
          <div>
            <button type="button" class="btn btn-primary text-white col-12 col-lg-auto mb-2 mt-3 mb-lg-0 mt-lg-0" 
            data-bs-toggle="modal" 
            data-bs-target="#suntingAkun"
            data-id="<?= $admin['id']; ?>"
            data-nama="<?= $admin['nama_admin']; ?>"
            data-user="<?= $admin['username']; ?>">
            <i class="fas fa-edit me-1"></i>Sunting Akun</button>

            <button type="button" class="btn btn-primary text-white col-12 col-lg-auto" data-bs-toggle="modal" 
            data-bs-target="#resetPass" data-id="<?= $admin['id']; ?>"><i class="fas fa-undo me-1"></i>Ganti Password</button>
          </div>
        </div>
      </div>
    </div>

  <?php 
    endforeach; 
  ?>
</div>

<!-- Modal sunting -->
<div class="modal fade" id="suntingAkun">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal"><i class="fas fa-edit me-2"></i>Sunting akun anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="config/edit_process/edit_akun.php">
        <div class="modal-body">
          <input type="hidden" class="form-control" id="id" name="id">
          <div class="mb-3">
            <label for="nama_admin" class="form-label">Nama Admin</label>
            <input type="text" class="form-control" id="nama_admin" name="nama_admin" required>
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
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

<!-- Modal ganti PW -->
<div class="modal fade" id="resetPass">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal"><i class="fas fa-edit me-2"></i>Ganti password anda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="config/edit_pass.php">
        <div class="modal-body">
          <input type="hidden" class="form-control" id="id" name="id">
          <div class="mb-3">
            <label for="pass_lama" class="form-label">Password Lama</label>
            <input type="password" class="form-control" id="pass_lama" name="pass_lama" placeholder="Masukkan Password Lama Anda" required>
          </div>
          <div class="mb-3">
            <label for="pass_baru" class="form-label">Password Baru</label>
            <input type="password" class="form-control" id="pass_baru" name="pass_baru" placeholder="Masukkan Password Baru Anda" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary text-white">Ganti Password</button>
        </div>
      </form>
    </div>
  </div>
</div>