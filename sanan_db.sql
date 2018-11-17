-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2018 at 06:08 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanan_admin`
--

CREATE TABLE `sanan_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `level_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanan_alamat_pengiriman`
--

CREATE TABLE `sanan_alamat_pengiriman` (
  `id_alamat` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `nama_alamat` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `alamat_lengkap` varchar(150) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `nomer_telepon_penerima` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanan_alamat_pengiriman`
--

INSERT INTO `sanan_alamat_pengiriman` (`id_alamat`, `id_pembeli`, `nama_alamat`, `provinsi`, `kota`, `kecamatan`, `kode_pos`, `alamat_lengkap`, `nama_penerima`, `nomer_telepon_penerima`) VALUES
(1, 1, 'Rumah Probolinggo', 'Jawa Timur', 'Kab. Problinggo', 'Kraksaan', 67282, 'DSN Karang Anyar RT/TW 001 samping pabrik tahu', 'MASYKUR', '081336823260'),
(2, 1, 'Kost Malang', 'Jawa Timur', 'Kab. Malang', 'Lowokwaru', 12345, 'Jln Senggani No 24. gang Polinema', 'Muhamamd Iqbal R.r', '082244604241');

-- --------------------------------------------------------

--
-- Table structure for table `sanan_kategori`
--

CREATE TABLE `sanan_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `keterangan_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanan_pembayaran`
--

CREATE TABLE `sanan_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `nama_rekening` varchar(50) NOT NULL,
  `jumlah_transfer` int(11) NOT NULL,
  `tanggal_transfer` date NOT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `nomer_rekening` int(11) NOT NULL,
  `bukti_transfer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanan_pembeli`
--

CREATE TABLE `sanan_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `jenis_kelamin_pembeli` enum('L','P') NOT NULL,
  `username_pembeli` varchar(50) NOT NULL,
  `email_pembeli` varchar(100) NOT NULL,
  `password_pembeli` varchar(50) NOT NULL,
  `nomor_telepon_pembeli` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanan_pembeli`
--

INSERT INTO `sanan_pembeli` (`id_pembeli`, `nama_pembeli`, `jenis_kelamin_pembeli`, `username_pembeli`, `email_pembeli`, `password_pembeli`, `nomor_telepon_pembeli`) VALUES
(1, 'Muhamamd iqbal R.r', 'L', 'iqbalcakep', 'admin@iqbalcakep.com', '5c2fb951458b57e8e049d48a55cdddad', '082244604241'),
(2, 'Rio Irvansyah', 'L', 'riorio', 'nabila@gmail.com', 'f237aef579ff90dcd9b528115cb25c32', '082244604241'),
(3, 'Nabila', 'P', 'Nabila', 'iqbalacakep.com@gmail.com', '9c8aaad368f10f55699450d759a72501', '082244604241');

-- --------------------------------------------------------

--
-- Table structure for table `sanan_pengiriman`
--

CREATE TABLE `sanan_pengiriman` (
  `id_pengiriman` int(11) NOT NULL,
  `nama_pengiriman` varchar(50) NOT NULL,
  `waktu_pengiriman` varchar(20) NOT NULL,
  `harga_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanan_produk`
--

CREATE TABLE `sanan_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanan_temp`
--

CREATE TABLE `sanan_temp` (
  `id_temp` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_temp` int(11) NOT NULL,
  `subtotal_temp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanan_transaksi`
--

CREATE TABLE `sanan_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_pengiriman` int(11) NOT NULL,
  `total_harga_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `nomer_seri_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanan_transaksi_detail`
--

CREATE TABLE `sanan_transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `subtotal_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sanan_admin`
--
ALTER TABLE `sanan_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `sanan_alamat_pengiriman`
--
ALTER TABLE `sanan_alamat_pengiriman`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `sanan_kategori`
--
ALTER TABLE `sanan_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `sanan_pembayaran`
--
ALTER TABLE `sanan_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `sanan_pembeli`
--
ALTER TABLE `sanan_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `sanan_pengiriman`
--
ALTER TABLE `sanan_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `sanan_temp`
--
ALTER TABLE `sanan_temp`
  ADD PRIMARY KEY (`id_temp`);

--
-- Indexes for table `sanan_transaksi`
--
ALTER TABLE `sanan_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `sanan_transaksi_detail`
--
ALTER TABLE `sanan_transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sanan_admin`
--
ALTER TABLE `sanan_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanan_alamat_pengiriman`
--
ALTER TABLE `sanan_alamat_pengiriman`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanan_kategori`
--
ALTER TABLE `sanan_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanan_pembayaran`
--
ALTER TABLE `sanan_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanan_pembeli`
--
ALTER TABLE `sanan_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanan_pengiriman`
--
ALTER TABLE `sanan_pengiriman`
  MODIFY `id_pengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanan_temp`
--
ALTER TABLE `sanan_temp`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanan_transaksi`
--
ALTER TABLE `sanan_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanan_transaksi_detail`
--
ALTER TABLE `sanan_transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
