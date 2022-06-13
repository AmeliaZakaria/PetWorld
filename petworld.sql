-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 10:03 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pelanggan`
--

CREATE TABLE `daftar_pelanggan` (
  `idPelanggan` int(6) NOT NULL,
  `nama_penuh` text NOT NULL,
  `alamat_emel` text NOT NULL,
  `nombor_telefon` int(10) NOT NULL,
  `nama_pengguna` text NOT NULL,
  `kata_laluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_pelanggan`
--

INSERT INTO `daftar_pelanggan` (`idPelanggan`, `nama_penuh`, `alamat_emel`, `nombor_telefon`, `nama_pengguna`, `kata_laluan`) VALUES
(1082, 'Nur Amelia', 'amelia00@gmail.com', 177746039, 'Amelia', '176226b2d51002d2590f048881560569'),
(1086, 'Aliana Sofea', 'cuya@gmail.com', 174856351, 'Sofea', '18cf06c8e9213a7000e99ee2ac88ba71');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pentadbir`
--

CREATE TABLE `daftar_pentadbir` (
  `idPentadbir` int(6) NOT NULL,
  `nama_penuh` text NOT NULL,
  `alamat_emel` text NOT NULL,
  `nombor_telefon` int(10) NOT NULL,
  `nama_pengguna` text NOT NULL,
  `kata_laluan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_pentadbir`
--

INSERT INTO `daftar_pentadbir` (`idPentadbir`, `nama_penuh`, `alamat_emel`, `nombor_telefon`, `nama_pengguna`, `kata_laluan`) VALUES
(1, 'Nurul Amira ', 'amira@gmail.com', 123496782, 'Amira', '0ae39049910b110bea964228da2c9faa');

-- --------------------------------------------------------

--
-- Table structure for table `haiwan`
--

CREATE TABLE `haiwan` (
  `idHaiwan` int(6) NOT NULL,
  `jenis_haiwan` text NOT NULL,
  `nama_haiwan` text NOT NULL,
  `jantina_haiwan` text NOT NULL,
  `baka_haiwan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `haiwan`
--

INSERT INTO `haiwan` (`idHaiwan`, `jenis_haiwan`, `nama_haiwan`, `jantina_haiwan`, `baka_haiwan`) VALUES
(30, 'Hamster', 'Sven', 'Jantan', 'Tidak pasti');

-- --------------------------------------------------------

--
-- Table structure for table `tempahan`
--

CREATE TABLE `tempahan` (
  `idTempahan` int(6) NOT NULL,
  `nama_haiwan` text NOT NULL,
  `Jenis_perkhidmatan` text NOT NULL,
  `masa_tempahan` text NOT NULL,
  `tarikh_tempahan` date DEFAULT NULL,
  `status_tempahan` text NOT NULL,
  `maklum_balas` text NOT NULL,
  `idPelanggan` int(11) NOT NULL,
  `nama_penuh` text NOT NULL,
  `alamat_emel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempahan`
--

INSERT INTO `tempahan` (`idTempahan`, `nama_haiwan`, `Jenis_perkhidmatan`, `masa_tempahan`, `tarikh_tempahan`, `status_tempahan`, `maklum_balas`, `idPelanggan`, `nama_penuh`, `alamat_emel`) VALUES
(7, 'Tom', 'MANDIAN', '10.30 am', '2022-05-12', 'Tempahan Berjaya', 'Sila hadir ke lokasi tepat pada waktu.        ', 1082, 'Nur Amelia', 'amelia00@gmail.com'),
(8, 'Oki', 'DANDANAN', '12.30 pm', '2022-04-16', 'Tempahan Gagal', 'Harap maaf. Sila cuba semula pada tarikh/masa yang berlainan.     ', 1082, 'Nur Amelia', 'amelia00@gmail.com'),
(9, 'Sven', 'HOTEL', '4.30 pm', '2022-05-18', 'Tempahan Berjaya', ' Sila hadir ke lokasi tepat pada waktu.  ', 1086, 'Aliana Sofea', 'cuya@gmail.com'),
(13, 'black', 'DANDANAN', '4.30 pm', '2022-04-02', 'Tempahan Gagal', ' Harap maaf. Sila cuba semula pada tarikh/masa yang berlainan.', 1082, 'Nur Amelia', 'amelia00@gmail.com'),
(15, 'Olaf', 'KONSULTASI', '2.30 pm', '2021-12-30', 'Tempahan Berjaya', ' Sila hadir ke lokasi tepat pada waktu.    ', 1082, 'Nur Amelia', 'amelia00@gmail.com'),
(17, 'Oki', 'VAKSINASI', '11.30 am', '2022-01-27', 'Tempahan Gagal', ' Harap maaf. Sila cuba semula pada tarikh/masa yang berlainan.  ', 1086, 'Aliana Sofea', 'cuya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `urusperkhidmatan`
--

CREATE TABLE `urusperkhidmatan` (
  `IdPerkhidmatan` int(6) NOT NULL,
  `Jenis_perkhidmatan` text NOT NULL,
  `Penerangan_perkhidmatan` text NOT NULL,
  `Harga` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urusperkhidmatan`
--

INSERT INTO `urusperkhidmatan` (`IdPerkhidmatan`, `Jenis_perkhidmatan`, `Penerangan_perkhidmatan`, `Harga`, `foto`) VALUES
(11, 'MANDIAN', 'Haiwan peliharaan akan dimandikan menggunakan bahan-bahan semula jadi yang bagus untuk kesihatan mereka.', 'RM 45.00', 'mandi.jpg'),
(12, 'DANDANAN', 'Haiwan peliharaan akan didandan supaya kelihatan kemas dan rapi. Antara aktivitinya ialah memotong kuku, menyikat bulu, membersihkan telinga dan hidung dan sebagainya.', 'RM 35.00', 'dandan.jpg'),
(13, 'VAKSINASI', 'Fungsi vaksinasi adalah untuk melawan dan mempertahankan diri dari bakteria dan virus yang mendekati haiwan peliharaan.', 'RM 60.00', 'vaksin.jpg'),
(15, 'HOTEL', 'PetWorld Centre menyediakan tempat tinggal yang selesa dan luas agar haiwan peliharaan berasa gembiraketika menginap di hotel kami.', 'RM 30.00 / hari', 'hotel.jpg'),
(17, 'KONSULTASI', 'PetWorld Centre menyediakan khidmat konsultasi kepada pemilik haiwan peliharaan agar segala masalah ataupersoalan tentang haiwan peliharaan dapat diselesaikan dengan cara yang terbaik.', 'RM 15.00', 'consult.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `urussyarikat`
--

CREATE TABLE `urussyarikat` (
  `idSyarikat` int(6) NOT NULL,
  `Jenis_maklumat` text NOT NULL,
  `Butiran1` text NOT NULL,
  `Butiran2` text NOT NULL,
  `Butiran3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urussyarikat`
--

INSERT INTO `urussyarikat` (`idSyarikat`, `Jenis_maklumat`, `Butiran1`, `Butiran2`, `Butiran3`) VALUES
(1, 'Nombor Telefon', 'Nurul Amira : 0124589752', 'Pn Rahayu : 0123526598', ''),
(7, 'Emel', 'amira@gmail.com.my', 'rahayu@yahoo.com.my', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pelanggan`
--
ALTER TABLE `daftar_pelanggan`
  ADD PRIMARY KEY (`idPelanggan`);

--
-- Indexes for table `daftar_pentadbir`
--
ALTER TABLE `daftar_pentadbir`
  ADD PRIMARY KEY (`idPentadbir`);

--
-- Indexes for table `haiwan`
--
ALTER TABLE `haiwan`
  ADD PRIMARY KEY (`idHaiwan`);

--
-- Indexes for table `tempahan`
--
ALTER TABLE `tempahan`
  ADD PRIMARY KEY (`idTempahan`),
  ADD KEY `idPelanggan` (`idPelanggan`),
  ADD KEY `nama_penuh` (`nama_penuh`(768)),
  ADD KEY `alamat_emel` (`alamat_emel`(768));

--
-- Indexes for table `urusperkhidmatan`
--
ALTER TABLE `urusperkhidmatan`
  ADD PRIMARY KEY (`IdPerkhidmatan`);

--
-- Indexes for table `urussyarikat`
--
ALTER TABLE `urussyarikat`
  ADD PRIMARY KEY (`idSyarikat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pelanggan`
--
ALTER TABLE `daftar_pelanggan`
  MODIFY `idPelanggan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1087;

--
-- AUTO_INCREMENT for table `daftar_pentadbir`
--
ALTER TABLE `daftar_pentadbir`
  MODIFY `idPentadbir` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `haiwan`
--
ALTER TABLE `haiwan`
  MODIFY `idHaiwan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tempahan`
--
ALTER TABLE `tempahan`
  MODIFY `idTempahan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `urusperkhidmatan`
--
ALTER TABLE `urusperkhidmatan`
  MODIFY `IdPerkhidmatan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `urussyarikat`
--
ALTER TABLE `urussyarikat`
  MODIFY `idSyarikat` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
