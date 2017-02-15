-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 01:54 PM
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
  `id_brg` varchar(20) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `departement` varchar(30) NOT NULL,
  `hrg_beli` int(10) NOT NULL,
  `hrg_jual` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `id_supplier` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `departement` varchar(30) NOT NULL,
  `nama_dep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id_his` int(255) NOT NULL AUTO_INCREMENT,
  `time_his` datetime NOT NULL,
  `jenis_his` varchar(100) NOT NULL,
  `ket_his` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_his`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `username`, `pass`, `nama_karyawan`, `jabatan`, `foto`) VALUES
('123', 'ilma', '8dd48d6a2e2cad213179a3992c0be53c', 'Ilma Yurdianti', 'Admin', 'S__6168695.jpg'),
('K0011', 'Anik', '1a1dc91c907325c69271ddf0c944bc72', 'Anik Wijayanti', 'Kasir', 'Anik.jpg\r'),
('K0012', 'Budi', '1a1dc91c907325c69271ddf0c944bc72', 'Budiman ', 'Staff Gudang', 'Budi.jpg\r'),
('K0013', 'Retno', '1a1dc91c907325c69271ddf0c944bc72', 'Retno Wahyuningtyas', 'Accounting', 'Retno.jpg\r'),
('K0014', 'Fandy', '1a1dc91c907325c69271ddf0c944bc72', 'Fandy Noer', 'Supervisor', 'Fandy.jpg\r'),
('K0015', 'Hasan', '1a1dc91c907325c69271ddf0c944bc72', 'Hasan Sudira', 'Staff Gudang', 'Hasan.jpg\r'),
('K0016', 'Indra', '1a1dc91c907325c69271ddf0c944bc72', 'Indra Maulana', 'Staff Gudang', 'Indra.jpg\r'),
('K0017', 'Inun', '1a1dc91c907325c69271ddf0c944bc72', 'Ainun Najib', 'Pelayan Toko', 'Inun.jpg\r'),
('K0018', 'Danny ', '1a1dc91c907325c69271ddf0c944bc72', 'Danny Hidayat ', 'Pelayan Toko', 'Danny .jpg\r'),
('K0019', 'Fitria', '1a1dc91c907325c69271ddf0c944bc72', 'Fitria Nuriyanti', 'Pelayan Toko', 'Fitria.jpg\r'),
('K0020', 'Toha', '1a1dc91c907325c69271ddf0c944bc72', 'Toha Mukti', 'Supervisor', 'Toha.jpg\r');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
  `id_suplier` varchar(30) NOT NULL,
  `nama_sp` varchar(100) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `departemen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(100) NOT NULL AUTO_INCREMENT,
  `tgl_trans` date NOT NULL,
  `id_brg` varchar(100) NOT NULL,
  `jenis_trans` varchar(100) NOT NULL,
  `jumlah` int(30) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
