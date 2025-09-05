-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2025 pada 19.05
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
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_admin`
--

INSERT INTO `dt_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'Adji Muhamad Zidan', 'admin123', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_basisprojek`
--

CREATE TABLE `dt_basisprojek` (
  `id` int(11) NOT NULL,
  `nama_basis` varchar(30) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_basisprojek`
--

INSERT INTO `dt_basisprojek` (`id`, `nama_basis`, `id_admin`, `created_at`) VALUES
(7, 'Web', 1, '2025-08-31 05:01:04'),
(8, 'Dekstop', 1, '2025-08-31 05:01:17'),
(9, 'Android', 1, '2025-08-31 05:01:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_kemampuan`
--

CREATE TABLE `dt_kemampuan` (
  `id` int(11) NOT NULL,
  `kemampuan` varchar(20) NOT NULL,
  `tingkatan` varchar(30) NOT NULL,
  `nilai_progres` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_kemampuan`
--

INSERT INTO `dt_kemampuan` (`id`, `kemampuan`, `tingkatan`, `nilai_progres`, `id_admin`, `created_at`) VALUES
(10, 'Javascript', 'Menengah (Intermediate)', 35, 1, '2025-08-31 05:00:20'),
(11, 'Github', 'Menengah (Intermediate)', 35, 1, '2025-08-31 05:00:27'),
(12, 'Laravel10', 'Menengah (Intermediate)', 35, 1, '2025-08-31 05:00:35'),
(13, 'Codeigniter4', 'Lanjutan (Advance)', 45, 1, '2025-08-31 05:00:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_kontak`
--

CREATE TABLE `dt_kontak` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_kontak`
--

INSERT INTO `dt_kontak` (`id`, `nama_lengkap`, `email`, `no_telp`, `pesan`, `created_at`) VALUES
(18, 'Beyourselfit', 'beyourselfit20@gmail', '089518181818', 'Minat untuk projeknya', '2025-09-05 16:48:38'),
(19, 'Adji Muhamad Zidan', 'adjimuhamadzidan@gma', '0895337528748', 'bagus sekali untuk portofolionya...', '2025-09-05 16:49:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_portofolio`
--

CREATE TABLE `dt_portofolio` (
  `id` int(11) NOT NULL,
  `judul_portofolio` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `id_basis` int(11) NOT NULL,
  `tahun_pembuatan` year(4) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `link_porto` varchar(80) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_portofolio`
--

INSERT INTO `dt_portofolio` (`id`, `judul_portofolio`, `thumbnail`, `id_basis`, `tahun_pembuatan`, `deskripsi`, `link_porto`, `id_admin`, `created_at`) VALUES
(5, 'Sistem Pendukung Keputusan SAW', '68b3d9aa327ca.jpg', 7, '2022', '<p style=\"text-align: justify; \">long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p style=\"text-align: justify; \">long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p style=\"text-align: justify; \">long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'https://github.com/adjimuhamadzidan20/', 1, '2025-09-05 09:30:14'),
(6, 'Sistem Pendukung Keputusan AHP', '68b3dadd46c55.jpg', 7, '2022', '<p style=\"text-align: justify; \">long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p style=\"text-align: justify; \">long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p style=\"text-align: justify; \">long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'https://github.com/adjimuhamadzidan20/', 1, '2025-09-05 09:30:21'),
(7, 'Sistem Informasi Inventori', '68b3fd969bf17.jpg', 8, '2020', '<p style=\"text-align: justify; \">industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p style=\"text-align: justify;\">long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p style=\"text-align: justify;\">long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'https://github.com/adjimuhamadzidan20/', 1, '2025-09-05 09:30:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_profil`
--

CREATE TABLE `dt_profil` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_telp` varchar(18) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_profil`
--

INSERT INTO `dt_profil` (`id`, `nama_lengkap`, `no_telp`, `email`, `alamat`, `foto`, `id_admin`, `created_at`) VALUES
(1, 'Beyourselfit20', '089518181818', 'beyourselfit20@gmail.com', 'Jatirahayu, Kota Bekasi', '68bad798a5d3d.jpg', 1, '2025-09-05 12:29:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_sosialmedia`
--

CREATE TABLE `dt_sosialmedia` (
  `id` int(11) NOT NULL,
  `sosial_media` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_sosialmedia`
--

INSERT INTO `dt_sosialmedia` (`id`, `sosial_media`, `link`, `id_admin`, `created_at`) VALUES
(4, 'github', 'https://github.com/adjimuhamadzidan20/', 1, '2025-08-31 05:01:37'),
(5, 'instagram', 'https://www.instagram.com/_adjiii20', 1, '2025-08-31 05:01:45'),
(6, 'linkedin', 'https://www.linkedin.com/in/adjimuhamadzidan/', 1, '2025-08-31 05:01:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_statusprofil`
--

CREATE TABLE `dt_statusprofil` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(20) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_statusprofil`
--

INSERT INTO `dt_statusprofil` (`id`, `nama_status`, `id_admin`, `created_at`) VALUES
(7, 'Guru', 1, '2025-08-31 02:18:42'),
(8, 'Coder', 1, '2025-08-31 02:18:49'),
(9, 'Programmer', 1, '2025-08-31 02:18:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_tentang`
--

CREATE TABLE `dt_tentang` (
  `id` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dt_tentang`
--

INSERT INTO `dt_tentang` (`id`, `deskripsi`, `id_admin`, `created_at`) VALUES
(4, '<p class=\"\" style=\"text-align: justify; \"><span style=\"font-size: 16px;\">It is a </span><b style=\"font-size: 16px;\">long established</b><span style=\"font-size: 16px;\"> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', 1, '2025-08-31 04:11:10'),
(5, '<p style=\"text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 1, '2025-08-31 04:58:43'),
(6, '<p style=\"text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>', 1, '2025-08-31 04:58:52');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `dt_kemampuan`
--
ALTER TABLE `dt_kemampuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `dt_kontak`
--
ALTER TABLE `dt_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_basis` (`id_basis`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `dt_profil`
--
ALTER TABLE `dt_profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `dt_statusprofil`
--
ALTER TABLE `dt_statusprofil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `dt_tentang`
--
ALTER TABLE `dt_tentang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dt_admin`
--
ALTER TABLE `dt_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dt_basisprojek`
--
ALTER TABLE `dt_basisprojek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `dt_kemampuan`
--
ALTER TABLE `dt_kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `dt_kontak`
--
ALTER TABLE `dt_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dt_profil`
--
ALTER TABLE `dt_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dt_statusprofil`
--
ALTER TABLE `dt_statusprofil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `dt_tentang`
--
ALTER TABLE `dt_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dt_basisprojek`
--
ALTER TABLE `dt_basisprojek`
  ADD CONSTRAINT `dt_basisprojek_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_kemampuan`
--
ALTER TABLE `dt_kemampuan`
  ADD CONSTRAINT `dt_kemampuan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  ADD CONSTRAINT `dt_portofolio_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dt_portofolio_ibfk_2` FOREIGN KEY (`id_basis`) REFERENCES `dt_basisprojek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_profil`
--
ALTER TABLE `dt_profil`
  ADD CONSTRAINT `dt_profil_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  ADD CONSTRAINT `dt_sosialmedia_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_statusprofil`
--
ALTER TABLE `dt_statusprofil`
  ADD CONSTRAINT `dt_statusprofil_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `dt_tentang`
--
ALTER TABLE `dt_tentang`
  ADD CONSTRAINT `dt_tentang_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
