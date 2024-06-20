<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Tambah Portofolio</h1>
      </div>
      <div class="col-sm-6 d-none d-sm-block">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?halaman=portofolio">Portofolio</a></li>
          <li class="breadcrumb-item active">Tambah Portofolio</li>
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
            <div class="card-title"><i class="fas fa-plus mr-2"></i>Tambah Data Portofolio</div>
          </div>
          <form method="post" action="config/add_porto.php" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-3">
                <label for="judul" class="form-label">Judul Portfolio</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul portfolio anda" required>
              </div>
              <div class="mb-1">
                <label for="thumbnail" class="form-label">Upload Thumbnail</label><br>
                <input type="file" class="form-group" id="thumbnail" name="thumbnail" title="*Ukuran gambar max 2MB" placeholder="Upload thumbnail portfolio" required>
              </div>
              <div class="mb-3">
                <label for="tahun" class="form-label">Tahun Pembuatan</label>
                <input type="text=" class="form-control" id="tahun" name="tahun" placeholder="Tahun pembuatan" required>
              </div>
              <div class="mb-4">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" placeholder="Masukan deskripsi" name="deskripsi" required></textarea>
              </div>
              <div class="d-flex justify-content-between">
                <a href="index.php?halaman=portofolio" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-warning text-white">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->