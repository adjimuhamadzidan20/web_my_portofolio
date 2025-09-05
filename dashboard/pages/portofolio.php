<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT dt_portofolio.id, dt_portofolio.judul_portofolio, dt_portofolio.thumbnail, 
  dt_portofolio.id_basis, dt_basisprojek.nama_basis, dt_portofolio.tahun_pembuatan,
  dt_portofolio.deskripsi, dt_portofolio.link_porto, dt_portofolio.id_admin, dt_portofolio.created_at 
  FROM dt_portofolio INNER JOIN dt_basisprojek ON dt_portofolio.id_basis = dt_basisprojek.id;";
  $query = mysqli_query($koneksi, $sql);

  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3">Data Portofolio</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Data Portofolio</li>
</ol>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <div class="opsi-tambah">
            <a href="index.php?halaman=tambah_porto" class="btn btn-primary btn-sm text-white"><i class="fas fa-plus me-1"></i>Tambah</a>
          </div>
          <span class="d-none d-md-block">Portofolio yang pernah anda bangun</span>
        </div>            
      </div>
      <div class="card-body table-responsive">
        <table id="tabel_porto" class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center text-nowrap">No</th>
                <th class="text-center text-nowrap">Nama Portofolio</th>
                <th class="text-center text-nowrap">Thumbnail</th>
                <th class="text-center text-nowrap">Basis</th>
                <th class="text-center text-nowrap">Tahun</th>
                <th class="text-center text-nowrap" style="width: 35%;">Deskripsi</th>
                <th class="text-center text-nowrap">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 0; 
                foreach ($row as $porto) :
                $no++; 
              ?>  
                <tr>
                  <td class="text-center"><?= $no; ?></td>
                  <td class=" text-nowrap"><?= $porto['judul_portofolio']; ?></td>
                  <td class="text-center">
                    <img src="file_thumbnail/<?= $porto['thumbnail']; ?>" alt="thumbnail" class="gambar-porto img-thumbnail">
                  </td>
                  <td class="text-center text-nowrap"><?= $porto['nama_basis']; ?></td>
                  <td class="text-center text-nowrap"><?= $porto['tahun_pembuatan']; ?></td>
                  <td>
                    <div class="deskripsi-port"><?= $porto['deskripsi']; ?></div>
                  </td>
                  <td nowrap="nowrap">
                    <center>
                      <button type="button" class="btn btn-primary btn-sm text-white btn-sm" data-bs-toggle="modal" 
                      data-bs-target="#detailPorto<?= $porto['id']; ?>"><i class="fas fa-eye"></i></button>

                      <a href="index.php?halaman=edit_porto&edit=<?= $porto['id']; ?>" class="btn btn-primary btn-sm text-white btn-sm"><i class="fas fa-edit"></i></a>

                      <button type="button" class="btn btn-primary btn-sm text-white btn-sm" data-bs-toggle="modal" 
                      data-bs-target="#hapusPorto<?= $porto['id']; ?>"><i class="fas fa-trash"></i></button>
                    </center>

                    <!-- modal hapus -->
                    <div class="modal fade" tabindex="-1" id="hapusPorto<?= $porto['id']; ?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-normal"><i class="fas fa-trash me-2"></i>Hapus data portofolio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Yakin ingin menghapus portofolio ini?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="config/delete_process/delete_porto.php?id=<?= $porto['id']; ?>&thumb=<?= $porto['thumbnail']; ?>" class="btn btn-primary text-white">Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- modal detail -->
                    <div class="modal fade" id="detailPorto<?= $porto['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-normal"><i class="fas fa-eye me-2"></i>Detail portofolio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img src="file_thumbnail/<?= $porto['thumbnail']; ?>" alt="thumbnail" class="img-thumbnail mb-2">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item fw-bold fs-5"><?= $porto['judul_portofolio']; ?></li>
                              <li class="list-group-item fw-bold">Berbasis <?= $porto['nama_basis']; ?></li>
                              <li class="list-group-item fw-bold">Tahun Pembuatan <?= $porto['tahun_pembuatan']; ?></li>
                              <li class="list-group-item deskripsi-port-detail" style="text-wrap: wrap;">
                                <p class="fw-bold">Deskripsi Portofolio :</p>
                                <?= $porto['deskripsi']; ?>
                              </li> 
                              <li class="list-group-item"><p class="fw-bold">Link Portofolio :</p>
                                <a href="<?= $porto['link_porto']; ?>" target="_blank"><?= $porto['link_porto']; ?></a></li>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
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