<?php
  require 'config/koneksi_db.php';

  $sql = "SELECT * FROM dt_sosialmedia";
  $query = mysqli_query($koneksi, $sql);

  $row = [];
  while ($data = mysqli_fetch_assoc($query)) {
    $row[] = $data;
  }

?>

<h2 class="mt-3">Sosial Media</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item">Dashboard</li>
  <li class="breadcrumb-item active">Data Sosial Media</li>
</ol>
<div class="row mb-3">
  <div class="col">
    <div class="card">
      <div class="card-header">
        Mencantumkan sosial media yang anda miliki
      </div>
      <div class="card-body">
        <div class="accordion" id="accordionExample">
          <!-- facebook -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fab fa-fw fa-facebook-f me-1"></i>Facebook
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form action="config/add_process/add_sosialmedia.php?akun=facebook" method="post">
                  <label for="facebook" class="form-label">Link Facebook</label>
                  <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                    <input type="text" class="form-control me-2 mb-2 mb-md-0" id="facebook" name="link" placeholder="Cantumkan link" required>
                    <button type="submit" class="btn btn-primary text-white">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- instagram -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fab fa-fw fa-instagram me-1"></i>Instagram
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form action="config/add_process/add_sosialmedia.php?akun=instagram" method="post">
                  <label for="instagram" class="form-label">Link Instagram</label>
                  <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                    <input type="text" class="form-control me-2 mb-2 mb-md-0" id="instagram" name="link" placeholder="Cantumkan link" required>
                    <button type="submit" class="btn btn-primary text-white">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- twitter -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fab fa-fw fa-twitter me-1"></i>Twitter
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form action="config/add_process/add_sosialmedia.php?akun=twitter" method="post">
                  <label for="twitter" class="form-label">Link Twitter</label>
                  <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                    <input type="text" class="form-control me-2 mb-2 mb-md-0" id="twitter" name="link" placeholder="Cantumkan link" required>
                    <button type="submit" class="btn btn-primary text-white">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- github -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                <i class="fab fa-fw fa-github me-1"></i>Github
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form action="config/add_process/add_sosialmedia.php?akun=github" method="post">
                  <label for="github" class="form-label">Link Github</label>
                  <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                    <input type="text" class="form-control me-2 mb-2 mb-md-0" id="github" name="link" placeholder="Cantumkan link" required>
                    <button type="submit" class="btn btn-primary text-white">Simpan</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- linkedin -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                <i class="fab fa-fw fa-linkedin me-1"></i>Linkedin
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form action="config/add_process/add_sosialmedia.php?akun=linkedin" method="post">
                  <label for="twitter" class="form-label">Link linkedin</label>
                  <div class="form-link d-block d-md-flex col-auto col-lg-6 col-md-8">
                    <input type="text" class="form-control me-2 mb-2 mb-md-0" id="twitter" name="link" placeholder="Cantumkan link" required>
                    <button type="submit" class="btn btn-primary text-white">Simpan</button>
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
        Data sosial media
      </div>
      <div class="card-body table-responsive">
        <table id="tabel_sosial" class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-nowrap">Sosial Media</th>
                <th class="text-nowrap">Link</th>
                <th class="text-center text-nowrap">Opsi</th>
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
                  <td class="text-nowrap"><?= ucwords($sosial['sosial_media']); ?></td>
                  <td class="text-nowrap"><?= $sosial['link']; ?></td>
                  <td nowrap="nowrap">
                    <center>
                      <button type="button" class="btn btn-primary text-white btn-sm" data-bs-toggle="modal" 
                      data-bs-target="#editSosial"
                      data-id="<?= $sosial['id']; ?>"
                      data-sosial="<?= $sosial['sosial_media']; ?>"
                      data-link="<?= $sosial['link']; ?>" title="Ubah data"
                      ><i class="fas fa-edit"></i></button>

                      <button type="button" class="btn btn-primary text-white btn-sm" data-bs-toggle="modal" 
                      data-bs-target="#hapusSosial<?= $sosial['id']; ?>" title="Hapus data">
                      <i class="fas fa-trash"></i></button>
                    </center>

                    <!-- modal hapus -->
                    <div class="modal fade" tabindex="-1" id="hapusSosial<?= $sosial['id']; ?>">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title font-weight-normal"><i class="fas fa-trash me-2"></i>Hapus data sosial media</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Yakin ingin menghapus link <?= $sosial['sosial_media']; ?>?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <a href="config/delete_process/delete_sosialmedia.php?id=<?= $sosial['id']; ?>" class="btn btn-primary text-white">Hapus</a>
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

<!-- Modal edit -->
<div class="modal fade" id="editSosial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel"><i class="fas fa-edit me-2"></i>Edit link sosial media</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            <button type="submit" class="btn btn-primary text-white">Edit</button>
          </div>
        </form>
    </div>
  </div>
</div>