-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_arsip.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table db_arsip.admin: ~0 rows (approximately)
REPLACE INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`) VALUES
	(1, 'Admin', 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- Dumping structure for table db_arsip.arsip
CREATE TABLE IF NOT EXISTS `arsip` (
  `arsip_id` int NOT NULL AUTO_INCREMENT,
  `arsip_waktu_upload` datetime NOT NULL,
  `arsip_petugas` int NOT NULL,
  `arsip_kode` varchar(255) NOT NULL,
  `arsip_nama` varchar(255) NOT NULL,
  `arsip_jenis` varchar(255) NOT NULL,
  `arsip_kategori` int NOT NULL,
  `arsip_keterangan` text NOT NULL,
  `arsip_file` varchar(255) NOT NULL,
  PRIMARY KEY (`arsip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table db_arsip.arsip: ~5 rows (approximately)
REPLACE INTO `arsip` (`arsip_id`, `arsip_waktu_upload`, `arsip_petugas`, `arsip_kode`, `arsip_nama`, `arsip_jenis`, `arsip_kategori`, `arsip_keterangan`, `arsip_file`) VALUES
	(12, '2023-02-11 03:20:42', 7, 'ARS001', 'Surat Keterangan Kelahiran', 'pdf', 11, '-', '527160218_surket kelahiran.pdf'),
	(13, '2023-02-11 03:23:21', 7, 'ARS002', 'Surat Keterangan Kematian', 'pdf', 12, '-', '306546730_surket kematian.pdf'),
	(14, '2023-02-11 03:26:22', 8, 'ARS003', 'Surat Keterangan Pindah', 'pdf', 13, '-', '1802088799_surket pindah.pdf'),
	(18, '2023-03-07 13:28:10', 7, 'ARS004', 'Surat Keterangan Pindah Datang', 'pdf', 22, '-', '77106463_surket pindah datang.pdf'),
	(19, '2023-03-07 13:28:56', 7, 'ARS005', 'Surat Pernyataan Cerai', 'pdf', 15, '-', '795031896_surper cerai.pdf'),
	(20, '2024-08-01 13:10:21', 7, 'ARS006', 'awdawd', 'jpg', 1, 'awdawd', '472854459_51Ga5GuElyL._AC_SX184_.jpg');

