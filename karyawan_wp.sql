-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.9.2-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for karyawan_wp
DROP DATABASE IF EXISTS `karyawan_wp`;
CREATE DATABASE IF NOT EXISTS `karyawan_wp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `karyawan_wp`;

-- Dumping structure for table karyawan_wp.karyawan
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE IF NOT EXISTS `karyawan` (
  `nip` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table karyawan_wp.karyawan: ~20 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` (`nip`, `nama`, `jk`, `alamat`) VALUES
	('1', 'Anton Fatoni', 'Laki-laki', 'Bali'),
	('10', 'Poniran', 'Laki-laki', 'Banyuwangi'),
	('11', 'Ipung Sumari', 'Laki-laki', 'Malang'),
	('12', 'Jaya', 'Laki-laki', 'Sidoarjo'),
	('13', 'Sunardi', 'Laki-laki', 'Tulungagung'),
	('14', 'Marhani', 'Perempuan', 'Bali'),
	('15', 'Edi Suminar', 'Laki-laki', 'Trenggalek'),
	('16', 'Alwi Yunus', 'Laki-laki', 'Solo'),
	('17', 'Febriansyah', 'Laki-laki', 'Jakarta'),
	('18', 'Qomarrudin', 'Laki-laki', 'Surabaya'),
	('19', 'Nurohim', 'Laki-laki', 'Kediri'),
	('2', 'Kusna', 'Perempuan', 'Surakarta'),
	('20', 'Evan W', 'Laki-laki', 'Srengat'),
	('3', 'Dedi Irawan', 'Laki-laki', 'Blitar'),
	('4', 'Edy Suryadi', 'Laki-laki', 'Jombang'),
	('5', 'Andi Irawan', 'Laki-laki', 'Bayuwangi'),
	('6', 'Beki', 'Laki-laki', 'Bojonegoro'),
	('7', 'Hartato', 'Laki-laki', 'Lampung'),
	('8', 'Jalaludin', 'Laki-laki', 'Semarang'),
	('9', 'Ahmad Sofyan', 'Laki-laki', 'Surabaya');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- Dumping structure for table karyawan_wp.kriteria
DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE IF NOT EXISTS `kriteria` (
  `nama` varchar(50) NOT NULL,
  `c1` int(10) DEFAULT NULL,
  `c2` int(10) DEFAULT NULL,
  `c3` int(10) DEFAULT NULL,
  `c4` int(10) DEFAULT NULL,
  `c5` int(10) DEFAULT NULL,
  `c6` int(11) DEFAULT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table karyawan_wp.kriteria: ~20 rows (approximately)
/*!40000 ALTER TABLE `kriteria` DISABLE KEYS */;
INSERT INTO `kriteria` (`nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
	('Ahmad Sofyan', 60, 56, 54, 73, 40, 20),
	('Alwi Yunus', 63, 56, 49, 73, 60, 100),
	('Andi Irawan', 63, 48, 57, 67, 60, 60),
	('Anton Fatoni', 97, 100, 91, 100, 100, 60),
	('Beki', 37, 64, 57, 27, 40, 100),
	('Dedi Irawan', 73, 80, 86, 93, 80, 60),
	('Edi Suminar', 37, 32, 57, 20, 40, 100),
	('Edy Suryadi', 80, 92, 74, 93, 80, 40),
	('Evan W', 97, 96, 80, 80, 60, 60),
	('Febriansyah', 77, 88, 83, 100, 60, 80),
	('Hartato', 83, 96, 77, 93, 80, 60),
	('Ipung Sumari', 87, 88, 77, 80, 60, 20),
	('Jalaludin', 80, 68, 57, 33, 40, 100),
	('Jaya', 80, 56, 57, 67, 60, 100),
	('Kusna', 97, 80, 89, 80, 100, 100),
	('Marhani', 73, 88, 74, 80, 80, 100),
	('Nurohim', 93, 76, 89, 73, 100, 60),
	('Poniran', 93, 92, 91, 100, 80, 60),
	('Qomarrudin', 83, 60, 77, 73, 80, 60),
	('Sunardi', 93, 100, 91, 73, 80, 100);
/*!40000 ALTER TABLE `kriteria` ENABLE KEYS */;

-- Dumping structure for table karyawan_wp.rangking
DROP TABLE IF EXISTS `rangking`;
CREATE TABLE IF NOT EXISTS `rangking` (
  `nama` varchar(30) NOT NULL,
  `nilai` double NOT NULL DEFAULT 0,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table karyawan_wp.rangking: ~20 rows (approximately)
/*!40000 ALTER TABLE `rangking` DISABLE KEYS */;
INSERT INTO `rangking` (`nama`, `nilai`) VALUES
	('Ahmad Sofyan', 0.0343544333913),
	('Alwi Yunus', 0.043340744392088),
	('Andi Irawan', 0.040946616344195),
	('Anton Fatoni', 0.064359091884695),
	('Beki', 0.032545506298974),
	('Dedi Irawan', 0.055000353675889),
	('Edi Suminar', 0.028040546103247),
	('Edy Suryadi', 0.053304160928375),
	('Evan W', 0.054431970872408),
	('Febriansyah', 0.054999351694093),
	('Hartato', 0.056727307448925),
	('Ipung Sumari', 0.046741570585486),
	('Jalaludin', 0.039490310806959),
	('Jaya', 0.046258846619887),
	('Kusna', 0.063065450359974),
	('Marhani', 0.055705357969095),
	('Nurohim', 0.058162402979937),
	('Poniran', 0.06027515305954),
	('Qomarrudin', 0.050980038567186),
	('Sunardi', 0.061270786017749);
/*!40000 ALTER TABLE `rangking` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
