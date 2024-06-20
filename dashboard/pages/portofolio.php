<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_portofolio";
  $query = mysqli_query($koneksi, $sql);

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
        <h1 class="mb-1 font-weight-normal">Portofolio</h1>
        <span class="text-secondary">Portofolio yang pernah anda bangun</span>
      </div>
      <div class="col-sm-6 d-none d-sm-block">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?halaman=dashboard">Dashboard Utama</a></li>
          <li class="breadcrumb-item active">Portofolio</li>
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
      <div class="col mb-4">
        <div class="card">
          <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
              <div class="opsi-tambah">
                <a href="index.php?halaman=tambah_porto" class="btn btn-warning text-white"><i class="fas fa-plus mr-2"></i>Tambah</a>
              </div>
              <div class="card-title">
                Data Portofolio
              </div>
            </div>            
          </div>
          <div class="card-body">
            <table class="table" id="tabel_porto">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center" style="width: 15%;">Judul Portfolio</th>
                    <th class="text-center">Thumbnail</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center" style="width: 45%;">Deskripsi</th>
                    <th class="text-center">Opsi</th>
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
                      <td><?= $porto['judul_portofolio']; ?></td>
                      <td class="text-center">
                        <img src="file_thumbnail/<?= $porto['thumbnail']; ?>" alt="thumbnail" class="gambar-porto img-thumbnail">
                      </td>
                      <td class="text-center"><?= $porto['tahun_pembuatan']; ?></td>
                      <td>
                        <div class="deskripsi-port"><?= $porto['deskripsi']; ?></div>
                      </td>
                      <td nowrap="nowrap">
                        <center>
                          <a href="index.php?halaman=edit_porto&edit=<?= $porto['id']; ?>" class="btn btn-warning text-white btn-sm"><i class="fas fa-edit"></i></a>

                          <button type="button" class="btn btn-warning text-white btn-sm" data-toggle="modal" 
                          data-target="#hapusPorto<?= $porto['id']; ?>"><i class="fas fa-trash"></i></button>
                        </center>

                        <!-- modal hapus -->
                        <div class="modal fade" tabindex="-1" id="hapusPorto<?= $porto['id']; ?>">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title font-weight-normal"><i class="fas fa-trash mr-2"></i> Hapus data portofolio</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Yakin ingin menghapus portofolio ini?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="config/delete_porto.php?id=<?= $porto['id']; ?>&thumb=<?= $porto['thumbnail']; ?>" class="btn btn-warning text-white">Hapus</a>
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
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->