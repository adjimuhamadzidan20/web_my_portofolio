<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_sosialmedia";
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
        <h1 class="mb-1 font-weight-normal">Sosial Media</h1>
        <span class="text-secondary">Mencantumkan sosial media yang anda miliki</span>
      </div>
      <div class="col-sm-6 d-none d-sm-block">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?halaman=dashboard">Dashboard Utama</a></li>
          <li class="breadcrumb-item active">Sosial Media</li>
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
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">List Sosial Media</h4>
          </div>
          <div class="card-body">
            <div class="accordion" id="accordionExample">

              <!-- facebook -->
              <div class="border mb-2">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#facebook" aria-expanded="true" aria-controls="collapseOne">
                      <i class="fab fa-fw fa-facebook-f mr-1"></i>Facebook
                    </button>
                  </h2>
                </div>
                <div id="facebook" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <form action="config/add_sosialmedia.php?akun=facebook" method="post">
                      <label for="facebook" class="form-label">Link Facebook</label>
                      <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                        <input type="text" class="form-control mr-2 mb-2 mb-md-0" id="facebook" name="link" placeholder="Cantumkan link" required>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- instagram -->
              <div class="border mb-2">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#instagram" aria-expanded="false" aria-controls="collapseTwo">
                      <i class="fab fa-fw fa-instagram mr-1"></i>Instagram
                    </button>
                  </h2>
                </div>
                <div id="instagram" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <form action="config/add_sosialmedia.php?akun=instagram" method="post">
                      <label for="instagram" class="form-label">Link Instagram</label>
                      <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                        <input type="text" class="form-control mr-2 mb-2 mb-md-0" id="instagram" name="link" placeholder="Cantumkan link" required>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- twitter -->
              <div class="border mb-2">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#twitter" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fab fa-fw fa-twitter mr-1"></i>Twitter
                    </button>
                  </h2>
                </div>
                <div id="twitter" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <form action="config/add_sosialmedia.php?akun=twitter" method="post">
                      <label for="twitter" class="form-label">Link Twitter</label>
                      <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                        <input type="text" class="form-control mr-2 mb-2 mb-md-0" id="twitter" name="link" placeholder="Cantumkan link" required>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- linkedin -->
              <div class="border mb-2">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#linkedin" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fab fa-fw fa-linkedin mr-1"></i>Linkedin
                    </button>
                  </h2>
                </div>
                <div id="linkedin" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <form action="config/add_sosialmedia.php?akun=linkedin" method="post">
                      <label for="linkedin" class="form-label">Link Linkedin</label>
                      <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                        <input type="text" class="form-control mr-2 mb-2 mb-md-0" id="linkedin" name="link" placeholder="Cantumkan link" required>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <!-- github -->
              <div class="border mb-2">
                <div class="card-header" id="headingFive">
                  <h2 class="mb-0">
                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#github" aria-expanded="false" aria-controls="collapseThree">
                      <i class="fab fa-fw fa-github mr-1"></i>Github
                    </button>
                  </h2>
                </div>
                <div id="github" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <form action="config/add_sosialmedia.php?akun=github" method="post">
                      <label for="github" class="form-label">Link Github</label>
                      <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                        <input type="text" class="form-control mr-2 mb-2 mb-md-0" id="github" name="link" placeholder="Cantumkan link" required>
                        <button type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col mb-4">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data Sosial Media</h4>
          </div>
          <div class="card-body">
            <table class="table" id="tabel_sosial">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th>Sosial Media</th>
                    <th>Link</th>
                    <th class="text-center">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 0; 
                    foreach ($row as $sosial) :
                    $no++; 
                  ?>
                    <tr>
                      <td class="text-center"><?= $no; ?></td>
                      <td><?= ucwords($sosial['sosial_media']); ?></td>
                      <td><?= $sosial['link']; ?></td>
                      <td nowrap="nowrap">
                        <center>
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" 
                          data-target="#editSosial"
                          data-id="<?= $sosial['id']; ?>"
                          data-sosial="<?= $sosial['sosial_media']; ?>"
                          data-link="<?= $sosial['link']; ?>"
                          ><i class="fas fa-edit"></i></button>
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" 
                          data-target="#hapusSosial<?= $sosial['id']; ?>"><i class="fas fa-trash"></i></button>
                        </center>

                        <!-- modal hapus -->
                        <div class="modal fade" tabindex="-1" id="hapusSosial<?= $sosial['id']; ?>">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title font-weight-normal"><i class="fas fa-trash mr-2"></i>Hapus data sosial media</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>Yakin ingin menghapus link <?= $sosial['sosial_media']; ?>?</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <a href="config/delete_sosialmedia.php?id=<?= $sosial['id']; ?>" class="btn btn-success">Hapus</a>
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

<!-- Modal edit -->
<div class="modal fade" id="editSosial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel"><i class="fas fa-edit mr-2"></i>Edit link sosial media</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="config/edit_sosialmedia.php">
          <div class="modal-body">
            <input type="text" class="form-control" id="id" name="id" hidden>
            <div class="mb-3">
              <label for="sosial" class="form-label">Sosial Media</label>
              <input type="text" class="form-control" id="sosial" name="sosial" readonly>
            </div>
            <div class="mb-3">
              <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control" id="link" name="link" required>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-success">Edit</button>
          </div>
        </form>
    </div>
  </div>
</div>