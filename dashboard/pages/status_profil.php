<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_statusprofil";
  $query = mysqli_query($koneksi, $sql);

  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3">Data Status Profil</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Data Status Profil</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <div class="opsi-tambah">
            <a href="index.php?halaman=tambah_status" class="btn btn-primary btn-sm text-white"><i class="fas fa-plus me-1"></i>Tambah</a>
          </div>
          Status profil portofolio anda
        </div>            
      </div>
      <div class="card-body">
        <table id="tabel_status" class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th>Nama Status</th>
                <th class="text-center">Created</th>
                <th class="text-center">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 0; 
                foreach ($row as $status) :
                $no++; 
              ?>  
                <tr>
                  <td class="text-center"><?= $no; ?></td>
                  <td><?= $status['nama_status']; ?></td>
                  <td class="text-center"><?= $status['created_at']; ?></td>
                  <td nowrap="nowrap">
                    <center>
                      <a href="index.php?halaman=edit_status&edit=<?= $status['id']; ?>" class="btn btn-primary btn-sm text-white btn-sm"><i class="fas fa-edit"></i></a>

                      <button type="button" class="btn btn-primary btn-sm text-white btn-sm" data-bs-toggle="modal" 
                      data-bs-target="#hapusStatus<?= $status['id']; ?>"><i class="fas fa-trash"></i></button>
                    </center>

                    <!-- modal hapus -->
                    <div class="modal fade" tabindex="-1" id="hapusStatus<?= $status['id']; ?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-normal"><i class="fas fa-trash me-2"></i>Hapus data status profil</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Yakin ingin menghapus nama status ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="config/delete_statusprofil.php?id=<?= $status['id']; ?>" class="btn btn-primary text-white">Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>

                  </td>
                </tr>
              <?php endforeach; ?>  
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>