<?php  
    require 'config/koneksi_db.php';

    $sql1 = "SELECT * FROM dt_portofolio";
    $sql2 = "SELECT * FROM dt_sosialmedia";

    $query1 = mysqli_query($koneksi, $sql1);
    $query2 = mysqli_query($koneksi, $sql2);

    $dataPorto = mysqli_num_rows($query1);
    $dataSosial = mysqli_num_rows($query2);
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-1">
      <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal text-uppercase">Selamat Datang!</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">Dashboard Utama</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-6 col-12">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner text-white">
            <h3><?= $dataPorto; ?> Data</h3>
            <p>Portofolio</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="index.php?halaman=portofolio" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-md-6 col-12">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner text-white">
            <h3><?= $dataSosial; ?> Data</h3>
            <p>Sosial Media</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="index.php?halaman=sosial_media" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->