-- Dumping structure for table db_arsip.dt_ganti_foto
CREATE TABLE IF NOT EXISTS `dt_ganti_foto` (
  `id_ganti` int NOT NULL AUTO_INCREMENT,
  `tgl_input` date NOT NULL,
  `foto` text NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alasan` text NOT NULL,
  `agama` varchar(10) NOT NULL,
  `negara` varchar(20) NOT NULL,
  PRIMARY KEY (`id_ganti`),
  UNIQUE KEY `no_kk` (`no_kk`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_arsip.dt_ganti_foto: ~5 rows (approximately)
REPLACE INTO `dt_ganti_foto` (`id_ganti`, `tgl_input`, `foto`, `nama`, `no_kk`, `nik`, `tempat_lahir`, `tgl_lahir`, `alasan`, `agama`, `negara`) VALUES
	(8, '2023-08-05', '1625412208_download (2).jpg', 'Mutia Hartati', '6205063826200264', '6205000283718884', 'Muara Teweh', '2001-02-07', 'Foto sebelumnya tidak menggunakan Hijab', 'Islam', 'Indonesia'),
	(11, '2023-08-06', '2009988823_images (1).jpg', 'Ika Wahyuni', '6205083479305500', '6205038674293847', 'Muara Teweh', '1984-04-12', 'Foto tidak sama lagi sama dengan penampilan sekarang', 'Islam', 'Indonesia'),
	(12, '2023-08-06', '461806466_images.jpg', 'Suprano', '6205066252922012', '6205000238487272', 'Muara Teweh', '1989-11-25', 'Warna background tidak sama dengan tahun lahir', 'Islam', 'Indonesia'),
	(14, '2023-08-08', '1670945286_download.jpg', 'Lala Nasyiah', '350637174928212', '350692384777282', 'Kediri', '2002-01-09', 'Foto sebelumnya tidak menggunakan Hijab', 'Islam', 'Indonesia'),
	(15, '2023-08-09', '1751214289_download (3).jpg', 'Eli Permata', '6205098790724578', '6205000284362883', 'Muara Teweh', '2003-04-14', 'Foto tidak sama lagi sama dengan penampilan sekarang', 'Kristen', 'Indonesia');

-- Dumping structure for table db_arsip.dt_perekaman
CREATE TABLE IF NOT EXISTS `dt_perekaman` (
  `id_perekaman` int NOT NULL AUTO_INCREMENT,
  `tgl_input` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `negara` varchar(20) NOT NULL,
  PRIMARY KEY (`id_perekaman`),
  UNIQUE KEY `no_kk` (`no_kk`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_arsip.dt_perekaman: ~7 rows (approximately)
REPLACE INTO `dt_perekaman` (`id_perekaman`, `tgl_input`, `nama`, `no_kk`, `nik`, `tempat_lahir`, `tgl_lahir`, `alamat`, `agama`, `negara`) VALUES
	(7, '2024-08-04', 'Ratna Yuniar', '6205000036549871', '6205000023621283', 'Palangkaraya', '1998-08-26', 'Jl. Pramuka', 'Islam', 'Indonesia'),
	(8, '2024-08-05', 'Yono Pratama', '6205000472619374', '6205000773927263', 'Muara Teweh', '2000-01-04', 'Jl. Nenas', 'Islam', 'Indonesia'),
	(9, '2024-08-05', 'Pandu Salahudin', '6205077987255120', '6205000037265113', 'Muara Teweh', '2000-10-15', 'Jl. Imam Bonjol', 'Kristen', 'Indonesia'),
	(16, '2024-08-13', 'David', '1234567890123455', '1234567890123455', 'Jakarta', '2024-08-22', 'jl. negara no 12', 'Islam', 'indonesia'),
	(17, '2024-08-11', 'Willy', '0987654321232124', '2938746503874654', 'Banjarmasin', '2024-08-09', 'jl negara no 12 ', 'Islam', 'indonesia'),
	(18, '2024-09-16', 'Toriq', '8774565430000000', '2837423452350000', 'Banjarmasin', '2024-08-16', 'Jl. HKSN', 'Islam', 'indonesia'),
	(19, '2023-06-16', 'Rospi', '1231231231000000', '9238652352300000', 'martapura', '2024-08-16', 'Jl. Panti Ajar', 'Islam', 'indonesia');

-- Dumping structure for table db_arsip.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int NOT NULL AUTO_INCREMENT,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_keterangan` text NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table db_arsip.kategori: ~8 rows (approximately)
REPLACE INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_keterangan`) VALUES
	(1, 'Tidak berkategori', 'Semua yang tidak berkategori'),
	(11, 'Surat Keterangan Kelahiran', 'Akta kelahiran'),
	(12, 'Surat Keterangan Kematian', 'Surat yang membuktikan kematian seseorang'),
	(13, 'Surat Keterangan Pindah', 'Surat perubahan keluarga yang tidak pindah'),
	(15, 'Surat Pernyataan Cerai', 'Surat yang mengajukan gugatan cerai kepada pasangan'),
	(17, 'Surat Kehilangan KTP', 'Surat kehilangan KTP'),
	(22, 'Surat Keterangan Pindah Datang', 'Surat kependudukan penerbitan KK di alamat baru'),
	(23, 'Surat Keterangan Pindah Datang', 'Surat pindah datang bagi yang tidak pindah');

-- Dumping structure for table db_arsip.ktp_sementara
CREATE TABLE IF NOT EXISTS `ktp_sementara` (
  `id_sementara` int NOT NULL AUTO_INCREMENT,
  `tgl_input` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `negara` varchar(15) NOT NULL,
  PRIMARY KEY (`id_sementara`),
  UNIQUE KEY `no_kk` (`no_kk`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_arsip.ktp_sementara: ~4 rows (approximately)
REPLACE INTO `ktp_sementara` (`id_sementara`, `tgl_input`, `nama`, `no_kk`, `nik`, `tempat_lahir`, `tgl_lahir`, `alamat`, `agama`, `negara`) VALUES
	(6, '2023-08-04', 'Ratna Yuniar', '6205000036549871', '6205000023621283', 'Palangkaraya', '1998-08-26', 'Jl. Pramuka', 'Islam', 'Indonesia'),
	(7, '2024-08-07', 'Raul', '1234567890123456', '1234567890123456', 'Palangkaraya', '2024-08-07', 'Jln. Pramuka simpang pramuka 2', 'Islam', 'indonesia'),
	(8, '2024-08-13', 'Ferda', '1291291291294536', '0897234502384523', 'Bali', '2024-08-14', 'Jl. Pramuka', 'kristen', 'indonesia'),
	(9, '2024-08-15', 'Hermanto', '9384716349500000', '2387465283742350', 'Banjarmasin', '2024-08-14', 'Jl. Utara', 'kristen', 'indonesia'),
	(10, '2024-08-14', 'Bella', '6787786786700000', '8273564234235000', 'banjarbaru', '2024-08-14', 'Jl. Timor', 'kristen', 'indonesia');

-- Dumping structure for table db_arsip.layanan_online
CREATE TABLE IF NOT EXISTS `layanan_online` (
  `id_layanan` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `jenis_pelayanan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_layanan`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_arsip.layanan_online: ~10 rows (approximately)
REPLACE INTO `layanan_online` (`id_layanan`, `tanggal`, `nama_user`, `jenis_pelayanan`) VALUES
	(3, '2024-08-14', 'Glora Pratama', 'pengaduan'),
	(4, '2024-08-12', 'Glora Pratama', 'perekaman'),
	(6, '2024-08-13', 'Glora Pratama', 'surat pindah'),
	(7, '2024-08-13', 'Glora Pratama', 'perekaman'),
	(8, '2023-06-14', 'Glora Pratama', 'surat pindah'),
	(9, '2024-08-13', 'Glora Pratama', 'surat pindah'),
	(10, '2024-08-15', 'Glora Pratama', 'surat pindah'),
	(11, '2024-08-15', 'Glora Pratama', 'surat pindah'),
	(12, '2024-08-16', 'Glora Pratama', 'perekaman'),
	(13, '2024-08-16', 'Glora Pratama', 'perekaman');

-- Dumping structure for table db_arsip.penerbitan
CREATE TABLE IF NOT EXISTS `penerbitan` (
  `id_penerbitan` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `jenis_dokumen` varchar(255) NOT NULL,
  PRIMARY KEY (`id_penerbitan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_arsip.penerbitan: ~11 rows (approximately)
REPLACE INTO `penerbitan` (`id_penerbitan`, `tanggal`, `nama_user`, `jenis_dokumen`) VALUES
	(1, '2024-08-13', 'Ujang', 'pengaduan'),
	(2, '2024-08-13', 'Ujang', 'surat pindah'),
	(3, '2024-08-13', 'Glora Pratama', 'perekaman'),
	(5, '2024-08-12', 'Icha', 'pengaduan'),
	(6, '2024-08-15', 'Jumilin', 'pengaduan'),
	(7, '2024-08-13', 'Glora Pratama', 'surat pindah'),
	(8, '2024-08-15', 'Glora Pratama', 'surat pindah'),
	(9, '2024-08-15', 'Glora Pratama', 'surat pindah'),
	(10, '2024-08-16', 'Glora Pratama', 'perekaman'),
	(11, '2024-08-16', 'Glora Pratama', 'perekaman');

-- Dumping structure for table db_arsip.pengaduan
CREATE TABLE IF NOT EXISTS `pengaduan` (
  `id_pengaduan` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `kategori_pengaduan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_pengaduan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_arsip.pengaduan: ~5 rows (approximately)
REPLACE INTO `pengaduan` (`id_pengaduan`, `tanggal`, `nama_user`, `kategori_pengaduan`, `keterangan`) VALUES
	(1, '2024-08-07', 'Ridho', 'Penggunaan Fasilitas millik umum', 'Salah satu camat menggunakan fasilitas kecamatan untuk berlibur ke luar kota'),
	(3, '2024-08-14', 'Glora Pratama', 'Korupsi', 'Adanya korupsi yang terjadi yang dilakukan oleh seorang akuntan'),
	(4, '2024-08-13', 'Ujang', 'Pungutan Liar', 'Salah satu pemerintah pada lembaga melakukan pungli di luar peraturan'),
	(5, '2024-08-12', 'Icha', 'Pelayanan informasi publik', 'Pihak lembaga memberikan informasi yang tidak sesuai kepada masyarakat'),
	(6, '2024-08-15', 'Jumilin', 'Penggunaan dana tidak sesuai anggaran', 'Kepala pihak yang berwenang menghabiskan dana diluar batas anggaran');

-- Dumping structure for table db_arsip.petugas
CREATE TABLE IF NOT EXISTS `petugas` (
  `petugas_id` int NOT NULL AUTO_INCREMENT,
  `petugas_nama` varchar(255) NOT NULL,
  `petugas_username` varchar(255) NOT NULL,
  `petugas_password` varchar(255) NOT NULL,
  `petugas_foto` varchar(255) NOT NULL,
  PRIMARY KEY (`petugas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table db_arsip.petugas: ~6 rows (approximately)
REPLACE INTO `petugas` (`petugas_id`, `petugas_nama`, `petugas_username`, `petugas_password`, `petugas_foto`) VALUES
	(7, 'Glora Pratama', 'Petugas01', '5f4dcc3b5aa765d61d8327deb882cf99', '1976992355_1.jpg'),
	(8, 'Ina Mandasari', 'Petugas02', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
	(9, 'Upik Hakim', 'Petugas03', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
	(10, 'Pandu Uwais', 'Petugas04', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
	(15, 'Jonny Bentam', 'petugas05', '5f4dcc3b5aa765d61d8327deb882cf99', '1900368932_default.png'),
	(16, 'Imam Maualana', 'Imam', '5f4dcc3b5aa765d61d8327deb882cf99', '1965775328_2.jpg');

-- Dumping structure for table db_arsip.riwayat
CREATE TABLE IF NOT EXISTS `riwayat` (
  `riwayat_id` int NOT NULL AUTO_INCREMENT,
  `riwayat_waktu` datetime NOT NULL,
  `riwayat_user` int NOT NULL,
  `riwayat_arsip` int NOT NULL,
  PRIMARY KEY (`riwayat_id`),
  KEY `riwayat_user` (`riwayat_user`,`riwayat_arsip`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table db_arsip.riwayat: ~12 rows (approximately)
REPLACE INTO `riwayat` (`riwayat_id`, `riwayat_waktu`, `riwayat_user`, `riwayat_arsip`) VALUES
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
	(23, '2024-03-07 13:10:17', 16, 14);

-- Dumping structure for table db_arsip.surat_pindah
CREATE TABLE IF NOT EXISTS `surat_pindah` (
  `id_surat_pindah` int NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `alasan_pindah` text NOT NULL,
  `alamat_pindah` text NOT NULL,
  PRIMARY KEY (`id_surat_pindah`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_arsip.surat_pindah: ~6 rows (approximately)
REPLACE INTO `surat_pindah` (`id_surat_pindah`, `tanggal`, `nama_user`, `nik`, `kk`, `alasan_pindah`, `alamat_pindah`) VALUES
	(3, '2024-08-13', 'Glora Pratama', '192837503948576', '192837503948576', 'Rumah Baru', 'Jl. Veteran'),
	(4, '2024-08-13', 'Ujang', '192837503948572', '192837503948572', 'Pindah karena pekerjaan', 'Jl. Trisakti, Komplek Permai'),
	(5, '2023-06-14', 'Glora Pratama', '1423428759473984', '0918736459123455', 'Kawin Cerai', 'Jl. Surapati'),
	(6, '2024-08-13', 'Glora Pratama', '1212121212121212', '7756999323466453', 'Kawin Cerai', 'Jl. Margasari'),
	(7, '2024-08-15', 'Glora Pratama', '0890889789700000', '0918736459123455', 'Rumah tidak lagi layak untuk ditempati', 'Jl. Kenanga'),
	(8, '2024-08-15', 'Glora Pratama', '9876564321000000', '7236548123410000', 'Pindah karena pekerjaan', 'Jl. Rambutan');

-- Dumping structure for table db_arsip.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table db_arsip.user: ~6 rows (approximately)
REPLACE INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`) VALUES
	(16, 'Glora Pratama', 'glora', '5f4dcc3b5aa765d61d8327deb882cf99', '435573673_Dokumen 6_1 - Copy.jpg'),
	(17, 'Yulina Uyainah', 'yulina', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
	(18, 'Vanesa Hariyah', 'vanesa', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
	(19, 'Septi Hartati', 'septi', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
	(20, 'Soleh Gunarto', 'soleh', '5f4dcc3b5aa765d61d8327deb882cf99', ''),
	(22, 'zidan', 'zidan', '5f4dcc3b5aa765d61d8327deb882cf99', '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
