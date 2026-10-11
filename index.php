<?php
  require 'dashboard/config/koneksi_db.php';
  session_start();
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
    <title>Portofolio Web | Anonymus</title>
  <?php
    } else {
      while ($dtProfil = mysqli_fetch_assoc($queryProfil)) :
  ?>
    <title>Portofolio Web | <?= $dtProfil['nama_lengkap']; ?></title>
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
    
    .profil-sidebar {
      object-fit: cover;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body class="index-page">

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
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background px-xl-2">
      <?php
        $sqlFoto = "SELECT foto FROM dt_profil";
        $queryFoto = mysqli_query($koneksi, $sqlFoto);
        while ($dtFoto = mysqli_fetch_assoc($queryFoto)) :
      ?>
        <img src="dashboard/file_foto/<?= $dtFoto['foto']; ?>" alt="cover-background" class="cover-hero">
      <?php
        endwhile;
      ?>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <?php
          $sqlNamaPorto = "SELECT * FROM dt_profil";
          $queryNamaPorto = mysqli_query($koneksi, $sqlNamaPorto);

          $dataNama = mysqli_num_rows($queryNamaPorto);
          if ($dataNama == 0) {
        ?>
          <h2 class="text-uppercase">Anonymus</h2>
        <?php
          } else {
            while ($profil = mysqli_fetch_assoc($queryNamaPorto)) :
        ?>
          <h2 class="text-uppercase"><?= $profil['nama_lengkap']; ?></h2>
        <?php
            endwhile;
          }
        ?>

        <?php
          $sqlStatusPorto = "SELECT nama_status FROM dt_statusprofil";
          $queryStatusPorto = mysqli_query($koneksi, $sqlStatusPorto);

          $row = [];
          while ($data = mysqli_fetch_assoc($queryStatusPorto)) {
              $row[] = $data;
          }

          $dataStatus = mysqli_num_rows($queryStatusPorto);
          if ($dataStatus == 0) {
        ?>
          <p><span class="typed" data-typed-items="Status">Status</span>
          <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
        <?php
          } else {
        ?>
          <p><span class="typed" data-typed-items="
          <?php  
            foreach ($row as $status) :
              echo $status['nama_status'] .','; 
            endforeach;
          ?>"></span>
          <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
        <?php
          }
        ?>
      </div>
    </section>
    <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section px-xl-2 light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Tentang</h2>
        <?php
          $sqlTentang = "SELECT * FROM dt_tentang";
          $queryTentang = mysqli_query($koneksi, $sqlTentang);
          $dataTentang = mysqli_num_rows($queryTentang);

          if ($dataTentang == 0) {
        ?>
          <div class="tentang-deskripsi">
            <p class="mb-3">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Numquam quasi quia nisi dolor. Sequi accusamus praesentium architecto quibusdam cumque eaque inventore, dolores suscipit cum et quasi, molestiae aliquam fuga nostrum.</p>
          </div>
        <?php
          } else {
            while ($data = mysqli_fetch_assoc($queryTentang)) :
        ?>
          <div class="tentang-deskripsi">
            <p class="mb-3"><?= $data['deskripsi']; ?></p>
          </div>
        <?php
            endwhile;
          }
        ?>
      </div>
      <!-- End Section Title -->

    </section>
    <!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section px-xl-2 mb-4">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Kemampuan</h2>
        <p>Berikut ini beberapa kemampuan atau pengetahuan yang saya miliki.</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation">
          <?php
            $sqlSkill = "SELECT * FROM dt_kemampuan";
            $querySkill = mysqli_query($koneksi, $sqlSkill);
            $dataSkill = mysqli_num_rows($querySkill);

            if ($dataSkill == 0) {
          ?>
            <div class="col-lg-6">
              <div class="progress">
                <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!-- End Skills Item -->
              <div class="progress">
                <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!-- End Skills Item -->
            </div>

            <div class="col-lg-6">
              <div class="progress">
                <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!-- End Skills Item -->
              <div class="progress">
                <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!-- End Skills Item -->
            </div>
          <?php
            } else {
              while ($data = mysqli_fetch_assoc($querySkill)) :
          ?>
            <div class="col-lg-6">
              <div class="progress">
                <span class="skill"><span><?= $data['kemampuan']; ?></span> <i class="val"><?= $data['tingkatan']; ?></i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= $data['nilai_progres']; ?>" aria-valuemin="20" aria-valuemax="90"></div>
                </div>
              </div>
            </div>
          <?php
              endwhile;
            }
          ?>
        </div>
      </div>

    </section>
    <!-- /Skills Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background px-xl-2">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Portofolio</h2>
        <p>Berikut beberapa projek atau program aplikasi yang sudah pernah saya bangun.</p>
      </div>
      <!-- End Section Title -->

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <!-- List Basis Projek -->
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Semua</li>
            <?php
              $sqlBasis = "SELECT nama_basis FROM dt_basisprojek";
              $queryBasis = mysqli_query($koneksi, $sqlBasis);
              $dataBasis = mysqli_num_rows($queryBasis);

              $row = [];
              while ($data = mysqli_fetch_assoc($queryBasis)) {
                $row[] = $data;
              }

              foreach ($row as $basis) :
            ?>
              <li data-filter=".<?= $basis['nama_basis']; ?>"><?= $basis['nama_basis']; ?></li>
            <?php
              endforeach;
            ?>
          </ul>
          <!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php
              $sqlPorto = "SELECT dt_portofolio.id, dt_portofolio.judul_portofolio, dt_portofolio.thumbnail, 
              dt_portofolio.id_basis, dt_basisprojek.nama_basis, dt_portofolio.tahun_pembuatan,
              dt_portofolio.deskripsi, dt_portofolio.link_porto, dt_portofolio.id_admin, dt_portofolio.created_at 
              FROM dt_portofolio INNER JOIN dt_basisprojek ON dt_portofolio.id_basis = dt_basisprojek.id";
              
              $queryPorto = mysqli_query($koneksi, $sqlPorto);
              $dataPorto = mysqli_num_rows($queryPorto);

              if ($dataPorto == 0) {
            ?>
              <!-- konten template -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                  <img src="dashboard/thumb_pict/thumb_porto.png" class="img-fluid img-thumbnail rounded-0" alt="thumbnail">

                  <div class="portfolio-info">
                    <h4>App 1</h4>
                    <p>Basis Projek</p>
                    <a href="dashboard/thumb_pict/thumb_porto.png" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <div class="portfolio-content h-100">
                  <img src="dashboard/thumb_pict/thumb_porto.png" class="img-fluid img-thumbnail rounded-0" alt="thumbnail">

                  <div class="portfolio-info">
                    <h4>App 2</h4>
                    <p>Basis Projek</p>
                    <a href="dashboard/thumb_pict/thumb_porto.png" title="App 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <div class="portfolio-content h-100">
                  <img src="dashboard/thumb_pict/thumb_porto.png" class="img-fluid img-thumbnail rounded-0" alt="thumbnail">

                  <div class="portfolio-info">
                    <h4>App 3</h4>
                    <p>Basis Projek</p>
                    <a href="dashboard/thumb_pict/thumb_porto.png" title="App 3" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            <?php
              } else {
                $row = [];
                while ($data = mysqli_fetch_assoc($queryPorto)) {
                  $row[] = $data;
                }

                foreach ($row as $porto) :
            ?>
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $porto['nama_basis']; ?>">
                <div class="portfolio-content h-100">
                  <img src="dashboard/file_thumbnail/<?= $porto['thumbnail']; ?>" class="img-fluid img-thumbnail rounded-0" alt="<?= $porto['judul_portofolio']; ?>">

                  <div class="portfolio-info">
                    <h4><?= $porto['judul_portofolio']; ?></h4>
                    <p><?= $porto['nama_basis']; ?></p>
                    <a href="dashboard/file_thumbnail/<?= $porto['thumbnail']; ?>" title="<?= $porto['judul_portofolio']; ?>" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    <a href="details.php?id_porto=<?= $porto['id']; ?>" title="Portofolio Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
              <!-- End Portfolio Item -->
            <?php
                endforeach;
              }
            ?>
          </div>
          <!-- End Portfolio Container -->
        </div>
      </div>
    </section>
    <!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section px-xl-2">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-uppercase">Kontak</h2>
        <p>Silahkan memberikan pesan anda yang untuk informasi lebih lanjut.</p>
      </div>
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Alamat</h3>
                  <?php 
                    $sqlAlamat = "SELECT alamat FROM dt_profil";
                    $queryAlamat = mysqli_query($koneksi, $sqlAlamat);
                    while ($alamat = mysqli_fetch_assoc($queryAlamat)) : 
                  ?>
                    <p><?= $alamat['alamat']; ?></p>
                  <?php 
                    endwhile; 
                  ?>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Telepon</h3>
                  <?php 
                    $sqlTelp = "SELECT no_telp FROM dt_profil";
                    $queryTelp = mysqli_query($koneksi, $sqlTelp);
                    while ($telp = mysqli_fetch_assoc($queryTelp)) : 
                  ?>
                    <p><?= $telp['no_telp']; ?></p>
                  <?php 
                    endwhile; 
                  ?>
                </div>
              </div>
              <!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email</h3>
                  <?php 
                    $sqlEmail = "SELECT email FROM dt_profil";
                    $queryEmail = mysqli_query($koneksi, $sqlEmail);
                    while ($email = mysqli_fetch_assoc($queryEmail)) : 
                  ?>
                    <p><?= $email['email']; ?></p>
                  <?php 
                    endwhile; 
                  ?>
                </div>
              </div>
              <!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-7">
            <!-- form kontak -->
            <form action="dashboard/config/add_process/add_kontak_masuk.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <!-- alert notif -->
              <?php 
                if (isset($_SESSION['status']) && isset($_SESSION['pesan'])) : 
              ?>
                <div class="alert alert-<?= $_SESSION['status']; ?> alert-dismissible fade show mb-4" role="alert">
                  <strong>Terima kasih,</strong> <?= $_SESSION['pesan']; ?>.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php 
                unset($_SESSION['status']);  
                unset($_SESSION['pesan']);  
                endif; 
              ?>
              
              <div class="row gy-4">
                <div class="col-md-6">
                  <label for="name" class="pb-2">Nama Lengkap</label>
                  <input type="text" id="name" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap Anda" required="required">
                </div>
                <div class="col-md-6">
                  <label for="email" class="pb-2">Email</label>
                  <input type="email" id="email" class="form-control" name="email" placeholder="Email Anda" required="required">
                </div>
                <div class="col-md-12">
                  <label for="phone" class="pb-2">Telepon</label>
                  <input type="text" id="phone" class="form-control" name="no_telp" placeholder="No Telepon" required="required">
                </div>
                <div class="col-md-12">
                  <label for="message" class="pb-2">Tuliskan Pesan</label>
                  <textarea class="form-control" id="message" name="pesan" rows="6" placeholder="Masukkan Pesan" required="required"></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
          <!-- End Contact Form -->

        </div>
      </div>

    </section>
    <!-- /Contact Section -->
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
  <script src="landing_page/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="landing_page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="landing_page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="landing_page/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="landing_page/assets/js/main.js"></script>
</body>

</html>