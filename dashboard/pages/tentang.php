<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_tentang";
  $query = mysqli_query($koneksi, $sql);
  
  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3">Data Tentang</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Data Tentang</li>
</ol>
<div class="row mb-3">
  <div class="col">
    <!-- Profile Image -->
    <div class="card">
      <div class="card-header">
        Review
      </div>
      <div class="card-body">

        <?php
          $jumlahData = mysqli_num_rows($query);
          if ($jumlahData == 0) {
        ?>
          <p>(Default) Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!</p>

          <p>(Default) Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Numquam quasi quia nisi dolor. Sequi accusamus praesentium architecto quibusdam cumque eaque inventore, dolores suscipit cum et quasi, molestiae aliquam fuga nostrum. when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        <?php  
          } else {
            foreach ($row as $desk) :
        ?> 
          <p><?= $desk['deskripsi']; ?></p>
        <?php 
            endforeach;
          }
        ?>

      </div>
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="row">
  <div class="col mb-4">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <span class="d-none d-md-block">Data tentang pribadi</span>
          <div class="opsi-tambah">
            <a href="index.php?halaman=tambah_tentang" class="btn btn-primary btn-sm text-white"><i class="fas fa-plus me-1"></i>Tambah</a>
          </div>
        </div>
      </div>
      <div class="card-body table-responsive">
        <table id="tabel_tentang" class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center lebar-kolom-tentang">Tentang</th>
                <th class="text-center text-nowrap">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 0;
                foreach ($row as $tentang) :
                $no++; 
              ?>
                <tr>
                  <td class="text-center"><?= $no; ?></td>
                  <td><?= $tentang['deskripsi']; ?></td>
                  <td nowrap="nowrap">
                    <center>
                      <a href="index.php?halaman=edit_tentang&edit=<?= $tentang['id']; ?>" class="btn btn-primary text-white btn-sm" title="Ubah data"><i class="fas fa-edit"></i></a>

                      <button type="button" class="btn btn-primary text-white btn-sm" data-bs-toggle="modal" 
                      data-bs-target="#hapusTentang<?= $tentang['id']; ?>" title="Hapus data">
                      <i class="fas fa-trash"></i></button>
                    </center>

                    <!-- modal hapus -->
                    <div class="modal fade" tabindex="-1" id="hapusTentang<?= $tentang['id']; ?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-normal"><i class="fas fa-trash me-2"></i>Hapus data tentang</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Yakin ingin menghapusnya?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="config/delete_process/delete_tentang.php?id=<?= $tentang['id']; ?>" class="btn btn-primary text-white">Hapus</a>
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