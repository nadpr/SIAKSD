-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 02:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdjetis`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `idAdministrator` int(2) NOT NULL,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_login` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Guru_idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Siswa_idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_kelas_idWali_kelas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_murid_idWali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`idAdministrator`, `nama`, `username`, `password`, `current_login`, `last_login`, `T_U_idT_U`, `Guru_idGuru`, `Siswa_idSiswa`, `Wali_kelas_idWali_kelas`, `Wali_murid_idWali_murid`) VALUES
(1, 'Nadyap', 'nadya', '21232f297a57a5a743894a0e4a801fc3', '2016-05-31 22:43:21', '2016-05-24 09:49:58', '', '', '', '', ''),
(3, 'Fikrizal', 'fikrizal', '21232f297a57a5a743894a0e4a801fc3', '2016-05-21 09:33:14', '2016-05-21 09:33:14', '', '', '', '', ''),
(2, 'Farhan', 'farhan', '21232f297a57a5a743894a0e4a801fc3', '2016-05-24 22:39:34', '2016-05-21 09:29:07', '', '', '', '', ''),
(4, 'Ainun', 'ainun', '21232f297a57a5a743894a0e4a801fc3', '2012-02-06 11:29:10', '2013-12-12 23:12:11', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `idGuru` int(5) NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wali_kelas` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_kelas_idWali_kelas` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idGuru`, `nama`, `alamat`, `wali_kelas`, `password`, `foto`, `Wali_kelas_idWali_kelas`) VALUES
(1, 'Budi Sentosa', 'Pamekasan', 'X-1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(2, 'Bahruddin', 'Sampang', 'X-2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(3, 'Sitti Zulaiha', 'Pamekasan', 'X-3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(4, 'Dani ramadhan', 'Sumenep', 'X-4', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(5, 'Susanto Bakri', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(6, 'Megawati Pratiwi', 'Pamekasan', 'XI IPA 2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(7, 'Midun', 'Kamal', 'XI IPA 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(8, 'Moh Salman', 'Kamal', 'XI IPA 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(9, 'Dewi Karisma', 'Kamal', 'XI IPS 1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(10, 'Reny Sinta', 'Bangkalan', 'XI IPS 2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(11, 'Sudi Yanto', 'Pamekasan', 'XI IPS 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(12, 'Dina Atiqah', 'Sampang', 'XI IPS 4', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(13, 'Citra Ananda', 'Kamal', 'Tidak', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(14, 'Hidayatul Mustafidah', 'Gresik', 'Tidak', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru_has_mata_pelajaran`
--

CREATE TABLE `guru_has_mata_pelajaran` (
  `idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idmata_pelajaran` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `idRuang_Kelas` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru_has_mata_pelajaran`
--

INSERT INTO `guru_has_mata_pelajaran` (`idGuru`, `idmata_pelajaran`, `idRuang_Kelas`) VALUES
('10', '11', 2),
('11', '11', 1),
('11', '14', 6),
('12', '12', 5),
('13', '9', 5),
('14', '13', 5),
('2', '9', 2),
('3', '10', 1),
('4', '14', 5),
('6', '15', 3),
('8', '14', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `idmata_pelajaran` int(5) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`idmata_pelajaran`, `nama`) VALUES
(9, 'Matematika'),
(10, 'Bahasa Inggris'),
(11, 'Fisika'),
(12, 'Biologi'),
(13, 'Pendidikan Agama Islam'),
(14, 'Teknologi Informasi Dan Komunikasi'),
(15, 'Sosiologi'),
(16, 'Bahasa Daerah'),
(18, 'Kimia'),
(19, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idSiswa`, `nama`, `alamat`, `kelas`, `password`) VALUES
('1234', 'Andi Sholihin', 'Pamekasan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1222', 'Qutsiyah', 'Sumenep', 'XI IPA 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('2112', 'Dudi Irawan ', 'Sidoarjo', 'XII IPS 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1221', 'Ananda Septia', 'Sampang', 'XII IPS 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('1215', 'Ayu Ismawati', 'Bangkalan', 'XII IPS 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('2111', 'Dina Cintya', 'Pamekasan', 'XII IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('2113', 'Dinda Asmara', 'Sampang', 'XII IPA 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('2114', 'Suci Permata', 'Sumenep', 'XII IPA 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('2115', 'Asmirandah', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1110', 'Fandi Irawan', 'Sampang', 'X - 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('1212', 'Gilang Ramadhan', 'Sampang', 'X - 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('1010', 'Misbahul Munir', 'Sampang', 'XI IPS 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1000', 'Eka Sucianti', 'Pamekasan', 'X - 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('1001', 'Wardatul Hayati', 'Kamal', 'X - 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('1023', 'Soraya Putri', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_has_mata_pelajaran`
--

CREATE TABLE `siswa_has_mata_pelajaran` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idmata_pelajaran` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `semester` enum('Ganjil','Genap') COLLATE utf8_unicode_ci NOT NULL,
  `thn_ajaran` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `afektif` int(3) DEFAULT NULL,
  `komulatif` int(3) DEFAULT NULL,
  `psikomotorik` int(3) DEFAULT NULL,
  `rata` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa_has_mata_pelajaran`
--

INSERT INTO `siswa_has_mata_pelajaran` (`idSiswa`, `idmata_pelajaran`, `semester`, `thn_ajaran`, `afektif`, `komulatif`, `psikomotorik`, `rata`) VALUES
('1001', '9', 'Ganjil', '2009-2010', 90, 90, 95, 92),
('1110', '15', 'Ganjil', '2009-2010', 83, 87, 97, 89),
('1110', '14', 'Ganjil', '2009-2010', 99, 91, 94, 95),
('1234', '9', 'Ganjil', '2009-2010', 91, 91, 94, 92),
('2115', '11', 'Ganjil', '2011-2012', 98, 83, 74, 85),
('2115', '10', 'Ganjil', '2009-2010', 90, 97, 92, 93),
('1222', '14', 'Ganjil', '2010-2011', 95, 89, 98, 94),
('1234', '14', 'Ganjil', '2010-2011', 99, 90, 92, 94),
('1234', '9', 'Genap', '2009-2010', 80, 75, 80, 78),
('1234', '14', 'Ganjil', '2009-2010', 97, 98, 98, 98),
('1023', '9', 'Ganjil', '2009-2010', 84, 87, 95, 89),
('1023', '14', 'Ganjil', '2009-2010', 99, 92, 94, 95),
('1023', '12', 'Ganjil', '2009-2010', 98, 82, 6, 62),
('1023', '9', 'Genap', '2009-2010', 72, 80, 74, 75),
('1023', '14', 'Genap', '2009-2010', 97, 84, 86, 89),
('1023', '9', 'Ganjil', '2010-2011', 86, 98, 80, 88),
('1023', '9', 'Genap', '2010-2011', 87, 70, 71, 76),
('1023', '14', 'Genap', '2010-2011', 74, 65, 69, 69),
('1023', '14', 'Ganjil', '2011-2012', 78, 82, 89, 83),
('1023', '12', 'Genap', '2011-2012', 98, 93, 85, 92),
('1023', '13', 'Genap', '2011-2012', 98, 97, 89, 95);

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid`
--

CREATE TABLE `wali_murid` (
  `idwali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wali_murid`
--

INSERT INTO `wali_murid` (`idwali_murid`, `nama`, `alamat`, `password`) VALUES
('001234', 'Moh Ishak', 'Pamekasan', '827ccb0eea8a706c4c34a16891f84e7b'),
('001001', 'Suhriyanto', 'Sumenep', '827ccb0eea8a706c4c34a16891f84e7b'),
('001023', 'Agus Priyantoro', 'Bangkalan', '827ccb0eea8a706c4c34a16891f84e7b'),
('001000', 'Ramli', 'Pamekasan', '827ccb0eea8a706c4c34a16891f84e7b'),
('001215', 'Suhriyanto', 'Sumenep', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid_has_siswa`
--

CREATE TABLE `wali_murid_has_siswa` (
  `idwali_murid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idSiswa` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wali_murid_has_siswa`
--

INSERT INTO `wali_murid_has_siswa` (`idwali_murid`, `idSiswa`) VALUES
('001000', '1000'),
('001001', '1001'),
('001023', '1023'),
('001215', '1215'),
('001234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`idAdministrator`,`T_U_idT_U`,`Guru_idGuru`,`Siswa_idSiswa`,`Wali_kelas_idWali_kelas`,`Wali_murid_idWali_murid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_Administrator_T_U` (`T_U_idT_U`),
  ADD KEY `fk_Administrator_Guru` (`Guru_idGuru`),
  ADD KEY `fk_Administrator_Siswa` (`Siswa_idSiswa`),
  ADD KEY `fk_Administrator_Wali_kelas` (`Wali_kelas_idWali_kelas`),
  ADD KEY `fk_Administrator_Wali_murid` (`Wali_murid_idWali_murid`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`idGuru`),
  ADD KEY `fk_Guru_Wali_kelas` (`Wali_kelas_idWali_kelas`);

--
-- Indexes for table `guru_has_mata_pelajaran`
--
ALTER TABLE `guru_has_mata_pelajaran`
  ADD PRIMARY KEY (`idGuru`,`idmata_pelajaran`,`idRuang_Kelas`),
  ADD KEY `fk_Guru_has_mata_pelajaran_Guru` (`idGuru`),
  ADD KEY `fk_Guru_has_mata_pelajaran_mata_pelajaran` (`idmata_pelajaran`),
  ADD KEY `fk_Guru_has_mata_pelajaran_ruang_kelas` (`idRuang_Kelas`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`idmata_pelajaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idSiswa`);

--
-- Indexes for table `siswa_has_mata_pelajaran`
--
ALTER TABLE `siswa_has_mata_pelajaran`
  ADD PRIMARY KEY (`idSiswa`,`idmata_pelajaran`,`semester`,`thn_ajaran`),
  ADD KEY `fk_Siswa_has_mata_pelajaran_Siswa` (`idSiswa`),
  ADD KEY `fk_Siswa_has_mata_pelajaran_mata_pelajaran` (`idmata_pelajaran`);

--
-- Indexes for table `wali_murid`
--
ALTER TABLE `wali_murid`
  ADD PRIMARY KEY (`idwali_murid`);

--
-- Indexes for table `wali_murid_has_siswa`
--
ALTER TABLE `wali_murid_has_siswa`
  ADD PRIMARY KEY (`idwali_murid`,`idSiswa`),
  ADD KEY `fk_wali_murid_has_siswa_wali_murid` (`idwali_murid`),
  ADD KEY `fk_wali_murid_has_siswa_siswa` (`idSiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `idAdministrator` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `idmata_pelajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
