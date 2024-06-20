<?php
    require 'dashboard/config/koneksi_db.php';

    $sql1 = "SELECT * FROM dt_portofolio";
    $sql2 = "SELECT * FROM dt_tentang";
    $sql3 = "SELECT * FROM dt_sosialmedia";
    $sql3 = "SELECT * FROM dt_sosialmedia";
    $sql4 = "SELECT * FROM dt_profil";
    $sql5 = "SELECT alamat FROM dt_profil";
    $sql6 = "SELECT nama_lengkap FROM dt_profil";  

    $query1 = mysqli_query($koneksi, $sql1);
    $query2 = mysqli_query($koneksi, $sql2);
    $query3 = mysqli_query($koneksi, $sql3);
    $query4 = mysqli_query($koneksi, $sql4);
    $query5 = mysqli_query($koneksi, $sql5);
    $query6 = mysqli_query($koneksi, $sql6);

    $row = [];
    while ($data = mysqli_fetch_assoc($query1)) {
    $row[] = $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="web_portofolio" />
        <meta name="author" content="adjimuhamadzidan" />
        <?php  
            $profilName = mysqli_num_rows($query6); 
            if ($profilName == 0) {
        ?>
            <title>Portfolio || Anonymus</title>
        <?php  
            } else {
            while ($dtProfil = mysqli_fetch_assoc($query6)) : 
        ?>
            <title>Portfolio || <?= $dtProfil['nama_lengkap']; ?></title>
        <?php  
            endwhile;
            }
        ?>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="landing_page/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="landing_page/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="landing_page/assets/aos-master/dist/aos.css">
    </head>
    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">MY PORTOFOLIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead d-flex align-content-center">
            <div class="container flex-column">

                <?php 
                    $dataProfil = mysqli_num_rows($query4); 
                    if ($dataProfil == 0) {
                ?>
                    <!-- Masthead Avatar Image-->
                    <img class="masthead-avatar mb-4" src="dashboard/profil_pict/admin_user.png" 
                    alt="profile" style="border-radius: 100%; object-fit: cover;" />
                    <!-- Masthead Heading-->
                    <h2 class="text-uppercase mb-2">Anonymus</h2>
                    <!-- Masthead Subheading-->
                    <p class="masthead-subheading font-weight-light mb-4">Status</p>
                <?php
                    } else {  
                        while ($profil = mysqli_fetch_assoc($query4)) : 
                ?>
                    <!-- Masthead Avatar Image-->
                    <img class="masthead-avatar mb-4" src="dashboard/file_foto/<?= $profil['foto']; ?>" 
                    alt="profile" style="border-radius: 100%; object-fit: cover;" />
                    <!-- Masthead Heading-->
                    <h2 class="text-uppercase mb-2"><?= $profil['nama_lengkap']; ?></h2>
                    <!-- Masthead Subheading-->
                    <p class="masthead-subheading font-weight-light mb-4"><?= $profil['status']; ?></p>
                <?php 
                        endwhile; 
                    }
                ?>

                <a class="btn btn-primary btn-xl text-uppercase" href="#about">Selengkapnya</a>
            </div>
        </header>

        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang</h2>
                    <h3 class="section-subheading text-muted">Deskripsi penjelesan mengenai diri pribadi.</h3>
                </div>
                <!-- About Section Content-->
                <div class="row text-dark text-justify justify-content-center">
                    <div class="col-lg-8 px-4 px-md-0" data-aos="fade-down" data-aos-duration="1000">
                        <?php  
                            $dataTentang = mysqli_num_rows($query2);
                            if ($dataTentang == 0) { 
                        ?>
                            <p class="lead">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!</p>

                            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Numquam quasi quia nisi dolor. Sequi accusamus praesentium architecto quibusdam cumque eaque inventore, dolores suscipit cum et quasi, molestiae aliquam fuga nostrum.</p>
                        <?php 
                        } 
                        else { 
                            while ($data = mysqli_fetch_assoc($query2)) :
                        ?>
                            <div class="lead"><?= $data['deskripsi']; ?></div>
                        <?php 
                            endwhile;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portofolio</h2>
                    <h3 class="section-subheading text-muted">Beberapa program aplikasi yang pernah dibuat.</h3>
                </div>

                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <?php
                        $dataPorto = mysqli_num_rows($query1); 
                        if ($dataPorto == 0) { 
                    ?>
                        <!-- Portfolio Item 1 -->
                        <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-lg-5 d-flex align-content-stretch" data-aos="zoom-in" data-aos-duration="800">
                            <div class="portfolio-item mx-auto bg-white shadow w-100">
                                <img style="width: 100%; height: 50%; object-fit: cover;" src="dashboard/thumb_pict/thumb_porto.png" alt="thumbnail" />
                                <div class="keterangan-portfolio p-3">
                                    <h6 class="mb-2">Portofolio 1</h6>
                                    <div style="height: 70px; overflow: hidden;">
                                        Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!
                                    </div>
                                </div>
                                <div class="detail-button px-3 pb-3">
                                    <button class="detail btn btn-primary col-12 col-lg-3" data-bs-toggle="modal" 
                                    data-bs-target="#portfolio1"><i class="fas fa-eye"></i> Detail</button>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 2 -->
                        <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-lg-5 d-flex align-content-stretch" data-aos="zoom-in" data-aos-duration="800">
                            <div class="portfolio-item mx-auto bg-white shadow w-100">
                                <img style="width: 100%; height: 50%; object-fit: cover;" src="dashboard/thumb_pict/thumb_porto.png" alt="thumbnail" />
                                <div class="keterangan-portfolio p-3">
                                    <h6 class="mb-2">Portofolio 2</h6>
                                    <div style="height: 70px; overflow: hidden;">
                                        Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!
                                    </div>
                                </div>
                                <div class="detail-button px-3 pb-3">
                                    <button class="detail btn btn-primary col-12 col-lg-3" data-bs-toggle="modal" 
                                    data-bs-target="#portfolio2"><i class="fas fa-eye"></i> Detail</button>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 3 -->
                        <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-lg-5 d-flex align-content-stretch" data-aos="zoom-in" data-aos-duration="800">
                            <div class="portfolio-item mx-auto bg-white shadow w-100">
                                <img style="width: 100%; height: 50%; object-fit: cover;" src="dashboard/thumb_pict/thumb_porto.png" alt="thumbnail" />
                                <div class="keterangan-portfolio p-3">
                                    <h6 class="mb-2">Portofolio 3</h6>
                                    <div style="height: 70px; overflow: hidden;">
                                        Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!
                                    </div>
                                </div>
                                <div class="detail-button px-3 pb-3">
                                    <button class="detail btn btn-primary col-12 col-lg-3" data-bs-toggle="modal" 
                                    data-bs-target="#portfolio3"><i class="fas fa-eye"></i> Detail</button>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Modal 1 -->
                        <div class="modal fade" id="portfolio1" tabindex="-1" aria-labelledby="portfolio1" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col pb-3">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h5 class="text-secondary text-uppercase mb-3 text-center">Portofolio 1</h5>

                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="img-fluid img-thumbnail rounded mb-4" src="dashboard/thumb_pict/thumb_porto.png" alt="thumbnail" />

                                                    <!-- Portfolio Modal - Tahun -->
                                                    <div class="tahun-pembuatan mb-4">
                                                        <strong class="text-secondary">Tahun pembuatan :</strong>
                                                        <p class="text-secondary text-justify">2020</p>
                                                    </div>

                                                    <!-- Portfolio Modal - Deskripsi -->
                                                    <div class="deskripsi mb-5">
                                                        <strong class="text-secondary">Deskripsi :</strong>
                                                        <p class="text-secondary text-justify">
                                                            Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!
                                                        </p>
                                                    </div>
                                                    <button class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Modal 2 -->
                        <div class="modal fade" id="portfolio2" tabindex="-1" aria-labelledby="portfolio2" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col pb-3">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h5 class="text-secondary text-uppercase mb-3 text-center">Portofolio 2</h5>

                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="img-fluid img-thumbnail rounded mb-4" src="dashboard/thumb_pict/thumb_porto.png" alt="thumbnail" />

                                                    <!-- Portfolio Modal - Tahun -->
                                                    <div class="tahun-pembuatan mb-4">
                                                        <strong class="text-secondary">Tahun pembuatan :</strong>
                                                        <p class="text-secondary text-justify">2020</p>
                                                    </div>

                                                    <!-- Portfolio Modal - Deskripsi -->
                                                    <div class="deskripsi mb-5">
                                                        <strong class="text-secondary">Deskripsi :</strong>
                                                        <p class="text-secondary text-justify">
                                                            Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!
                                                        </p>
                                                    </div>
                                                    <button class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Modal 3 -->
                        <div class="modal fade" id="portfolio3" tabindex="-1" aria-labelledby="portfolio3" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col pb-3">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h5 class="text-secondary text-uppercase mb-3 text-center">Portofolio 3</h5>

                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="img-fluid img-thumbnail rounded mb-4" src="dashboard/thumb_pict/thumb_porto.png" alt="thumbnail" />

                                                    <!-- Portfolio Modal - Tahun -->
                                                    <div class="tahun-pembuatan mb-4">
                                                        <strong class="text-secondary">Tahun pembuatan :</strong>
                                                        <p class="text-secondary text-justify">2020</p>
                                                    </div>

                                                    <!-- Portfolio Modal - Deskripsi -->
                                                    <div class="deskripsi mb-5">
                                                        <strong class="text-secondary">Deskripsi :</strong>
                                                        <p class="text-secondary text-justify">
                                                            Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!
                                                        </p>
                                                    </div>
                                                    <button class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    } else {
                        foreach ($row as $porto) : 
                    ?>
                        <!-- Portfolio Item -->
                        <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-lg-5 d-flex align-content-stretch" data-aos="zoom-in" data-aos-duration="800">
                            <div class="portfolio-item mx-auto bg-white shadow w-100">
                                <img style="width: 100%; height: 50%; object-fit: cover;" src="dashboard/file_thumbnail/<?= $porto['thumbnail']; ?>" alt="thumbnail" />
                                <div class="keterangan-portfolio p-3" style="margin-bottom: 5rem;">
                                    <h6 class="mb-2"><?= $porto['judul_portofolio']; ?></h6>
                                    <div style="height: 60px; overflow: hidden;"><?= $porto['deskripsi']; ?></div>
                                </div>
                                <div class="detail-button px-3 pb-3">
                                    <button class="detail btn btn-primary col-12 col-lg-3" data-bs-toggle="modal" 
                                    data-bs-target="#portfolio<?= $porto['id']; ?>"><i class="fas fa-eye"></i> Detail</button>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Modal -->
                        <div class="modal fade" id="portfolio<?= $porto['id']; ?>" tabindex="-1" aria-labelledby="portfolio<?= $porto['id']; ?>" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col pb-3">
                                                    <!-- Portfolio Modal - Title-->
                                                    <h5 class="text-secondary text-uppercase mb-3 text-center"><?= $porto['judul_portofolio']; ?></h5>

                                                    <!-- Portfolio Modal - Image-->
                                                    <img class="img-fluid img-thumbnail rounded mb-4" src="dashboard/file_thumbnail/<?= $porto['thumbnail']; ?>" alt="thumbnail" />

                                                    <!-- Portfolio Modal - Tahun -->
                                                    <div class="tahun-pembuatan mb-4">
                                                        <strong class="text-secondary">Tahun pembuatan :</strong>
                                                        <p class="text-secondary text-justify"><?= $porto['tahun_pembuatan']; ?></p>
                                                    </div>

                                                    <!-- Portfolio Modal - Deskripsi -->
                                                    <div class="deskripsi mb-5">
                                                        <strong class="text-secondary">Deskripsi :</strong>
                                                        <div class="text-secondary text-justify"><?= $porto['deskripsi']; ?></div>
                                                    </div>
                                                    <button class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                        endforeach; 
                    }
                    ?>
                </div>
                
            </div>
        </section>

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontak Saya</h2>
                    <h3 class="section-subheading text-light">Silahkan memberikan pesan untuk informasi lebih lanjut.</h3>
                </div>
                <form id="contactForm" name="contact-portofolio-data">
                   
                    <!-- alert notif -->
                    <div class="alert alert-success alert-dismissible fade show mb-4 d-none" role="alert">
                      <strong>Terima kasih!</strong> Pesan anda telah terkirim.
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nama Lengkap Anda" required="required" name="nama_lengkap" />
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email Anda" required="required" name="email" />
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="No Telepon" required="required"" name="no_telp" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Masukkan Pesan" required="required" name="pesan"></textarea>
                            </div>
                        </div>
                    </div>
            
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Kirim Pesan</button></div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-3" style="background-color: black;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start text-white">
                        Copyright &copy; My Portofolio <?= date('Y'); ?>        
                    </div>

                    <div class="col-lg-4 my-3 my-lg-0">
                        <?php  
                            while ($data = mysqli_fetch_assoc($query3)) :
                        ?>
                            <a class="btn btn-light btn-social mx-2" href="<?= $data['link']; ?>" title="<?= ucwords($data['sosial_media']); ?>" target="_blank">
                            <i class="fab fa-fw fa-<?= $data['sosial_media']; ?>"></i></a>
                        <?php endwhile; ?>
                    </div>

                    <div class="col-lg-4 text-lg-end text-white">
                        <?php while ($alamat = mysqli_fetch_assoc($query5)) : ?>
                            <?= $alamat['alamat']; ?>
                        <?php endwhile; ?>
                    </div>

                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="landing_page/js/scripts.js"></script>

        <!-- spread sheet google -->
        <script type="text/javascript">
            const scriptURL = 'https://script.google.com/macros/s/AKfycbxSyU13Dvzw0jy3heLNnAUgIZ6IwCkmxwC_qdGtkYEV-8o5oLFMygAlnYDMnTZa_wqx/exec';
            const form = document.forms['contact-portofolio-data'];
            
            let alert = document.querySelector('.alert');
            let nama = document.getElementById('name');
            let email = document.getElementById('email');
            let telp = document.getElementById('phone');
            let pesan = document.getElementById('message');

            form.addEventListener('submit', e => {
                alert.classList.toggle('d-none');

                e.preventDefault()
                fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                  .then(response => console.log('Success!', response))
                  .catch(error => console.error('Error!', error.message))

                nama.value = "";
                email.value = "";
                telp.value = "";
                pesan.value = "";
            })

        </script>

        <script type="text/javascript" src="landing_page/assets/aos-master/dist/aos.js"></script>

        <script>
          AOS.init();
        </script>
    </body>
</html>
