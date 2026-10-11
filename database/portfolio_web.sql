-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2026 at 07:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `dt_admin`
--

CREATE TABLE `dt_admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_admin`
--

INSERT INTO `dt_admin` (`id`, `nama_admin`, `username`, `password`) VALUES
(1, 'Adji Muhamad Zidan', 'admin123', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `dt_basisprojek`
--

CREATE TABLE `dt_basisprojek` (
  `id` int(11) NOT NULL,
  `nama_basis` varchar(30) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_basisprojek`
--

INSERT INTO `dt_basisprojek` (`id`, `nama_basis`, `id_admin`, `created_at`) VALUES
(10, 'Web', 1, '2026-10-11 03:10:55'),
(11, 'Dekstop', 1, '2026-10-11 03:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `dt_kemampuan`
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
-- Dumping data for table `dt_kemampuan`
--

INSERT INTO `dt_kemampuan` (`id`, `kemampuan`, `tingkatan`, `nilai_progres`, `id_admin`, `created_at`) VALUES
(10, 'Javascript', 'Menengah (Intermediate)', 35, 1, '2025-08-31 05:00:20'),
(11, 'Github', 'Menengah (Intermediate)', 35, 1, '2025-08-31 05:00:27'),
(12, 'Laravel10', 'Menengah (Intermediate)', 35, 1, '2025-08-31 05:00:35'),
(13, 'Codeigniter4', 'Lanjutan (Advance)', 45, 1, '2025-08-31 05:00:43'),
(14, 'OOP PHP', 'Menengah (Intermediate)', 35, 1, '2026-10-11 03:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `dt_kontak`
--

CREATE TABLE `dt_kontak` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_kontak`
--

INSERT INTO `dt_kontak` (`id`, `nama_lengkap`, `email`, `no_telp`, `pesan`, `created_at`) VALUES
(21, 'Beyourselfit20', 'beyourselfit20@gmail.com', '089518181818', 'Bagus sekali portofolionya..', '2026-10-11 05:20:15'),
(22, 'Adji Muhamad Zidan', 'adji123@gmail.com', '089518189999', 'test123', '2026-10-11 05:30:12'),
(23, 'Adji Muhamad Zidan', 'adji123@gmail.com', '089518189999', 'sasa', '2026-10-11 05:30:55'),
(24, 'Beyourselfit20', 'beyourselfit20@gmail.com', '089518181818', 'sss', '2026-10-11 05:32:07'),
(25, 'Beyourselfit20', 'beyourselfit20@gmail.com', '089518181818', 'sasa', '2026-10-11 05:33:35'),
(26, 'Beyourselfit20', 'beyourselfit20@gmail.com', '089518181818', 'sasasa', '2026-10-11 05:35:42'),
(27, 'Beyourselfit20', 'beyourselfit20@gmail.com', '089518181818', 'sasasa', '2026-10-11 05:37:17'),
(28, 'Beyourselfit20', 'beyourselfit20@gmail.com', '089518181818', 'sasasa', '2026-10-11 05:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `dt_portofolio`
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
-- Dumping data for table `dt_portofolio`
--

INSERT INTO `dt_portofolio` (`id`, `judul_portofolio`, `thumbnail`, `id_basis`, `tahun_pembuatan`, `deskripsi`, `link_porto`, `id_admin`, `created_at`) VALUES
(11, 'Sistem Manajemen Nilai', '6acb0e08b840d.jpg', 10, '2024', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'https://github.com/adjimuhamadzidan20', 1, '2026-10-11 04:18:16'),
(12, 'Sistem Pendukung Keputusan', '6acb0e3238cc0.jpg', 10, '2024', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'https://github.com/adjimuhamadzidan20', 1, '2026-10-11 04:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `dt_profil`
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
-- Dumping data for table `dt_profil`
--

INSERT INTO `dt_profil` (`id`, `nama_lengkap`, `no_telp`, `email`, `alamat`, `foto`, `id_admin`, `created_at`) VALUES
(1, 'Beyourselfit20', '089518181818', 'beyourselfit20@gmail.com', 'Jatirahayu, Kota Bekasi', '6acaff6fd6cd5.jpg', 1, '2026-10-11 03:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `dt_sosialmedia`
--

CREATE TABLE `dt_sosialmedia` (
  `id` int(11) NOT NULL,
  `sosial_media` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_sosialmedia`
--

INSERT INTO `dt_sosialmedia` (`id`, `sosial_media`, `link`, `id_admin`, `created_at`) VALUES
(4, 'github', 'https://github.com/adjimuhamadzidan20/', 1, '2025-08-31 05:01:37'),
(5, 'instagram', 'https://www.instagram.com/_adjiii20', 1, '2025-08-31 05:01:45'),
(6, 'linkedin', 'https://www.linkedin.com/in/adjimuhamadzidan/', 1, '2025-08-31 05:01:51'),
(7, 'facebook', 'https://www.facebook.com/adji.muhamad.zidan17/', 1, '2025-09-07 04:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `dt_statusprofil`
--

CREATE TABLE `dt_statusprofil` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(20) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_statusprofil`
--

INSERT INTO `dt_statusprofil` (`id`, `nama_status`, `id_admin`, `created_at`) VALUES
(7, 'Guru', 1, '2025-08-31 02:18:42'),
(8, 'Coder', 1, '2025-08-31 02:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `dt_tentang`
--

CREATE TABLE `dt_tentang` (
  `id` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dt_tentang`
--

INSERT INTO `dt_tentang` (`id`, `deskripsi`, `id_admin`, `created_at`) VALUES
(4, '<p class=\"\" style=\"text-align: justify; \"><span style=\"font-size: 16px;\">It is a </span><b style=\"font-size: 16px;\">long established</b><span style=\"font-size: 16px;\"> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', 1, '2025-08-31 04:11:10'),
(5, '<p style=\"text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 1, '2025-08-31 04:58:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_admin`
--
ALTER TABLE `dt_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_basisprojek`
--
ALTER TABLE `dt_basisprojek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `dt_kemampuan`
--
ALTER TABLE `dt_kemampuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `dt_kontak`
--
ALTER TABLE `dt_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_basis` (`id_basis`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `dt_profil`
--
ALTER TABLE `dt_profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `dt_statusprofil`
--
ALTER TABLE `dt_statusprofil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `dt_tentang`
--
ALTER TABLE `dt_tentang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_admin`
--
ALTER TABLE `dt_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dt_basisprojek`
--
ALTER TABLE `dt_basisprojek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dt_kemampuan`
--
ALTER TABLE `dt_kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dt_kontak`
--
ALTER TABLE `dt_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dt_profil`
--
ALTER TABLE `dt_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dt_statusprofil`
--
ALTER TABLE `dt_statusprofil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dt_tentang`
--
ALTER TABLE `dt_tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dt_basisprojek`
--
ALTER TABLE `dt_basisprojek`
  ADD CONSTRAINT `dt_basisprojek_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dt_kemampuan`
--
ALTER TABLE `dt_kemampuan`
  ADD CONSTRAINT `dt_kemampuan_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dt_portofolio`
--
ALTER TABLE `dt_portofolio`
  ADD CONSTRAINT `dt_portofolio_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dt_portofolio_ibfk_2` FOREIGN KEY (`id_basis`) REFERENCES `dt_basisprojek` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dt_profil`
--
ALTER TABLE `dt_profil`
  ADD CONSTRAINT `dt_profil_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dt_sosialmedia`
--
ALTER TABLE `dt_sosialmedia`
  ADD CONSTRAINT `dt_sosialmedia_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dt_statusprofil`
--
ALTER TABLE `dt_statusprofil`
  ADD CONSTRAINT `dt_statusprofil_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dt_tentang`
--
ALTER TABLE `dt_tentang`
  ADD CONSTRAINT `dt_tentang_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `dt_admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
