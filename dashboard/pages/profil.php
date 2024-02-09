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

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="mb-1 font-weight-normal">Profil</h1>
        <span class="text-secondary">Preview profil</span>
      </div>
      <div class="col-sm-6 d-none d-sm-block">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?halaman=dashboard">Dashboard Utama</a></li>
          <li class="breadcrumb-item active">Profil</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <?php if ($dataProfil == 0) { ?>

        <!-- Profile Image -->
        <div class="col-12 mb-3 col-lg-4 mb-lg-0">
          <div class="card h-100">
            <div class="card-header">
              <h4 class="card-title">Profil</h4>
            </div>
            <div class="card-body p-4 d-flex justify-content-center align-items-center">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle mb-4 img-thumbnail" 
                  src="profil_pict/admin_user.png"
                  alt="admin_user" style="border-radius: 100%; width: 160px; height: 160px; object-fit: cover;">
                <h6>Foto Profil</h6>
              </div>
            </div>
          </div>
        </div>

        <!-- data profile -->
        <div class="col-12 mb-5 col-lg-8 mb-lg-0">
          <div class="card h-100">
            <div class="card-header">
              <h4 class="card-title">Data Singkat</h4>
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
                <button type="button" class="btn btn-success col-12 col-lg-auto mb-2 mt-3 mb-lg-0 mt-lg-0" 
                data-toggle="modal" 
                data-target="#tambahProfil">
                <i class="fas fa-plus"></i> Tambah Profil</button>

                <button class="btn btn-success col-12 col-lg-auto" disabled="disabled"><i class="fas fa-undo mr-2"></i>Reset Profil</button>
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
              <h4 class="card-title">Profil</h4>
            </div>
            <div class="card-body p-4 d-flex justify-content-center align-items-center">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle mb-4 img-thumbnail" 
                  src="file_foto/<?= $profil['foto']; ?>"
                  alt="admin_user" style="border-radius: 100%; width: 160px; height: 160px; object-fit: cover;">
                <h6><?= $profil['nama_lengkap']; ?></h6>
              </div>
            </div>
          </div>
        </div>

        <!-- data profile -->
        <div class="col-12 mb-5 col-lg-8 mb-lg-0">
          <div class="card h-100">
            <div class="card-header">
              <h4 class="card-title">Data Singkat</h4>
            </div>
            <div class="card-body p-4">
              <div class="mb-3">
                <strong>Nama Lengkap</strong>
                <p><?= $profil['nama_lengkap']; ?></p>
              </div>
              <div class="mb-3">
                <strong>Status</strong>
                <p><?= $profil['status']; ?><p>
              </div>
              <div class="mb-4">
                <strong>Alamat</strong>
                <p><?= $profil['alamat']; ?><p>
              </div>
              <div>
                <button type="button" class="btn btn-success col-12 col-lg-auto mb-2 mt-3 mb-lg-0 mt-lg-0" 
                data-toggle="modal" 
                data-target="#suntingProfil"
                data-id="<?= $profil['id']; ?>"
                data-nama="<?= $profil['nama_lengkap']; ?>"
                data-status="<?= $profil['status']; ?>"
                data-alamat="<?= $profil['alamat']; ?>"
                data-foto="<?= $profil['foto']; ?>">
                <i class="fas fa-edit mr-2"></i>Sunting Profil</button>

                <button type="button" class="btn btn-success col-12 col-lg-auto" data-toggle="modal" 
                data-target="#resetProfil<?= $profil['id']; ?>"><i class="fas fa-undo mr-2"></i>Reset Profil</button>

                <!-- modal hapus -->
                <div class="modal fade" tabindex="-1" id="resetProfil<?= $profil['id']; ?>">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title font-weight-normal"><i class="fas fa-undo mr-2"></i>Reset data profil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p>Anda yakin ingin reset profil anda?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="config/reset_profil.php?foto=<?= $profil['foto']; ?>" class="btn btn-success">Hapus</a>
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
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- Modal tambah -->
<div class="modal fade" id="tambahProfil">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal"><i class="fas fa-plus mr-2"></i>Tambah profil anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="config/add_profil.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap anda" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="Status anda" required>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Alamat anda" name="alamat" required>
          </div>
          <div class="mb-2">
            <label for="foto" class="form-label">Upload Foto Profil</label><br>
            <input type="file" class="form-group" id="foto" name="foto" title="*Ukuran gambar max 2MB" required>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal sunting -->
<div class="modal fade" id="suntingProfil">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal"><i class="fas fa-edit mr-2"></i>Sunting profil anda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="config/edit_profil.php" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" class="form-control" id="id" name="id">
          <input type="hidden" class="form-control" id="foto_lama" name="foto_lama">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>
          <div class="mb-1">
            <label for="foto" class="form-label">Upload Foto Profil</label><br>
            <img class="profile-user-img img-fluid mb-3 img-thumbnail" src="" alt="admin_user" id="admin_user" 
            style="width: 80px; height: 80px; object-fit: cover;">
          </div>
          <div class="mb-1">
            <input type="file" class="form-group" id="foto" name="foto" title="*Ukuran gambar max 2MB">
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-success">Sunting</button>
        </div>
      </form>
    </div>
  </div>
</div>