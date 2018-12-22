-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jun 2018 pada 23.53
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forder`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fglist`
--

CREATE TABLE `fglist` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `kategori` int(1) NOT NULL,
  `avatar` varchar(100) NOT NULL DEFAULT 'No_Avatar.png',
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fglist`
--

INSERT INTO `fglist` (`id`, `nama`, `username`, `password`, `email`, `tanggal_lahir`, `alamat`, `telp`, `gender`, `kategori`, `avatar`, `waktu`) VALUES
(5, 'Budiman', 'budi99', '827ccb0eea8a706c4c34a16891f84e7b', 'budi99@mhs.unsyiah.ac.id', '1998-09-01', 'Prada', '081123456789', 'male', 0, 'No_Avatar.png', '0000-00-00 00:00:00'),
(11, 'Jeriko', 'jeriko98', '827ccb0eea8a706c4c34a16891f84e7b', 'jerikofrend16@gmail.com', '2000-01-03', 'Peunayong', '081123456722', 'male', 0, 'No_Avatar.png', '2018-06-12 20:51:07'),
(12, 'Anonymous', 'abimayu', '827ccb0eea8a706c4c34a16891f84e7b', 'ab@gmail.com', '1997-05-21', 'Rukoh', '08112345654', 'female', 0, 'No_Avatar.png', '2018-06-12 20:51:31'),
(17, 'Budi Gunawan', 'budigunawan99', '827ccb0eea8a706c4c34a16891f84e7b', 'gunawanbudi930@gmail.com', '1999-08-11', 'Banda Aceh', '085277521276', 'male', 0, 'No_Avatar.png', '2018-06-14 21:54:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `images`
--

INSERT INTO `images` (`id`, `username`, `file_name`) VALUES
(1, 'budigunawan99', 'benches.jpg'),
(2, 'budigunawan99', 'bridge.jpg'),
(8, 'budigunawan99', '54_Likes,_6_Comments___Budi_Gunawan_(@budigunawan99)_on_Ins.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderfg`
--

CREATE TABLE `orderfg` (
  `id_order` int(11) NOT NULL,
  `fotografer` varchar(50) NOT NULL,
  `kategori` int(1) NOT NULL,
  `username` varchar(100) NOT NULL,
  `duedate` date NOT NULL,
  `location` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `message` varchar(100) DEFAULT NULL,
  `ordertime` datetime NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderfg`
--

INSERT INTO `orderfg` (`id_order`, `fotografer`, `kategori`, `username`, `duedate`, `location`, `time`, `message`, `ordertime`, `status`) VALUES
(2, 'budigunawan99', 0, 'budigunawan99', '2018-06-21', 'Darussalam', '09:00', 'hii', '2018-06-19 17:45:21', 'submitted');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(1, '9bc2a6076f8d4a625a8aab443cc3ac', 1, '2018-06-20'),
(2, '9ae0d45adf84df67c0f407fe800541', 1, '2018-06-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `avatar` varchar(100) NOT NULL DEFAULT 'No_Avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `avatar`) VALUES
(1, 'Budi Gunawan', 'gunawanbudi930@gmail.com', 'budigunawan99', '4cdf11b1de19a55eb57f8f8826c22cb4', 'No_Avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fglist`
--
ALTER TABLE `fglist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderfg`
--
ALTER TABLE `orderfg`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fglist`
--
ALTER TABLE `fglist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orderfg`
--
ALTER TABLE `orderfg`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
