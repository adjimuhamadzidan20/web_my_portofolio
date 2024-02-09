-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2024 pada 10.51
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_portfolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_admin`
--

CREATE TABLE `dt_admin` (
  `id` int(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_admin`
--

INSERT INTO `dt_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'adjimuhamadzidan', 'adjimuhamadzidan', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_portofolio`
--

CREATE TABLE `dt_portofolio` (
  `id` int(20) NOT NULL,
  `judul_portofolio` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `tahun_pembuatan` year(4) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_portofolio`
--

INSERT INTO `dt_portofolio` (`id`, `judul_portofolio`, `thumbnail`, `tahun_pembuatan`, `deskripsi`) VALUES
(18, 'Web Aplikasi 1', '65b534dd18b76.png', 2020, 'Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!'),
(19, 'Web Aplikasi 2', '65b534fea2bef.png', 2020, 'Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!'),
(20, 'Web Aplikasi 3', '65b5351a32b87.png', 2023, 'Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Voluptates quod voluptatibus nulla totam quaerat recusandae voluptatem, error doloribus quidem consequuntur dolorem reiciendis aliquam eveniet illum! Quia perspiciatis itaque, id doloremque. Lorem ipsum dolor sit amet consectetur adipisicing, elit. Minima nostrum illum veniam eligendi quidem labore dolor impedit earum ab vitae, hic quisquam molestiae eaque asperiores necessitatibus laboriosam delectus itaque ullam!'),
(35, 'Web Aplikasi 4', '65b32f8cd31a1.png', 2022, 'Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Numquam quasi quia nisi dolor. Sequi accusamus praesentium architecto quibusdam cumque eaque inventore, dolores suscipit cum et quasi, molestiae aliquam fuga nostrum.'),
(36, 'Aplikasi Web 5', '65b3306ea7885.png', 2022, 'Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Numquam quasi quia nisi dolor. Sequi accusamus praesentium architecto quibusdam cumque eaque inventore, dolores suscipit cum et quasi, molestiae aliquam fuga nostrum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_profil`
--

CREATE TABLE `dt_profil` (
  `id` int(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_profil`
--

INSERT INTO `dt_profil` (`id`, `nama_lengkap`, `status`, `alamat`, `foto`) VALUES
(1, 'Adji Muhamad Zidan', 'Mahasiswa', 'Pondok Gede, Kota Bekasi', '65b75f672ca7f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_sosialmedia`
--

CREATE TABLE `dt_sosialmedia` (
  `id` int(20) NOT NULL,
  `sosial_media` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_sosialmedia`
--

INSERT INTO `dt_sosialmedia` (`id`, `sosial_media`, `link`) VALUES
(10, 'instagram', 'https://www.instagram.com/_adjiii20'),
(15, 'facebook', 'https://www.facebook.com/adjimuhamadzidan'),
(18, 'linkedin', 'https://www.linkedin.com/adjimuhamadzidan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_tentang`
--

CREATE TABLE `dt_tentang` (
  `id` int(20) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dt_tentang`
--

INSERT INTO `dt_tentang` (`id`, `deskripsi`) VALUES
(13, 'Perkenalkan nama saya Adji Muhamad Zidan, sarjana S1 Teknik Informatika Universitas\r\nIndraprasta PGRI tahun 2023. Saya seorang freshgraduate dan untuk aktifitas saat ini aktif\r\nsebagai pencari kerja. Selama kuliah menguasai ilmu pengembangan sistem atau aplikasi\r\nseperti pemrograman web, pemrograman dekstop java, database MySQL dan mampu\r\nmengoperasikan seperti microsoft office.'),
(15, 'Saya memiliki kemampuan dalam membuat program aplikasi berbasis web dan java. Untuk aplikasi berbasis web dengan HTML, CSS, JS, untuk sisi server side menggunakan PHP. Framwork atau library menggunakan bootstrap, jquery, codeigniter4. Untuk aplikasi dekstop menggunakan bahasa pemrograman java yang sudah bentuk GUI.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dt_admin`
--
ALTER TABLE `dt_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_profil`
--
ALTER TABLE `dt_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_tentang`
--
ALTER TABLE `dt_tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dt_admin`
--
ALTER TABLE `dt_admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `dt_profil`
--
ALTER TABLE `dt_profil`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `dt_tentang`
--
ALTER TABLE `dt_tentang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
