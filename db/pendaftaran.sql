-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 11:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodata`
--

CREATE TABLE `tb_biodata` (
  `id_biodata` int(25) NOT NULL,
  `no_pendaftaran` varchar(25) NOT NULL,
  `id_calon` int(25) NOT NULL,
  `id_pendidikan` int(25) NOT NULL,
  `id_kab` int(25) NOT NULL,
  `id_kec` int(25) NOT NULL,
  `id_desa` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_biodata`
--

INSERT INTO `tb_biodata` (`id_biodata`, `no_pendaftaran`, `id_calon`, `id_pendidikan`, `id_kab`, `id_kec`, `id_desa`) VALUES
(6, '23344', 53, 333, 33, 33, 0),
(17, '2023033345', 0, 6, 1, 2, 8),
(18, '2023033346', 0, 6, 1, 2, 8),
(19, '2023033347', 0, 6, 1, 2, 8),
(20, '2023033348', 0, 6, 1, 6, 8),
(21, '', 0, 6, 1, 2, 10),
(23, '2023033350', 13, 8, 1, 2, 8),
(24, '2023033352', 13, 8, 1, 2, 8),
(25, '2023033353', 14, 8, 5, 2, 11),
(26, '2023033354', 14, 9, 1, 2, 8),
(27, '2023033356', 17, 11, 23, 24, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_calon`
--

CREATE TABLE `tb_calon` (
  `id_calon` int(25) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nik` int(25) NOT NULL,
  `tpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bpjs_kes` int(25) NOT NULL,
  `bpjs_ket` int(25) NOT NULL,
  `npwp` int(25) NOT NULL,
  `no_hp` int(25) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `domisili` enum('Luar Negeri','Dalam Negeri') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `posisi` enum('PPS','PPK') NOT NULL,
  `id_kab` int(25) NOT NULL,
  `id_kec` int(25) NOT NULL,
  `id_desa` int(25) NOT NULL,
  `id_pekerjaan` int(25) NOT NULL,
  `id_pendidikan` int(25) NOT NULL,
  `agama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_calon`
--

INSERT INTO `tb_calon` (`id_calon`, `nama_lengkap`, `nik`, `tpt_lahir`, `tgl_lahir`, `bpjs_kes`, `bpjs_ket`, `npwp`, `no_hp`, `jenis_kelamin`, `domisili`, `alamat`, `provinsi`, `posisi`, `id_kab`, `id_kec`, `id_desa`, `id_pekerjaan`, `id_pendidikan`, `agama`) VALUES
(16, 'Anang Kurniawan', 2147483647, 'Bireuen', '2016-03-31', 12345, 12345, 12345, 0, 'Wanita', 'Luar Negeri', 'Dusun T M Ali', 'Aceh', 'PPS', 1, 2, 10, 2, 9, ''),
(17, 'Anang Kurniawan', 0, '', '0000-00-00', 0, 0, 0, 0, 'Pria', 'Luar Negeri', 'Dusun T M Ali', '', 'PPS', 23, 24, 12, 14, 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(25) NOT NULL,
  `nama_desa` varchar(100) NOT NULL,
  `id_kec` int(25) NOT NULL,
  `id_kab` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `nama_desa`, `id_kec`, `id_kab`) VALUES
(6, 'Matang Sagoe', 1, 1),
(7, 'Meunasah Micap', 3, 1),
(8, 'Pulo Panyang', 2, 1),
(9, 'wwwwwwwarf', 2, 1),
(10, 'wwwwwww', 2, 1),
(11, 'Matang2322', 2, 5),
(12, 'Ulee Jalan', 24, 23);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kab`
--

CREATE TABLE `tb_kab` (
  `id_kab` int(25) NOT NULL,
  `nama_kab` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kab`
--

INSERT INTO `tb_kab` (`id_kab`, `nama_kab`) VALUES
(11, 'Aceh Barat'),
(12, 'Aceh Barat Daya'),
(13, 'Aceh Besar'),
(14, 'Aceh Jaya'),
(15, 'Aceh Selatan'),
(16, 'Aceh Singkil'),
(17, 'Aceh Tamiang'),
(18, 'Aceh Tengah'),
(19, 'Aceh Tenggara'),
(20, 'Aceh Timur'),
(21, 'Aceh Utara'),
(22, 'Bener Meriah'),
(23, 'Bireuen'),
(24, 'Gayo Luwes'),
(25, 'Nagan Raya'),
(26, 'Pidie Jaya'),
(27, 'Simeulue'),
(28, 'Pidie'),
(29, 'Banda Aceh'),
(30, 'Langsa'),
(31, 'Lhokseumawe'),
(32, 'Sabang'),
(33, 'Subulussalam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kec`
--

CREATE TABLE `tb_kec` (
  `id_kec` int(25) NOT NULL,
  `nama_kec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kec`
--

INSERT INTO `tb_kec` (`id_kec`, `nama_kec`) VALUES
(11, 'Gandapura'),
(12, 'Jangka'),
(13, 'Jeumpa'),
(14, 'Jeunieb'),
(15, 'Juli'),
(16, 'Kota Juang'),
(17, 'Kuala'),
(18, 'Kuta Blang'),
(19, 'Makmur'),
(20, 'Pandrah'),
(21, 'Peudada'),
(22, 'Plimbang'),
(23, 'Peusangan'),
(24, 'Peusangan Selatan'),
(25, 'Peusangan Siblah Krueng'),
(26, 'Samalanga'),
(27, 'Simplang Mamplang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_pekerjaan` int(25) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`) VALUES
(14, 'Presiden'),
(15, 'Guru'),
(17, 'Nelayan'),
(18, 'Dokter'),
(19, 'Petani'),
(20, 'Apoteker'),
(21, 'Arsitek'),
(22, 'Perawat'),
(23, 'Peternak'),
(24, 'Pilot'),
(25, 'Pemadam Kebakaran'),
(26, 'Sopir'),
(27, 'Masinis'),
(28, 'Pramugari'),
(29, 'Nahkoda'),
(30, 'Peneliti'),
(31, 'Penulis'),
(32, 'Fotografi'),
(33, 'Wartawan'),
(34, 'Polisi'),
(35, 'Penerjemah'),
(36, 'Tentara'),
(38, 'Tukang Cukur'),
(39, 'Tukang Kayu'),
(40, 'Pedagang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int(25) NOT NULL,
  `nama_pendidikan` varchar(100) NOT NULL,
  `tingkat_pendidikan` enum('SD/MI','SMP/MTsN','MA/SMA/SMK/MAK','D1','D2','D3','D4','S1','S2','S3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `nama_pendidikan`, `tingkat_pendidikan`) VALUES
(8, 'Sekolah Dasar', 'SD/MI'),
(9, 'SMP 1 BIREUEN', 'SMP/MTsN'),
(10, 'MAN 3 BIREUEN', 'MA/SMA/SMK/MAK'),
(11, 'TIDAK SEKOLAH', 'D1'),
(12, '', 'SD/MI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `last_login`) VALUES
(1, 'admin', 'admin', '2023-03-06'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-03-06'),
(3, 'anang', '2326af735beba37279d41c7f0ab62e73', '2023-03-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `tb_calon`
--
ALTER TABLE `tb_calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `tb_kab`
--
ALTER TABLE `tb_kab`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `tb_kec`
--
ALTER TABLE `tb_kec`
  ADD PRIMARY KEY (`id_kec`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_biodata`
--
ALTER TABLE `tb_biodata`
  MODIFY `id_biodata` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_calon`
--
ALTER TABLE `tb_calon`
  MODIFY `id_calon` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_kab`
--
ALTER TABLE `tb_kab`
  MODIFY `id_kab` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_kec`
--
ALTER TABLE `tb_kec`
  MODIFY `id_kec` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_pekerjaan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
