-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- membuang struktur untuk table ujian_program.table_atlet
CREATE TABLE IF NOT EXISTS `table_atlet` (
  `id_atlet` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `alamat` text,
  `id_cabang_olahraga` int(11) DEFAULT NULL,
  `id_pelatih` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_atlet`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ujian_program.table_atlet: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `table_atlet` DISABLE KEYS */;
INSERT INTO `table_atlet` (`id_atlet`, `id_user`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `id_cabang_olahraga`, `id_pelatih`) VALUES
	(1, 1, 'budi', 'riau', '13/12/1996', 'Riau', 2, 1);
/*!40000 ALTER TABLE `table_atlet` ENABLE KEYS */;

-- membuang struktur untuk table ujian_program.table_cabang_olahraga
CREATE TABLE IF NOT EXISTS `table_cabang_olahraga` (
  `id_cabang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_cabang_olahraga` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_cabang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ujian_program.table_cabang_olahraga: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `table_cabang_olahraga` DISABLE KEYS */;
INSERT INTO `table_cabang_olahraga` (`id_cabang`, `nama_cabang_olahraga`) VALUES
	(1, 'Gulat'),
	(2, 'Tenis Meja'),
	(3, 'Bulu Tangkit'),
	(4, 'Lari');
/*!40000 ALTER TABLE `table_cabang_olahraga` ENABLE KEYS */;

-- membuang struktur untuk table ujian_program.table_event
CREATE TABLE IF NOT EXISTS `table_event` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_event` varchar(50) DEFAULT NULL,
  `nama_event` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ujian_program.table_event: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `table_event` DISABLE KEYS */;
INSERT INTO `table_event` (`id_event`, `jadwal_event`, `nama_event`) VALUES
	(1, '13/10/2021', 'PON'),
	(2, '13/10/2020', 'PON papua');
/*!40000 ALTER TABLE `table_event` ENABLE KEYS */;

-- membuang struktur untuk table ujian_program.table_latihan
CREATE TABLE IF NOT EXISTS `table_latihan` (
  `id_latihan` int(11) NOT NULL AUTO_INCREMENT,
  `jadwal_latihan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_latihan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ujian_program.table_latihan: ~3 rows (lebih kurang)
/*!40000 ALTER TABLE `table_latihan` DISABLE KEYS */;
INSERT INTO `table_latihan` (`id_latihan`, `jadwal_latihan`) VALUES
	(1, '13/10/2021'),
	(2, '14/10/2021'),
	(3, '15/10/2021');
/*!40000 ALTER TABLE `table_latihan` ENABLE KEYS */;

-- membuang struktur untuk table ujian_program.table_pelatih
CREATE TABLE IF NOT EXISTS `table_pelatih` (
  `id_palatih` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelatih` varchar(100) DEFAULT NULL,
  `alamat_pelatih` text,
  `tanggal_lahir_paltih` varchar(50) DEFAULT NULL,
  `cabang_pelatih` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_palatih`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ujian_program.table_pelatih: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `table_pelatih` DISABLE KEYS */;
INSERT INTO `table_pelatih` (`id_palatih`, `nama_pelatih`, `alamat_pelatih`, `tanggal_lahir_paltih`, `cabang_pelatih`) VALUES
	(1, 'Dian', 'Pangkalan', '10/10/1970', 1),
	(2, 'Yudi', 'Batam', '1/03/1979', 2);
/*!40000 ALTER TABLE `table_pelatih` ENABLE KEYS */;

-- membuang struktur untuk table ujian_program.table_user
CREATE TABLE IF NOT EXISTS `table_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` text,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ujian_program.table_user: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `table_user` DISABLE KEYS */;
INSERT INTO `table_user` (`id_user`, `username`, `password`, `role`) VALUES
	(1, 'budi', 'budi', 'atlet'),
	(2, 'admin', 'admin', 'admin');
/*!40000 ALTER TABLE `table_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
