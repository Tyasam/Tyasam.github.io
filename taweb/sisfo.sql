-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 01:59 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `kode_guru` varchar(5) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` int(15) NOT NULL,
  `status_aktif` enum('Aktif','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(5) NOT NULL,
  `tahun_ajar` varchar(10) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL,
  `kode_guru` varchar(5) NOT NULL,
  `status_aktif` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswa`
--

CREATE TABLE `kelas_siswa` (
  `id` varchar(5) NOT NULL,
  `kode_kelas` varchar(5) NOT NULL,
  `kode_siswa` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `kode_pelajaran` varchar(10) NOT NULL,
  `kode_guru` varchar(10) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `kode_siswa` varchar(10) NOT NULL,
  `nilai_tugas1` varchar(5) NOT NULL,
  `nilai_tugas2` varchar(5) NOT NULL,
  `nilai_uts` varchar(5) NOT NULL,
  `nilai_uas` varchar(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `kode_pelajaran` varchar(5) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `kode_siswa` varchar(5) NOT NULL,
  `nis` int(12) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `foto` varchar(10) NOT NULL,
  `tahun_angkatan` int(10) NOT NULL,
  `status_aktif` enum('Aktif','Lulus','Keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`kode_siswa`, `nis`, `nama_siswa`, `kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_telepon`, `foto`, `tahun_angkatan`, `status_aktif`) VALUES
('123', 12345678, 'Tyas', 'Perempuan', 'Islam', 'Probolinggo', '2021-11-10', 'Kota Probolinggo', '082xxxxxxxx', '', 2021, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` int(5) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama_user`, `level`, `username`, `password`) VALUES
(1, 'Tyas', 'admin', 'admin', 'admin'),
(2, 'Kaprodi', 'Kaprodi', 'kaprodi', 'kaprodi'),
(3, 'Dosen', 'Dosen', 'dosen', 'dosen'),
(4, 'Mahasiswa', 'Mahasiswa', 'mahasiswa', 'tyas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kode_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`),
  ADD KEY `kode_guru` (`kode_guru`);

--
-- Indexes for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_kelas_2` (`kode_kelas`),
  ADD KEY `kode_siswa` (`kode_siswa`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_pelajaran` (`kode_pelajaran`),
  ADD KEY `kode_guru` (`kode_guru`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_kelas_2` (`kode_kelas`),
  ADD KEY `kode_siswa` (`kode_siswa`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`kode_pelajaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`kode_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`kode_guru`) REFERENCES `nilai` (`kode_guru`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas_siswa` (`kode_kelas`),
  ADD CONSTRAINT `kelas_ibfk_2` FOREIGN KEY (`kode_guru`) REFERENCES `guru` (`kode_guru`);

--
-- Constraints for table `kelas_siswa`
--
ALTER TABLE `kelas_siswa`
  ADD CONSTRAINT `kelas_siswa_ibfk_1` FOREIGN KEY (`kode_siswa`) REFERENCES `siswa` (`kode_siswa`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`kode_siswa`) REFERENCES `siswa` (`kode_siswa`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kode_pelajaran`) REFERENCES `pelajaran` (`kode_pelajaran`),
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`kode_guru`) REFERENCES `kelas` (`kode_guru`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
