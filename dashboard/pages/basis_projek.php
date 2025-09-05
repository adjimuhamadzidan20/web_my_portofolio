<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_basisprojek";
  $query = mysqli_query($koneksi, $sql);

  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3">Data Basis Projek</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Data Basis Projek</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <div class="opsi-tambah">
            <a href="index.php?halaman=tambah_basis" class="btn btn-primary btn-sm text-white"><i class="fas fa-plus me-1"></i>Tambah</a>
          </div>
          <span class="d-none d-md-block">Basis projek portofolio yang anda bangun</span>
        </div>            
      </div>
      <div class="card-body table-responsive">
        <table id="tabel_basis" class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class=" text-nowrap">Nama Basis</th>
                <th class="text-center text-nowrap">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 0; 
                foreach ($row as $basis) :
                $no++; 
              ?>  
                <tr>
                  <td class="text-center"><?= $no; ?></td>
                  <td class="text-nowrap"><?= $basis['nama_basis']; ?></td>
                  <td nowrap="nowrap">
                    <center>
                      <a href="index.php?halaman=edit_basis&edit=<?= $basis['id']; ?>" class="btn btn-primary btn-sm text-white btn-sm" title="Ubah data"><i class="fas fa-edit"></i></a>

                      <button type="button" class="btn btn-primary btn-sm text-white btn-sm" data-bs-toggle="modal" 
                      data-bs-target="#hapusBasis<?= $basis['id']; ?>" title="Hapus data"><i class="fas fa-trash"></i></button>
                    </center>

                    <!-- modal hapus -->
                    <div class="modal fade" tabindex="-1" id="hapusBasis<?= $basis['id']; ?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-normal"><i class="fas fa-trash me-2"></i>Hapus data basis projek</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Yakin ingin menghapus nama basis ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="config/delete_process/delete_basisprojek.php?id=<?= $basis['id']; ?>" class="btn btn-primary text-white">Hapus</a>
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