-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2019 at 09:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_awal`
--

CREATE TABLE `data_awal` (
  `id_dataawal` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `tipe_jarkom` char(10) NOT NULL,
  `provider` varchar(20) NOT NULL,
  `nama_lokasi` text NOT NULL,
  `alamat_lokasi` text NOT NULL,
  `tipe_uker` char(10) NOT NULL,
  `nama_pic` char(50) NOT NULL,
  `no_tlp` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_awal`
--

INSERT INTO `data_awal` (`id_dataawal`, `ip_address`, `tipe_jarkom`, `provider`, `nama_lokasi`, `alamat_lokasi`, `tipe_uker`, `nama_pic`, `no_tlp`) VALUES
(1, '+5156161', 'BRISAT', 'PATRAKOM', 'dssdsd', 'assddds', 'EBUZZ', 'ddff', 34344343);

-- --------------------------------------------------------

--
-- Table structure for table `dismantle`
--

CREATE TABLE `dismantle` (
  `id_dismantle` int(11) NOT NULL,
  `id_pengirim` varchar(30) NOT NULL,
  `id_penerima` varchar(50) NOT NULL,
  `dismantle` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dismantle`
--

INSERT INTO `dismantle` (`id_dismantle`, `id_pengirim`, `id_penerima`, `dismantle`) VALUES
(27, 'ilman773@gmail.com', 'forward15031@gmail.com', 'Dismantle'),
(28, 'ilman773@gmail.com', 'forward15031@gmail.com', 'Dismantle'),
(32, 'ilman773@gmail.com', 'ilman773@gmail.com', 'Dismantle'),
(33, 'ilman773@gmail.com', 'forward15031@gmail.com', 'Dismantle');

-- --------------------------------------------------------

--
-- Table structure for table `pasang_baru`
--

CREATE TABLE `pasang_baru` (
  `id_pasangbaru` int(11) NOT NULL,
  `nama_uker` char(50) NOT NULL,
  `nama_lokasi` text NOT NULL,
  `alamat_lokasi` text NOT NULL,
  `tipe_jarkom` char(10) NOT NULL,
  `provider` char(50) NOT NULL,
  `nama_pic` char(50) NOT NULL,
  `no_tlp` int(13) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasang_baru`
--

INSERT INTO `pasang_baru` (`id_pasangbaru`, `nama_uker`, `nama_lokasi`, `alamat_lokasi`, `tipe_jarkom`, `provider`, `nama_pic`, `no_tlp`, `tanggal`, `gambar`) VALUES
(2, 'aa', 'as', 'saas', 'BRISAT', 'Telkomsel', 'saa', 23232, '2019-06-27', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `relayout`
--

CREATE TABLE `relayout` (
  `id_relayout` int(11) NOT NULL,
  `jarak` varchar(3) NOT NULL,
  `gambar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relayout`
--

INSERT INTO `relayout` (`id_relayout`, `jarak`, `gambar`) VALUES
(1, '90m', 'IMG_5');

-- --------------------------------------------------------

--
-- Table structure for table `relokasi`
--

CREATE TABLE `relokasi` (
  `id_relokasi` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `provider` char(20) NOT NULL,
  `nama_uker` char(50) NOT NULL,
  `alamat_lama` text NOT NULL,
  `alamat_baru` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relokasi`
--

INSERT INTO `relokasi` (`id_relokasi`, `ip_address`, `provider`, `nama_uker`, `alamat_lama`, `alamat_baru`, `tanggal`, `gambar`) VALUES
(1, '131.100.55.103', 'SATKOMINDO', 'BANDUNG TULUNGAGUNG - PASAR BANDUNG', 'Jalan Rm Harsono No. 2 RT. 6 / RW. 7, Ragunan, Pasar Minggu, RT.7/RW.7, Ragunan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550', 'Jalan Rm Harsono No. 2 RT. 6 / RW. 7, Ragunan, Pasar Minggu, RT.7/RW.7, Ragunan, Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550', '2019-05-24', 'IMG_5'),
(2, '13311313', 'TELKOM', 'assa', 'saas', 'assa', '2019-06-14', 'FB_IM');

-- --------------------------------------------------------

--
-- Table structure for table `ug_dg`
--

CREATE TABLE `ug_dg` (
  `id_bandwidth` int(11) NOT NULL,
  `bw_lama` varchar(10) NOT NULL,
  `bw_baru` varchar(10) NOT NULL,
  `ug_dg` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ug_dg`
--

INSERT INTO `ug_dg` (`id_bandwidth`, `bw_lama`, `bw_baru`, `ug_dg`) VALUES
(5, 'dds', '8 Mbps', 'upgrade');

-- --------------------------------------------------------

--
-- Table structure for table `upgrade_link`
--

CREATE TABLE `upgrade_link` (
  `id_link` int(11) NOT NULL,
  `fiber_optic` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upgrade_link`
--

INSERT INTO `upgrade_link` (`id_link`, `fiber_optic`) VALUES
(1, 'Fiber Optic'),
(2, 'Fiber Optic'),
(3, 'Fiber Optic');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `kode_uker` int(8) NOT NULL,
  `nama_uker` char(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `jabatan` char(25) NOT NULL,
  `pn` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `kode_uker`, `nama_uker`, `no_hp`, `jabatan`, `pn`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(64, 'Vuln Walker', 0, '', 0, '', 90137811, 'forward15031@gmail.com', '', '$2y$10$shqVddXAt7Eo2H7PrPJUMeS/lnch0sYJxXR5C9fvdGObKQNc9Iiwi', 1, 1, 1558597429),
(67, 'Ilman  Niar Latif', 15114444, 'hahahad', 65502556, 'Choose', 12354444, 'ilman773@gmail.com', 'FB_IMG_1525233515779.jpg', '$2y$10$kls.YuQzucSoUWFlYHEM2.QEn/GoCy7kZxRNhQpZu/YDduafBBXge', 1, 1, 1560216215);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(9, 2, 4),
(12, 1, 3),
(13, 1, 4),
(14, 1, 5),
(15, 3, 4),
(18, 3, 2),
(19, 1, 6),
(20, 1, 2),
(21, 5, 6),
(22, 5, 8),
(23, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(6, 'Pengajuan'),
(8, 'Provider');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'signer'),
(3, 'maker'),
(5, 'provider');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fa fa-clock', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-users', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(14, 3, 'Submenu Management ', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(15, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(17, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(18, 5, 'tidur', 'makan', 'fa fa youtube', 1),
(19, 1, 'Add User', 'add', 'fas fa-user-plus', 1),
(20, 6, 'Pasang Baru', 'pengajuan/pasang_baru', 'fas fa-fw fa-cart-plus', 1),
(21, 6, 'Relokasi', 'pengajuan/relokasi', 'fas fa-fw fa-people-carry', 1),
(22, 6, 'Relayout', 'pengajuan/relayout', 'fas fa-fw fa-layer-group', 1),
(23, 6, 'Up/Down Bandwidth', 'pengajuan/updown_bandwidth', 'fas fa-fw fa-chart-line', 1),
(24, 6, 'Upgrade Link', 'pengajuan/upgrade_link', 'fa fa-fw fa-link	', 1),
(25, 6, 'Dismantle', 'pengajuan/dismantle', 'fas fa-fw fa-power-off', 1),
(26, 6, 'Data Awal', 'pengajuan/data_awal', 'fas fa-fw fa-file-signature', 1),
(27, 8, 'Pesan', 'pesan', 'fa fa-times', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'ilman773@gmail.com', 'kDSaOiTZ/thgacZse/uTcr1iKNsOqy7Gc7LcfxWkoiA=', 1557804988),
(2, 'ilmanspeed1910@gmail.com', '5CEoJnqhjKRBlsTGa//RfgIc8pUYjkkbLnu4aLZJwgk=', 1557888847),
(3, 'ilmanspeed1910@gmail.com', 'OpGV3vAGoFodQl8B8SOLJlCdoykEEqMrZnlMtSk4iDw=', 1557890868),
(4, 'ilmanspeed1910@gmail.com', '1TRJcYTbH0eSwpv/d1ojCCDunrpjaqgnoUP9c0uuoLI=', 1557891092),
(5, 'ilmanspeed1910@gmail.com', 'YIRS/v8gb23CW39DEookzWZtRVP9aELlhtH6Pfd57IU=', 1557891125),
(6, 'ilmanspeed1910@gmail.com', 'YbbZLOC+dTLO6i5/3x84GUzKnrvMkl6z3dPkcbmxPN8=', 1557891454),
(7, 'ilmanspeed1910@gmail.com', 'xyyMjBZ1Tepbd37G9w0QzyqUNvrCwzw8oKMIcl2UbfA=', 1557891497),
(13, 'ilmanspeed1910@gmail.com', 'sx46499w10W/SesOYZIRwAWLympm7HTkYcNX4LKooH8=', 1557901442),
(14, 'ilmanspeed1910@gmail.com', '6Qb2zIRn5FCbYKgmT3k9bOAY1XsrEn5oubDk4w99R3s=', 1557901477),
(15, 'ilmanspeed1910@gmail.com', '+TNhvFFVBtKFCF7wFzC7/+q1q77C5zb/4n5QF4E5AIw=', 1557901632),
(16, 'rizqydede@gmail.com', 'yEkEGPszij0g/D/Ita//yIZ9X4GM5EzlLQ/6Ihy0wX8=', 1558489999),
(19, 'gsyauqif26@gmail.com', 'Clfk0GxEnk/q24H6W92AA8v1amp6gHwmES3hHFgvWY4=', 1558596569),
(20, 'rikkiparnandos@gmail.com', 'QPvzhpb6heaO0DfzPwybgAqpY3KFpQcAd0bv4eN1cd8=', 1558596687),
(21, 'rikkisimanjuntak7@gmail.com', 'cCzE2KSnzSrS8yKry7QSMpskgHWfBvNWvf2rbjJD7LM=', 1558596839),
(22, 'rikkisimanjuntak7@gmail.com', '2ZCh6WroRgQ2KkgeKXjS9mBrF22u2LNLfpAACcGymMc=', 1558596898),
(23, 'rikkisimanjuntak7@gmail.com', 'GjIX95ypRE6WAiNk5TNoog7CJpCDO0FHUIx4hqPhR/I=', 1558596939),
(24, 'rikkiparnandos@gmail.com', 'z6xqSX20UJbaIQ3QDXZigil2y+WRxKryQ+f6Abg47AQ=', 1558597141),
(25, 'rikkiparnandos@gmail.com', 'GiZmh+YITvFL60pGPLAzCDYeJHAs9psRzfENTxnmYGQ=', 1558597228),
(26, 'rikkiparnandos@gmail.com', 'XJXbxpP85+ZiA0X2foFs7YrHwNjeZJ9Sbna9Bqu939o=', 1558597298),
(27, 'ilman773@gmail.com', 'MDoIakg82TJFOtaJFZIcubQepNVSD3lqhPBx9ZHsHZw=', 1560215976),
(28, 'ilman773@gmail.com', 'C+6tuhxjpieFUjmliTD5KXcI/E4Tmrz+fj752kagMvg=', 1560216061),
(29, 'ilman773@gmail.com', 'MB9UYTtmiDETElIkrV90ZMoz/nOWOVI/Q/Qqo2EWYoM=', 1560216215);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_awal`
--
ALTER TABLE `data_awal`
  ADD PRIMARY KEY (`id_dataawal`);

--
-- Indexes for table `dismantle`
--
ALTER TABLE `dismantle`
  ADD PRIMARY KEY (`id_dismantle`);

--
-- Indexes for table `pasang_baru`
--
ALTER TABLE `pasang_baru`
  ADD PRIMARY KEY (`id_pasangbaru`);

--
-- Indexes for table `relayout`
--
ALTER TABLE `relayout`
  ADD PRIMARY KEY (`id_relayout`);

--
-- Indexes for table `relokasi`
--
ALTER TABLE `relokasi`
  ADD PRIMARY KEY (`id_relokasi`);

--
-- Indexes for table `ug_dg`
--
ALTER TABLE `ug_dg`
  ADD PRIMARY KEY (`id_bandwidth`);

--
-- Indexes for table `upgrade_link`
--
ALTER TABLE `upgrade_link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_awal`
--
ALTER TABLE `data_awal`
  MODIFY `id_dataawal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dismantle`
--
ALTER TABLE `dismantle`
  MODIFY `id_dismantle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pasang_baru`
--
ALTER TABLE `pasang_baru`
  MODIFY `id_pasangbaru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relayout`
--
ALTER TABLE `relayout`
  MODIFY `id_relayout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `relokasi`
--
ALTER TABLE `relokasi`
  MODIFY `id_relokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ug_dg`
--
ALTER TABLE `ug_dg`
  MODIFY `id_bandwidth` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upgrade_link`
--
ALTER TABLE `upgrade_link`
  MODIFY `id_link` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
