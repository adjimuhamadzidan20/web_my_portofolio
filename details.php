<?php
  require 'dashboard/config/koneksi_db.php';

  $idPorto = $_GET['id_porto'];

  $sqlPorto = "SELECT dt_portofolio.id, dt_portofolio.judul_portofolio, dt_portofolio.thumbnail, 
  dt_portofolio.id_basis, dt_basisprojek.nama_basis, dt_portofolio.tahun_pembuatan,
  dt_portofolio.deskripsi, dt_portofolio.link_porto, dt_portofolio.id_admin, dt_portofolio.created_at 
  FROM dt_portofolio INNER JOIN dt_basisprojek ON dt_portofolio.id_basis = dt_basisprojek.id WHERE dt_portofolio.id = '$idPorto'";

  $queryPorto = mysqli_query($koneksi, $sqlPorto);
  $dataPorto = mysqli_num_rows($queryPorto);

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

  <meta name="description" content="web_portofolio" />
  <meta name="author" content="adjimuhamadzidan" />

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
    .btn-primary, .bg-primary {
      background-color: #40407a !important;
      border-color: #40407a !important;
    }

    .btn-primary:hover {
      background-color: #2c2c54;
      border-color: #2c2c54;
    }

    .btn-primary:active {
      background-color: #2c2c54 !important;
      border-color: #2c2c54 !important;
    }
  </style>

</head>

<body class="portfolio-details-page">
  <header id="header" class="header d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.php#hero"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
        <li><a href="index.php#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
        <li><a href="index.php#skills"><i class="bi bi-stack navicon"></i><span>Skills</span></a></li>
        <li><a href="index.php#portfolio"><i class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
        <li><a href="index.php#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
      </ul>
    </nav>
  </header>

  <main class="main">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li class="current">Portofolio Details</li>
          </ol>
        </nav>
        <h1 class="text-uppercase mt-2">Portofolio Details</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
      <?php  
        if ($dataPorto == 0) {
      ?>
        <div class="container" data-aos="fade-up">
          <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img src="dashboard/thumb_pict/thumb_porto.png" alt="thumbnail">
              </div>
            </div>
          </div>

          <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8" data-aos="fade-up">
              <div class="portfolio-description">
                <h2 class="text-uppercase">This is an example of portfolio details</h2>
                <h6 class="text-uppercase fw-bold mb-3">Tentang Projek</h6>
                <p>
                  Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
                <p>
                  Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
                </p>
                <p>
                  Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.
                </p>
                <p>
                  Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
                </p>
              </div>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="portfolio-info">
                <h3 class="text-uppercase">Informasi Projek</h3>
                <ul>
                  <li><strong>Basis Projek</strong> Belum Tersedia</li>
                  <li><strong>Tahun Pembuatan</strong> Belum Tersedia</li>
                  <li><strong>Link Projek</strong> <a href="#">www.example.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php  
        } else {
          while ($dtPorto = mysqli_fetch_assoc($queryPorto)) :
      ?>
        <div class="container" data-aos="fade-up">
          <div class="portfolio-details-slider swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "navigation": {
                  "nextEl": ".swiper-button-next",
                  "prevEl": ".swiper-button-prev"
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide">
                <img src="dashboard/file_thumbnail/<?= $dtPorto['thumbnail']; ?>" alt="thumbnail">
              </div>
            </div>
          </div>

          <div class="row justify-content-between gy-4 mt-4">

            <div class="col-lg-8" data-aos="fade-up">
              <div class="portfolio-description">
                <h2 class="text-uppercase"><?= $dtPorto['judul_portofolio']; ?></h2>
                <h6 class="text-uppercase fw-bold mb-3">Tentang Projek</h6>
                <?= $dtPorto['deskripsi']; ?>
                <a href="index.php#portfolio" class="btn btn-primary mt-2 mb-3 mb-lg-0 rounded-pill px-4">Kembali</a>
              </div>
            </div>
            <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <div class="portfolio-info">
                <h3 class="text-uppercase">Informasi Projek</h3>
                <ul>
                  <li><strong>Basis Projek</strong> <?= $dtPorto['nama_basis']; ?></li>
                  <li><strong>Tahun Pembuatan</strong> <?= $dtPorto['tahun_pembuatan']; ?></li>
                  <li><strong>Link Projek</strong> <a href="<?= $dtPorto['link_porto']; ?>">
                    <?= $dtPorto['link_porto']; ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      <?php  
          endwhile;
        }
      ?>
    </section>
    <!-- Portfolio Details Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <?php
        $sqlProfilFooter = "SELECT nama_lengkap FROM dt_profil";
        $queryProfilFooter = mysqli_query($koneksi, $sqlProfilFooter);
        $profilNameFoot = mysqli_num_rows($queryProfilFooter);

        if ($profilNameFoot == 0) {
      ?>
        <h3 class="sitename text-uppercase">Anonymus</h3>
      <?php
        } else {
            while ($dtProfilFoot = mysqli_fetch_assoc($queryProfilFooter)) :
      ?>
        <h3 class="sitename text-uppercase"><?= $dtProfilFoot['nama_lengkap']; ?></h3>
      <?php
            endwhile;
        }
      ?>

      <p>Halaman website yang menampilkan tentang diri pribadi serta kemampuan dan portofolio yang pernah dibangun.</p>
      <div class="social-links d-flex justify-content-center">
        <?php
          $sqlSosialFooter = "SELECT * FROM dt_sosialmedia";
          $querySosialFooter = mysqli_query($koneksi, $sqlSosialFooter);
          $datasosialFooter = mysqli_num_rows($querySosialFooter);
          if ($datasosialFooter == 0) {
        ?>
          <p>Sosial media belum tersedia..</p>
        <?php
          } else {
              while ($data = mysqli_fetch_assoc($querySosialFooter)) :
        ?>
          <a href="<?= $data['link']; ?>">
            <i class="bi bi-<?= $data['sosial_media']; ?>" title="<?= ucwords($data['sosial_media']); ?>" 
            target="_blank"></i>
          </a>
        <?php
              endwhile;
          } 
        ?>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span><strong class="px-1 sitename">My Portofolio</strong>| 2024 - <?= date('Y'); ?> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distribuited by <a href="https://themewagon.com">ThemeWagon</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="landing_page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="landing_page/assets/vendor/php-email-form/validate.js"></script>
  <script src="landing_page/assets/vendor/aos/aos.js"></script>
  <script src="landing_page/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="landing_page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="landing_page/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="landing_page/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="landing_page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="landing_page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="landing_page/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="landing_page/assets/js/main.js"></script>

</body>

</html>