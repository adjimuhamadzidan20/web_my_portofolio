<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_kontak";
  $query = mysqli_query($koneksi, $sql);
  $jumlah = mysqli_num_rows($query);

  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3">Data Kontak Masuk</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Data Kontak Masuk</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <span class="d-none d-md-block">Riwayat kontak masuk yang telah diterima</span>
          <span class="badge text-bg-success"><?= $jumlah; ?> pesan masuk</span>
        </div>            
      </div>
      <div class="card-body table-responsive">
        <table id="tabel_kontak" class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-nowrap">Nama Lengkap</th>
                <th class="text-nowrap">Email</th>
                <th class="text-nowrap">No. Telp</th>
                <th class="text-nowrap">Pesan</th>
                <th class="text-nowrap text-center">Waktu</th>
                <th class="text-center text-nowrap">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 0; 
                foreach ($row as $kontak) :
                $no++; 
              ?>  
                <tr>
                  <td class="text-center"><?= $no; ?></td>
                  <td class="text-nowrap"><?= $kontak['nama_lengkap']; ?></td>
                  <td class="text-nowrap"><?= $kontak['email']; ?></td>
                  <td class="text-nowrap"><?= $kontak['no_telp']; ?></td>
                  <td class="text-nowrap"><?= $kontak['pesan']; ?></td>
                  <td class="text-nowrap text-center"><?= $kontak['created_at']; ?></td>
                  <td nowrap="nowrap">
                    <center>
                      <button type="button" class="btn btn-primary btn-sm text-white btn-sm" data-bs-toggle="modal" 
                      data-bs-target="#hapusKontak<?= $kontak['id']; ?>" title="Hapus data"><i class="fas fa-trash"></i></button>
                    </center>

                    <!-- modal hapus -->
                    <div class="modal fade" tabindex="-1" id="hapusKontak<?= $kontak['id']; ?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-normal"><i class="fas fa-trash me-2"></i>Hapus pesan masuk</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Yakin ingin menghapus riwayat pesan masuk ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="config/delete_process/delete_kontak.php?id=<?= $kontak['id']; ?>" class="btn btn-primary text-white">Hapus</a>
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