<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Tambah Tentang</h1>
      </div>
      <div class="col-sm-6 d-none d-sm-block">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?halaman=tentang">Tentang</a></li>
          <li class="breadcrumb-item active">Tambah Tentang</li>
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
            <div class="card-title"><i class="fas fa-plus mr-2"></i>Tambah tentang anda</div>
          </div>
          <form method="post" action="config/add_tentang.php">
            <div class="modal-body">
              <div class="mb-4">
                <label for="tentang" class="form-label">Tentang Deskripsi</label>
                <textarea class="form-control" id="tentang" placeholder="Masukan tentang" name="tentang" required></textarea>
              </div>
              <div class="d-flex justify-content-between">
                <a href="index.php?halaman=tentang" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-success">Simpan</button>
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