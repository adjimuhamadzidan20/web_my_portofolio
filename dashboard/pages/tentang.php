<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_tentang";
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
        <h1 class="mb-1 font-weight-normal">Tentang</h1>
        <span class="text-secondary">Tentang diri anda</span>
      </div>
      <div class="col-sm-6 d-none d-sm-block">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?halaman=dashboard">Dashboard Utama</a></li>
          <li class="breadcrumb-item active">Tentang</li>
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
      <div class="col">
        <!-- Profile Image -->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Review</h4>
          </div>
          <div class="card-body">

            <?php
              $jumlahData = mysqli_num_rows($query);
              if ($jumlahData == 0) {
            ?>
              <p>(Default) Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!</p>

              <p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Numquam quasi quia nisi dolor. Sequi accusamus praesentium architecto quibusdam cumque eaque inventore, dolores suscipit cum et quasi, molestiae aliquam fuga nostrum.</p>
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
              <div class="opsi-tambah">
                <a href="index.php?halaman=tambah_tentang" class="btn btn-warning text-white"><i class="fas fa-plus mr-2"></i>Tambah</a>
              </div>
              <div class="card-title">
                Data Tentang
              </div>
            </div>
          </div>
          <div class="card-body">
            <table class="table" id="tabel_tentang">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th style="width: 80%;">Tentang Deskripsi</th>
                    <th class="text-center">Opsi</th>
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
                          <a href="index.php?halaman=edit_tentang&edit=<?= $tentang['id']; ?>" class="btn btn-warning text-white btn-sm"><i class="fas fa-edit"></i></a>

                          <button type="button" class="btn btn-warning text-white btn-sm" data-toggle="modal" 
                          data-target="#hapusTentang<?= $tentang['id']; ?>"><i class="fas fa-trash"></i></button>
                        </center>

                        <!-- modal hapus -->
                        <div class="modal fade" tabindex="-1" id="hapusTentang<?= $tentang['id']; ?>">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title font-weight-normal"><i class="fas fa-trash mr-2"></i>Hapus data tentang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Yakin ingin menghapusnya?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="config/delete_tentang.php?id=<?= $tentang['id']; ?>" class="btn btn-warning text-white">Hapus</a>
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