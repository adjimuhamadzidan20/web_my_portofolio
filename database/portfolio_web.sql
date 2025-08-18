-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2025 pada 11.51
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_web`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_admin`
--

INSERT INTO `dt_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'adjimuhamadzidan', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_basisprojek`
--

CREATE TABLE `dt_basisprojek` (
  `id` int(11) NOT NULL,
  `nama_basis` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_basisprojek`
--

INSERT INTO `dt_basisprojek` (`id`, `nama_basis`, `created_at`) VALUES
(1, 'Web', '2025-08-16 03:32:56'),
(2, 'Desktop', '2025-08-16 03:32:56'),
(3, 'Mobile App', '2025-08-17 13:27:24'),
(4, 'Android', '2025-08-17 13:27:34'),
(6, 'IOS App', '2025-08-17 13:28:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_kemampuan`
--

CREATE TABLE `dt_kemampuan` (
  `id` int(11) NOT NULL,
  `kemampuan` varchar(20) NOT NULL,
  `tingkatan` varchar(30) NOT NULL,
  `nilai_progres` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_kemampuan`
--

INSERT INTO `dt_kemampuan` (`id`, `kemampuan`, `tingkatan`, `nilai_progres`, `created_at`) VALUES
(3, 'HTML', 'Menengah (Intermediate)', 35, '2025-08-17 12:20:53'),
(5, 'Javascript', 'Lanjutan (Advance)', 45, '2025-08-17 12:36:43'),
(6, 'Codeigniter4', 'Menengah (Intermediate)', 35, '2025-08-17 13:44:19'),
(7, 'Laravel10', 'Menengah (Intermediate)', 35, '2025-08-17 13:44:39'),
(8, 'Bootstrap5', 'Mahir (Expert)', 75, '2025-08-17 13:57:45'),
(9, 'Github', 'Menengah (Intermediate)', 35, '2025-08-17 14:04:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_portofolio`
--

CREATE TABLE `dt_portofolio` (
  `id` int(20) NOT NULL,
  `judul_portofolio` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `basis_projek` varchar(20) NOT NULL,
  `tahun_pembuatan` year(4) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_portofolio`
--

INSERT INTO `dt_portofolio` (`id`, `judul_portofolio`, `thumbnail`, `basis_projek`, `tahun_pembuatan`, `deskripsi`, `created_at`) VALUES
(1, 'Belajar Coding Otodidak', '68a0a9bd2bef5.jpg', 'Web', '2022', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2025-08-18 00:39:27'),
(2, 'Why do we use it?', '68a20b6dc15a2.jpg', 'Web', '2018', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', '2025-08-18 00:39:37'),
(3, 'Mengisi Hal Yang Bermanfaat', '68a29bd17522f.jpg', 'Android', '2020', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2025-08-18 03:26:27'),
(4, 'Where can I get some?', '68a29bad5feef.jpg', 'Android', '2017', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2025-08-18 03:19:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_profil`
--

CREATE TABLE `dt_profil` (
  `id` int(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telp` varchar(18) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_profil`
--

INSERT INTO `dt_profil` (`id`, `nama_lengkap`, `no_telp`, `email`, `alamat`, `foto`, `created_at`) VALUES
(1, 'BeyourselfIT', '089518181818', 'beyourself23@email.com', 'Jatirahayu, Kota Bekasi', '68a29b41f1c46.jpg', '2025-08-18 03:17:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_sosialmedia`
--

CREATE TABLE `dt_sosialmedia` (
  `id` int(20) NOT NULL,
  `sosial_media` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_sosialmedia`
--

INSERT INTO `dt_sosialmedia` (`id`, `sosial_media`, `link`, `created_at`) VALUES
(1, 'github', 'https://github.com/adjimuhamadzidan20/', '2025-08-17 10:08:39'),
(2, 'instagram', 'https://www.instagram.com/_adjiii20', '2025-08-17 10:08:58'),
(3, 'linkedin', 'https://www.linkedin.com/in/adjimuhamadzidan/', '2025-08-17 10:12:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_statusprofil`
--

CREATE TABLE `dt_statusprofil` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_statusprofil`
--

INSERT INTO `dt_statusprofil` (`id`, `nama_status`, `created_at`) VALUES
(1, 'Coder', '2025-08-16 03:40:10'),
(2, 'Teacher', '2025-08-16 03:40:10'),
(3, 'Programmer', '2025-08-16 04:20:45'),
(5, 'Freelancer', '2025-08-17 13:41:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_tentang`
--

CREATE TABLE `dt_tentang` (
  `id` int(20) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_tentang`
--

INSERT INTO `dt_tentang` (`id`, `deskripsi`, `created_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the.', '2025-08-16 15:37:20'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2025-08-17 16:57:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dt_admin`
--
ALTER TABLE `dt_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_basisprojek`
--
ALTER TABLE `dt_basisprojek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_kemampuan`
--
ALTER TABLE `dt_kemampuan`
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
-- Indeks untuk tabel `dt_statusprofil`
--
ALTER TABLE `dt_statusprofil`
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
-- AUTO_INCREMENT untuk tabel `dt_basisprojek`
--
ALTER TABLE `dt_basisprojek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dt_kemampuan`
--
ALTER TABLE `dt_kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dt_profil`
--
ALTER TABLE `dt_profil`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dt_statusprofil`
--
ALTER TABLE `dt_statusprofil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `dt_tentang`
--
ALTER TABLE `dt_tentang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
