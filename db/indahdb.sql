-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 06:20 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `indahdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `barang_id` varchar(10) NOT NULL,
  `barang_nm` varchar(100) NOT NULL,
  `department_id` varchar(10) NOT NULL,
  `harga_beli` int(15) NOT NULL,
  `harga_jual` int(15) NOT NULL,
  `stok` int(10) NOT NULL,
  `supplier_id` varchar(10) NOT NULL,
  PRIMARY KEY (`barang_id`),
  KEY `department_id` (`department_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barang_id`, `barang_nm`, `department_id`, `harga_beli`, `harga_jual`, `stok`, `supplier_id`) VALUES
('ATK00022', 'BK BERHITUNG', 'ATK', 6700, 7100, 5, 'sp02'),
('ATK00023', 'BK MEWARNAI JUMBO', 'ATK', 6800, 7200, 53, 'sp02'),
('ATK00024', 'BK MEWARNAI KECIL', 'ATK', 6900, 7300, 45, 'sp02'),
('ATK00104', 'SIDU BK TULIS 32', 'ATK', 1500, 1900, 43, 'sp02'),
('ATK00107', 'SIDU BK TULIS 38', 'ATK', 1600, 2000, 33, 'sp02'),
('ATK00145', 'SIDU BK TULIS 58', 'ATK', 1700, 2100, 33, 'sp02'),
('ATK00183', 'BIG BOSS BK TULIS 42', 'ATK', 2700, 3100, 10, 'sp02'),
('ATK00243', 'WORRY CLIP BOARD 307 S KCL', 'ATK', 10400, 10800, 12, 'sp06'),
('ATK00301', 'IBOOK BK FOLIO 80', 'ATK', 5200, 5600, 10, 'sp02'),
('ATK00366', 'APIK OIL PASTEL K', 'ATK', 10300, 10700, 13, 'sp06'),
('ATK00888', 'BK TABUNGAN', 'ATK', 6400, 6800, 100, 'sp02'),
('ATK00890', 'AGENDA PRIMA MINI', 'ATK', 6100, 6500, 6, 'sp02'),
('ATK00891', 'AGENDA SM-501 PRIMA', 'ATK', 6200, 6600, 6, 'sp02'),
('ATK00892', 'AGENDA SM-747 PRIMA', 'ATK', 6300, 6700, 6, 'sp02'),
('ATK02316', 'KANGGURU BLOK NOTE GRS K', 'ATK', 3400, 3800, 20, 'sp02'),
('ATK02323', 'KANGGURU BLOK NOTE PLS B', 'ATK', 3500, 3900, 20, 'sp02'),
('ATK02451', 'KANGGURU NOTA NCR 2PLY K', 'ATK', 3100, 3500, 50, 'sp02'),
('ATK02452', 'KANGGURU NOTA NCR 2PLY B', 'ATK', 3200, 3600, 50, 'sp02'),
('ATK02453', 'KANGGURU NOTA NCR 3PLY B', 'ATK', 3300, 3700, 20, 'sp02'),
('ATK02806', 'BK MEWARNAI HELLO KITTY', 'ATK', 7000, 7400, 10, 'sp02'),
('ATK02807', 'BK ATLAS B', 'ATK', 7100, 7500, 3, 'sp02'),
('ATK02808', 'KAMUS IND-ENG B', 'ATK', 7200, 7600, 2, 'sp02'),
('ATK02809', 'KAMUS IND-ENG K', 'ATK', 7300, 7700, 1, 'sp02'),
('ATK03023', 'BENGYU BK KWARTO 200', 'ATK', 5000, 5400, 6, 'sp02'),
('ATK03054', 'BENGYU BK FOLIO 200', 'ATK', 5300, 5700, 6, 'sp02'),
('ATK03092', 'BENGYU BK OKTAVO 200', 'ATK', 4900, 5300, 9, 'sp02'),
('ATK03748', 'KIKY BK OKTAVO 200', 'ATK', 4800, 5200, 3, 'sp02'),
('ATK10066', 'SIMBALION OIL PASTEL KF-24C', 'ATK', 10200, 10600, 3, 'sp06'),
('ATK10145', 'PAPER STAR BK KWARTO 100', 'ATK', 4200, 4600, 2, 'sp02'),
('ATK10282', 'PAPER STAR BK TULIS 58', 'ATK', 2900, 3300, 3, 'sp02'),
('ATK11571', 'MIRAGE BK OKTAVO 100', 'ATK', 4700, 5100, 6, 'sp02'),
('ATK12155', 'BK KAS 2 KOLOM 100 lbr', 'ATK', 4000, 4400, 5, 'sp02'),
('ATK12156', 'BK KAS 3 KOLOM 100 lbr', 'ATK', 4100, 4500, 4, 'sp02'),
('ATK12926', 'KIKY BK BOXY 50', 'ATK', 2600, 3000, 5, 'sp02'),
('ATK16000', 'KIKY BK GAMBAR 20X30', 'ATK', 5700, 6100, 20, 'sp02'),
('ATK18040', 'KIKY BK GAMBAR A3', 'ATK', 5900, 6300, 20, 'sp02'),
('ATK19615', 'BINDER A5 ', 'ATK', 12000, 11100, 6, 'sp06'),
('ATK20023', 'SIDU BK MATEMATIKA 38', 'ATK', 3000, 3400, 30, 'sp02'),
('ATK20288', 'SDI STAPLES NO.3/1204-10', 'ATK', 2000, 11200, 6, 'sp06'),
('ATK20402', 'SDI STAPLES NO.1210/2310-10', 'ATK', 16000, 11300, 11, 'sp06'),
('ATK21003', 'SDI STAPLES NO.1220/2320-10', 'ATK', 19000, 11400, 14, 'sp06'),
('ATK21020', 'SIDU BK GAMBAR A3', 'ATK', 5800, 6200, 10, 'sp02'),
('ATK21037', 'SIDU BK GAMBAR 20X30', 'ATK', 5500, 5900, 17, 'sp02'),
('ATK22000', 'SDI STAPLER 1140 HEAVY DUTY', 'ATK', 20400, 11500, 10, 'sp06'),
('ATK22001', 'GRS BESI 40CM', 'ATK', 8000, 11600, 10, 'sp06'),
('ATK22002', 'GRS BESI 60CM', 'ATK', 10000, 11700, 3, 'sp06'),
('ATK23284', 'KERTAS ORIGAMI 14X14 100lbr', 'ATK', 7600, 8000, 11, 'sp02'),
('ATK23512', 'KERTAS ORIGAMI 12X12 25lbr', 'ATK', 7400, 7800, 26, 'sp02'),
('ATK23529', 'KERTAS ORIGAMI 16X16 25lbr', 'ATK', 7700, 8100, 4, 'sp02'),
('ATK23741', 'KERTAS ORIGAMI 14X14 25lbr', 'ATK', 7500, 7900, 12, 'sp02'),
('ATK28210', 'SIDU KWITANSI 50  ', 'ATK', 6600, 7000, 15, 'sp02'),
('ATK28234', 'SIDU KWITANSI 40 M', 'ATK', 6500, 6900, 6, 'sp02'),
('ATK30106', 'PENSIL WARNA GREEBEL 12W B', 'ATK', 9600, 10000, 17, 'sp06'),
('ATK30113', 'PENSIL WARNA FABERCASTLE 12 W B', 'ATK', 9700, 10100, 14, 'sp06'),
('ATK31165', 'TITI OIL PASTEL 12W', 'ATK', 10000, 10400, 6, 'sp06'),
('ATK34313', 'PENSIL WARNA GREEBEL 12W K', 'ATK', 9500, 9900, 9, 'sp06'),
('ATK37123', 'GREEBEL OIL PASTEL 12W', 'ATK', 9900, 10300, 6, 'sp06'),
('ATK40210', 'AL GOLD BK BOXY 42', 'ATK', 2100, 2500, 8, 'sp02'),
('ATK40500', 'AL GOLD BK TULIS 38', 'ATK', 1900, 2300, 11, 'sp02'),
('ATK40532', 'AL GOLD BK TULIS 32', 'ATK', 1800, 2200, 45, 'sp02'),
('ATK40999', 'AL GOLD BK TULIS 58', 'ATK', 2000, 2400, 9, 'sp02'),
('ATK42050', 'ALTECO SUPER GLUE K', 'ATK', 8300, 8700, 24, 'sp02'),
('ATK42051', 'CASTOL GLUE K', 'ATK', 8400, 8800, 9, 'sp02'),
('ATK42052', 'ALTECO GLUE K', 'ATK', 8500, 8900, 12, 'sp02'),
('ATK42053', 'SIDU HVS 80gr A4s', 'ATK', 8600, 9000, 2, 'sp02'),
('ATK42054', 'SIDU HVS 70gr A4', 'ATK', 8700, 9100, 2, 'sp02'),
('ATK42055', 'SIDU HVS 70gr F4', 'ATK', 8800, 9200, 5, 'sp02'),
('ATK42056', 'GOLD HVS 80gr F4', 'ATK', 8900, 9300, 2, 'sp02'),
('ATK42057', 'GUNINDO GUNTING DX8', 'ATK', 9000, 9400, 7, 'sp06'),
('ATK42058', 'IDEAL GUNTING DR7 KARET', 'ATK', 9100, 9500, 4, 'sp06'),
('ATK42059', 'DRUPA CUTTER A300', 'ATK', 9200, 9600, 12, 'sp06'),
('ATK42070', 'KERTAS BINDER B5 LOSSE LEAF 50lbr', 'ATK', 8200, 8600, 5, 'sp02'),
('ATK42121', 'KERTAS BINDER MINI', 'ATK', 7800, 8200, 8, 'sp02'),
('ATK42122', 'KERTAS BINDER A5 WARNA', 'ATK', 7900, 8300, 7, 'sp02'),
('ATK42123', 'KERTAS BINDER LOSSE LEAF A5 50lbr', 'ATK', 8000, 8400, 3, 'sp02'),
('ATK42124', 'KERTAS BINDER LOSSE LEAF A5 100lbr', 'ATK', 8100, 8500, 5, 'sp02'),
('ATK44109', 'KIKY KWITANSI 50 B', 'ATK', 5400, 5800, 30, 'sp02'),
('ATK48034', 'PAPERLINE NOTA NCR 2PLY K', 'ATK', 3600, 4000, 42, 'sp02'),
('ATK48041', 'PAPERLINE NOTA NCR 2PLY B', 'ATK', 3700, 4100, 7, 'sp02'),
('ATK48058', 'PAPERLINE NOTA NCR 3PLY K', 'ATK', 3800, 4200, 22, 'sp02'),
('ATK48079', 'P''PER NOTA 1PLY K', 'ATK', 3900, 4300, 18, 'sp02'),
('ATK55902', 'KIKY BK TULIS 32', 'ATK', 2200, 2600, 23, 'sp02'),
('ATK55903', 'KIKY BK TULIS 38', 'ATK', 2300, 2700, 10, 'sp02'),
('ATK55904', 'KIKY BK TULIS 58', 'ATK', 2400, 2800, 12, 'sp02'),
('ATK57361', 'GELATIK BK GAMBAR A4', 'ATK', 5600, 6000, 10, 'sp02'),
('ATK58523', 'PENSIL WARNA LUNA 12W B', 'ATK', 9800, 10200, 11, 'sp06'),
('ATK68769', 'VISION BK KWARTO 100', 'ATK', 4500, 4900, 8, 'sp02'),
('ATK69542', 'VISION BK KWARTO 200', 'ATK', 4400, 4800, 5, 'sp02'),
('ATK80111', 'KIKY CLIP BOARD F4', 'ATK', 16000, 11000, 6, 'sp06'),
('ATK81421', 'DRUPA CUTTER L600 A', 'ATK', 9300, 9700, 12, 'sp06'),
('ATK85900', 'KIKY BK HALUS 38', 'ATK', 2500, 2900, 10, 'sp02'),
('ATK87560', 'SHINTOENG LILIN MAINAN', 'ATK', 9400, 9800, 6, 'sp06'),
('ATK89571', 'VISION BK FOLIO 100', 'ATK', 5100, 5500, 10, 'sp02'),
('ATK90082', 'TITI OIL PASTEL 18W', 'ATK', 10100, 10500, 6, 'sp06'),
('ATK91510', 'CHUNG HWA CLIP BOARD TRANS', 'ATK', 10500, 10900, 6, 'sp06'),
('ATK94550', 'DISTINCTION BK TULIS 42', 'ATK', 2800, 3200, 16, 'sp02'),
('ATK95425', 'SUKOI BK KWARTO 100', 'ATK', 4300, 4700, 4, 'sp02'),
('ATK95681', 'VISION BK EXSPEDISI 100', 'ATK', 4600, 5000, 7, 'sp02'),
('GLS0001', 'Piring', 'GLS', 60000, 72000, 12, 'sp05'),
('GLS0002', 'Gelas', 'GLS', 45000, 54000, 12, 'sp05'),
('KRT0001', 'Lifebuoy', 'KRT', 1500, 1800, 5, 'sp04'),
('KRT0002', 'Rinso', 'KRT', 6000, 7200, 3, 'sp04'),
('KRT0003', 'Rinso Sachet', 'KRT', 1000, 1200, 5, 'sp04'),
('KRT0004', 'Sunslik Black Sachet', 'KRT', 550, 660, 5, 'sp04'),
('KRT0005', 'Sunslik Black', 'KRT', 5800, 6960, 5, 'sp04'),
('KRT0006', 'Sinzui', 'KRT', 2750, 3300, 5, 'sp04'),
('KRT0007', 'Lux', 'KRT', 2250, 2700, 5, 'sp04'),
('KRT0008', 'Lourier 10', 'KRT', 3500, 4200, 3, 'sp04'),
('MKN0001', 'Beras Raja Lele 5 Kg', 'MKN', 15000, 18000, 2, 'sp03'),
('MKN0003', 'Gulaku 100 gr', 'MKN', 4900, 5880, 2, 'sp03'),
('MKN0004', 'Gula Lokal 100 gr', 'MKN', 4500, 5400, 2, 'sp03'),
('MKN0005', 'Gula Import 100gr', 'MKN', 4800, 5760, 2, 'sp03'),
('MKN0006', 'Bimoli 100 Ltr', 'MKN', 14800, 17760, 3, 'sp03'),
('MKN0007', 'Filma 100 Ltr', 'MKN', 15000, 18000, 2, 'sp03'),
('MKN0008', 'Sanita 100 Ltr', 'MKN', 14400, 17280, 3, 'sp03'),
('MKN0009', 'Teh Botol Sosro', 'MKN', 2150, 2580, 4, 'sp03'),
('MKN0010', 'Cocacola', 'MKN', 8800, 10560, 4, 'sp03'),
('MKN0011', 'Fanta', 'MKN', 8000, 9600, 4, 'sp03'),
('MKN0012', 'Syrup ABC', 'MKN', 19500, 23400, 3, 'sp03'),
('MKN0013', 'Syrup Marjan', 'MKN', 22600, 27120, 2, 'sp03'),
('OBT0001', 'Sanaflu', 'OBT', 3150, 3780, 2, 'sp01'),
('OBT0002', 'Fix', 'OBT', 2200, 2640, 2, 'sp02');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `keluar_id` int(255) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `barang_id` varchar(10) NOT NULL,
  `barang_nm` varchar(100) NOT NULL,
  `unit_id` varchar(10) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `karyawan_id` varchar(10) NOT NULL,
  PRIMARY KEY (`keluar_id`),
  KEY `barang_id` (`barang_id`),
  KEY `karyawan_id` (`karyawan_id`),
  KEY `unit_id` (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `masuk_id` int(255) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `barang_id` varchar(10) NOT NULL,
  `barang_nm` varchar(100) NOT NULL,
  `harga_beli` int(30) NOT NULL,
  `harga_jual` int(30) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `supplier_id` varchar(10) NOT NULL,
  PRIMARY KEY (`masuk_id`),
  KEY `barang_id` (`barang_id`),
  KEY `supplier_id` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` varchar(10) NOT NULL,
  `department_nm` varchar(100) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_nm`) VALUES
('ATK', 'Alat Tulis Kantor'),
('GLS', 'Perabot'),
('KRT', 'Kebutuhan Rumah Tangga'),
('MKN', 'Makanan'),
('OBT', 'Obat-obatan');

-- --------------------------------------------------------

--
-- Table structure for table `history_login`
--

CREATE TABLE IF NOT EXISTS `history_login` (
  `history_id` int(255) NOT NULL AUTO_INCREMENT,
  `tanggal` datetime NOT NULL,
  `karyawan_id` varchar(10) NOT NULL,
  PRIMARY KEY (`history_id`),
  KEY `karyawan_id` (`karyawan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `karyawan_id` varchar(10) NOT NULL,
  `karyawan_nm` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `bagian` varchar(10) NOT NULL,
  `no_telp` int(14) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`karyawan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`karyawan_id`, `karyawan_nm`, `username`, `password`, `jabatan`, `bagian`, `no_telp`, `foto`) VALUES
('123', 'Ilma Yurdianti', 'ilma', '123', 'Web', 'sleman', 823456, 'none'),
('K0011', 'Anik Wijayanti', 'Anik', 'K0011', 'Kasir', 'sleman', 823456, 'none'),
('K0012', 'Budiman ', 'Budi', 'K0012', 'Staff Gudang', 'sleman', 823456, 'none'),
('K0013', 'Retno Wahyuningtyas', 'Retno', 'K0013', 'Accounting', 'sleman', 823456, 'none'),
('K0014', 'Fandy Noer', 'Fandy', 'K0014', 'Supervisor', 'sleman', 823456, 'none'),
('K0015', 'Hasan Sudira', 'Hasan', 'K0015', 'Staff Gudang', 'sleman', 823456, 'none'),
('K0016', 'Indra Maulana', 'Indra', 'K0016', 'Staff Gudang', 'sleman', 823456, 'none'),
('K0017', 'Ainun Najib', 'Inun', 'K0017', 'Pelayan Toko', 'sleman', 823456, 'none'),
('K0018', 'Danny Hidayat ', 'Danny ', 'K0018', 'Pelayan Toko', 'sleman', 823456, 'none'),
('K0019', 'Fitria Nuriyanti', 'Fitria', 'K0019', 'Pelayan Toko', 'sleman', 823456, 'none'),
('K0020', 'Toha Mukti', 'Toha', 'K0020', 'Supervisor', 'sleman', 823456, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_id` varchar(10) NOT NULL,
  `supplier_nm` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `department_id` varchar(10) NOT NULL,
  PRIMARY KEY (`supplier_id`),
  KEY `department_id` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_nm`, `alamat`, `department_id`) VALUES
('sp01', 'PT. Twiji Kimia', 'JL. Rawe Rawe 26 Jakarta', 'OBT'),
('sp02', 'PT. Sumber Makmur', 'JL. Diponegoro, No. 71 Ponorogo', 'ATK'),
('sp03', 'PT. Citrafood Mandiri', 'Jl. Swadaya 1 No. 8-A Madiun', 'MKN'),
('sp04', 'PT. Unilever Indonesia', 'Jl. Jend. Gatot Subroto Kav. 15 Jakarta', 'KRT'),
('sp05', 'PT. Glasindo Indonesia', 'Jl. Langenarjan Lor 14 Jogjakarta', 'GLS'),
('sp06', 'PT. Sunrise', 'JL. RM Said 5 Surakarta', 'ATK');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `unit_id` varchar(10) NOT NULL,
  `unit_nm` varchar(100) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` int(14) NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_nm`, `lokasi`, `alamat`, `no_telp`) VALUES
('U001', 'Indah Minimarket', 'Wonogiri', 'Jl. Wonogiri 01', 2147483647),
('U002', 'Rio Minimarket', 'Magelang', 'Jl. Magelang 01', 2147483647);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_keluar_ibfk_2` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`karyawan_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_keluar_ibfk_3` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_masuk_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `history_login`
--
ALTER TABLE `history_login`
  ADD CONSTRAINT `history_login_ibfk_1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`karyawan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
