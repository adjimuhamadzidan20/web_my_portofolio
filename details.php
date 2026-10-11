<?php
  require 'dashboard/config/koneksi_db.php';

  if (isset($_GET['id_porto'])) {
    $idPorto = $_GET['id_porto'];

    $sqlPorto = "SELECT dt_portofolio.id, dt_portofolio.judul_portofolio, dt_portofolio.thumbnail, 
    dt_portofolio.id_basis, dt_basisprojek.nama_basis, dt_portofolio.tahun_pembuatan,
    dt_portofolio.deskripsi, dt_portofolio.link_porto, dt_portofolio.id_admin, dt_portofolio.created_at 
    FROM dt_portofolio INNER JOIN dt_basisprojek ON dt_portofolio.id_basis = dt_basisprojek.id 
    WHERE dt_portofolio.id = '$idPorto'";

    $queryPorto = mysqli_query($koneksi, $sqlPorto);
    $dataPorto = mysqli_num_rows($queryPorto);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php
    $sqlProfil = "SELECT nama_lengkap FROM dt_profil";
    $queryProfil = mysqli_query($koneksi, $sqlProfil);
    $profilName = mysqli_num_rows($queryProfil);

    if ($profilName == 0) {
  ?>
    <title>Portfolio Details || Anonymus</title>
  <?php
    } else {
      while ($dtProfil = mysqli_fetch_assoc($queryProfil)) :
  ?>
    <title>Portfolio Details || <?= $dtProfil['nama_lengkap']; ?></title>
  <?php
      endwhile;
    }
  ?>

  <meta content="portofolio" name="description">
  <meta content="portofolio" name="keywords">

  <!-- Favicons -->
  <link href="landing_page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="landing_page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="landing_page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="landing_page/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="landing_page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="landing_page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="landing_page/assets/css/main.css" rel="stylesheet">

  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }

    footer {
      margin-top: auto;
    }

    .link-porto {
      display: inline-block;      
      max-width: 100%;             
      white-space: normal;         
      word-break: break-word;     
      overflow-wrap: break-word; 
    }
  </style>
</head>

<body class="portfolio-details-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <!-- nama profil -->
    <a href="index.php" class="logo d-flex align-items-center justify-content-center mt-4">
      <?php
        $sqlProfil = "SELECT nama_lengkap FROM dt_profil";
        $queryProfil = mysqli_query($koneksi, $sqlProfil);
        $profilName = mysqli_num_rows($queryProfil);

        if ($profilName == 0) {
      ?>
        <h1 class="sitename">Anonymus</h1>
      <?php
        } else {
          while ($dtProfil = mysqli_fetch_assoc($queryProfil)) :
      ?>
        <h1 class="sitename"><?= $dtProfil['nama_lengkap']; ?></h1>
      <?php
          endwhile;
        }
      ?>
    </a>

    <!-- sosial media profil -->
    <div class="social-links text-center">
      <?php
        $sqlsosmed = "SELECT * FROM dt_sosialmedia";
        $sosmed = mysqli_query($koneksi, $sqlsosmed);

        $datasosmed = mysqli_num_rows($sosmed);
        if ($datasosmed == 0) {
      ?>
        <span>Sosial media belum tersedia..</span>
      <?php
        } else {
          while ($data = mysqli_fetch_assoc($sosmed)) :
      ?>
        <a href="<?= $data['link']; ?>" class="<?= $data['sosial_media']; ?>" target="_blank">
          <i class="bi bi-<?= $data['sosial_media']; ?>"></i>
        </a>
      <?php
          endwhile;
        }
      ?>
    </div>

    <!-- menu link sidebar -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php?#hero" class="active"><i class="bi bi-house navicon"></i>Beranda</a></li>
        <li><a href="index.php?#about"><i class="bi bi-person navicon"></i> Tentang</a></li>
        <li><a href="index.php?#skills"><i class="bi bi-stack navicon"></i> Kemampuan</a></li>
        <li><a href="index.php?#portfolio"><i class="bi bi-images navicon"></i> Portofolio</a></li>
        <li><a href="index.php?#contact"><i class="bi bi-envelope navicon"></i> Kontak</a></li>
      </ul>
    </nav>
  </header>

  <main class="main">
    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portofolio Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li class="current">Portofolio Details</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section px-lg-2">
      <!-- default portofolio (template) -->
      <?php  
        if (isset($dataPorto) == 0) {
      ?>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    }
                  }
                </script>

                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="dashboard/thumb_pict/thumb_porto.png" alt="thumbnail-porto" class="img-thumbnail rounded-0">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="portfolio-info p-3" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-uppercase">Informasi Projek</h3>
                <ul>
                  <li><strong>Basis Projek</strong>: Belum tersedia</li>
                  <li><strong>Tahun Projek</strong>: Belum tersedia</li>
                  <li><strong>Link Projek</strong>: Belum tersedia</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8">
              <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                <h2>Judul Portofolio</h2>
                <p>
                  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
              </div>
            </div>
          </div>  
        </div>
      <?php  
        } else {
          if (isset($queryPorto)) :
            while ($dtPorto = mysqli_fetch_assoc($queryPorto)) :
      ?>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4">
            <div class="col-lg-8">
              <div class="portfolio-details-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    }
                  }
                </script>

                <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                    <img src="dashboard/file_thumbnail/<?= $dtPorto['thumbnail']; ?>" alt="thumbnail-porto" class="img-thumbnail rounded-0">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="portfolio-info p-3" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-uppercase">Informasi Projek</h3>
                <ul>
                  <li><strong>Basis Projek</strong>: <?= $dtPorto['nama_basis']; ?></li>
                  <li><strong>Tahun Projek</strong>: <?= $dtPorto['tahun_pembuatan']; ?></li>
                  <li><strong>Link Projek</strong>: 
                    <a href="<?= $dtPorto['link_porto']; ?>" class="link-porto"><?= $dtPorto['link_porto']; ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        
          <div class="row">
            <div class="col-lg-8">
              <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                <h2 class="text-uppercase"><?= $dtPorto['judul_portofolio']; ?></h2>
                <?= $dtPorto['deskripsi']; ?>
              </div>
            </div>
          </div>  
        </div>
      <?php
            endwhile;
          endif;  
        }
      ?>

    </section>
    <!-- /Portfolio Details Section -->
  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <div class="copyright text-center">
        <strong class="px-1 sitename">Portofolio Web</strong>| 2024 - <?= date('Y'); ?>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="landing_page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="landing_page/assets/vendor/aos/aos.js"></script>
  <script src="landing_page/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="landing_page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="landing_page/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="landing_page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="landing_page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="landing_page/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="landing_page/assets/js/main.js"></script>

</body>

</html>