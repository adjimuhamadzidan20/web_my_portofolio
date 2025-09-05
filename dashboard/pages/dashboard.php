<?php  
  require 'config/koneksi_db.php';

  $sql1 = "SELECT * FROM dt_portofolio";
  $sql2 = "SELECT * FROM dt_sosialmedia";
  $sql3 = "SELECT * FROM dt_basisprojek";
  $sql4 = "SELECT * FROM dt_statusprofil";
  $sql5 = "SELECT * FROM dt_kemampuan";
  $sql6 = "SELECT * FROM dt_kontak";

  $query1 = mysqli_query($koneksi, $sql1);
  $query2 = mysqli_query($koneksi, $sql2);
  $query3 = mysqli_query($koneksi, $sql3);
  $query4 = mysqli_query($koneksi, $sql4);
  $query5 = mysqli_query($koneksi, $sql5);
  $query6 = mysqli_query($koneksi, $sql6);

  $dataPorto = mysqli_num_rows($query1);
  $dataSosial = mysqli_num_rows($query2);
  $dataKemampuan = mysqli_num_rows($query3);
  $dataStatus = mysqli_num_rows($query4);
  $dataBasis = mysqli_num_rows($query5);
  $dataPesan = mysqli_num_rows($query6);
?>

<h2 class="mt-3 text-uppercase">Selamat Datang!</h2>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
  <div class="col-xl-4 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Kemampuan | <?= $dataKemampuan; ?> Data</div>
      <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="index.php?halaman=kemampuan">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Basis Projek | <?= $dataBasis; ?> Data</div>
      <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="index.php?halaman=basis">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Status Profil | <?= $dataStatus; ?> Data</div>
      <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="index.php?halaman=status">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Portofolio | <?= $dataPorto; ?> Data</div>
      <div class="card-footer d-flex align-items-center justify-content-between">
        <a class="small text-white stretched-link" href="index.php?halaman=portofolio">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Sosial Media | <?= $dataSosial; ?> Data</div>
      <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="index.php?halaman=sosial_media">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-md-6">
    <div class="card bg-primary text-white mb-5">
      <div class="card-body">Kontak Pesan | <?= $dataPesan; ?> Data</div>
      <div class="card-footer d-flex align-items-center justify-content-between">
          <a class="small text-white stretched-link" href="index.php?halaman=kontak">View Details</a>
          <div class="small text-white"><i class="fas fa-angle-right"></i></div>
      </div>
    </div>
  </div>
</div>