-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 15, 2023 at 06:00 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`) VALUES
(1, 'Admin', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE `arsip` (
  `arsip_id` int NOT NULL,
  `arsip_waktu_upload` datetime NOT NULL,
  `arsip_petugas` int NOT NULL,
  `arsip_kode` varchar(255) NOT NULL,
  `arsip_nama` varchar(255) NOT NULL,
  `arsip_jenis` varchar(255) NOT NULL,
  `arsip_kategori` int NOT NULL,
  `arsip_keterangan` text NOT NULL,
  `arsip_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`arsip_id`, `arsip_waktu_upload`, `arsip_petugas`, `arsip_kode`, `arsip_nama`, `arsip_jenis`, `arsip_kategori`, `arsip_keterangan`, `arsip_file`) VALUES
(12, '2023-02-11 03:20:42', 7, 'ARS001', 'Surat Keterangan Kelahiran', 'pdf', 11, '-', '527160218_surket kelahiran.pdf'),
(13, '2023-02-11 03:23:21', 7, 'ARS002', 'Surat Keterangan Kematian', 'pdf', 12, '-', '306546730_surket kematian.pdf'),
(14, '2023-02-11 03:26:22', 8, 'ARS003', 'Surat Keterangan Pindah', 'pdf', 13, '-', '1802088799_surket pindah.pdf'),
(18, '2023-03-07 13:28:10', 7, 'ARS004', 'Surat Keterangan Pindah Datang', 'pdf', 22, '-', '77106463_surket pindah datang.pdf'),
(19, '2023-03-07 13:28:56', 7, 'ARS005', 'Surat Pernyataan Cerai', 'pdf', 15, '-', '795031896_surper cerai.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dt_ganti_foto`
--

CREATE TABLE `dt_ganti_foto` (
  `id_ganti` int NOT NULL,
  `tgl_input` date NOT NULL,
  `foto` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alasan` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `negara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dt_ganti_foto`
--

INSERT INTO `dt_ganti_foto` (`id_ganti`, `tgl_input`, `foto`, `nama`, `no_kk`, `nik`, `tempat_lahir`, `tgl_lahir`, `alasan`, `agama`, `negara`) VALUES
(8, '2023-08-05', '1625412208_download (2).jpg', 'Mutia Hartati', '6205063826200264', '6205000283718884', 'Muara Teweh', '2001-02-07', 'Foto sebelumnya tidak menggunakan Hijab', 'Islam', 'Indonesia'),
(11, '2023-08-06', '2009988823_images (1).jpg', 'Ika Wahyuni', '6205083479305500', '6205038674293847', 'Muara Teweh', '1984-04-12', 'Foto tidak sama lagi sama dengan penampilan sekarang', 'Islam', 'Indonesia'),
(12, '2023-08-06', '461806466_images.jpg', 'Suprano', '6205066252922012', '6205000238487272', 'Muara Teweh', '1989-11-25', 'Warna background tidak sama dengan tahun lahir', 'Islam', 'Indonesia'),
(14, '2023-08-08', '1670945286_download.jpg', 'Lala Nasyiah', '350637174928212', '350692384777282', 'Kediri', '2002-01-09', 'Foto sebelumnya tidak menggunakan Hijab', 'Islam', 'Indonesia'),
(15, '2023-08-09', '1751214289_download (3).jpg', 'Eli Permata', '6205098790724578', '6205000284362883', 'Muara Teweh', '2003-04-14', 'Foto tidak sama lagi sama dengan penampilan sekarang', 'Kristen', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `dt_perekaman`
--

CREATE TABLE `dt_perekaman` (
  `id_perekaman` int NOT NULL,
  `tgl_input` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `negara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dt_perekaman`
--

INSERT INTO `dt_perekaman` (`id_perekaman`, `tgl_input`, `nama`, `no_kk`, `nik`, `tempat_lahir`, `tgl_lahir`, `alamat`, `agama`, `negara`) VALUES
(7, '2023-08-04', 'Ratna Yuniar', '6205000036549871', '6205000023621283', 'Palangkaraya', '1998-08-26', 'Jl. Pramuka', 'Islam', 'Indonesia'),
(8, '2023-08-05', 'Yono Pratama', '6205000472619374', '6205000773927263', 'Muara Teweh', '2000-01-04', 'Jl. Nenas', 'Islam', 'Indonesia'),
(9, '2023-08-05', 'Pandu Salahudin', '6205077987255120', '6205000037265113', 'Muara Teweh', '2000-10-15', 'Jl. Imam Bonjol', 'Kristen', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_keterangan`) VALUES
(1, 'Tidak berkategori', 'Semua yang tidak berkategori'),
(11, 'Surat Keterangan Kelahiran', 'Akta kelahiran'),
(12, 'Surat Keterangan Kematian', 'Surat yang membuktikan kematian seseorang'),
(13, 'Surat Keterangan Pindah', 'Surat perubahan keluarga yang tidak pindah'),
(15, 'Surat Pernyataan Cerai', 'Surat yang mengajukan gugatan cerai kepada pasangan'),
(17, 'Surat Kehilangan KTP', 'Surat kehilangan KTP'),
(22, 'Surat Keterangan Pindah Datang', 'Surat kependudukan penerbitan KK di alamat baru'),
(23, 'Surat Keterangan Pindah Datang', 'Surat pindah datang bagi yang tidak pindah');

-- --------------------------------------------------------

--
-- Table structure for table `ktp_sementara`
--

CREATE TABLE `ktp_sementara` (
  `id_sementara` int NOT NULL,
  `tgl_input` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `negara` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ktp_sementara`
--

INSERT INTO `ktp_sementara` (`id_sementara`, `tgl_input`, `nama`, `no_kk`, `nik`, `tempat_lahir`, `tgl_lahir`, `alamat`, `agama`, `negara`) VALUES
(6, '2023-08-04', 'Ratna Yuniar', '6205000036549871', '6205000023621283', 'Palangkaraya', '1998-08-26', 'Jl. Pramuka', 'Islam', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `petugas_id` int NOT NULL,
  `petugas_nama` varchar(255) NOT NULL,
  `petugas_username` varchar(255) NOT NULL,
  `petugas_password` varchar(255) NOT NULL,
  `petugas_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `petugas_username`, `petugas_password`, `petugas_foto`) VALUES
(7, 'Glora Pratama', 'Petugas01', '5f4dcc3b5aa765d61d8327deb882cf99', '1976992355_1.jpg'),
(8, 'Ina Mandasari', 'Petugas02', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(9, 'Upik Hakim', 'Petugas03', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(10, 'Pandu Uwais', 'Petugas04', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(15, 'Jonny Bentam', 'petugas05', '5f4dcc3b5aa765d61d8327deb882cf99', '1900368932_default.png'),
(16, 'Imam Maualana', 'Imam', '5f4dcc3b5aa765d61d8327deb882cf99', '1965775328_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` int NOT NULL,
  `riwayat_waktu` datetime NOT NULL,
  `riwayat_user` int NOT NULL,
  `riwayat_arsip` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`riwayat_id`, `riwayat_waktu`, `riwayat_user`, `riwayat_arsip`) VALUES
(12, '2023-02-06 22:41:03', 14, 11),
(13, '2023-02-11 03:30:50', 17, 16),
(14, '2023-02-11 03:32:01', 18, 15),
(15, '2023-02-11 03:32:05', 18, 14),
(16, '2023-02-11 03:33:06', 20, 12),
(17, '2023-02-11 03:33:10', 20, 13),
(18, '2023-02-11 15:40:52', 16, 12),
(19, '2023-02-11 15:41:44', 16, 14),
(20, '2023-03-05 20:33:46', 16, 14),
(21, '2023-03-05 21:30:58', 16, 14),
(22, '2023-03-05 21:35:13', 16, 14),
(23, '2023-03-07 13:10:17', 16, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
(16, 'Glora Pratama', 'glora', '5f4dcc3b5aa765d61d8327deb882cf99', '435573673_Dokumen 6_1 - Copy.jpg'),
(17, 'Yulina Uyainah', 'yulina', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(18, 'Vanesa Hariyah', 'vanesa', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(19, 'Septi Hartati', 'septi', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(20, 'Soleh Gunarto', 'soleh', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
(22, 'zidan', 'zidan', '5f4dcc3b5aa765d61d8327deb882cf99', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`arsip_id`);

--
-- Indexes for table `dt_ganti_foto`
--
ALTER TABLE `dt_ganti_foto`
  ADD PRIMARY KEY (`id_ganti`),
  ADD UNIQUE KEY `no_kk` (`no_kk`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `dt_perekaman`
--
ALTER TABLE `dt_perekaman`
  ADD PRIMARY KEY (`id_perekaman`),
  ADD UNIQUE KEY `no_kk` (`no_kk`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `ktp_sementara`
--
ALTER TABLE `ktp_sementara`
  ADD PRIMARY KEY (`id_sementara`),
  ADD UNIQUE KEY `no_kk` (`no_kk`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`),
  ADD KEY `riwayat_user` (`riwayat_user`,`riwayat_arsip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `arsip_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `dt_ganti_foto`
--
ALTER TABLE `dt_ganti_foto`
  MODIFY `id_ganti` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dt_perekaman`
--
ALTER TABLE `dt_perekaman`
  MODIFY `id_perekaman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ktp_sementara`
--
ALTER TABLE `ktp_sementara`
  MODIFY `id_sementara` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
