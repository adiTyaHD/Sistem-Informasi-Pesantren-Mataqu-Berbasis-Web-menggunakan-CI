-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 09:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go-lomba`
--
CREATE DATABASE IF NOT EXISTS `go-lomba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `go-lomba`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(2) NOT NULL,
  `category` varchar(20) NOT NULL,
  `icon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `icon`) VALUES
(1, 'Olahraga', 'fas fa-dumbbell'),
(3, 'Desain', 'fas fa-pen'),
(4, 'Komputer', 'fas fa-desktop'),
(5, 'Kesenian', 'fas fa-guitar'),
(6, 'Photography', 'fas fa-camera'),
(7, 'Film', 'fas fa-film'),
(8, 'Anak', 'fas fa-child'),
(9, 'Fashion', 'fas fa-magic');

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `contest_id` int(3) NOT NULL,
  `title` varchar(40) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `organizer` varchar(30) NOT NULL,
  `deadline` int(15) NOT NULL,
  `type` int(1) NOT NULL,
  `bill_number` varchar(20) DEFAULT NULL,
  `bill` varchar(15) DEFAULT NULL,
  `bill_owner` varchar(30) DEFAULT NULL,
  `method_id` int(1) NOT NULL,
  `is_valid` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`contest_id`, `title`, `poster`, `description`, `organizer`, `deadline`, `type`, `bill_number`, `bill`, `bill_owner`, `method_id`, `is_valid`) VALUES
(7, 'ahfpuahfapugp', 'Twenty_One_Pilots_Blurryface_2_large.png', '<p>test crud lomba</p>', 'Gunadarma University', 2009, 1, '215648531', 'BCA', 'Doddy', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `methods`
--

CREATE TABLE `methods` (
  `method_id` int(1) NOT NULL,
  `method` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `methods`
--

INSERT INTO `methods` (`method_id`, `method`) VALUES
(0, 'Bayar di tempat'),
(1, 'Transfer Rekening');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(3) NOT NULL,
  `contest_id` int(3) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(1) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'Company'),
(2, 'Member'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `logo` varchar(30) DEFAULT NULL,
  `link` varchar(30) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `logo`, `link`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'Gunadarma University', 'davarizqi@gmail.com', 'gunadarma3.PNG', 'http://baak.gunadarma.ac.id/', '$2y$10$wFp8IfZIHMuzoYIFLvbFcuGGaoMF9VkxgJL/LECSGk/VRVBXWxWs2', 1, 1, '28, March 2019'),
(13, 'dava@gmail.com', 'dava@gmail.com', '', NULL, '$2y$10$vzizSBjRbd5MmivFRI0Zc.ABYcvGxJt1BT4pskV8TWcAd2Peh01OC', 2, 0, '28, March 2019'),
(14, 'Dava Rizqi Pradipta', 'davarizqipradipta@gmail.com', '', NULL, '$2y$10$3ioEqfuTbkgrDROh.PsNkueJ7R0vYD49Uxp87sE6IOlS8GyZsaJ6m', 2, 1, '28, March 2019'),
(15, 'admin@admin', 'admin@admin.com', '', NULL, '$2y$10$xczoPgFrghsJTATWECMO3elYQg/.rfVNThLD/5hnaMaxupNKDqLru', 3, 1, '28, March 2019'),
(16, 'davawayne@gmail.com', 'davawayne@gmail.com', '', NULL, '$2y$10$2ioC.Jzkt8Eu2ePqoPDJjuX41ASbJ7qzL2fDppob8YHOua60Mggiu', 2, 0, '30, March 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `methods`
--
ALTER TABLE `methods`
  ADD PRIMARY KEY (`method_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `contest_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Database: `loginlengkap`
--
CREATE DATABASE IF NOT EXISTS `loginlengkap` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loginlengkap`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `Jurusan` varchar(128) NOT NULL,
  `birth_date` varchar(30) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `Jurusan`, `birth_date`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Aditya(User)', 'adityafame09@gmail.com', '', '0', 'download1.jpg', '$2y$10$6uKCHVNDQSLZThZcKkRJG.s7Xzr7wDL5buu/j8mdojq.QGGP1pE9C', 2, 1, 1552656017),
(6, 'Aditya(admin)', 'aditbego@gmail.com', '', '0', 'IMG_20190222_084952.jpg', '$2y$10$6uKCHVNDQSLZThZcKkRJG.s7Xzr7wDL5buu/j8mdojq.QGGP1pE9C', 1, 1, 1552668479),
(7, 'dava', 'davarizqi@gmail.com', 'Multimedia', '04,April 2019', 'default.jpg', '$2y$10$ZAt9fN/HqsB0iNBYGonkquGBeghHpQAyM7LZ34tP7b72jQSsvi65C', 2, 0, 1555665169);

-- --------------------------------------------------------

--
-- Table structure for table `user_akses_menu`
--

CREATE TABLE `user_akses_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_akses_menu`
--

INSERT INTO `user_akses_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

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
(3, 'Menu');

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
(1, 'Administrator'),
(2, 'Member');

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
(1, 1, 'Dashboard', 'admin/tampiladmin', 'fas fa-fw fa-h-square', 1),
(2, 2, 'My Profile', 'user/tampiluser', 'fas fa-fw fa-user', 1),
(3, 3, 'Menu Managament', 'menu/index', 'fas fa-fw fa-folder', 1),
(4, 2, 'Edit Profile', 'user/editprofile', 'fas fa-fw fa-user-edit', 1),
(6, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-minus', 1),
(14, 1, 'Role Access', 'admin/role', 'fas fa-fw fa-user-plus', 1),
(15, 2, 'Change Password', 'user/changepass', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `data_created`) VALUES
(1, 'hafizarr.98@gmail.com', 'lSDu3m1w+y113WCU5PdeSHP3ntXRZd6DkbsbtI1I+co=', 1554262276),
(2, 'hafizarr.98@gmail.com', '7klq5gqUb7Jky5WgmMaO6IA39OoP3kUo2H8pfvZPMZo=', 1554262345),
(3, 'davarizqi@gmail.com', 'Ica5/V6rjQkf7fKxQNzyIHg14C9PkCxNcBqz0ZXGM3s=', 1555665169);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_akses_menu`
--
ALTER TABLE `user_akses_menu`
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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_akses_menu`
--
ALTER TABLE `user_akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `mahasiswa`
--
CREATE DATABASE IF NOT EXISTS `mahasiswa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mahasiswa`;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(25, 'Aditya Dwi N', '10116204', 'adityadwi@gmail.com', 'Teknik Informatika'),
(30, 'Dava Rizky Pradipta', '10116203', 'DavaRP@gmail.com', 'Teknik Informatika'),
(31, 'Lukman Setianto', '10116202', 'Lukman_S@gmail.com', 'Teknik Mesin'),
(33, 'Dian Saputra', '10116201', 'Diaans@gmail.com', 'Teknik Planologi'),
(39, 'Zashika Hanifa', '10116200', 'Shishi@gmail.com', 'Teknik Lingkungan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- Database: `mantul_db`
--
CREATE DATABASE IF NOT EXISTS `mantul_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mantul_db`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL,
  `gambar_kategori` varchar(100) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `nomor_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `address`, `nomor_telp`) VALUES
(15, 'Aiden Pierce', 'aiden@gmail.com', 'Londo blok c8 no 19', '(+62)82208225651'),
(16, 'Dava Rizqi Pradipta', 'davawayne@gmail.com', 'Pesona Anggrek Harapan Blok C7 NO 17 , RT01 RW021', '(+62)085921568751'),
(17, 'Dava Rizqi Pradipta', 'davawayne@gmail.com', 'Pesona Anggrek Harapan Blok C7 NO 17 , RT01 RW021', '(+62)085921568751'),
(18, 'Dava Rizqi Pradipta', 'davawayne@gmail.com', 'Pesona Anggrek Harapan Blok C7 NO 17 , RT01 RW021', '(+62)085921568751');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `costumer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`date`, `costumer_id`) VALUES
('2019-01-24 17:00:00', 5),
('2019-01-24 17:00:00', 6),
('2019-01-24 17:00:00', 7),
('0000-00-00 00:00:00', 9),
('0000-00-00 00:00:00', 10),
('0000-00-00 00:00:00', 11),
('0000-00-00 00:00:00', 12),
('0000-00-00 00:00:00', 13),
('0000-00-00 00:00:00', 14),
('2019-01-25 14:34:52', 15),
('2019-01-26 09:23:49', 16),
('2019-01-28 05:12:22', 17),
('2019-02-02 06:05:44', 18);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`, `customer`, `status`, `bukti`, `tanggal`) VALUES
(16, 'HW01', 1, 9000000, 'Aiden Pierce', 0, '', '2019-01-29 02:57:02'),
(17, 'OP01', 1, 12000000, 'Aiden Pierce', 1, 'SEM_4.jpg', '2019-01-29 02:57:02'),
(18, 'LN01', 1, 6500000, 'Dava Rizqi Pradipta', 1, 'IMG-20180813-WA0006.jpg', '2019-01-29 02:57:02'),
(19, 'A001', 2, 5000000, 'Dava Rizqi Pradipta', 2, 'IMG-20180812-WA0000.jpg', '2019-01-29 02:57:02'),
(20, 'HW02', 1, 4000000, 'Dava Rizqi Pradipta', 0, '', '2019-01-29 02:57:02'),
(21, 'HW01', 1, 9000000, 'Dava Rizqi Pradipta', 0, '', '2019-02-02 06:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `kd_barang` varchar(4) NOT NULL,
  `nm_barang` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`kd_barang`, `nm_barang`, `brand`, `stok`, `harga`, `gambar`) VALUES
('A001', 'ASUS ZENFONE MAX PRO M2', 'ASUS', 100, 2500000, 'zenfonemaxprom22.jpg'),
('HW01', 'HUAWEI MATE 10 PRO', 'HUAWEI', 100, 9000000, 'Huawei_Mate_10_Pro__L_1.jpg'),
('HW02', 'HUAWEI HONOR 8X', 'HUAWEI', 100, 4000000, '47410802_c0d49aac-99d3-4854-b2c8-beb04a5ca957_400_300.jpg'),
('IP01', 'IPHONE XS', 'IPHONE', 100, 10100000, 'iphonex2.jpg'),
('LN01', 'LENOVO Z5 PRO', 'LENOVO', 100, 6500000, 'Lenovoz52.jpg'),
('OP01', 'OPPO FIND X', 'OPPO', 100, 12000000, 'oppofindx2.jpg'),
('OP02', 'OPPO F9', 'OPPO', 100, 4500000, 'oppof92.jpg'),
('RM01', 'REALME U1', 'REALME', 100, 2500000, 'realmeu12.jpg'),
('RM02', 'REALME 2 PRO', 'REALME', 100, 2500000, 'realme2pro1.jpg'),
('SM01', 'SAMSUNG GALAXY S9', 'SAMSUNG', 100, 9600000, 'samsungs92.png'),
('SM02', 'SAMSUNG GALAXY S8', 'SAMSUNG', 10, 6500000, 'samsung-galaxy-s8-usp.png'),
('SM03', 'SAMSUNG GALAXY S7 EDGE', 'SAMSUNG', 100, 2900000, 'Samsung-Galaxy-S7-Edge-3-400x300.jpg'),
('SM04', 'SAMSUNG GALAXY NOTE 9', 'SAMSUNG', 100, 12000000, 'DQ8P_EF053BCB-3AF2-41BC-8D7B-ABB2DFD76DBF_large.jpg'),
('SM05', 'SAMSUNG GALAXY NOTE 8', 'SAMSUNG', 100, 9000000, 'Samsung_Galaxy_note8_L_1.jpg'),
('XM01', 'XIAOMI MI MIX 3', 'XIAOMI', 100, 7600000, 'mimix32.jpg'),
('XM02', 'REDMI NOTE 7 ', 'XIAOMI', 100, 2100000, 'redminote73.jpg'),
('XM03', 'XIAOMI REDMI 5 PRO', 'XIAOMI', 100, 2500000, 'Xiaomi_Redmi_Note_5_Pro_L_1.jpg'),
('XM04', 'XIAOMI MI A2', 'XIAOMI', 100, 2400000, 'Xiaomi_Mi_A2_L_1.jpg'),
('XM05', 'XIAOMI MI 8 EXPLORER', 'XIAOMI', 100, 8900000, 'Xiaomi_Mi_8_EE__L_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kd_pos` varchar(5) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `nama`, `password`, `no_telp`, `alamat`, `kota`, `kd_pos`, `gambar`, `stat`) VALUES
(10, 'dava_rizqi', 'davawayne@gmail.com', 'Dava Rizqi Pradipta', '5743ccaef74f2563dc9d08e728069ea1', '(+62)085921568751', 'Pesona Anggrek Harapan Blok C7 NO 17 , RT01 RW021', 'Bekasi', '17124', 'BeautyPlus_20160127232039_save.jpg', 0),
(11, 'sterben', 'sterben@gmail.com', 'Sterben Nur HD', 'd9b9301b76e5aaddb2d943cc1e8fa41e', '(+62)81808185651', 'Gunung Pangrango', 'Bekasi', '17124', 'iron_man_26-wallpaper-1366x768.jpg', 1),
(12, 'aiden_pierce', 'aiden@gmail.com', 'Aiden Pierce', 'd9b9301b76e5aaddb2d943cc1e8fa41e', '(+62)82208225651', 'Londo blok c8 no 19', 'Jakarta', '17124', 'Sasusaku1.gif', 0),
(13, 'davax', 'dave@gmail.com', 'Dava Rizqi', 'd9b9301b76e5aaddb2d943cc1e8fa41e', '085921528751', 'Perumahan pesona anggrek blok c7 no 17 rt 01 rw 021', 'Bekasi', '17124', 'IMG-20180814-WA0005.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `user_id` (`costumer_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Database: `mataqu`
--
CREATE DATABASE IF NOT EXISTS `mataqu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mataqu`;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(3) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `berita` longtext NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `berita`, `gambar`, `kategori`, `date_created`) VALUES
(8, 'Rencana Kegiatan Ramadhan 1439 H Pondok Pesantren MataQu', '<p>Menyambut datangnya bulan suci Ramadhan 1439 H, <a href=\"https://www.pesantrentahfidzmataqu.com/profil/tentang-kami.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Pondok Pesantren Tahfizh Al Quran MataQu\">Pondok Pesantren Tahfizh Al Quran MataQu</a>berencana mengadakan berbagai kegiatan. Berikut informasi rencana kegiatan tersebut:</p><p><strong>Kepada Yang Terhormat,</strong><br><strong>Bapak/Ibu Orangtua/Wali Santri</strong><br><strong>di-</strong><strong>Tempat</strong></p><p><em>Assalamu&#39;alaikum Warohmatullohi Wabarokatuh.</em></p><p>Salam sejahtera kami haturkan, semoga kita senantiasa dalam lindungan Alloh swt. dan senantiasa mendapatkan berkah serta kemudahan rizqi dari-Nya, Aamiin.</p><p>Bulan Ramadhan adalah Bulan yang penuh dengan Rahmat dan pahala dari Alloh, yang akan diberikan kepada hambanya yang ikhlas dan bersungguh-sungguh dalam beramal. Insyaa Alloh Bulan Ramadhan akan segera tiba, semoga kita semua bisa sampai di Bulan Ramadhan dan bisa memaksimalkan ibadah di Bulan Ramadhan.</p><p>Pesantren Tahfiz Quran mataQu membuka kesempatan bapak, ibu, saudara dan saudari ku untuk beramal solih infaq dan sedekah melalui DORA dibulan ramadhan.<br><br>Insya Allah DORA akan disalurkan untuk para penghafal Qur&#39;an.</p><p>(<strong>Baca Juga</strong>: <a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang program Santri Quran 4 Bulan Hafal 30 Juz Ponpes MataQu!\"><em>Ingin Putra/Putri Anda Hafal Al Quran 30 Juz Dan Terbina Akhlak Islamnya? Cari Infonya Disini!</em></a>)</p><p>Adapun rincian penyaluran dana dari DORA tersebut adalah untuk kegiatan:</p><ol><li>Ta&#39;jil santri 20 hari Rp. 13.650.000</li><li>Pembukaan Ramadhan Rp. 605.000</li><li>Mukamal Kubro Rp. 6.930.000</li><li>Mukamal Mutqin Rp. 1.000.000</li><li>Bukber Yatim Dan Duafa Rp. 6.555.000</li><li>Hadiah Perlombaan Rp. 5.250.000</li><li>Kesekretariatan Rp. 1.275.000</li><li>Publikasi Dekorasi &amp; Dekomentasi Rp. 2.450.000</li><li>Wisuda Rp. 7.000.000</li></ol><p><strong>Total Anggaran Rp. 44.715.000</strong></p><p>Sehubungan dengan beberapa program yang akan kami adakan di Bulan Ramadhan di Pesantren Tahfidz Quran MataQu tersebut kami membuka <strong>Dompet Ramadhan MataQu (DORAQU)</strong>, bagi orangtua/wali santri atau kaum muslimin yang ingin membantu kami untuk terselenggaranya kegiatan tersebut, silahkan salurkan bantuannya melalui <strong>DORAQU (Dompet Ramadhan MataQu)</strong> dengan nomer rekening:</p><h3>BNI Syariah (Kode ATM Bersama: 427)</h3><p>0612-518-315<br>A.N M. Asad Humam</p><h3>Bank Syariah Mandiri (Kode ATM Bersama: 451)</h3><p>7116-597-629<br>A.N M. As&#39;ad Humam</p><p>Dimohon kepada para muhsinin yang akan memberikan bantuan dananya untuk memberikan keterangan penyaluran dana tersebut dan japri secara langsung ke nomer panitia <a href=\"https://api.whatsapp.com/send?phone=6281514642666&text=Assalamu%27alaikum%20Wr.%20Wb.%20Ust.%20Saya%20ingin%20konfirmasi%20pembayaran%20untuk%20DORAQU%201439%20H.%20Tks.\">0815-1464-2666</a>.</p><p>Demikian pemberitahuan dan permohonan bantuan ini dibuat. Atas perhatian dan kerjasamanya disampaikan terima kasih. Semoga amalan serta ibadah kita senantiasa diterima oleh Alloh swt. <em>Allohumma Yassir Umuurona. Allohumma Aamiin</em>.</p><p><em>Wassalamu&#39;alaikum Warohmatullohi Wabarokatuh.</em></p><p>Penanggung Jawab Kegiatan Ramadhan,<br><strong>Ust. Nur Sholihin<br></strong></p><p>Mengetahui,</p><p><strong>Ust. As&#39;ad Humam, Lc.</strong><br><em>Direktur Ma&#39;had Tahfidz MataQu,</em></p>', 'tarhib-ramadhan-1438-h-santri-quran-ponpes-tahfizh-mataqu-full.jpg', '4', 1556071781),
(9, 'Pencapaian Hafalan Santri Putri Perpekan s/d 29 April 2010', '<section><p><em>Assalamu&#39;alaikum Wr. Wb.</em></p><p>Berikut adalah ringkasan pencapaian hafalan para santri putri,&nbsp;<strong><a href=\"https://www.pesantrentahfidzmataqu.com/profil/tentang-kami.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lengkap tentang Pondok Pesantren Al Quran MataQu!\">Pondok Pesantren Al Quran MataQu</a></strong>, Program &quot;<strong><a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program Santri Quran 16 Bulan Hafal 30 Juz dan Faham Terjemahnya Dengan Kokoh!\">Santri Tahsin dan Tahfizh Al Quran 30 Juz Mutqin</a></strong>&quot;, selama sepekan terhitung 23 - 29 April 2018.</p></section><section><h3>Halqoh Muroja&#39;ah</h3><ol><li>Nadia Shabriyah: 10 halaman</li><li>Siti Wida Adawiyah: 20 halaman</li><li>Tasya P.: 9 halaman</li><li>Fahira Salwa: 20 halaman</li><li>Yumna: 12 halaman</li><li>Umi Najwa: 6 halaman</li><li>Putri Salsabila: 6 halaman</li><li>Diana Oktapiani: 35 halaman</li><li>Devita Anggi: 8 halaman</li><li>Nadia Elpitasari: 6 halaman</li><li>Raihana: 25 halaman</li><li>Salwa: 17 halaman</li><li>Nasywa:16 halaman</li><li>Julaiha: 2 halaman</li><li>Arika Firdaus: 9 halaman</li><li>Najibah: 35 halaman</li><li>Namira: 10 halaman</li><li>Nurmiyanti: 20 halaman</li><li>Shabrina nazmi: 10 halaman</li></ol><h3>Halqoh 1</h3><ol><li>Naura Salma Nadjifah: 13 halaman (putaran 19-20)</li><li>Farhatul Iftikhari: 10 halaman (putaran 16-17)</li><li>Nabila Thohiriyah: 4 halaman (putaran 4-5)</li><li>Effelyn Putri: 5 halaman (putaran 8)</li><li>Khansa Salsabila: 8 halaman (putaran 7)</li><li>Aqilla: Izin</li><li>Naila: Izin</li></ol></section><section><h3>Halqoh 2</h3><ol><li>Adilah syamiliyah: Ujian Nasional</li><li>Azkiya hanifah: 11 halaman (putaran 15)</li><li>Fathiyya nafisah: 37 halaman (putaran 19-20)</li><li>Nadya shafira azzahra: Takbir Akbar</li><li>Robiah al adawiyah: UN</li><li>Rajwa nafisa: 3 halaman (putaran 3)</li><li>Nezelina: 6 halaman (putaran 5)</li><li>Furaidah: pulang</li><li>Ummah: 6 halaman (putaran 1)</li><li>Riska: 7 halaman (putaran 1)</li><li>&zwnj;Tazkiyya Amalia: 2 halaman (putaran 15)</li></ol><h3>Halqoh 3</h3><ol><li>Ghina Nabila: 13 halaman (putaran 10)</li><li>Nurul Audia: 8 halaman (putaran 2)</li><li>Maryam Jamilah: pulang</li><li>Siti Alika Az-Zahra: UN</li><li>Fadia syifwah: 11 halaman (putaran 15)</li><li>Syahrani istiqomah: 14 halaman (putaran 12)</li><li>Vally Mulya: 9 halaman (putaran 14)</li><li>Mayang Endah lestari: pulang</li><li>Dafa Pohan: 15 halaman (putaran 4)</li><li>Zahra Sa&#39;diah: 5 halaman (putaran 6)</li></ol></section><section><h3>Halqoh 4</h3><ol><li>Najuba Anis: 3 halaman (putaran 3)</li><li>Sukainah yahya: 23 halaman (putaran 20) Takbir akbar</li><li>Diva Aurelia: 6 halaman (putaran 4)</li><li>Tazkiyyah Rahma: 10 halaman (put 9)</li><li>Nabilatuz Zahra: 3 halaman (putaran 9)</li><li>mahira: 10 halaman (putaran 6)</li><li>Husna:3 halaman (putaran 1)</li></ol><h3>Halqoh 5</h3><ol><li>Alya Naura: 4 halaman (putaran 1)</li><li>Andi Risda: &frac12; halaman (putaran 1)</li><li>Iffah Nabila: 6 halaman (putaran 1)</li><li>Khalisha Fathany: 12 halaman (putaran 13-14)</li><li>Laila: 2 halaman (putaran 4)</li><li>Queen Mutiara: 2 halaman (putaran 7)</li><li>Rafida Putri: 23 halaman (putaran 16 -17)</li><li>Salwa Jillah: 10 halaman (putaran 20 - selesai)</li></ol></section><section><h3>Halqoh 6</h3><ol><li>Nandhita nurul: 8 halaman (putaran 19-20)</li><li>Jazmine: 18 halaman (putaran 19)</li><li>Regita: UN</li><li>Amanda: 6 halaman (putaran 18)</li><li>Zahro qolbi: Takbir akbar</li><li>kori hapipah: 18 halaman (putaran 14)</li><li>Wardah Yahya: 9 halaman (putaran 12)</li></ol><h3>Halqoh 7</h3><ol><li>Ranti elvin: 3 halaman (putaran 5)</li><li>sayyidah imtiyazatina: 19 halaman (putaran 13-14)</li><li>Aisyah samiya terjemah</li><li>Ravita dewi: sakit</li><li>Naila nur aulia: 6 halaman (putaran 7)</li><li>alvina azalea widia p: Izin</li><li>adinda melyana: 32 halaman (putaran 18-19)</li><li>miladia Nur laily: Izin</li><li>asyifa syaukan acaa: Izin</li><li>fazahra arlifia putri: Izin</li><li>Afanin: 5 halaman (putaran 8)</li></ol></section><section><p>Demikianlah&nbsp;<strong>Laporan Pencapaian Hafalan Santri Putri Pesantren Tahfizh MataQu</strong> selama sepekan dari tanggal 23 - 29 April 2018. Semoga Alloh swt. memberi kekuatan kepada para santri ini untuk menghafal ayat-ayat suci Al Quran hingga mencapai predikat&nbsp;<em>hafizhoh mutqin</em>, insya Alloh.</p><p>Untuk info lebih lanjut tentang Ponpes MataQu dan program-programnya, Ayah/Bunda dapat menghubungi:&nbsp;<strong><a href=\"https://api.whatsapp.com/send?phone=6287780220777&text=_Assalamu%27alaikum%20Wr.%20Wb._\" target=\"_blank\">0877-8022-0777</a></strong></p></section><p>&quot;&gt;</p>', 'sebagian-santri-putri-mataqu-28-10-2017-full.jpg', '2', 1556071913),
(13, 'Sekilas Tentang Cara Menghafal Al Quran Metode Utsmaniy ', '<p><strong><em>Assalamu&#39;alaikum Wr. Wb. Sahabat Quran yang mudah-mudahan dirohmati Alloh swt.<br>Ada beragam cara dan metode menghafal Al Quran. Salah satunya adalah Metode Utsmani yang digunakan di Ponpes MataQu. Seperti apakah metode tersebut? Berikut penjelasannya:<br></em></strong></p><p>(<strong>Baca</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/dauroh-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Dauroh Al Quran 40 Hari MataQu Hafal 30 Juz dan Faham Terjemahnya disini!\">Hafal Al Quran 30 Juz Dalam 40 Hari? Insya Alloh Bisa! Mau Tahu Caranya?</a></em>)</p><p><strong>Metode Turki Utsmani</strong> disebut juga dengan <strong>Metode Acak</strong>, sebab menghafal Al Quran dengan metode Turki Utsmani memiliki urutan menghafal yang tidak lazim menurut metode-metode umum. Jika metode menghafal pada umumnya memulai hafalan dari halaman pertama (dari juz yang akan dihafal), maka menghafal dengan sistem Turki Utsmani dimulai dari halaman terakhir (halaman ke-20 dari setiap juz). Sebelum penjelasan lebih lanjut, agar metode/sistem Turki Utsmani berjalan efektif, terdapat beberapa persyaratan, yaitu</p><ol><li>Al Quran yang digunakan untuk menghafal haruslah Al Quran yang memiliki standar cetak Al Quran Utsmani, yaitu satu juz terdiri dari 20 halaman (kecuali juz 30) dan satu halaman terdiri dari 15 baris;</li><li>Sebelum memulai tahfizh (menghafal), seorang penghafal atau calon penghafal harus sudah memiliki bacaan makhrojil huruf yang bagus (<em>tahsinul huruf</em>), memperbanyak <em>tilawah</em> agar menguasai membaca Al Quran dengan <em>tartil, tadwir, dan hadr</em>, serta sudah mempelajari <em>tajwid</em> dengan baik;</li><li>Memperhatikan adab-adab mempelajari Al Quran seperti menjaga kebersihan jasmani, rohani, dan tempat menghafal, serta <em>ta&rsquo;zhim</em> (?????) terhadap Al Quran dan Asatidzah (para ustadz).</li></ol><p>(<strong>Baca Juga</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/dauroh-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Dauroh Al Quran 40 Hari MataQu Hafal 30 Juz dan Faham Terjemahnya disini!\">Hafal Al Quran 30 Juz Dalam 40 Hari? Insya Alloh Bisa! Mau Tahu Caranya?</a></em>)</p><p>Kembali kepada metode, terdapat tiga istila dalam metode Turki Utsmani, yaitu putaran, halaman baru, dan halaman lama. Seperti yang sudah dijelaskan sebelumnya di atas, menghafal ala Turki Utsmani dimulai dari halaman ke-20 dari juz 1. Setelah itu lanjut ke halaman 20 dari juz 2, halaman ke-20 juz 3, dan seterusnya (untuk juz 30, &ldquo;halaman ke-20&rdquo; adalah dari surat Al-&lsquo;Asr hingga An-Nas). Jika halaman ke-20 dari setiap juz sudah dihafalkan, maka itu disebut sebagai putaran pertama. Ketika halaman ke-20 (dari setiap juz) sudah selesai dihafal dan mulai menghafal halaman ke-19 (dari setiap juz), maka halaman ke-19 yang akan dihafal disebut sebagai halaman baru dan halaman ke-20 yang sudah dihafal disebut sebagai halaman lama, begitu seterusnya.</p><p>Jika masih ada yang ingin ditanyakan secara umum ataupun secara khusus tentang Cara Menghafal Al Quran Metode Turki Utsmani yang diterapkan oleh Pondok Pesantren Tahfizh Al Quran MataQu, bisa ditanyakan melalui Ust. Jamal (0812-1904-5235); Ummu Faruq (0812-8886-5591); Muhammad Dodi (0822-8849-6326) atau mendatangi kami secara langsung di Cipendawa, Sirnagalih, Megamendung, Puncak, Bogor, Jawa Barat, Indonesia, 16670.</p><p><em>Jazakalloh Khoiron.</em></p>', 'mengagungkan-dan-mengamalkan-al-quran-disetiap-waktu-kita-full.jpg', '3', 1556345346),
(16, 'Pencapaian Hafalan Santri Putra Perpekan s/d 6 April 2018', '<p>HALAQOH MUROJA&#39;AH / HUFFAZH :<br>Ust. M Harry Ramadhan.<br>&nbsp;Ust M Akbar</p><p>1. Zaydan aly: 22 Juz<br>2. Arfan affandi: 15 Juz<br>3. Ramadhan ahmad akbar: 8 Juz<br>4. Ayatullah reyhan: 12 Juz<br>5. M raghil: 7 Juz<br>6. Alfayyedh: 8 Juz<br>7. Sayyid fathurrahman: 8 Juz<br>8. Mufid iskandar: 7 Juz<br>9. Syahril sabirin: 5 Juz<br>10. Isfaqur rahman: 19 Juz<br>11. Adam insan: 13 Juz<br>12. Dimas ilyas sarwana: 10 Juz<br>13. Fajri akbar: 11 Juz<br>14. Zaky ambardi: 6 Juz<br>15. Najmuddin: 4 Juz<br>16. Raihan razin: 7 Juz<br>17. Fahish bimo: 14 Juz<br>18. Nur annazmi: 5 Juz<br>19. Yahdi Mayasya: 15 Juz<br>20. Danny arafi pohan: 6 Juz<br>21. M abdissalam: 8 Juz<br>22. Zaky ramuri: 6 Juz<br>23. M rasyid: 1 Juz<br>24. Sa&#39;id ahmad: 4 Juz<br>25. Asy&#39;ari putra pulungan: 6 Juz<br>26. M nashrullah: 6 juz<br>27. Akbar abdiya rizqi: 7 Juz<br>28. M rafli audremi: 5 Juz<br>29. M alfi fahrizal: 4 Juz<br>30. Faza multazama: 6 Juz<br>31. Firdaus chaudry : 2 Juz<br>32. Andi Yasin : 3 Juz<br>33. Azzam Kafabillah : 3 Juz<br>34. Aldiansyah : 5 juz<br>35. Naufal Aqli Khair : 1 Juz<br>36. Raka Kamandaka : 1 Juz<br>37. M Rizqul Mubarok : Baru masuk huffaz<br><br><br>HALAQOH TAHFIZH 1<br><br>1. Abdul Hafizh 16 H Put 13<br>&zwnj;2. Macho Dinta P 91 Hal Put 7<br>3. Fariz al azka 4 H Put 7<br>&zwnj;4. M fikri fadhila 14 H put 8<br>&zwnj;5. Umar nur 3 H Put 2<br>6. Daffa nafid pratama<br>&zwnj;7. Yogi Arlansyah 6 H Put 1<br>8. M irham 13 H put 12<br>9. M Rajendra 31 H Put 9<br>&zwnj;10. Abu Ahmed 5 H put 7<br>11.Rabbani 5 H Put 9<br>12. M da&#39;i 11 H Put 6<br>13. Arva fauzan<br>14. M fauzan R 10 H put 5<br>15. Raju 13 H Put 7<br>16. Kholil Gibran 52 H Put 3<br>17. Syekh Nabil<br>18. Nailul Huda 36 H Put 5<br>19. Ebana Alqutby 21 H Put 3<br>20. Haikal abdillah 17 Hal Put 8<br>21. M arya delferano<br><br><br>HALAQOH TAHFIZH 2 :</p><p><br>1. Umar Abdul aziz. Pulang<br>2.fakhri arriziq. 22 hal put 4<br>3. Jordan Salim. 13 hal put 3<br>4. Imam Munif. 7 hal put 2<br>5. Ari Rifqi.7 hal put 3<br>6. Dimas Ishlahuddin. 41 hal put 13<br>7. Radika Afriandy. Pulang<br>8.M Fatin Fawwazy.14 hal put 7<br>9.Fadhil Abdullah. 6 hal put 3<br>10.M farel.18 hal put 4<br>11. Fauzi Affandi. 1 hal put 2<br>12.Hasfi Fakhri. Pulang<br>13. M.Fajriansyalh.15 hal Put 10<br>14. Abdullah Ammar. Pulang<br>15. M.Fauzi Assalam.32 hal put 6<br>16. Rissyieka Bismi Aily.11 hal put 4<br>17. Muhandis. Pulang<br>18. M.Zaky Nail. 10 hal Put 3<br>19. Fakhri Ibrahim 27 hal put 2<br>20. Ahmad Amru Fakhri. 55 hal put 17<br>21. Rizki Naufal. Pulang<br>22. Nurdiansyah. 15 hal put 2<br>23. Daffa Al Zaki .10 hal put 1<br>24. Cyrill Ahmad fayyadh. 41 hal put 14<br><br><br>Khalaqoh Tahsin 1 :<br><br>1) Azhar nopal - juz 28 surah alhasr<br>2) Asriadi - juz 29 suroh Nuh<br>3) M.Khalil Gibran - Juz 28 suroh al munafikun<br>4) Khafilah Fatta - juz 28 suroh attholaq<br>5) M.Fakhrul Arifin - juz 27 surah Al waqiah<br>6) Anto Susanto - juz 29 suroh Al Jin<br>7) M.Deva - Mukamal juz 3<br>8) M.Ariiq Baqir - Albaqaroh hal 3<br>9) Afif - juz 29 suroh al mulk<br>10) Sholahudin Alayyubi - Mukamal juz 1<br>11) Fatih Nabhan - Juz 29 suroh Nuh<br>12) M.Irfan Rafi - mukamal juz 4<br><br><br>KHALAQOH TAHSIN 2<br><br><br>1) al fayed -juz 30 suroh as syams<br>2) M Fakhri -juz 29 suroh al jin<br>3) alba -sakit<br>4) Hasan muafa -juz 1 hal 8<br>5) Jibril -mukkamal 3 juz<br>6) faisal rois -mukammal juz 30<br>7) raden -mukammal juz 29<br>8) Aofa hammada -juz 29 suroh al mursalat<br>9) Fauzan osman -pulang<br>10) M.Robi -program membaca<br>11) Ramdhan widiz -program membaca<br>12) daffa diyatmika -mukammal juz 29<br>13) Nugraha Dipayana - juz 29 suroh al mulk</p>', 'kegiatan-1-november-2017-santri-putra-ponpes-tahfizh-mataqu-full1.jpg', '2', 1556421194),
(17, 'Pencapaian Hafalan Santri Putri Perpekan s/d 29 April 2018 ', '<section><p><span style=\"color: rgb(0, 0, 0);\"><em>Assalamu&#39;alaikum Wr. Wb.</em></span></p><p><span style=\"color: rgb(0, 0, 0);\">Berikut adalah ringkasan pencapaian hafalan para santri putri, <strong><a href=\"https://www.pesantrentahfidzmataqu.com/profil/tentang-kami.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lengkap tentang Pondok Pesantren Al Quran MataQu!\">Pondok Pesantren Al Quran MataQu</a></strong>, Program &quot;<strong><a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program Santri Quran 16 Bulan Hafal 30 Juz dan Faham Terjemahnya Dengan Kokoh!\">Santri Tahsin dan Tahfizh Al Quran 30 Juz Mutqin</a></strong>&quot;, selama sepekan terhitung 23 - 29 April 2018.</span></p></section><section><h3><span style=\"color: rgb(0, 0, 0);\">Halqoh Muroja&#39;ah</span></h3><ol><li><span style=\"color: rgb(0, 0, 0);\">Nadia Shabriyah: 10 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Siti Wida Adawiyah: 20 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Tasya P.: 9 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Fahira Salwa: 20 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Yumna: 12 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Umi Najwa: 6 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Putri Salsabila: 6 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Diana Oktapiani: 35 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Devita Anggi: 8 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Nadia Elpitasari: 6 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Raihana: 25 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Salwa: 17 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Nasywa:16 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Julaiha: 2 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Arika Firdaus: 9 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Najibah: 35 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Namira: 10 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Nurmiyanti: 20 halaman</span></li><li><span style=\"color: rgb(0, 0, 0);\">Shabrina nazmi: 10 halaman</span></li></ol><h3><span style=\"color: rgb(0, 0, 0);\">Halqoh 1</span></h3><ol><li><span style=\"color: rgb(0, 0, 0);\">Naura Salma Nadjifah: 13 halaman (putaran 19-20)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Farhatul Iftikhari: 10 halaman (putaran 16-17)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Nabila Thohiriyah: 4 halaman (putaran 4-5)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Effelyn Putri: 5 halaman (putaran 8)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Khansa Salsabila: 8 halaman (putaran 7)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Aqilla: Izin</span></li><li><span style=\"color: rgb(0, 0, 0);\">Naila: Izin</span></li></ol></section><section><h3><span style=\"color: rgb(0, 0, 0);\">Halqoh 2</span></h3><ol><li><span style=\"color: rgb(0, 0, 0);\">Adilah syamiliyah: Ujian Nasional</span></li><li><span style=\"color: rgb(0, 0, 0);\">Azkiya hanifah: 11 halaman (putaran 15)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Fathiyya nafisah: 37 halaman (putaran 19-20)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Nadya shafira azzahra: Takbir Akbar</span></li><li><span style=\"color: rgb(0, 0, 0);\">Robiah al adawiyah: UN</span></li><li><span style=\"color: rgb(0, 0, 0);\">Rajwa nafisa: 3 halaman (putaran 3)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Nezelina: 6 halaman (putaran 5)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Furaidah: pulang</span></li><li><span style=\"color: rgb(0, 0, 0);\">Ummah: 6 halaman (putaran 1)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Riska: 7 halaman (putaran 1)</span></li><li><span style=\"color: rgb(0, 0, 0);\">&zwnj;Tazkiyya Amalia: 2 halaman (putaran 15)</span></li></ol><h3><span style=\"color: rgb(0, 0, 0);\">Halqoh 3</span></h3><ol><li><span style=\"color: rgb(0, 0, 0);\">Ghina Nabila: 13 halaman (putaran 10)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Nurul Audia: 8 halaman (putaran 2)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Maryam Jamilah: pulang</span></li><li><span style=\"color: rgb(0, 0, 0);\">Siti Alika Az-Zahra: UN</span></li><li><span style=\"color: rgb(0, 0, 0);\">Fadia syifwah: 11 halaman (putaran 15)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Syahrani istiqomah: 14 halaman (putaran 12)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Vally Mulya: 9 halaman (putaran 14)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Mayang Endah lestari: pulang</span></li><li><span style=\"color: rgb(0, 0, 0);\">Dafa Pohan: 15 halaman (putaran 4)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Zahra Sa&#39;diah: 5 halaman (putaran 6)</span></li></ol></section><section><h3><span style=\"color: rgb(0, 0, 0);\">Halqoh 4</span></h3><ol><li><span style=\"color: rgb(0, 0, 0);\">Najuba Anis: 3 halaman (putaran 3)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Sukainah yahya: 23 halaman (putaran 20) Takbir akbar</span></li><li><span style=\"color: rgb(0, 0, 0);\">Diva Aurelia: 6 halaman (putaran 4)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Tazkiyyah Rahma: 10 halaman (put 9)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Nabilatuz Zahra: 3 halaman (putaran 9)</span></li><li><span style=\"color: rgb(0, 0, 0);\">mahira: 10 halaman (putaran 6)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Husna:3 halaman (putaran 1)</span></li></ol><h3><span style=\"color: rgb(0, 0, 0);\">Halqoh 5</span></h3><ol><li><span style=\"color: rgb(0, 0, 0);\">Alya Naura: 4 halaman (putaran 1)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Andi Risda: &frac12; halaman (putaran 1)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Iffah Nabila: 6 halaman (putaran 1)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Khalisha Fathany: 12 halaman (putaran 13-14)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Laila: 2 halaman (putaran 4)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Queen Mutiara: 2 halaman (putaran 7)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Rafida Putri: 23 halaman (putaran 16 -17)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Salwa Jillah: 10 halaman (putaran 20 - selesai)</span></li></ol></section><section><h3><span style=\"color: rgb(0, 0, 0);\">Halqoh 6</span></h3><ol><li><span style=\"color: rgb(0, 0, 0);\">Nandhita nurul: 8 halaman (putaran 19-20)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Jazmine: 18 halaman (putaran 19)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Regita: UN</span></li><li><span style=\"color: rgb(0, 0, 0);\">Amanda: 6 halaman (putaran 18)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Zahro qolbi: Takbir akbar</span></li><li><span style=\"color: rgb(0, 0, 0);\">kori hapipah: 18 halaman (putaran 14)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Wardah Yahya: 9 halaman (putaran 12)</span></li></ol><h3><span style=\"color: rgb(0, 0, 0);\">Halqoh 7</span></h3><ol><li><span style=\"color: rgb(0, 0, 0);\">Ranti elvin: 3 halaman (putaran 5)</span></li><li><span style=\"color: rgb(0, 0, 0);\">sayyidah imtiyazatina: 19 halaman (putaran 13-14)</span></li><li><span style=\"color: rgb(0, 0, 0);\">Aisyah samiya terjemah</span></li><li><span style=\"color: rgb(0, 0, 0);\">Ravita dewi: sakit</span></li><li><span style=\"color: rgb(0, 0, 0);\">Naila nur aulia: 6 halaman (putaran 7)</span></li><li><span style=\"color: rgb(0, 0, 0);\">alvina azalea widia p: Izin</span></li><li><span style=\"color: rgb(0, 0, 0);\">adinda melyana: 32 halaman (putaran 18-19)</span></li><li><span style=\"color: rgb(0, 0, 0);\">miladia Nur laily: Izin</span></li><li><span style=\"color: rgb(0, 0, 0);\">asyifa syaukan acaa: Izin</span></li><li><span style=\"color: rgb(0, 0, 0);\">fazahra arlifia putri: Izin</span></li><li><span style=\"color: rgb(0, 0, 0);\">Afanin: 5 halaman (putaran 8)</span></li></ol></section><section><p><span style=\"color: rgb(0, 0, 0);\">Demikianlah <strong>Laporan Pencapaian Hafalan Santri Putri Pesantren Tahfizh MataQu</strong> selama sepekan dari tanggal 23 - 29 April 2018. Semoga Alloh swt. memberi kekuatan kepada para santri ini untuk menghafal ayat-ayat suci Al Quran hingga mencapai predikat <em>hafizhoh mutqin</em>, insya Alloh.</span></p><p><span style=\"color: rgb(0, 0, 0);\">Untuk info lebih lanjut tentang Ponpes MataQu dan program-programnya, Ayah/Bunda dapat menghubungi: <strong><a href=\"https://api.whatsapp.com/send?phone=6287780220777&text=_Assalamu\'alaikum%20Wr.%20Wb._\" target=\"_blank\">0877-8022-0777</a></strong></span></p></section>', 'sebagian-santri-putri-mataqu-28-10-2017-full1.jpg', '2', 1556421329),
(18, ' Pencapaian Hafalan Santri Putri Perpekan s/d 10 Desember 2017', '<p>Berikut adalah ringkasan pencapaian hafalan para santri putri, <strong><a href=\"https://www.pesantrentahfidzmataqu.com/profil/tentang-kami.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lengkap tentang Pondok Pesantren Al Quran MataQu!\">Pondok Pesantren Al Quran MataQu</a></strong>, Program &quot;<strong><a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program Santri Quran 16 Bulan Hafal 30 Juz dan Faham Terjemahnya Dengan Kokoh!\">16 Bulan Hafal 30 Juz dan Faham Terjemahnya Dengan Kokoh</a></strong>&quot;, selama sepekan terhitung 4 - 10 Desember 2017:</p><p>&nbsp;</p><h2>Halqoh 1</h2><p><br></p><h3>Ustadzah Jihan</h3><ol><li>Naura Salma Nadjifah: 21 halaman (putaran 9-10)</li><li>Tasya Prasetiani: 25 halaman (putaran 14)</li><li>Sella Triavril: 3 halaman (putaran 3)</li><li>Farhatul Iftikhari: 15 halaman (putaran 8-9)</li><li>Nabila Thohiriyah: 3 halaman (putaran 3)</li><li>Revalina: -</li><li>Effelyn Putri: 9 &frac12; halaman (putaran 4)</li><li>Raysa Kayla: 21 halaman (putaran 12)</li><li>Faizah Mufidah: 42 halaman (putaran 19-20)</li><li>Azizah: *pulang*</li><li>Khansa Salsabila: 10 halaman (putaran 2)</li><li>Salamah: Binadzor</li></ol><p>&nbsp;</p><h2>Halqoh 2</h2><p><br></p><h3>Ustadzah Karimah</h3><ol><li>Adilah syamiliyah: &frac12; halaman (putaran 5)</li><li>Arflifia risky adinda: *pulang*</li><li>Altares ainun: 7 halaman (putaran 3)</li><li>Azkiya hanifah: 8 halaman (putaran 7)</li><li>Dian alviana zahra: 37 halaman (putaran 18-19)</li><li>Fathiyya nafisah: 19 halaman (putaran 8)</li><li>Khaula alzhariyah: 6 halaman (putaran 16)</li><li>Nadya shafira azzahra: 24 halaman (putaran 8)</li><li>Robiah al adawiyah: 2 halaman (putaran 4)</li><li>Rajwa nafisa: 4 halaman (putaran 1)</li><li>Nafilah: 2 halaman (putaran 1)</li><li>Nezelina:5 halaman (putaran 2)</li></ol><p>&nbsp;</p><h2>Halqoh 3</h2><p><br></p><h3>Ustadzah Indah</h3><ol><li>Ghina nabila: 10 halaman (putaran 3)</li><li>Devita Anggi: 23 halaman (putaran 15)</li><li>Vally mulya: 11 halaman (putaran 9)</li><li>Annisa vadilah: 26 halaman (13)</li><li>Saharani: 13 halaman (putaran 6)</li><li>Fadiah syifwah:10 halaman (putaran 10)</li><li>Maryam jamilah: 7 halaman (putaran 4)</li><li>Nia novita: 23 halaman (putaran 10)</li><li>Namira: 18 halaman (putaran 11)</li><li>Alika siti Zahra: 12 halaman (putaran 9)</li><li>Nurul audia: binnadzor</li><li>Abista: 7 1/2 halaman (putaran 1)</li></ol><p>&nbsp;</p><p>(<strong>Baca Juga</strong>: <a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang program Santri Quran 4 Bulan Hafal 30 Juz Ponpes MataQu!\"><em>Ingin Putra/Putri Anda Hafal Al Quran 30 Juz Dan Terbina Akhlak Islamnya? Cari Infonya Disini!</em></a>)</p><p>&nbsp;</p><h2>Halqoh 4</h2><p><br></p><h3>Ustadzah Liza</h3><ol><li>Dini zahrotul amro: 8 halaman (putaran 2)</li><li>Fahira salwa: 22 halaman (putaran 14)</li><li>Hafiya mumtaz: (pulang)</li><li>Harfanny ramadhania: 18 halaman (putaran 14)</li><li>Husna rifa huwaida: (binnazor)</li><li>Mumtaz izzatul: 16 halaman (putaran 10)</li><li>Nur Ais: 1 halaman (putaran 2)</li><li>Nisrina aura fatima: 1 halaman (putaran 1)</li><li>Raisah nazala: 7 (putaran 5)</li><li>Salsabila noviawan: (TAKBIR AKBAR)</li><li>Tazkiya amalia: 1 halaman (putaran 13)</li><li>Tsabita ulwan: 24 (putaran 11)</li><li>Wardah yahya: 9 halaman (putaran 6)</li><li>Zahra sa&#39;diyah: 7 halaman (putaran 2)</li></ol><p>&nbsp;</p><h2>HALAQOH 5</h2><p><br></p><h3>Ustadzah Ningsih</h3><ol><li>Nadia Elpita Sari: 29 halaman (putaran 20-selesai)</li><li>Nadzirotul ghaziya al yumna: 31 halaman (putaran 17-18)</li><li>Nurul husnina: 19 halaman (putaran 12-13)</li><li>Nur andini khoirunnisa: 23 halaman (putaran 20-selesai)</li><li>Khalisha fathany: 9 halaman (putaran 7)</li><li>Salwa jillah nur rahman: 6 halaman (putaran 11)</li><li>Sabrina hanifah: 22 halaman (putaran 12-13)</li><li>khoiriyah nur aisyah: 5 halaman (putaran 3)</li><li>Queen mutiara: 4 halaman (putaran 4)</li><li>Rafidah putri mega: 5 halaman (putaran 10)</li><li>Diana oktapiani: 79 halaman (putaran 17-20)</li><li>Laila Da&#39;yatil ulil azmiah: 5 halaman (putaran 1)</li></ol><p>&nbsp;</p><h2>HALAQOH 6</h2><p><br></p><h3>Ustadzah Nadia</h3><ol><li>Arika firdaus: 35 halaman (putaran 17-18)</li><li>Balqis Najmi: 1 halaman (putaran 2)</li><li>Najuba Anis: 3 halaman (putaran 1-2)</li><li>Najla Inatsa: 28 halaman (putaran 13-14)</li><li>Putri Afifa: 16 halaman (putaran 9)</li><li>Sukainah yahya: 16 halaman (putaran 8)</li><li>Diva Aurelia: 3 halaman (putaran 2)</li><li>Siti ayu Lestari: 6 halaman (putaran 13)</li><li>Tazkiyyah Rahma: 8 halaman (putaran 4)</li><li>Nabilatuz Zahra: sakit</li><li>Nelisaturrahmah: pulang</li><li>Widiyanti: pulang</li></ol><p>&nbsp;</p><p>(<strong>Baca Juga</strong>: <a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang program Santri Quran 4 Bulan Hafal 30 Juz Ponpes MataQu!\"><em>Ingin Putra/Putri Anda Hafal Al Quran 30 Juz Dan Terbina Akhlak Islamnya? Cari Infonya Disini.</em></a>)</p><p>&nbsp;</p><h2>HALAQOH 7</h2><p><br></p><h3>Ustadzah Nadhila</h3><ol><li>Nur avivah: Pulang</li><li>Nandhita nurul: 5 halaman putaran 16 selesai</li><li>Nasywwa: 15 halaman putaran 15</li><li>Jihan: 6 halaman putaran 3</li><li>Jasmine: 9 halaman putaran 8</li><li>Resti: binadzor</li><li>Regita: binadzor</li><li>Amanda: 10 halaman putaran 14</li><li>Zahro qolbi: 10 halaman putaran 8</li><li>Afina: Pulang</li><li>Kori hapipah 17 halaman putaran 6</li></ol><p>&nbsp;</p><h2>Halqoh 8</h2><p><br></p><h3>Ustadzah Fidah</h3><ol><li>Ranti elvin: 8 halaman (putaran 2-3)</li><li>Sayyidah imtiyazatina: 10 halaman (putaran 7)</li><li>Shabrina N: 18 halaman (putaran 9)</li><li>Siti annisa fatmah: 4 halaman (putaran 4-5)</li><li>Afanin: Pulang</li><li>Ravita D: 10 halaman (putaran 6)</li><li>Naila nur laila: 7 halaman (putaran 3)</li><li>julaeha: 17 halaman (putaran 7-8)</li><li>Adinda melyana: 23 halaman (putaran 7-8)</li><li>Alvina azalea: Terjemahan</li><li>Raisha Salsabila: 1 halaman (putaran 6)</li></ol><p>&nbsp;</p><h2>Halqoh Muroja&#39;ah Al Hafizhoh</h2><p><br></p><h3>Ustadzah Fathimah Az Zahra:</h3><ol><li>Adinda Azzahra: 40 halaman (juz 19-20)</li><li>Siti Wida Adawiyah: 24 halaman (juz 27)</li><li>Nadia Sabriyah: 14 halaman (juz 16)</li><li>Najibah: 20 halaman (juz 13-14)</li><li>Putri Salsabila: 33 halaman (juz 6-8)</li><li>Shofia Wahda: 32 halaman (juz 5-6)</li><li>Rumaisha: 5 halaman (juz 10)</li><li>Umi Najwa: 6 halaman (juz 5)</li><li>Nurmiyanti Dahlan: 12 halaman (juz 4)</li><li>Salsabila Granadha: 58 halaman (juz 1-3)</li><li>Raihana: 8 halaman (juz 1)</li></ol><p>&nbsp;</p><p>Demikianlah <strong>Laporan Pencapaian Hafalan Santri Putri Pesantren Tahfizh MataQu</strong> selama sepekan dari tanggal 30 Oktober - 5 November 2017. Semoga Alloh swt. memberi kekuatan kepada para santri ini untuk menghafal ayat-ayat suci Al Quran hingga mencapai predikat <em>hafizhoh mutqin</em>, insya Alloh. Info lanjut tentang <strong>Program Santri Tahsin dan Tahfizh Al Quran 30 Juz Mutqin, Pesantren Tahfizh Al Quran MataQu</strong> dapat menghubungi: <strong><a href=\"https://api.whatsapp.com/send?phone=6287780220777&text=_Assalamu\'alaikum%20Wr.%20Wb._\" target=\"_blank\">0877-8022-0777</a></strong><br><br><em>Jazakumullohu Khoiron.</em><br><br><em>Wassalamu&#39;alaikum Wr. Wb.</em></p>', 'sebagian-santri-putri-mataqu-28-10-2017-full2.jpg', '2', 1556421484),
(20, 'Sekilas Tentang Qira\'at Ashim Riwayat Hafs (Bagian I/III)', '<p>Hafal Al Quran 30 Juz Dalam 40 Hari? Insya Alloh Bisa! Mau Tahu Caranya?)</p><p><br></p><p>&nbsp;</p><p>Sebenarnya Imam &lsquo;Ashim juga mempunyai murid-murid kenamaan lainnya, salah satu dari mereka yang akhirnya menjadi perawi yang masyhur adalah Syu&rsquo;bah Abu bakar bin al-&lsquo;Ayyasy. Hanya saja para ulama lebih banyak mengunggulkan Hafsh daripada Syu&rsquo;bah. Imam Ibn al-Jazari dalam kitabnya &ldquo;Ghayah an-Nihayah fi Thabaqat al-Qurra&rsquo; &rdquo; tidak menyebutkan guru-guru Hafsh kecuali Imam &lsquo;Ashim saja. Sementara murid-murid beliau tidak terhitung banyaknya, mengingat beliau mengajarkan Al-Qur&rsquo;an dalam rentang waktu yang demikian lama. Di antara murid-murid Hafsh adalah : Husein bin Muhammad al-Murudzi, Hamzah bin Qasim al-Ahwal, Sulaiman bin Dawud az-Zahrani, Hamd bin Abi Utsman ad-Daqqaq, al-&lsquo;Abbas bin al-Fadl ash-Shaffar, Abdurrahman bin Muhamad bin Waqid, Muhammad bin al-fadl Zarqan, &lsquo;Amr bin ash-Shabbah, Ubaid bin ash-Shabbah, Hubairah bin Muhammad at-Tammar, Abu Syu&rsquo;aib al-Qawwas, al-Fadl bin Yahya bin Syahi, al-Husain bin Ali al-Ju&rsquo;fi, Ahmad bin Jubair al-Inthaqi dan lain-lain.</p><p>&nbsp;</p><p>Hafsh memang seorang yang menghabiskan umurnya untuk berkhidmah kepada Al-Qur&rsquo;an. Setelah puas menimba ilmu Qira&rsquo;at kepada Imam &lsquo;Ashim, beliau berkelana ke beberapa negeri antara lain Baghdad yang merupakan Ibukota negara pada saat itu. Kemudian dilanjutkan pergi menuju ke Mekah. Pada kedua tempat tersebut, Hafsh mendarmabaktikan ilmunya dengan mengajarkan ilmu Qira&rsquo;at khususnya riwayat &lsquo;Ashim kepada penduduk kedua negeri tersebut.</p><p>&nbsp;</p><p>Bisa dibayangkan berapa jumlah murid di kedua tempat itu yang menimba ilmu dari beliau. Jika kemudian riwayat Hafsh bisa melebar ke seantero negeri, hal tersebut tidaklah aneh mengingat kedua negeri tersebut adalah pusat keislaman pada saat itu. Sanad Bacaan Hafsh. Sanad ( runtutan periwayatan) Imam Hafsh dari Imam &lsquo;Ashim berujung kepada sahabat Ali bin Abi Thalib. Sementara bacaan Syu&rsquo;bah bermuara kepada sahabat Abdullah bin Mas&rsquo;ud. Hal tersebut dikemukakan sendiri oleh Hafsh ketika beliau mengemukakan kepada Imam &lsquo;Ashim, kenapa bacaan Syu&rsquo;bah banyak berbeda dengan bacaannya ? padahal keduanya berguru kepada Imam yang sama yaitu &lsquo;Ashim. Lalu &lsquo;Ashim menceritakan tentang runtutan sanad kedua rawi tersebut. Runtutan riwayat Hafsh adalah demikian: Hafsh - &lsquo;Ashim - Abu Abdurrahman as-Sulami- Ali bin Abi Thalib. Sementara runtutan periwayatan Syu&rsquo;bah adalah demikian: Syu&rsquo;bah- Ashim- Zirr bin Hubaisy-Abdullah bin Mas&rsquo;ud. Penyebaran Qira&rsquo;at di Negeri-Negeri Islam.</p><p>&nbsp;</p><p>(<strong>Baca Juga</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/dauroh-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Dauroh Al Quran 40 Hari MataQu Hafal 30 Juz dan Faham Terjemahnya disini!\">Hafal Al Quran 30 Juz Dalam 40 Hari? Insya Alloh Bisa! Mau Tahu Caranya?</a></em>)</p><p>Pada saat ini Qira&rsquo;at yang masih hidup di tengah-tengah umat Islam di seluruh dunia tinggal beberapa saja, yaitu : 1. Bacaan Imam Nafi&rsquo; melalui riwayat Qalun masih digunakan oleh masyarakat Libia dan Tunisia pada umumnya. Sementara riwayat Warsy masih digunakan oleh masyarakat di Afrika Utara (al-Maghrib al-&lsquo;Arabi) seperti Aljazair, Maroko, Mauritania. Sedangkan masyarakat di Sudan masih menggunakan empat riwayat yaitu : Qalun, Warsy, ad-Duri Abu &lsquo;Amr, dan Hafsh. 2. Bacaan riwayat ad-Duri Abu &lsquo;Amr masih banyak digunakan oleh kaum Muslimin di Somalia, Sudan, Chad, Nigeria, dan Afrika tengah secara umum.</p><p>Pada waktu-waktu yang lalu riwayat ad-Duri juga digunakan oleh orang Yaman. Hal itu terbukti bahwa Tafsir Fath al-Qadir karya asy-Syaukani tulisan Al-Qur&rsquo;annya mengikuti riwayat ad-Duri. Adanya riwayat ad-Duri di Yaman barangkali rembesan dari Sudan. Mengingat hubungan kedua negera tersebut telah terjalin sejak dahulu. 3. Bacaan Al-Qur&rsquo;an riwayat Hafsh dari &lsquo;Ashim adalah bacaan yang paling banyak tersebar di seantero dunia Islam.</p><p><em>Disalin dari artikel berjudul, &quot;<a href=\"https://ulinuhaasnawi.blogspot.co.id/2014/02/kemasyhuran-qiraat-ashim-riwayat-hafs.html\">KEMASYHURAN QIRA&#39;AT &#39;ASHIM RIWAYAT HAFS DI DUNIA ISLAM (Bagian I)</a>&quot;.</em></p><p>&quot;&gt;</p>', 'mengagungkan-dan-mengamalkan-al-quran-disetiap-waktu-kita-full1.jpg', '3', 1556531984),
(21, 'Faktor-faktor Penghambat Dalam Menghafal Al Quran', '<p><strong><em>Faktor-faktor Penghambat Dalam Menghafal Al Quran, Yang Dikutip Dari&nbsp;<a href=\"https://www.pesantrentahfidzmataqu.com/artikel/panduan-menghafal.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk melihat kutipan lainnya!\">Buku Panduan Menghafal Al Quran</a> Yang Menjadi Buku Panduan Utama Pada Proses Belajar Mengajar&nbsp;<a href=\"https://www.pesantrentahfidzmataqu.com/program.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk melihat program-program yang ditawarkan oleh Pesantren Tahfizh Al Quran MataQu!\">Program-program</a> <a href=\"https://www.pesantrentahfidzmataqu.com/profil/tentang-kami.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Pesantren Tahfizh Al Quran MataQu!\">Pesantren Tahfizh Al Quran MataQu</a>.</em></strong></p><p>&nbsp;</p><p>Seringkali terjadi pada diri seorang muslim yang kesulitan ketika hendak menghafal Al Quran. Kesulitan-kesulitan seperti inilah yang kemudian menjadikan dirinya &quot;berputus asa&quot; dalam menghafal ayat-ayat suci Al Quran. Apa sajakah faktor penghambat dalam menghafal Al Quran? Berikut beberapa diantaranya:</p><p>(<strong>Baca Juga</strong>:&nbsp;<a href=\"https://www.pesantrentahfidzmataqu.com/id/daftar-dauroh\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Pendaftara Program Dauroh Al Quran 40 Hari MataQu Hafal 30 Juz dan Faham Terjemahnya Angkatan Terbaru!\">Mau Lebih Cepat Dan Semangat Menghafal Al Quran? Jangan Cuma Sendirian! Yuk Menghafal Bersama Para Muhafizh di Puncak-Bogor. Cari Infonya Sekarang!</a>)</p><h2>Faktor Internal</h2><ol><li>Niat yang belum ikhlas. Masih tercampur dengan niat yang lainnya.</li><li>Cinta dunia dan sibuk pikiran, sibuk perasaan dan sibuk kegiatan dengannya.</li><li>Belum bisa menikmati bacaan Al Quran</li><li>Pikiran dan hati yang terkotori dengan kemaksiatan. Masih belum istiqomah dalam beristighfar dan melalukan sholat taubah.</li><li>Kurang sabar, kurang semangat, kurang motivasi, dan masih bersandar sepenuhnya pada kemampuan diri sendiri serta kurang bertawakkal kepada Alloh swt. sehingga berujung pada putus asa ketika hasil yang diperoleh tidak sesuai dengan harapan</li><li>Belum mampu membaca Al Quran dengan baik.</li><li>Manajemen waktu yang masih kurang baik</li><li>Kurangnya mengulang bacaan Al Quran (muroja&#39;ah)</li></ol><p>&nbsp;</p><h2>Faktor Eksternal</h2><ol><li>Tidak adanya pembimbing yang kompeten</li><li>Tidak ada &quot;teman&quot; yang sama-sama hendak menghafal Al Quran</li><li>Lingkungan tempat tinggal yang kurang mendukung (kondusif)</li><li>Berganti-ganti mushaf yang digunakan untuk menghafal</li><li>Tidak menyisihkan waktu dan dan menyediakan tempat khusus untuk menghafal</li><li>Tidak adanya bimbingan konseling dan motivasi dari pembimbing</li><li>Kurang menaruh &quot;rasa hormat&quot; (ta&#39;zhim) kepada Al Quran, para muhafizh, Ahlul Quran, dsb.</li></ol><p>&nbsp;</p><p><em>(<strong>Baca Juga</strong>:&nbsp;<a href=\"https://www.pesantrentahfidzmataqu.com/id/daftar-dauroh\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Pendaftara Program Dauroh Al Quran 40 Hari MataQu Hafal 30 Juz dan Faham Terjemahnya Angkatan Terbaru!\">Mau Lebih Cepat Dan Semangat Menghafal Al Quran? Jangan Cuma Sendirian! Yuk Menghafal Bersama Para Muhafizh di Puncak-Bogor. Cari Infonya Sekarang!</a>)</em></p><p><em>Wallohu a&#39;alm bishoshowab.</em></p>', 'mengagungkan-dan-mengamalkan-al-quran-disetiap-waktu-kita-full2.jpg', '3', 1556784046),
(22, '2 Pekan Pencapaian Santri Putra s/d 19 November 2017', '<p>16 Bulan Hafal 30 Juz dan Faham Terjemahnya Dengan Kokoh&quot;, selama 2 pekan terhitung dari tanggal 6 Nvember - 19 November 2017:</p><p><br></p><p><br></p><p><strong><em>&nbsp;</em></strong></p><h2>HALQOH HAMZAH BIN ABDUL MUTHALIB (MUROJA&#39;AH)</h2><h3><a href=\"https://www.facebook.com/asad.humam.3557\" title=\"Klik disini untuk mengakses laman Facebook beliau!\">Ust. As&#39;ad Humam, Lc.</a></h3><ol><li>Zeydan Aly, -</li><li>M. Arief, 40 halaman juz 18-17</li><li>Hafiz Hawari, 22 halaman juz 2</li><li>Guciano, 30 hal juz 30</li><li>Sayyid, 13 halaman juz 26</li><li>Aly Akbar, 70 halaman juz 8</li><li>Afdhal Fahrezi, juz -</li><li>M. Rizal Akbar, 42 halaman juz 7-8</li><li>M. Ihsan Fadhil, 50 halaman juz</li><li>Sedeq F W, 2 juz 8 halaman</li><li>Wildan Muzaffar Hanif, 43 halaman juz 2-3-4</li><li>Yusuf Izzulhaq, 47 halaman juz 2-3</li><li>Salman Alfarishy,</li><li>M. Akbar, 110 halaman juz 29-30</li><li>Adam Hafidz: -</li><li>Alan Darmasaputra: 1 3/4 juz, 30-29</li><li>Moh. Fiqri Zulkarnain: 61 halaman putaran 1+2</li><li>Hafiz Dhio Zidan: 88 halaman juz 30-1</li></ol><p>&nbsp;</p><p>(<strong>Baca juga</strong>:&nbsp;<a href=\"https://www.pesantrentahfidzmataqu.com/id/daftar-santri\" target=\"_blank\">Ingin Putra/Putri Anda Hafal Quran 30 Juz Dan Berakhlakul Karimah? Upayakan Pendidikan Mereka Bersama Kami. Cek Informasinya Disini!</a>)</p><p>&nbsp;</p><h2>HALQOH ABU BAKAR AS SIDDHIQ</h2><h3><a href=\"https://www.facebook.com/profile.php?id=100013414579050\" title=\"Klik disini untuk mengakses laman Facebook beliau!\">Ust. Muhajir</a></h3><ol><li>Kholidin, 80 halaman putaran 16-19</li><li>Hudzaif Izzata, 17 halaman putaran 5-6</li><li>Jovial Arief Ahmad, 11 halaman putaran 6-7</li><li>Atanda Musa, 26 halaman putaran 15</li><li>M. Fikri Maulana, Abasa-attakwir</li><li>Arva Fauzan Syah, 5 halaman putaran 2</li><li>Alfhayed Iqbal Siddiq, 30 halaman putaran 7</li><li>Naufal Sa&#39;d Dzaky, halaman putih</li><li>Zaki Dzuhairi, 18 halaman terjemah</li><li>Fariz Ilham, 12 halaman putaran 2</li><li>M. Thoriq Robbani, halaman putaran</li><li>M. Khalil Gibran, - halaman putaran</li><li>M. Fakhrul Arifin, 10 halaman terjemah</li><li>Risqi Rahmatullah A, 5 halaman putaran 3</li><li>Farhan, 20 halaman putaran 1</li></ol><p>&nbsp;</p><h2>HALQOH UMAR BIN KHOTHTHOB</h2><h3>Ust. Imam Thobroni</h3><ol><li>Mufid Iskandar, 33 halaman putaran 10</li><li>Miftah Ghulam Halim, 18 halaman putaran 10</li><li>M. Furqon, 13 halaman putaran 7</li><li>Thufail Daffa, 20 halaman putaran 10</li><li>Arif Nur Iman, 35 halaman putaran 9</li><li>Ahmad Zakariya, 7 halaman Pur 1</li><li>Arfan Affandy, 88 halaman putih 15</li><li>M. Ragil al Asyari, 57 halaman putaran 9</li><li>Syahidulhaq M. Alkhothob, 9 halaman putaran 1</li><li>A. Lanang Sejati Adli, 4 halaman putaran 2</li><li>M. Ammar Luthfi Al Asri, 9 halaman putaran 2</li><li>Ahmad Yusuf Fauzi, 12 halaman putaran 2</li><li>M. Rafif Naufal, - halaman putaran 1</li><li>Arif Fadhilah Nasution, 7 halaman putaran 1</li><li>Rishieka Bissmi, 6 halaman putaran 1</li><li>Arkan, - halaman putaran 1</li><li>Jordi, -selesai terjemah +1 halaman putaran 1</li><li>Farhat, 7 halaman terjemah</li><li>M. Ilham, halaman putaran</li></ol><p>&nbsp;</p><p>(<strong>Baca juga</strong>:&nbsp;<a href=\"https://www.pesantrentahfidzmataqu.com/id/daftar-santri\" target=\"_blank\">Ingin Putra/Putri Anda Hafal Quran 30 Juz Dan Berakhlakul Karimah? Upayakan Pendidikan Mereka Bersama Kami. Cek Informasinya Disini!</a>)</p><p>&nbsp;</p><h2>HALQOH UTSMAN BIN AFFAN</h2><h3><a href=\"https://www.facebook.com/al.mahbub.hardhan\" title=\"Klik disini untuk mengakses laman Facebook beliau!\">Ust. Harry Ramadhan</a></h3><ol><li>Amrul Nasir, halaman putaran</li><li>Umar Abdul Aziz, 6 halaman putaran 4</li><li>Ismail Sangaji, 5 halaman putaran 4</li><li>Rafly Hibatul Fajri, 93 halaman putaran 15</li><li>Rio Ananda Juan A, 11 halaman putaran 6</li><li>Ahmad Syahril Sabirin, 37 halaman putaran 11</li><li>Fattah Ghiyas Khairi, 68 halaman putaran 11</li><li>Alfiansyah Malik, - 35 halaman putaran 5-6</li><li>M. Faqih Darmawan, halaman terjemah</li><li>Salman Izuddin Karimi, 120 halaman putaran 20</li><li>M. Abdul Hafidz, 6 halaman putaran 1</li><li>Ichwanudin Ihsan, 10 halaman putaran 3</li><li>Imam muniif widaad, 7 halaman putaran 1</li><li>Althaf taqifyn, 7 halaman putaran 2</li><li>M.Ariiq dhiya ulhaq, 38 halaman putaran 8</li><li>Hasrianda, 57 halaman putaran 9</li><li>Riki, Terjemah</li></ol><p>&nbsp;</p><h2>HALQOH ALI BIN ABI THALIB</h2><h3>Ust. Mudzakkir dan Ust. Sholihin</h3><ol><li>Adhy Razaqtrianto, 154 halaman putaran 18</li><li>Chain Nahzi Rabbani, 6 halaman putaran 3</li><li>Fadhel Tilmisani, 22 halaman putaran 15</li><li>Raka Phadlan, 6 halaman putaran 3</li><li>M. Iqbal Ghozali, 37 halaman putaran 5</li><li>Yahya Aulia, 17 halaman putaran 3</li><li>M. Irham Alhafidzi, 7 halaman putaran 2</li><li>Hudzaifah Djenod, 5 halaman 1</li><li>Ayatullah Reyhan Alfattah, 73 halaman putaran 12</li><li>Riyadussolihin, 17 halaman putaran 2</li><li>Zufar Imam Syuhada, 59 halaman putaran 14</li><li>M. Rayhan Razin, 14 halaman putaran 2</li><li>M.Sa halaman 12 halaman putaran 8</li><li>Zaki Zahran, 7 halaman putaran 1</li><li>Abu, selesai terjemah+5 halaman putaran 1</li><li>Ali Ridwan, selesai terjemah+2 halaman putaran 1</li></ol><p>Demikian <strong>laporan pencapaian hafalan santri putra Pondok Pesantren Tahfizh Al Quran</strong> per 2 pekan dari tanggal 6 - 19 November 2017 kami sampaikan. Mohon doa Ayah/Bunda sekalian agar Alloh swt. memberi kekuatan serta kemudahan kepada para santri ini untuk meraih predikat <strong>Hafizh 30 Juz Mutqin</strong>, dan tercatat sebagai <strong><em>Ahlul Quran, Ahlulloh</em></strong>. Semoga Alloh swt. juga memuliakan orangtua para santri ini di akhirat kelak dikarenakan hafalan anak mereka. <em>Allohumma Amiin</em>.</p><p>Info lanjut tentang&nbsp;<strong>Program Santri Tahsin dan Tahfizh Al Quran 30 Juz Mutqin, Pesantren Tahfizh Al Quran MataQu</strong> dapat menghubungi:&nbsp;<strong><a href=\"https://api.whatsapp.com/send?phone=6287780220777&text=_Assalamu%27alaikum%20Wr.%20Wb._\" target=\"_blank\">0877-8022-0777</a></strong><br><br><em>Jazakumullohu Khoiron.</em><br><br><em>Wassalamu&#39;alaikum Wr. Wb.</em></p><p>&quot;&gt;</p><p>&quot;&gt;</p>', 'kegiatan-1-november-2017-santri-putra-ponpes-tahfizh-mataqu-full2.jpg', '2', 1556784148);
INSERT INTO `berita` (`id`, `judul`, `berita`, `gambar`, `kategori`, `date_created`) VALUES
(23, 'Pelajaran Berharga Dari Kisah Nabi Ibrahim AS dan Ismail AS', '<p>Setiap tahun, kita merayakan <a href=\"https://id.wikipedia.org/wiki/Iduladha\">Hari Raya Idul Adha</a>. Dan setiap tahun pulalah kisah tentang seorang ayah bernama <a href=\"https://id.wikipedia.org/wiki/Ibrahim\">Ibrahim</a> yang diuji oleh Tuhannya untuk mengorbankan putranya sendiri, <a href=\"https://id.wikipedia.org/wiki/Isma%27il\">Ismail</a>, kita dengarkan. Lantas, pelajaran berharga apa yang dapat kita ambil sebagai seorang muslim?</p><p>Sang Bapak Para Nabi dengan kisah nyatanya sengaja Allah abadikan didalam Al Quran. Inilah kisah heroik seorang ayah dalam memilah dua cinta, yaitu cinta kepada Rabbnya, dan cinta kepada putra kesayangannya. Seperti Allah swt suratkan bahwa tiadalah mungkin ada dua ruang dalam satu hati (<strong>QS. al-Ahzab [33]: 4</strong>). Akan ada satu yang lebih unggul dibandingkan yang lain. Tapi ruang yang mana, itu adalah pilihan manusia sendiri.</p><p>Seperti kita tahu, Ibrahim as. memilih taat kepada Allah SWT. ia hempaskan cinta yang lain. Sekalipun ia begitu mencintai putranya, keturunan yang lama ia dambakan, yang pernah ia tinggalkan di gurun kering bersama istrinya, <a href=\"https://id.wikipedia.org/wiki/Hajar\">Hajar</a>. Belum surut perasaan galau Ibrahim saat meninggalkan Ismail di tengah sahara hanya ditemani ibunya, kini Allah memintanya untuk menyembelihnya. Tapi Ibrahim tahu, percaya dan yakin, bahwa perintah Allah tak akan pernah sia-sia. Ibrahim juga tak pernah meragukan setitikpun sifat Maha Pengasih dan Maha Penyayangnya Allah. Manalah mungkin Allah menzalimi hamba-Nya.</p><p>Kisah nyata Ibrahim dan Ismail &ndash; juga istrinya Hajar &ndash; bisa diambil pelajaran berharga dari berbagai sisi. Beragam sudut pandang. Salah satunya sikap seorang ayah kepada anak. Ibrahim as., sang ayah, mengajarkan kita bahwa tak ada ikatan yang abadi antara anak dengan ayah selain ikatan iman dan takwa. Ikatan darah, genetis, nasab mudah punah kapan saja.</p><p>Di berbagai negara, banyak kaum lanjut usia (lansia) yang sengaja ditelantarkan oleh anak-anak mereka. Jepang, salah satu negara yang menjadi kiblat kemajuan sains dan teknologi, termasuk bangsa yang kini mengalami krisis kasih sayang kepada orangtua. Menurut sebuah laporan karena banyak lansia yang ditelantarkan keluarga dan negara, 70 persen dari mereka terpaksa mencuri untuk memenuhi kebutuhan hidup.</p><p>&nbsp;</p><p>(<strong>Baca Juga</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program Santri Quran 4 Bulan Ponpes MataQu!\">Ingin Anak Anda Hafal Al Quran 30 Juz Dan Berbakti Kepada Orangtuanya? Upayakan Pendidikan Agama Mereka Disini!</a></em>)</p><p>&nbsp;</p><p>Di tanah air, tepatnya di Tangerang, seorang anak perempuan bersama suaminya menggugat ibunya yang sudah renta hingga 1 miliar rupiah, karena merasa tak mendapat jatah tanah waris (Sumber: <a href=\"https://news.liputan6.com/read/2109268/ibu-90-tahun-digugat-rp-1-miliar-oleh-anak-kandungnya\">Liputan6.com</a>). Entah bagaimana perasaan ibu yang sudah merawatnya dan mengantarkannya hingga berumah tangga tapi kemudian digugat hingga sebanyak itu. Air susu dibalas air tuba.</p><p>Karenanya tak ada ikatan begitu kuat mengikat ayah dan anak melebihi ikatan iman dan takwa. Orang tua yang beriman dan bertakwa akan mengasuh anak tanpa pamrih, semata mengharap ridlo Allah. Anak yang beriman dan bertakwa tak akan pernah lupa kacang pada kulit. Meski tak akan pernah sanggup, ia akan berusaha membalas kebaikan kedua orang tuanya sesulit apapun.</p><p>Karena begitu sayang dan memuliakan ibunya, Usamah bin Zaid selalu menyisihkan kurma terbaik di antara berbagai kurma dagangannya untuk sang bunda. Ia bergeming meski orang-orang keheranan melihat perbuatannya, karena harga kurma-kurma itu amat mahal.</p><p>Ikatan nasab dan genetis ayah dan anak tak akan pernah selamanya. Di dunia apalagi di akhirat. Di Hari Kiamat anak-anak yang pernah dibanggakan kedua orang tua tak akan lagi ada gunanya di hadapan Allah.</p><p>&quot;<em>(yaitu) di hari harta dan anak-anak laki-laki tidak berguna</em>,&quot; (<strong>TQS. asy-Syu&rsquo;ara [26]: 88</strong>)</p><p>(<strong>Baca Juga</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program Santri Quran 4 Bulan Ponpes MataQu!\">Ingin Anak Anda Hafal Al Quran 30 Juz Dan Berbakti Kepada Orangtuanya? Upayakan Pendidikan Agama Mereka Disini!</a></em>)</p><p>Hanya ayah dan anak yang bertakwa yang akan Allah himpunkan bersama di dalam jannah-Nya. Tak ada yang lain kecuali mereka.</p><p>&quot;<em>Dan orang-orang yang beriman, dan yang anak cucu mereka mengikuti mereka dalam keimanan, Kami hubungkan anak cucu mereka dengan mereka, dan Kami tiada mengurangi sedikitpun dari pahala amal mereka. Tiap-tiap manusia terikat dengan apa yang dikerjakannya</em>.&quot;(<strong>TQS. ath-Thur [52]: 21</strong>)</p><p>Kita semua tentunya pasti ingin merasakan kebahagiaan itu kelak bukan?</p><p>Subhanalloh. Semoga kita bisa mengambil pelajaran berharga dari kisah Nabi Ibrahim dan Ismail ini.</p><p><em>Wallohu a&#39;lam bishshowab.</em></p><p><em>Dikutip dari artikel berjudul, &quot;<a href=\"https://www.iwanjanuar.com/ibrahim-dan-ismail/\">Ibrahim dan Ismail</a>&quot;, 7 Oktober 2014, oleh <a href=\"https://www.iwanjanuar.com/profil/\">Iwan Januar</a>.</em></p>', 'suasana-qurban-di-kampung-quran-mataqu-12-09-2016-full.jpg', '1', 1557014203),
(24, 'Metode Mudah Menghafal Al Quran Yang Digunakan Ponpes MataQu ', '<p><strong><em>Metode Mudah Menghafal Al Quran Yang Digunakan Ponpes MataQu, Dikutip Dari <a href=\"https://www.pesantrentahfidzmataqu.com/artikel/panduan-menghafal.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk melihat kutipan lainnya!\">Buku Panduan Menghafal Al Quran</a> Yang Menjadi Buku Panduan Utama Pada Proses Belajar Mengajar <a href=\"https://www.pesantrentahfidzmataqu.com/program.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk melihat program-program yang ditawarkan oleh Pesantren Tahfizh Al Quran MataQu!\">Program-program</a> <a href=\"https://www.pesantrentahfidzmataqu.com/profil/tentang-kami.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Pesantren Tahfizh Al Quran MataQu!\">Pesantren Tahfizh Al Quran MataQu</a>.</em></strong></p><p>&nbsp;(Baca Juga: <a href=\"https://www.pesantrentahfidzmataqu.com/id/daftar-dauroh\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Pendaftara Program Dauroh Al Quran 40 Hari MataQu Hafal 30 Juz dan Faham Terjemahnya Angkatan Terbaru!\">Mau Lebih Cepat Dan Semangat Menghafal Al Quran? Jangan Cuma Sendirian! Yuk Menghafal Bersama Para Muhafizh di Puncak-Bogor. Cari Infonya Sekarang.</a>)</p><ol><li>Gunakan metode menghafal Al Quran &quot;<strong>LUPAKAN</strong>&quot;:<br><br><strong>L &nbsp; &nbsp; LIhatlah</strong> ayat yang akan dihafal sebanyak 10 kali<br><strong>U &nbsp; &nbsp;Ucapkanlah</strong> dengan suara yang dapat didengar telinga kita 2 kali<br><strong>&nbsp; &nbsp; &nbsp; Ulangi</strong> dengan melihat dan memahami arti 3 kali<br><strong>&nbsp; &nbsp; &nbsp; Ulangi</strong> dengan merem melek minimal 3 kali<br><strong>&nbsp; &nbsp; &nbsp; Ulangi</strong> dengan merem atau memejamkan mata 3 kali<br><strong>&nbsp; &nbsp; &nbsp; Uji hafalan</strong> dengan melihat sesuatu berfokus 3 kali<br><strong>Pa &nbsp;Pahamilah</strong> arti ayatnya 5 kali<br><strong>Ka &nbsp;Kaitkanlah</strong> ayat-ayatnya 10 kali<br><strong>N &nbsp; Nyetor</strong> ke muhafizh. Nikmatilah bacaannya dalam sholat.<br><br></li><li>Usahakan setiap 3 jam dapat setoran 1 halaman baru</li><li>Jika sudah tercapai, usahakan setiap 2 jam dapat setoran 1 halaman baru</li><li>Jika sudah tercapai, usahakan setiap 60 menit dapat setoran 1 halaman baru</li><li>Jika sudah tercapai, usahakan setiap 45 menit dapat setoran 1 halaman baru</li><li>Jika sudah tercapai, usahakan setiap 30 menit dapat setoran 1 halaman baru</li><li>Jika sudah tercapai, usahakan setiap 15 menit dapat setoran 1 halaman baru</li><li>Bacalah fadhilah-fadhilah keutamaan menghafal Al Quran setiap hari selam dalam masa menghafal</li><li>Tiap-tiap halaman memiliki tingkat kesulitan yang berbeda-beda. Jangan berputus asa apabila menjumpai halaman yang sulit untuk dihafal, karena sebenarnya tidak ada yang sulit. Yang ada hanya halaman tersebut belum pernah atau sangat sedikit dibaca diwaktu-waktu sebelum kesempatan menghafal ini.</li></ol>', 'panduan_11.png', '3', 1557018033),
(26, 'Rencana Kegiatan Ramadhan 1440 H Pondok Pesantren MataQu ', '<p><strong><em>Menyambut datangnya bulan suci Ramadhan 1440, <a href=\"https://www.pesantrentahfidzmataqu.com/profil/tentang-kami.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Pondok Pesantren Tahfizh Al Quran MataQu\">Pondok Pesantren Tahfizh Al Quran MataQu</a> berencana mengadakan berbagai kegiatan baik sebelum, saat, dan setelah bulan Ramadhan. Berikut informasi rencana kegiatan tersebut yang kami tujukan khususnya kepada para <a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program: Santri Al Quran 16 Bulan Hafal 30 Juz Dengan Kokoh dan Faham Terjamahnya\">santriwan/santriwati Al Quran</a>, orangtua/wali santri serta para peserta <a href=\"https://www.pesantrentahfidzmataqu.com/program/dauroh-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program: Dauroh Al Quran 40 Hari Hafal 30 Juz dan Faham Terjemahnya\">Dauroh Al Quran</a>:</em></strong></p><p>&nbsp;</p><p><strong>Kepada Yang Terhormat,</strong><br><strong>Bapak/Ibu Orangtua/Wali Santri</strong><br><strong>di-</strong><br><strong>&nbsp;Tempat</strong></p><p><em>Assalamu&#39;alaikum Warohmatullohi Wabarokatuh.</em></p><p>Salam sejahtera kami haturkan, semoga kita senantiasa dalam lindungan Alloh swt. dan senantiasa mendapatkan berkah serta kemudahan rizqi dari-Nya, Aamiin.</p><p>Bulan Ramadhan adalah Bulan yang penuh dengan Rahmat dan pahala dari Alloh, yang akan diberikan kepada hambanya yang ikhlas dan bersungguh-sungguh dalam beramal. In Syaa Alloh Bulan Ramadhan akan segera tiba, semoga kita semua bisa sampai di Bulan Ramadhan dan bisa memaksimalkan ibadah di Bulan Ramadhan.</p><p>Pada Bulan Ramadhan In Syaa Alloh Pesantren Tahfidz Quran MataQu akan menyelenggarakan beberapa kegiatan, diantara kegiatan yang akan kami selenggarakan adalah:</p><p>&nbsp;</p><p>(<strong>Baca Juga</strong>: <a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang program Santri Quran 4 Bulan Hafal 30 Juz Ponpes MataQu!\"><em>Ingin Putra/Putri Anda Hafal Al Quran 30 Juz Dan Terbina Akhlak Islamnya? Cari Infonya Disini!</em></a>)</p><p>&nbsp;</p><h3>1. Peletakan batu pertama untuk pembangunan masjid Pesantren Tahfidz mataQu</h3><p>Insya Allah akan dilaksanakan pada hari Ahad, 25 sya&#39;ban. Bagi orangtua/wali santri yang berkenan untuk hadir sambil menjenguk putra/putrinya kami persilahkan.</p><h3>2. Nobar 2 hari sebelum Ramadhan</h3><p>In syaa Alloh akan di laksanakan pada 26-27 Sya&#39;ban &nbsp;di malam hari setelah sholat isya (orangtua/wali santri dipersilahkan menjenguk putra/putrinya pada tanggal 26-27 sya&#39;ban. Setelah tanggal ini orangtua/wali santri tidak diperbolehkan menjenguk lagi kecuali nanti di akhir ketika penutupan Ramadhan yaitu tanggal 19 Ramadhan)</p><h3>3. <em>Targhib wa tarhib</em> Ramadhan</h3><p>In syaa Alloh tgl 29 Sya&#39;ban setelah sholat ashar sampai menjelang maghrib. Dalam kegiatan ini santri akan berkeliling kampung sekitar pesantren sambil membagikan selembaran berkaitan dengan motivasi Ramadhan.</p><h3>4. Pembukaan Ramadhan 30 sya&#39;ban (26 Mei) <em>Ba&#39;da</em> ashar</h3><h3>5. Rangkaian Ibadah Wajib dan Sunnah</h3><p>Ada buku panduan ibadah wajib dan sunnah yang sudah kami buat dan dalam buku tersebut akan mengontrol semua ibadah para santri. Dalam rangka memaksimalkan semua ibadah wajib dan sunnah maka kami wajibkan semua santri ber I&#39;tikaf di Masjid Daarul Mutqin dari mulai tgl 01-20 Ramadhan. Dalam rangka mendukung kegiatan memaksimalkan ibadah wajib dan sunnah ini maka kami juga berharap orangtua/wali Santri bisa memberikan dukungannya dengan sepenuh hati, dan dengan mengikuti semua peraturan yang kami buat selama kegiatannya berlangsung dari tgl 01-20 Ramadhan, diantara peraturannya adalah (Dimohon kerjasamanya kepada para orangtua/wali Santri):</p><ol><li>Santri tidak boleh di jenguk atau dibawa jalan-jalan dll,</li><li>Santri tidak boleh di telpon atau menelpon,</li><li>Kalau ada paket yang mau dikirim dari orangtua/wali santri cukup menghubungi ustadz-nya saja,</li><li>Santri tidak boleh keluar dari lingkungan pesantren.</li></ol><p>&nbsp;</p><h3>6. Sholat tarawih berjama&#39;ah dan kultum dari para santri <em>ikhwan</em> yang terpilih</h3><p>Untuk pelaksanaan sholat tarawih berjama&#39;ah, In syaa Alloh akan digabungkan antara santri ikhwan dan akhwat, pelaksanaan sholatnya akan dilaksanakan di lapangan pesantren MataQu dengan dibuatkan tenda dilapangan. Sedangkan untuk kultum akan dilaksanakan sebelum sholat tarawih.</p><h3>7. Program ta&#39;jil/buka bersama para santri.</h3><h3>8. Perlombaan untuk Para santri</h3><p>Diantara perlombaan yang kami adakan terbagi menjadi dua: Lomba Individu dan Lomba Kelompok.</p><p><strong>Lomba individu</strong> : Santri teladan, santri terbanyak tilawah Al-Quran selama Ramadhan, Santri paling maksimal ibadahnya, dan santri terkece (selalu bersih, rapih, wangi)<br><strong>Lomba kelompok</strong> : hafizh 10 juz, hafizh 5 juz, hafizh 2 juz, hafalan <em>Matan Jazariyah</em> dan <em>Tuhfatul Athfal</em>, lomba memanah, dan kelompok halaqoh paling kompak.</p><h3>9. Zakat Mal</h3><p>Bagi kaum muslimin yang mempunyai kelebihan Harta yang sudah sampai nisabnya hendaknya di tunaikan zakatnya, dan kami Pesantren Tahfidz Quran MataQu siap menyalurkan dan memfasilitasi bagi kaum muslimin yang mau berzakat mal. In Syaa Alloh di Bulan Ramadhan ini kami akan mengumpulkan sebanyak 1000 faqir miskin warga sekitar Pesantren untuk diberikan zakat kepada mereka.</p><h3>10. Penutupan Ramadhan di pesantren Tahfidz Quran MataQu tanggal 19 Ramadhan mulai ba&#39;da Dzuhur sampai selesai.</h3><p>Dalam penutupan Ramadhan ini ada beberapa kegiatan yang akan kami selenggarakan, diantaranya adalah:</p><ol><li>Pertemuan orangtua/wali santri dengan Yayasan dan para Asatidz, akan dilaksanakan pada tgl 19 Ramadhan ba&#39;da dzuhur sampai ashar (orangtua/wali santri diharapkan hadir tepat pada waktunya di pesantren MataQu)</li><li>Buka bersama orangtua/wali santri, para santri dan para Asatidz</li><li>sholat tarawih berjama&#39;ah</li><li>acara penutupan dan kepulangan santri (dengan menampilkan kreasi seni, pembagian hadiah, pengukuhan ketua angkatan dan penampilan lainnya) .</li></ol><h3>11. Perpulangan para santri (Libur Ramadhan)</h3><p>Untuk kepulangan para santri wajib dijemput atau bersama dengan orang tuanya pada tgl 20 Ramadhan setelah acara penutupan selesai, dengan mengisi buku izin, membawa surat izin, membawa buku mutaba&#39;ah atau panduan untuk selama liburan dan berpamitan dengan para Asatidz.</p><h3>12. Kedatangan para santri</h3><p>Kedatangan para santri wajib hadir di pesantren pada tanggal 10 syawal paling lambat jam 17.00 WIB. Tidak boleh terlambat, dan bagi santri yang terlambat akan diberikan sangsi berupa denda satu sak semen per hari.</p><p>(<strong>Baca Juga</strong>: <a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang program Santri Quran 4 Bulan Hafal 30 Juz Ponpes MataQu!\"><em>Ingin Putra/Putri Anda Hafal Al Quran 30 Juz Dan Terbina Akhlak Islamnya? Cari Infonya Disini.</em></a>)&nbsp;</p><p>Sehubungan dengan beberapa program yang akan kami adakan di Bulan Ramadhan di Pesantren Tahfidz Quran MataQu tersebut kami membuka <strong>Dompet Ramadhan (DORA)</strong>, bagi orangtua/wali santri atau kaum muslimin yang ingin membantu kami untuk terselenggaranya kegiatan tersebut, silahkan salurkan bantuannya melalui <strong>DORA (Dompet Ramadhan)</strong> dengan nomer rekening:</p><h3>Bri Syariah (Kode ATM Bersama: 422)</h3><h4>No.Rek. 1010951344</h4><h4>A.N. Nur Sholihin</h4><p>Adapun rincian penyaluran dana dari DORA tersebut adalah untuk kegiatan:</p><ol><li>Ta&#39;jil atau buka puasa selama 20 hari ramadhan di pesantren</li><li>Hadiah untuk perlombaan santri ikhwan dan akhwat dibutuhkan dana minimal sebesar 8 juta rupiah</li><li>Tenda untuk sholat tarawih berjama&#39;ah, dibutuhkan dana untuk pembuatan atau penyewaan tenda</li><li>Untuk acara penutupan ramadhan</li><li>Untuk pengukuhan ketua angkatan</li><li>Untuk penyaluran zakat mal kepad 1000 faqir miskin.</li></ol><p>Dimohon kepada para muhsinin yang akan memberikan bantuan dananya untuk memberikan keterangan penyaluran dana tersebut dan japri secara langsung ke nomer panitia <strong>0857-7211-0059</strong>.</p><p>Demikian pemberitahuan dan permohonan bantuan ini dibuat. Atas perhatian dan kerjasamanya disampaikan terima kasih. Semoga amalan serta ibadah kita senantiasa diterima oleh Alloh swt. <em>Allohumma Yassir Umuurona. Allohumma Aamiin</em>.</p><p><em>Wassalamu&#39;alaikum Warohmatullohi Wabarokatuh.</em></p><p>Penanggung Jawab Kegiatan Ramadhan,<br><strong>Ust. Abdullah Izzuddien</strong></p><p>Mengetahui,</p><p>&nbsp;</p><p><strong>Ust. As&#39;ad Humam, Lc.</strong><br><em>Direktur Ma&#39;had Tahfidz MataQu,</em></p>', 'rencana-kegiatan-ramadhan-1438-h-pondok-pesantren-mataqu-full.jpg', '4', 1558238261),
(27, 'WAKAF PEMBANGUNAN MASJID BAGI PARA SANTRI MAHAD MATAQU', '<h2>WAKAF PEMBANGUNAN MASJID BAGI PARA PENGHAFAL QURAN </h2><p><br></p><p>&ldquo;<em>Siapa yang membangun masjid karena Alloh walaupun hanya selubang tempat burung bertelur atau lebih kecil, maka Alloh bangunkan baginya (rumah) seperti itu pula di surga.</em>&rdquo; (<strong><a href=\"https://id.wikipedia.org/wiki/Sunan_ibnu_Majah\">HR. Ibnu Majah</a> no. 738. Al-Hafizh Abu Thahir mengatakan bahwa sanad hadits ini shahih</strong>)</p><p>Janji Alloh itu, pasti!!!</p><p>Investasikan harta yang sangat anda cintai, saat ini juga untuk keuntungan Abadi, Insya Alloh..</p><p>Alhamdulillahi Robbil&#39;aalamin</p><p>Dalam rangka ingin mengakomodir kegiatan ibadah para santri maupun masyarakat sekitar agar lebih tercipta suasana kenyamanan dalam beribadah dan suasana keteduhan dalam proses kegiatan tahfizhul Quran, maka kami dari Yayasan Kampung Quran MataQu ingin membangun masjid yang insya Alloh akan dibangun di atas tanah wakaf seluas 1500 m<sup>2</sup> yang pembangunannya akan dibagi dalam 2 tahap, tahap pembangunan pertama memakan lahan 700 m<sup>2</sup>.</p><h3>ANGGARAN BIAYA</h3><p>Biaya yang diperlukan untuk pembangunan tahap pertama (700 m<sup>2</sup>) sebagai berikut:</p><p>Per m<sup>2</sup> = Rp. 2.500.000 (<em>Dua Juta Lima Ratus Ribu Rupiah</em>). Biaya ini meliputi tanah, material bangunan dan juga pekerja</p><p>Per m<sup>2</sup> x 700 m2 = Rp. 1.750.000.000 (<em>Satu Milyar Tujuh Ratus Lima Puluh Juta Rupiah</em>)</p><p>Dana yang ada saat ini :</p><p>Rp. 102.600.000</p><p>Kekurangan :</p><p>Rp. 1.647.400.000</p><p>Dalam hal ini kami menyediakan beberapa paket untuk anda para muwakif yang di muliakan Alloh:</p><p>Paket 1 m<sup>2</sup> : Rp. 2.500.000<br>Paket 2 m<sup>2</sup> : Rp. 5.000.000<br>Paket 3 m<sup>2</sup> : Rp. 7.500.000<br>Paket 4 m<sup>2</sup> : Rp. 10.000.000</p><p>Transfer ke:</p><p>No rek :</p><p>BSM 710 - 422 - 2212 an Zul Asni</p><p>BCA 167 - 069 - 7220 an Zul Asni</p><p>Konfirmasi:</p><p>Ust. Sholihin (085772110059)<br>Ummu Faruq (081288865591)</p><p>Kami sangat berharap kontribusi dan partisipasi dari kaum muslimin muslimat yang dimuliakan Alloh, guna terealisasinya pembangunan Masjid Pesantren Tahfizh MataQu, dengan cara berkomitmen siap mengambil paket yang kami sediakan, baik itu dari infaq pribadi atau dengan mengajak sanak saudara, teman, dan pihak-pihan tertentu.</p><p>Mari berlomba-lomba dalam kebaikan, semoga Alloh Ta&#39;ala menerima segala amal kita. Aamiin.</p><p><br></p><p>Yayasan Kampung Quran mataQu.</p><p><a href=\"https://www.pesantrentahfidzmataqu.com\">www.pesantrentahfidzmataqu.com</a><br><a href=\"https://www.kampungquranmataqu.com/program/islamic-center.html\">www.kampungquranmataqu.com.</a></p><p>&nbsp;</p>', 'lokasi-masjid-dan-pesantren-full.jpg', '4', 1558241760),
(28, 'Proposal Pembangunan Pesantren Tahfidz Al Quran MataQu', '<p><em>Kampung Quran merupakan lembaga pendidikan Al Quran yang memahami peranan penting pendidikan Al Quran sejak dini bagi generasi muda Islam dan dengan mengusung semangat da&rsquo;wah, dalam bidang pendidikan sedang berupaya membangun Pondok Pesantren Penghafal Al-Quran Sebagai bentuk kesungguhan pembangunan Pondok Pesantren Tahfidz Quran, pada tahap pertama ini telah menyiapkan pembebasan tanah seluas 6000 m<sup>2</sup> dari total 3,4 Hektar dan untuk kebutuhan ketersediaan lahan pada tahap selanjutnya dirancanakan penambahan tanah seluas 2,8 Hektar yang diperuntukan bagi pembangunan asrama dan pesantren.</em></p><h2><strong>&diams;&diams; &nbsp;PENDAHULUAN &nbsp;&diams;&diams;</strong></h2><p>Untuk mendukung terlaksananya program perluasan tersebut maka Pihak pesantren menawarkan program <strong>PAKET WAKAF</strong><strong>&nbsp;TANAH</strong>, yang diperuntukkan bagi masyarakat yang tergerak untuk membantu meningkatkan dan menjaga kualitas generasi muslim .</p><p>Wakaf ialah meyerahkan suatu benda yang kekal zatnya untuk diambil manfaatnya, baik oleh masyarakat maupun perorangan.</p><h2><strong>&diams;&diams; &nbsp;DASAR PEMIKIRAN &nbsp;&diams;&diams;</strong></h2><h3><strong>Surat An-Nisaa ayat : &nbsp;9</strong></h3><p><em>&ldquo;Dan hendaklah takut kepada Allah orang-orang yang seandainya meninggalkan dibelakang mereka anak-anak yang lemah, yang mereka khawatir terhadap (kesejahteraan) mereka. oleh sebab itu hendaklah mereka bertakwa kepada Allah dan hendaklah mereka mengucapkan Perkataan yang benar.&rdquo;</em></p><h3><strong>Surat At Taubah ayat : 111</strong></h3><p><em>&ldquo; Sesungguhnya Allah telah membeli dari orang-orang mu&rsquo;min, diri dan harta mereka dengan memberikan surga untuk mereka. Mereka berperang pada jalan Allah; lalu mereka membunuh atau terbunuh. (Itu telah menjadi) janji yang benar dari Allah di dalam Taurat, Injil dan Al Quran. Dan siapakah yang lebih menepati janjinya (selain) daripada Allah? Maka bergembiralah dengan jual beli yang telah kamu lakukan itu, dan itulah kemenangan yang besar.&rdquo;</em></p><h3><strong>Hadits Rosululloh SAW</strong></h3><p>??? ??? ??? ??? ????? ???? ??? ?? ???? ??? ????? ???? ????? ?? ???? ???? ??????</p><p><em>Apabila anak Adam meninggal dunia maka putuslah segala amalnya kecuali tiga hal&nbsp;</em></p><ol><li><em>&nbsp;Amal Jariyah (Amal yang mengalir)&nbsp;</em></li><li><em>&nbsp;Ilmu yang bermanfaat</em></li><li><em>&nbsp;Anak Sholeh yang mendoakan kepada kedua orang tuanya&nbsp;</em></li></ol><h3><strong>&diams;&diams; &nbsp;LOKASI TANAH &nbsp;&diams;&diams;</strong></h3><p>Desa Cipendawa Megamendung Puncak &ndash; Bogor</p><h2><strong>&diams;&diams; &nbsp;PAKET WAKAF TANAH &nbsp;&diams;&diams;</strong></h2><p>Untuk itu, mari wujudkan niat suci dengan ikut membantu Pembebasan dan Pembangunan Pesantren. Program <strong>PAKET WAKAF TANAH</strong> Kampung Quran, yang kami sediakan untuk anda menjadi 5 jenis paket sebagai berikut :</p><p><strong>&radic; &nbsp;PAKET A : 1 Meter<sup>2</sup> x Rp. 70.000 = Rp. 70.000,-</strong></p><p><strong>&radic; &nbsp;PAKET B : 5 Meter<sup>2</sup> x Rp. 70.000 = Rp. 350.000,-</strong></p><p><strong>&radic; &nbsp;PAKET C : 10 Meter<sup>2</sup> x Rp. 70.</strong><strong>000 = Rp. 700.000,-</strong></p><p><strong>&radic; &nbsp;PAKET D : 100 Meter<sup>2&nbsp;</sup>x Rp. 70.000 = Rp. 7.000.000,-</strong></p><p><strong><strong>&radic; &nbsp;</strong>PAKET E : &hellip;.. Meter<sup>2&nbsp;</sup>x Rp. 70.000 = Rp. &hellip;&hellip;&hellip;&hellip;&hellip;..</strong></p><p>Diperuntukkan bagi yang ingin berwaqaf diluar paket-paket yang telah disebutkan.</p><p>Dengan ketentuan <strong>1 Meter<sup>2</sup> = Rp. 70.000,-</strong></p><p>Misal : <strong>200 Meter<sup>2</sup>&nbsp; &nbsp; &nbsp; = Rp. 70.000 x 200</strong> <strong>= &nbsp; &nbsp;Rp 14.000.000,-</strong></p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;500 Meter<sup>2</sup>&nbsp;</strong><strong>&nbsp;&nbsp;</strong><strong>&nbsp; &nbsp;= Rp. 70.000 x&nbsp;</strong><strong>5</strong><strong>00 = &nbsp; &nbsp;Rp 35.000.000,-</strong></p><p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1000 Meter<sup>2 &nbsp; &nbsp; &nbsp;&nbsp;</sup>= Rp. 70.000 x 1000 = &nbsp;Rp 70.000.000,-</strong></p><p><strong>&nbsp;</strong></p><p>Dengan adanya paket-paket tersebut, diharap semakin mempermudah dan memotivasi kita untuk terus beramal dan berinfaq di jalan-Nya. Semakin banyak harta yang kita belanjakan di jalan Allah, maka pasti semakin banyak pula penggantiannya dari Allah Azza wa Jalla. Amin.</p><p>Sesungguhnya&nbsp;Allah SWT telah menjanjikan, jika manusia mau bersedekah, maka Allah pasti akan menggantinya dengan jumlah minimal 10 (sepuluh) kali lipat. Sebagaimana tertulis di dalam Al-Quran Surat: 6, Ayat: 160, dimana Allah menjanjikan balasan 10 x lipat bagi mereka yang mau berbuat baik. Bahkan di dalam Al-Quran Surat: 2, Ayat: 261, Allah menjanjikan balasan sampai 700 x lipat.</p><h2><strong>&diams;&diams; &nbsp; TATA CARA WAKAF TANAH &nbsp;&diams;&diams;</strong></h2><p>Bapak/Ibu cukup mengisi Formulir Wakaf Tanah (lampiran) dan menyampaikannya ke panitia atau ke mauquf &lsquo;Alaih (penerima wakaf) yang telah ditunjuk oleh panitia atau Uang Wakaf dapat di serahkan langsung maupun di transfer terlebih dahulu ke :</p><table><tbody><tr><td>&nbsp;<p>BCA Rek &nbsp;: 1670 697 220</p><p>Atas nama Zul Asni</p></td><td>Konfirmasi Wakaf ke :<p>Alif /&nbsp;0853 9999 0529</p><p>Asep / 0812 8755 2599</p><p>Abu Faruq / 0812 8894 4096</p></td></tr></tbody></table><ol><li><h3><strong>PENUTUP</strong></h3></li></ol><p>Sangat besar harapan kami, atas pertisipasi Bapak/Ibu untuk ikut mencetak generasi &nbsp;islam yang lebih tangguh.</p><p>Akhirnya kepada Alloh SWT, kita memohon taufiq dan hidayah-Nya. Semoga Rencana ini terlaksana dan mendapat ridho dan rahmat-Nya. Amiin Ya Robal Alamiin.</p><p>Demikian proposal ini kami sampaikan untuk menjadi periksa dan atas perhatian, bantuan serta kerjasama yang berujung pada terlaksananya pembangunan lembaga pendidikan ini kami sampaikan ucapan jazakumullah khairan katsiron.</p><p>Wabillaahit taufiq wal hidayah. Wasssalaamu&rsquo;alaikum Wr. Wb.</p><p>Hormat Kami,</p><p>MUHAMMAD AS&rsquo;AD HUMAM Lc, AL-HAFIZH&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;BERRY AL-GHAZALI SH</p><p>Pembimbing Pesantren &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Direktur MataQu</p>', 'lokasi-masjid-dan-pesantren-full1.jpg', '4', 1558242617),
(38, 'Pahala Dari Alloh Swt. Bagi Para Penghafal Al Quran ', '<p><em>Bismillah was shalatu was salamu &lsquo;ala Rasulillah, wa ba&rsquo;du,</em></p><p><strong>Menghafal Al Quran</strong> termasuk ibadah jika dilakukan ikhlas karena Allah dan bukan untuk mengharapkan pujian di dunia. Bahkan salah satu ciri orang yang berilmu menurut standar Al Quran, adalah mereka yang memiliki <strong>hafalan Al Quran</strong>. Allah berfirman,</p><p>&nbsp;</p><p>&quot;<em>Bahkan, Al Quran itu adalah ayat-ayat yang nyata, yang ada di dalam dada orang-orang yang diberi ilmu</em>.&quot;..(<strong>TQS. al-Ankabut: 49)</strong>.</p><p>Allah memberikan banyak keutamaan bagi para penghafal Al Quran, di dunia dan ahirat.</p><p>Berikut diantaranya,</p><h3>Pertama, dia didahulukan untuk menjadi imam ketika shalat jamaah</h3><p>Dari Abu Mas&rsquo;ud radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wa sallam bersabda,</p><p>&quot;<em>Yang paling berhak jadi imam adalah yang paling banyak hafalan Al Quran-nya. Jika dalam hafalan quran mereka sama, maka didahulukan yang paling paham dengan sunnah&hellip; dan seseorang tidak boleh menjadi imam di wilayah orang lain</em>.&quot;. (<strong>HR. Ahmad 17526, Muslim 1564, dan yang lainnya</strong>)</p><p>Dari Ibnu Umar ra., beliau bercerita,</p><p>&quot;<em>Ketika para muhajirin pertama tiba di Quba, sebelum kedatangan Rasulullah shallallahu &lsquo;alaihi wa sallam, yang menjadi imam mereka shalat adalah Salim mantan budak Abu Hudzaifah. Dan beliau adalah orang paling banyak hafalan Qurannya</em>.&quot;. (<strong>HR. Bukhari 660</strong>)</p><h3>Kedua, &nbsp;ketika meninggal, dia didahulukan</h3><p>Jabir bin Abdillah radhiyallahu &lsquo;anhuma bercerita,</p><p>&quot;<em>Nabi shallallahu &lsquo;alaihi wa sallam menggabungkan dua jenazah uhud dalam satu kain kafan. Setiap hendak memakamkan, beliau tanya, &ldquo;Siapa yang paling banyak hafalan qurannya?&rdquo; Kemudian Nabi shallallahu &lsquo;alaihi wa sallam memposisikan yang paling banyak hafalannya di posisi paling dekat dengan lahat. Lalu beliau bersabda, Saya akan menjadi saksi bagi mereka kelak di hari kiamat</em>.&quot;. (<strong>HR. Bukhari 1343 &amp; Turmudzi 1053</strong>)</p><p>&nbsp;</p><p>(<strong>Baca</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/dauroh-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Dauroh Al Quran 40 Hari MataQu Hafal 30 Juz dan Faham Terjemahnya disini!\">Hafal Al Quran 30 Juz Dalam 40 Hari? Insya Alloh Bisa! Mau Tahu Caranya?</a></em>)</p><p>&nbsp;</p><h3>Ketiga, diutamakan untuk menjadi pemimpin jika dia mampu memegangnya</h3><p>Ketika Umar radhiyallahu &lsquo;anhu menjadi khalifah, beliau menunjuk Nafi&rsquo; bin Abdul Harits untuk menjadi gubernur di Mekah.</p><p>Suatu ketika, Umar bertemu Nafi&rsquo; di daerah Asfan.</p><p>&ldquo;Siapa yang menggantikanmu di Mekah?&rdquo; tanya Umar.</p><p>&ldquo;Ibnu Abza.&rdquo; Jawab Nafi&rsquo;.</p><p>&ldquo;Siapa Ibnu Abza?&rdquo; tanya Umar.</p><p>&ldquo;Salah satu mantan budak di Mekah.&rdquo; Jawab Nafi&rsquo;.</p><p>&ldquo;Mantan budak kamu jadikan sebagai pemimpin?&rdquo; tanya Umar.</p><p>&ldquo;Dia hafal Al Quran, dan paham tentang ilmu faraid.&rdquo; Jawab Nafi&rsquo;.</p><p>Kemudian Umar mengatakan, bahwa Nabi shallallahu &lsquo;alaihi wa sallam pernah bersabda,</p><p>&ldquo;<em>Sesungguhnya Allah mengangkat sebagian kaum berkat kitab ini (Al Quran), dan Allah menghinakan kaum yang lain, juga karena Al Quran</em>.&rdquo; (<strong>HR. Ahmad 237 &amp; Muslim 1934</strong>)</p><h3>Keempat, kedudukan hafidz Al Quran di surga, sesuai banyaknya ayat yang dia hafal</h3><p>Dari Abdullah bin Amr radhiyallahu &lsquo;anhuma, Nabi shallallahu &lsquo;alaihi wa sallam bersabda,</p><p>&quot;<em>Ditawarkan kepada penghafal Al Quran, &ldquo;Baca dan naiklah ke tingkat berikutnya. Baca dengan tartil sebagaimana dulu kamu mentartilkan Al Quran ketika di dunia. Karena kedudukanmu di surga setingkat dengan banyaknya ayat yang kamu hafal</em>.&rdquo;&quot; (<strong>HR. Abu Daud 1466, Turmudzi 3162 dan dishahihkan al-Albani</strong>)</p><h3>Kelima, ditemani Malaikat</h3><p>Dari Aisyah radhiyallahu &lsquo;anha, Nabi shallallahu &lsquo;alaihi wa sallam bersabda,</p><p>&quot;<em>Orang yang membaca dan menghafal Al Quran, dia bersama para malaikat yang mulia. Sementara orang yang membaca Al Quran, dia berusaha menghafalnya, dan itu menjadi beban baginya, maka dia mendapat dua pahala</em>.&quot;. (<strong>HR. Bukhari 4937</strong>)</p><p>&nbsp;</p><p>(<strong>Baca Juga</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/dauroh-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Dauroh Al Quran 40 Hari MataQu Hafal 30 Juz dan Faham Terjemahnya disini!\">Hafal Al Quran 30 Juz Dalam 40 Hari? Insya Alloh Bisa! Mau Tahu Caranya?</a></em>)</p><p>&nbsp;</p><h3>Keenam, di akhirat, akan diberi mahkota dan pakaian kemuliaan</h3><p>Dari Abu Hurairah radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wa sallam bersabda,</p><p>&quot;<em>Al Quran akan datang pada hari kiamat, lalu dia berkata, &ldquo;Ya Allah, berikan dia perhiasan.&rdquo; Lalu Allah berikan seorang hafidz Al Quran mahkota kemuliaan. Al Quran meminta lagi, &ldquo;Ya Allah, tambahkan untuknya.&rdquo; Lalu dia diberi pakaian perhiasan kemuliaan. Kemudian dia minta lagi, &ldquo;Ya Allah, ridhai dia.&rdquo; Allah-pun meridhainya. Lalu dikatakan kepada hafidz quran, &ldquo;Bacalah dan naiklah, akan ditambahkan untukmu pahala dari setiap ayat yang kamu baca</em>.&quot;. (<strong>HR. Turmudzi 3164 dan beliau menilai Hasan shahih</strong>).</p><h3>Ketujuh, Al Quran memberi syafaat baginya</h3><p>Dari Abu Umamah al-Bahili radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wa sallam bersabda,</p><p>&quot;<em>Rajinlah membaca Al Quran, karena dia akan menjadi syafaat bagi penghafalnya di hari kiamat</em>.&quot;. (<strong>HR. Muslim 1910</strong>).</p><h3>Kedelapan, orang tuanya akan diberi mahkota cahaya kelak di akhirat</h3><p>Dari Buraidah radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wa sallam bersabda,</p><p>&quot;<em>Siapa yang menghafal Al Quran, mengkajinya dan mengamalkannya, maka Allah akan memberikan mahkota bagi kedua orang tuanya dari cahaya yang terangnya seperti matahari. Dan kedua orang tuanya akan diberi dua pakaian yang tidak bisa dinilai dengan dunia. Kemudian kedua orang tuanya bertanya, &ldquo;Mengapa saya sampai diberi pakaian semacam ini?&rdquo; Lalu disampaikan kepadanya, &ldquo;Disebabkan anakmu telah mengamalkan Al Quran</em>.&rdquo;&quot; (<strong>HR. Hakim 1/756 dan dihasankan al-Abani</strong>).</p><p>Dalam riwayat lain, dari Abu Hurairah radhiyallahu &lsquo;anhu, Nabi shallallahu &lsquo;alaihi wa sallam bersabda,</p><p>&quot;<em>Al Quran akan datang pada hari kiamat seperti orang yang wajahnya cerah. Lalu bertanya kepada penghafalnya, &ldquo;Kamu kenal saya? Sayalah membuat kamu bergadangan tidak tidur di malam hari, yang membuat kamu kehausan di siang harimu&hellip; &rdquo; kemudian diletakkan mahkota kehormatan di kepalanya, dan kedua orang tuanya diberi pakaian indah yang tidak bisa dinilai dengan dunia seisinya. Lalu orang tuanya menanyakan, &ldquo;Ya Allah, dari mana kami bisa diberi pakaian seperti ini?&rdquo; kemudian dijawab, &ldquo;Karena anakmu belajar Al Quran</em>.&rdquo;&quot; (<strong>HR. Thabrani dalam al-Ausath 6/51, dan dishahihkan al-Albani</strong>).</p><p><em>Wallahu a&rsquo;lam.</em></p><p><em>Dikutip dari artikel berjudul, &quot;<a href=\"https://konsultasisyariah.com/26373-pahala-orang-yang-menghafal-Al-Quran.html\">Pahala Penghafal al-Quran</a>&quot;, oleh <strong>Ustadz Ammi Nur Baits</strong>, Dewan Pembina Konsultasisyariah.com.</em></p>', 'quran.jpg', '3', 1558483743),
(45, 'Rumusan Imam Ali bin Thalib Ra Dalam Memperlakukan Anak', '<p>Ternyata, <a href=\"https://id.wikipedia.org/wiki/Ali_bin_Abi_Thalib\"><strong>Imam Ali bin Abi Thalib Ra.</strong></a> juga punya rumusan dalam <strong>memperlakukan anak</strong> dalam rangka membentuk perilaku mereka. Seperti apakah rumusan tersebut? Berikut penjelasannya:</p><p>&nbsp;</p><h2>ANAK SEBAGAI RAJA (Usia 0-7 tahun)</h2><p>Melayani anak di bawah usia 7 tahun dengan sepenuh hati dan tulus adalah hal terbaik yang dapat kita lakukan. Banyak hal kecil yang setiap hari kita lakukan ternyata akan berdampak sangat baik bagi perkembangan perilakunya, misalnya:</p><p>Bila kita langsung menjawab dan menghampirinya saat ia memanggil kita&ndash;bahkan ketka kita sedang sibuk dengan pekerjaan kita&ndash;maka ia akan langsung menjawab dan menghampiri kita ketika kita memanggilnya.</p><p>Saat kita tanpa bosan mengusap punggungnya hingga ia tidur, maka kelak kita akan terharu ketika ia memijat atau membelai pngung kita saat kita kelelahan atau sakit.</p><p>Saat kita berusaha keras menahan emosi di saat ia melakukan kesalahan sebesar apapun, lihatlah dikemudian hari ia akan mampu menahan emosinya ketika adik/ temannya melakukan kesalahan padanya.</p><p>Maka ketika kita selalu berusaha sekuat tenaga untuk melayani dan menyenangkan hati anak yang belum berusia tujuh tahun, insya Allah ia akan tumbuh menjadi pribadi yang menyenangkan, perhatian dan bertanggung jawab. Karena jika kita mencintai dan memperlakukannya sebagai raja, maka ia juga akan mencintai dan memperlakukan kita sebagai raja dan ratunya.</p><p>&nbsp;</p><p>(<strong>Baca Juga</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program Santri Quran 4 Bulan Ponpes MataQu!\">Ingin Anak Anda Hafal Al Quran 30 Juz Dan Berbakti Kepada Orangtuanya? Upayakan Pendidikan Agama Mereka Disini!</a></em>)</p><p>&nbsp;</p><h2>ANAK SEBAGAI TAWANAN (usia 8-14 tahun)</h2><p>Kedudukan seorang tawanan perang dalam islam sangatlah terhormat, Ia mendapatkan haknya secara proporsional, namun juga dikenakan berbagai larangan dan kewajiban. Usia 7-14 tahun adalah usia yang tepat bagi seorang anak bagi seorang anak untuk diberika hak dan kewajiban tertentu.</p><p>Rasulullah SAW mulai memerintahkan seorang anak untuk sholat wajib pada usia 7 tahun, dan memperbolehkan kita memukul anak tersebut (atau mengukum dengan hukuman seperlunya) ketika Ia telah berusia 10 tahun namun meninggalkan sholat. Karena itu usia 7-14 tahun adalah saat yang tepat dan pas bagi anak-anak kita untuk diperkenalkan dan diajarkan tentang hal-hal yang terkait dengan hukum-hukum agama, baik yang diwajibkan maupun yang dilarang, seperti:</p><ol><li>Melakukan sholat wajib 5 waktu</li><li>Memakai pakaian yang bersih, rapih dan menutup aurat</li><li>Menjaga pergaulan dengan lawan jenis</li><li>Membiasakan membaca Al-Quran</li><li>Membantu pekerjaan rumah tanngga yang mudah dikerjakan oleh anak susianya</li><li>Menerapkan kedisiplinan dalam kegiatan sehari-hari Reward dan punishment (hadiah/penghargaan/ pujian dan hukuman/teguran) akan sangat pas diberlakukan pada usia 7 tahun kedua ini, karena anak sudah bisa memahami arti dari tanggung jawab dan konsekuaensi.</li></ol><p>Namun demikian, perlakuan pada setiap anak tidak harus sama kerena &quot;<em>Every Child Is Unique</em>&quot;. (setiap anak itu unik)</p><p>&nbsp;</p><p>(<strong>Baca Juga</strong>: <em><a href=\"https://www.pesantrentahfidzmataqu.com/program/santri-al-quran.html?lang=id\" target=\"_blank\" title=\"Klik disini untuk info lebih lanjut tentang Program Santri Quran 4 Bulan Ponpes MataQu!\">Ingin Anak Anda Hafal Al Quran 30 Juz Dan Berbakti Kepada Orangtuanya? Upayakan Pendidikan Agama Mereka Disini!</a></em>)</p><p>&nbsp;</p><h2>ANAK SEBAGAI SAHABAT (usia 15-21 tahun)</h2><p>Usia 15 tahun adalah usia umum saat anak menginjak akil baligh. Sebagai orang tua kita sebaiknya memposisikan diri sebagai sahabat dan memberi contoh atau teladan yang baik seperti yang diajarkan oleh Ali bin Abi Thalib karomallahu wajhah.</p><p>Berbicara dari hati ke hati Inilah saat yang tepat untuk berbicara dari hati ke hati dengannya, menelaskan bahwa ia sudah remaja dan beranjak dewasa.</p><p>Perlu dikomunikasikan bahwa selain mengalami perubahan fisik, Ia juga akan mengalami perubahan secara mental, spiritual, sosial, budaya dan lingkungan, sehingga sangat mungkin akan ada masalah yang harus dihadapinya. Paling penting bagi kita para orang tua adalah kita harus dapat membangun kesadaran pada anak-anak kita bahwa pada usia setelah akil baliqh ini, ia sudah memiliki buku amalannya sendiri yang kelak akanditayangkan da diminta pertanggung jawabannya oleh Allah swt..</p><p>Memberi Ruang Lebih Setelah memasuki usia akil Baligh, anak perlu memiliki ruang agar tidak merasa terkekang, namun tetap dalam pengawasan kita.</p><p>Pengontrolan tetap harus dilakukan tanpa bersikap otoriter dan tentu saja diiringi dengan berdo&rsquo;a untuk kebaikan dan keselamatannya. Dengan demikian anak akan merasa penting, dihormati, dicintai, dihargai dan disayangi. Selanjutnya, Ia akan merasa percaya diri dan mempunyai kepribadian yang kuat untuk selalu cenderung pada kebaikan dan menjauhi perilaku buruk.</p><p><br>Mempercayakan tanggung jawab yang lebih berat. Waktu usia 15- 21 tahun ini penting bagi kita untuk memberinya tanggung jawab yang lebih berat dan lebih besar, dengan begini kelak anak- anak kita dapat menjadi pribadi yang cekatan, mandiri, bertanggung jawab dan dapat diandalkan.</p><p>Contoh pemberian tanggung jawab pada usia ini adalah seperti memintanya membimbing adik- adiknya, mengerjakan beberapa pekejaan yang biasa dikerjakan oleh orang dewasa, atau mengatur jadwal kegiatan dan mengelola keuangannya sendiri.</p><p><br>Semoga Allah memberikan kita anak-anak yang shaleh dan berbakti.</p><p>&ldquo;<em>Ya Rabbku, berilah aku dari sisi Engkau seorang anak yang baik. Sesungguhnya Engkau Maha mendengarkan doa</em>.&rdquo; (<strong>TQS. Ali Imran: 38</strong>)</p><p>&nbsp;</p><p>Demikianlah <strong>3 Rumusan Imam Ali bin Thalib Ra Dalam Memperlakukan Anak</strong>. Semoga dengan artikel ringan ini dapat menginspirasi kita sebagai orangtua dalam membentuk anak-anak kita menjadi penerus yang sholeh dan juga sholehah. Allohumma Amiin.</p><p>Sumber: <a href=\"https://id-id.facebook.com/AlhabibQuraisyBaharun/\">Fanpage Alhabib Quraisy Baharun</a></p>', 'ilustrasi-pengasuhan-anak-intro.jpg', '1', 1558502711);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(3) NOT NULL,
  `caption` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `kategori` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `caption`, `gambar`, `kategori`) VALUES
(24, 'Biaya Pendaftaran Program Takhfiz Alquran Mataqu', 'dokumen2.jpg', 13),
(25, 'Brosure Pendaftaran Takhfiz Quran Mataqu', 'dokumen3.jpeg', 13),
(26, 'Kolam Berenang dihalaman Asrama Camp Borneo', 'IMG-20181221-WA0013.jpg', 6),
(27, 'Teras Depan Camp Borneo', 'IMG-20181220-WA0009.jpg', 6),
(28, 'Tampak Samping Camp Borneo', 'IMG-20181221-WA0012.jpg', 6),
(29, 'Tampak Luar Asrama Camp Borneo', 'IMG-20181220-WA0007.jpg', 6),
(30, 'Bagian Dalam Camp Borneo', 'IMG-20181221-WA0006.jpg', 5),
(31, 'Kamar tidur Asrama Camp Borneo', 'IMG-20181221-WA0011.jpg', 5),
(32, 'Nampak Depan Kamar tidur', 'IMG-20181221-WA0007.jpg', 5),
(33, 'Ruang Kumpul Camp Borneo', 'IMG-20181221-WA0009.jpg', 5),
(34, 'Bagian Dalam Asrama Villa Kembar', 'interior-01.jpg', 7),
(35, 'Ruang Belajar/Kumpul Villa Kembar', 'interior-02.jpg', 7),
(36, 'Halaman Depan Villa Kembar', 'eksterior-01.jpg', 8),
(37, 'Kolam Berenang Villa Kembar Tampak Samping', 'eksterior-02.jpg', 8),
(38, 'Kolam Berenang tampak depan Villa Kembar', 'eksterior-03.jpg', 8),
(39, 'Bangunan Villa Kembar Tampak Depan', 'eksterior-04.jpg', 8),
(40, 'Tampak Depan Villa Khadijah', 'khadijah1.jpg', 12),
(42, 'Tampak Depan Khadijah 2', 'khadijah4.jpg', 12),
(43, 'Tampak Depan Villa Maryam ', 'maryam2.jpg', 12),
(45, 'Tampak Samping Villa Maryam', 'maryam3.jpg', 12),
(46, 'Gambar Bagian Dalam Villa Aisyah', 'aisyah1.jpg', 11),
(47, 'Tampak Samping Bagian Dalam Villa Aisyah', 'aisyah2.jpg', 11),
(48, 'Juara 2 Lomba Pidato Bahasa Inggris', 'WhatsApp_Image_2019-04-14_at_08_41_59.jpeg', 1),
(49, 'Kamar tidur asrama putra (UMAR)', 'IMG-20181217-WA0001.jpg', 9),
(50, 'Tampak samping kamar tidur asrama putra (UMAR)', 'IMG-20181217-WA0002.jpg', 9),
(51, 'Halaman Depan Villa Putra Umar', 'IMG-20181217-WA0000.jpg', 10),
(52, 'Tampak Samping Villa Putra umar', 'IMG-20181217-WA0003.jpg', 10),
(53, 'Keseluruhan bagian Depan Asrama Umar Putra', 'asrama-01.jpg', 10),
(54, 'Halaman Teras Villa Putra Umar', 'IMG-20181217-WA00001.jpg', 10),
(55, 'Brosure pendaftaran Dauroh Halaman Depan', 'brosur-dauroh-angkatan-ke-29-32-depan.jpg', 14),
(56, 'Brosure pendaftaran Dauroh Halaman Belakang', 'brosur-dauroh-angkatan-ke-29-32-belakang.jpg', 14),
(57, 'Suasana Pembukaan Santri Dauroh Al-Quran', 'suasana-pembukaan-dauroh-al-quran-40-hari-mataqu-angkatan-11-full.jpg', 2),
(58, 'Suasana Penutupan Dauroh (PUNCAK)', 'preview-suasana-penutupan-dauroh-quran-mataqu-angkatan-9.jpg', 2),
(59, 'Peserta Rihlah Akhwat Dauroh', 'preview-artikel-rihlah-akhwat.jpg', 2),
(60, 'Peserta Santri Ikhwan Dauroh berfoto bersama didepan gerbang Mahad Mataqu', 'peserta-dauroh-ikhwan-angkatan-12.jpg', 2),
(61, 'Suasana Pembukaan Santri Dauroh Al-Quran ', 'suasana-pembukaan-dauroh-al-quran-40-hari-mataqu-angkatan-12-full.jpg', 2),
(62, 'Mendengarkan Ceramah yang disampaikan oleh pemateri Dauroh Al-Quran', 'preview-artikel-peserta-dauroh-quran-angkatan-8.jpg', 2),
(65, 'Brosure Pendaftaran Santri Reguler Ikhwan', 'cover-formulir-pendaftaran-santri-al-quran-mahad-mataqu-ikhwan.jpg', 15),
(66, 'Brosure Pendaftaran Santri Reguler Akhwat', 'cover-formulir-pendaftaran-santri-al-quran-mahad-mataqu-akhwat.jpg', 15),
(67, 'Latihan Berkuda Santri Reguler Akhwat di Ponpes Mahad Mataqu', 'latihan-berkuda-para-santri-putri-ponpes-mataqu-13-08-2017-full.jpg', 3),
(69, 'Kunjungan Para Santri Al-Quran ke tempat pembangunan Ponpes Mahad Mataqu', 'preview-berkunjung-ke-kampung-quran.jpg', 3),
(70, 'Kegiatan All Class Around', 'WhatsApp_Image_2019-04-17_at_04_45_29.jpeg', 1),
(71, 'Rincian Biaya Daftar Ulang Santri Al-Quran', 'rincian-biaya-daftar-ulang-santri-al-quran-mahad-mataqu2.jpg', 15),
(72, 'Hallaqoh Huffazh Santri Al-quran Ikhwan', '071.jpg', 3),
(73, 'Para Santri Al-Quran Menyaksikan rangkaian kegiatan hiburan di Ponpes', 'rangkaian-kegiatan-30-11-2016-santri-putra-mataqu-full.jpg', 3),
(74, 'Penyerahan Hadiah santri wati(AKHWAT) Santri al-quran', 'penyerahan-hadiah-santriwati-of-the-month-mataqu-april-2017-full.jpg', 3),
(75, 'Aneka Rangkaian Kegiatan Ponpes Santri Al-Quran menjelang liburan', 'kegiatan-santri-putra-mataqu-jelang-libur-akhir-tahun-2017.jpg', 3),
(76, 'Alur Pendaftaran Santri', 'IMG-20190404-WA0014.jpg', 15),
(77, 'Kegiatan Pelatihan Syariyyah Ponpes mahad Mataqu', 'preview-pelatihan-ruqyah-santri-quran-ikhwan-2016.jpg', 4),
(78, 'Wisata Rihlah Taman mini Indonesia Indah Ponpes Mahad Mataqu', 'rihlah-santri-putri-mataqu-tmii-16-11-2017-main.jpg', 4),
(79, 'Menunggu keberangkatan santri Ke Islamic Book fair Santri Al-Quran', 'kunjungan-santriwan-mataqu-ke-islamic-book-fair-2017-i-ii-full.jpg', 4),
(80, 'Piagam Izin Oprasional Pondok Pesantren', 'dokumen1.jpg', 13),
(81, 'Juara 1 Lomba Pidato Bahasa Inggris', 'WhatsApp_Image_2019-04-14_at_20_27_101.jpeg', 1),
(82, 'test', '2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `id_saran` int(3) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `saran` longtext NOT NULL,
  `is_read` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubungi_kami`
--

INSERT INTO `hubungi_kami` (`id_saran`, `nama_lengkap`, `email`, `phone`, `saran`, `is_read`) VALUES
(3, 'jacob', 'jacob@gmail.com', '085890019191', 'jmebat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_santri`
--

CREATE TABLE `jadwal_santri` (
  `id_jadwal` int(1) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `senin` varchar(75) NOT NULL,
  `selasa` varchar(75) NOT NULL,
  `rabu` varchar(75) NOT NULL,
  `kamis` varchar(75) NOT NULL,
  `jumat` varchar(75) NOT NULL,
  `kategori` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_santri`
--

INSERT INTO `jadwal_santri` (`id_jadwal`, `jam`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `kategori`) VALUES
(1, '03.00 - 04.30', 'Qiyamullail dan persiapan hafalan', 'Qiyamullail dan persiapan hafalan', 'Qiyamullail dan persiapan hafalan', 'Qiyamullail dan persiapan hafalan', 'Qiyamullail dan persiapan hafalan', 1),
(2, '04.30 - 05.00', 'Sholat shubuh berjamaah dan Amalan Pagi', 'Sholat shubuh berjamaah dan Amalan Pagi', 'Sholat shubuh berjamaah dan Amalan Pagi', 'Sholat shubuh berjamaah dan Amalan Pagi', 'Sholat shubuh berjamaah dan Amalan Pagi', 1),
(3, '05.00 - 07.30', 'Halaqoh Qur\'an 1', 'Halaqoh Qur\'an 1', 'Halaqoh Qur\'an 1', 'Halaqoh Qur\'an 1', 'Halaqoh Qur\'an 1', 1),
(4, '07.30 - 09.00', 'Break / Istirohah - Tanzhif dan Futhuur', 'Break / Istirohah - Tanzhif dan Futhuur', 'Break / Istirohah - Tanzhif dan Futhuur', 'Break / Istirohah - Tanzhif dan Futhuur', 'Break / Istirohah - Tanzhif dan Futhuur', 1),
(5, '09.00 - 11.00', 'Halaqoh Qur\'an 2', 'Halaqoh Qur\'an 2', 'Halaqoh Qur\'an 2', 'Halaqoh Qur\'an 2', 'Halaqoh Qur\'an 2', 1),
(6, '11.00 - 13.30', 'Break / Istirohah - Qoilulah, Sholat Dzuhur berjamaah', 'Break / Istirohah - Qoilulah, Sholat Dzuhur berjamaah', 'Break / Istirohah - Qoilulah, Sholat Dzuhur berjamaah', 'Break / Istirohah - Qoilulah, Sholat Dzuhur berjamaah', 'Break / Istirohah - Qoilulah, Sholat Dzuhur berjamaah', 1),
(7, '13.30 - 15.00', 'Halaqoh Qur\'an 3', 'Halaqoh Qur\'an 3', 'Halaqoh Qur\'an 3', 'Halaqoh Qur\'an 3', 'Halaqoh Qur\'an 3', 1),
(8, '16.00 - 17.00', 'Halaqoh Qur\'an 4 / Ta\'lim', 'Halaqoh Qur\'an 4 / Ta\'lim', 'Halaqoh Qur\'an 4 / Ta\'lim', 'Halaqoh Qur\'an 4 / Ta\'lim', 'Halaqoh Qur\'an 4 / Ta\'lim', 1),
(9, '17.00 - 19.30', 'Break / Istirohah - Tanzhif Sholat Magrib dan Isya berjamaah', 'Break / Istirohah - Tanzhif Sholat Magrib dan Isya berjamaah', 'Break / Istirohah - Tanzhif Sholat Magrib dan Isya berjamaah', 'Break / Istirohah - Tanzhif Sholat Magrib dan Isya berjamaah', 'Break / Istirohah - Tanzhif Sholat Magrib dan Isya berjamaah', 1),
(10, '19.30 - 20.30', 'Halaqoh Qur\'an 5 / Ta\'lim', 'Halaqoh Qur\'an 5 / Ta\'lim', 'Halaqoh Qur\'an 5 / Ta\'lim', 'Halaqoh Qur\'an 5 / Ta\'lim', 'Halaqoh Qur\'an 5 / Ta\'lim', 1),
(11, '20.30 - 21.00', 'Amalan Malam', 'Amalan Malam', 'Amalan Malam', 'Amalan Malam', 'Amalan Malam', 1),
(12, '21.00 - 03.00', 'Istrirahat Malam (TIDUR)', 'Istrirahat Malam (TIDUR)', 'Istrirahat Malam (TIDUR)', 'Istrirahat Malam (TIDUR)', 'Istrirahat Malam (TIDUR)', 1),
(13, '03.00-04.45', 'Bangun Tahajud dan dilanjutkan Sholat subuh Berjamaah', 'Bangun Tahajud dan dilanjutkan Sholat subuh Berjamaah', 'Bangun Tahajud dan dilanjutkan Sholat subuh Berjamaah', 'Bangun Tahajud dan dilanjutkan Sholat subuh Berjamaah', 'Bangun Tahajud dan dilanjutkan Sholat subuh Berjamaah', 2),
(14, '04.45-07.00', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 2),
(15, '07.00-08.00', 'Istirahat Pagi dan Sarapan serta mandi', 'Istirahat Pagi dan Sarapan serta mandi', 'Istirahat Pagi dan Sarapan serta mandi', 'Istirahat Pagi dan Sarapan serta mandi', 'Istirahat Pagi dan Sarapan serta mandi', 2),
(16, '08.00-11.00', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 2),
(17, '11.00-13.00', 'Istirahat Sholat Dzuhur berjamaah dan makan siang', 'Istirahat Sholat Dzuhur berjamaah dan makan siang', 'Istirahat Sholat Dzuhur berjamaah dan makan siang', 'Istirahat Sholat Dzuhur berjamaah dan makan siang', 'Istirahat Sholat Dzuhur berjamaah dan makan siang', 2),
(18, '13.00-15.30', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 2),
(19, '15.30-17.00', 'Sholat Ashar sebentar lalu dilanjutkan Menghafal kembali', 'Sholat Ashar sebentar lalu dilanjutkan Menghafal kembali', 'Sholat Ashar sebentar lalu dilanjutkan Menghafal kembali', 'Sholat Ashar sebentar lalu dilanjutkan Menghafal kembali', 'Sholat Ashar sebentar lalu dilanjutkan Menghafal kembali', 2),
(20, '17.00-20.00', 'istirahat sholat maghrib & isya serta makan malam', 'istirahat sholat maghrib & isya serta makan malam', 'istirahat sholat maghrib & isya serta makan malam', 'istirahat sholat maghrib & isya serta makan malam', 'istirahat sholat maghrib & isya serta makan malam', 2),
(21, '20.00-21.30', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 'Mengafal Al-Quran', 2),
(22, '21.30-03.00', 'istirahat tidur malam', 'istirahat tidur malam', 'istirahat tidur malam', 'istirahat tidur malam', 'istirahat tidur malam', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(3) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `nama_santri` varchar(128) NOT NULL,
  `email` varchar(25) NOT NULL,
  `jkel` varchar(10) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `nama_wali` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `lulusan` varchar(128) NOT NULL,
  `sederajat1` varchar(25) NOT NULL,
  `sederajat2` varchar(25) NOT NULL,
  `pondok_pesantren` varchar(30) NOT NULL,
  `jml_juz` varchar(30) NOT NULL,
  `bukti` varchar(128) NOT NULL,
  `is_approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nisn`, `nama_santri`, `email`, `jkel`, `birthdate`, `kategori`, `nama_wali`, `alamat`, `telp`, `photo`, `lulusan`, `sederajat1`, `sederajat2`, `pondok_pesantren`, `jml_juz`, `bukti`, `is_approve`) VALUES
(1, '10116204', 'Aditya DN', 'adityafame09@gmail.com', 'ikhwan', '01,May 2019', 'Santri Reguler', 'Gunawan', 'Pondok Ungu Permai F9 No 25', '085890019191', 'default_jpg.jpg', 'SMA NEGERI 1 BABELAN', 'SMP NEGERI 3 BABELAN', 'SDN BAHAGIA 06', 'jawara', '1', 'transfer1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `Jurusan` varchar(128) NOT NULL,
  `birth_date` varchar(30) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `Jurusan`, `birth_date`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'admin mataqu', 'adityafame09@gmail.com', '', '0', 'index.png', '$2y$10$/N6qJss6j7qmev1Cz/QRteBsHAvwECK3f0RbXxnhJAEIGA2gG5Jui', 1, 1, 1552656017);

-- --------------------------------------------------------

--
-- Table structure for table `user_akses_menu`
--

CREATE TABLE `user_akses_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_akses_menu`
--

INSERT INTO `user_akses_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(8, 1, 2),
(9, 1, 6);

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
(2, 'Menu'),
(3, 'Pendaftaran'),
(4, 'Artikel'),
(5, 'Gallery');

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
(1, 'Administrator');

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
(1, 1, 'Dashboard', 'admin/index', 'fas fa-fw fa-h-square', 1),
(3, 2, 'Manage Menu', 'menu/index', 'fas fa-fw fa-folder', 1),
(6, 2, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder-minus', 1),
(7, 3, 'Calon Santri', 'admin/pendaftar', 'fas fa-fw fa-user-plus', 1),
(9, 5, 'gambar', 'admin/tambahgambar', 'fas fa-fw fa-images', 1),
(10, 1, 'Role Access', 'admin/role', 'fas fa-fw fa-user-plus', 1),
(11, 1, 'Pesan', 'admin/message', 'fas fa-fw fa-phone-square', 1),
(12, 5, 'video', 'admin/tambahvideo', 'fas fa-fw fa-file-video', 1),
(13, 4, 'Kelola Artikel', 'admin/kelolaberita', 'fas  fa-fw fa-tasks', 1),
(14, 4, 'post artikel', 'admin/berita', 'far fa-fw fa-newspaper', 1),
(15, 6, 'cobalagi', 'coba/cobalgi', 'fas fa-fw fa-h-square', 1),
(16, 1, 'Music Player', 'admin/music', 'fas fa-fw fa-play-circle', 1),
(17, 1, 'Atur Jadwal Santri', 'admin/jadwal', 'fas fa-fw fa-calendar-check', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `data_created`) VALUES
(6, 'aditbego@gmail.com', 'nZbYSP+j034k0Q0m+rOE18Ms/jrCD9uNqMkLIUEf71k=', 1556298351),
(7, 'aditbego@gmail.com', 'xA5+mvpkOVgG7y4Zi6L0ZHykWzqgFS3q/ABMgoNQqLw=', 1556298392),
(8, 'aditbego@gmail.com', 'mCj5tAYqWTQ2uOWcHfnVZDpO/lm8CUzzzOaoZtvtn4M=', 1556298603);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(3) NOT NULL,
  `name_id` varchar(25) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name_id`, `gambar`, `url`, `date`) VALUES
(31, 'iL0L9Kq-nlE', 'pengembangan2.png', 'https://www.youtube.com/watch?v=iL0L9Kq-nlE', 1558490432),
(32, 'tohFZFITORo', 'kebun.png', 'https://www.youtube.com/watch?v=tohFZFITORo', 1559107719),
(34, '9Y8spsQtJvI', 'hiking.png', 'https://www.youtube.com/watch?v=9Y8spsQtJvI', 1558490538),
(35, 'tZAMAMa3_-A', 'pembangunan.png', 'https://www.youtube.com/watch?v=tZAMAMa3_-A', 1558490581),
(39, '1kU8DaP2nbc', 'video3.png', 'https://www.youtube.com/watch?v=1kU8DaP2nbc', 1558501062),
(43, 'HBam-IqOUps', 'sodaqo1.png', 'https://www.youtube.com/watch?v=HBam-IqOUps', 1559108341);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indexes for table `jadwal_santri`
--
ALTER TABLE `jadwal_santri`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_akses_menu`
--
ALTER TABLE `user_akses_menu`
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
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `id_saran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal_santri`
--
ALTER TABLE `jadwal_santri`
  MODIFY `id_jadwal` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_akses_menu`
--
ALTER TABLE `user_akses_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'login', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"user\",\"user_akses_menu\",\"user_menu\",\"user_role\",\"user_sub_menu\",\"user_token\"],\"table_structure[]\":[\"user\",\"user_akses_menu\",\"user_menu\",\"user_role\",\"user_sub_menu\",\"user_token\"],\"table_data[]\":[\"user\",\"user_akses_menu\",\"user_menu\",\"user_role\",\"user_sub_menu\",\"user_token\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"mataqu\",\"table\":\"video\"},{\"db\":\"mataqu\",\"table\":\"user_role\"},{\"db\":\"mataqu\",\"table\":\"user_menu\"},{\"db\":\"mataqu\",\"table\":\"user_akses_menu\"},{\"db\":\"mataqu\",\"table\":\"galeri\"},{\"db\":\"mataqu\",\"table\":\"berita\"},{\"db\":\"mataqu\",\"table\":\"jadwal_santri\"},{\"db\":\"rskb\",\"table\":\"jadwal_dokter\"},{\"db\":\"mataqu\",\"table\":\"pendaftaran\"},{\"db\":\"mataqu\",\"table\":\"hubungi_kami\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'loginlengkap', 'user', '{\"CREATE_TIME\":\"2019-03-09 18:23:13\"}', '2019-03-28 05:24:56'),
('root', 'loginlengkap', 'user_sub_menu', '{\"sorted_col\":\"`user_sub_menu`.`title`  ASC\"}', '2019-03-21 04:40:18'),
('root', 'mahasiswa', 'mahasiswa', '{\"sorted_col\":\"`id` ASC\"}', '2019-03-18 08:29:07'),
('root', 'mataqu', 'berita', '{\"sorted_col\":\"`id` ASC\"}', '2019-04-27 23:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-05-29 06:57:40', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `rskb`
--
CREATE DATABASE IF NOT EXISTS `rskb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rskb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(0, 'kitabersama', 'a384b6463fc216a5f8ecb6670f86456a');

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `kdcabang` int(11) NOT NULL,
  `nmcabang` varchar(30) NOT NULL,
  `namajalan` text NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`kdcabang`, `nmcabang`, `namajalan`, `kecamatan`, `kelurahan`, `kota`, `kodepos`, `notelp`) VALUES
(11, 'RSKB Bekasi', 'Jln. Wibawa Mukti', 'Jatiasih', 'Jatiasih', 'Bekasi', '17422', '0218885624'),
(12, 'RSKB Jakarta', 'Jl.Pondok Indah Raya No.111', 'Jakarta Selatan', 'Kebayoran Lama', 'Jakarta', '15149', '0219389238'),
(13, 'RSKB Tangerang', 'Jl.Cengkareng Raya No 20', 'Tangerang', 'Cengkareng', 'Tangerang', '11730', '0218392819');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(8) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `kdcabang` int(11) NOT NULL,
  `img_dok` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_lengkap`, `jenis_kelamin`, `spesialis`, `kdcabang`, `img_dok`) VALUES
('16116614', 'dr. Hardji Prawiro,SpPD,KKV', 'L', 'Jantung & Pembulu Darah', 11, '1.jpg'),
('16116615', 'dr. Aron Husink,SpJP,FIHA', 'L', 'Jantung & Pembulu Darah', 11, '2.jpg'),
('16116616', 'dr.A.M. Onny Witjaksono,SpJP,FIHA', 'L', 'Jantung & Pembulu Darah', 11, '3.jpg'),
('16116617', 'dr. Gardjito H.S.,SpJP,FIHA ', 'L', 'Jantung & Pembulu Darah', 11, '4.jpg'),
('16116618', 'Prof.Dr.dr. Syarifuddin Rauf,Sp.A(K)', 'L', 'Ibu & Anak ', 11, '5.png'),
('16116619', 'dr. Herry D.Nawing,Sp.A ', 'L', 'Ibu & Anak ', 11, '5a.jpg'),
('16116620', 'dr. Burhanuddin Iskandar,Sp.A(K)', 'L', 'Ibu & Anak ', 11, '6.jpg'),
('16116621', 'Dr.dr. Aidah Juliaty A.Baso,Sp.A(K)', 'P', 'Ibu & Anak ', 11, '10.jpg'),
('16116622', 'Dr.dr.Ema Alasiry,Sp.A (K) ', 'P', 'Ibu & Anak ', 11, '8.jpg'),
('16116623', 'dr.Ratna Dewi Artati,Sp.A (K) ', 'P', 'Ibu & Anak ', 11, '9.jpg'),
('16116624', 'dr.Haizah Nurdin,M.Kes,Sp.An-KIC', 'L', 'Anastesi', 13, '7.png'),
('16116625', 'dr.Tommy Rubiyanto Habar,Sp.B.,Sp.BA', 'L', 'Bedah Anak ', 13, '11.jpg'),
('16116626', 'dr.Sulmiati,Sp.BA', 'P', 'Bedah Anak ', 11, '13.jpg'),
('16116627', 'dr.A. Bamby Sutrisno SpM ', 'L', 'Mata ', 12, '12.jpg'),
('16116628', 'dr.Yogyarso Budi W,SpM ', 'L', 'Mata ', 12, '14.jpg'),
('16116629', 'dr.Timmy Budi Yudhantara, SpM ', 'L', 'Mata ', 12, '15.jpg'),
('16116630', 'dr.Ifran Saleh,SpOT(K) ', 'L', 'Tulang', 12, '16.jpg'),
('16116631', 'Prof.Dr.dr.Muh.Ramli Ahmad,Sp.A-KAP-KMN ', 'L', 'Anastesi', 13, '17.jpg'),
('16116632', 'dr.Abdul Wahab,Sp.An', 'L', 'Anastesi', 13, '18.jpg'),
('16116633', 'dr.Faisal,Sp-An-KIC ', 'L', 'Anastesi ', 13, '19.jpg'),
('16116634', 'Prof.Dr.dr.Eka Savitri,Sp.THT-KL (K) ', 'P', 'THT-KL ', 13, '23.png'),
('16116635', 'Dr.dr.Riskiana Djamin,Sp.THT-KL(K)', 'P', 'THT-KL ', 13, '21.jpg'),
('16116636', 'Dr.dr.Nova A.L.Pieter,Sp.THT-KL.,FICS ', 'P', 'THT-KL ', 13, '22.jpg'),
('16116637', 'dr.Andi Nirmalasari ', 'L', 'Dokter Umum ', 11, '20.jpg'),
('16116638', 'dr.Irda Yulianti ', 'P', 'Dokter Umum ', 11, '26.jpg'),
('16116639', 'dr.Maulina Yunus ', 'P', 'Dokter Umum ', 12, '25.jpg'),
('16116640', 'dr.Sigit Dwi Promono ', 'L', 'Dokter Umum ', 12, '24.jpg'),
('16116641', 'dr.Amrillah Hamdi ', 'L', 'Dokter Umum ', 13, '27.jpg'),
('16116642', 'dr.Irawati K.', 'P', 'Dokter Umum ', 13, '29.jpg'),
('16116643', 'as', 'L', 'a', 11, 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hubungi_kami`
--

CREATE TABLE `hubungi_kami` (
  `kdhubungi` int(11) NOT NULL,
  `nmdepan` varchar(50) NOT NULL,
  `nmbelakang` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `readed` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hubungi_kami`
--

INSERT INTO `hubungi_kami` (`kdhubungi`, `nmdepan`, `nmbelakang`, `hp`, `email`, `pesan`, `readed`) VALUES
(1, 'asdsad', 'asdsad', '085950697528', 'putri.lestari.permana@gmail.co', 'adssadsada', 1),
(2, 'adasd', 'asdsad', '085950697528', 'sad@kips.com', 'asdasdasdasd', 1),
(3, 'asdasdasd', 'asdasdasd', '085950697528', 'putri.lestari.permana@gmail.co', 'asdsadsadsa', 1),
(4, 'asdsad', 'asdsad', '085950697528', 'putri.lestari.permana@gmail.co', 'asdasdasdsadas', 1),
(5, 'Rizky', 'asdsadsa', '085950697528', 'putri.lestari.permana@gmail.co', 'asdsadasdsadsadsad', 1),
(6, 'asdsa', 'adssad', '085710200230', 'putri.lestari.permana@gmail.co', 'asdasd', 1),
(7, 'sdacx', 'sdaw21', '085710200230', 'putri.lestari.permana@gmail.co', 'asdasdasdadsasd', 1),
(8, 'asdasdrrrrr', 'aaaaa', '085710200230', 'putri.lestari.permana@gmail.co', 'adsad', 1),
(9, 'asdasdrrrrr', 'aaaaa', '085710200230', 'putri.lestari.permana@gmail.co', 'adsad', 1),
(10, 'Rizky', 'Permana', '081222718213', 'putri.lestari.permana@gmail.co', 'asdasdsad', 1),
(11, 'Rizky', 'Permana', '081222718213', 'putri.lestari.permana@gmail.co', 'asdasdsadddd', 1),
(12, 'Rizky', 'Permana', '081222718213', 'putri.lestari.permana@gmail.co', 'asdasdsad', 1),
(13, 'Rizky', 'Permana', '081222718213', 'putri.lestari.permana@gmail.co', 'asdasdsad', 1),
(14, 'Rizky', 'Permana', '081222718213', 'putri.lestari.permana@gmail.co', 'asdasdsadsss', 1),
(15, 'Rizky', 'Permana', '081222718213', 'putri.lestari.permana@gmail.co', 'asdasdsadxx', 1),
(21, 'Rizky', 'Permana', '085457512435', 'rizkyperp08@gmail.com', 'Saya ingin bertanya, kenapa anda seperti itu ? ', 1),
(22, 'zavira', 'nabilla', '081280938291', 'znbilla4@gmail.com', 'NAMA SAYA ZAVIRA', 1),
(23, 'rizky', 'permana', '089778726312', 'rizky@gmail.com', 'halo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dokter`
--

CREATE TABLE `jadwal_dokter` (
  `id_jadwal` varchar(8) NOT NULL,
  `id_dokter` varchar(8) NOT NULL,
  `senin` varchar(20) NOT NULL DEFAULT '-',
  `selasa` varchar(20) NOT NULL DEFAULT '-',
  `rabu` varchar(20) NOT NULL DEFAULT '-',
  `kamis` varchar(20) NOT NULL DEFAULT '-',
  `jumat` varchar(20) NOT NULL DEFAULT '-',
  `sabtu` varchar(20) NOT NULL DEFAULT '-',
  `minggu` varchar(20) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_dokter`
--

INSERT INTO `jadwal_dokter` (`id_jadwal`, `id_dokter`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`) VALUES
('1236', '16116614', '09:30 - 11:00', ' - ', ' - ', ' - ', '14:00  - 17:00', ' - ', ' - '),
('1237', '16116615', ' - ', '12:00 - 14:00', '15:00 - 19:00', ' - ', ' - ', '17:00 - 21:00', ' - '),
('1238', '16116616', '10:00 - 13:00', ' -  ', '16:00 - 20:00', ' - ', '13:00 - 16:00', ' - ', ' 13:30 - 16:00'),
('1239', '16116617', '10:00 - 13:00', '12:00 - 14:00', '15:00 - 17:00', ' -  ', ' - ', ' - ', ' 13:00 - 16:00'),
('1240', '16116618', '08:00 - 11:00', ' - ', '14:00 - 17:00', ' - ', '16:00 - 18:00', ' - ', ' - '),
('1241', '16116619', '10:00 - 13:00', ' - ', ' - ', '14:00 - 16:00', ' - ', '11:00 - 14:00', ' - '),
('1242', '16116620', ' - ', ' - ', ' - ', '09:00 - 12:', ' - ', ' - ', '13:00 - 16:00'),
('1243', '16116621', ' - ', '09:00 - 12:00', '14:00 - 16:00', ' - ', ' - ', ' - ', '11:00 - 15:00'),
('1244', '16116622', ' - ', '13:00 - 15:', ' - ', '13:00 - 15:00', ' - ', ' - ', ' - '),
('1245', '16116623', '09:00 - 12:00', ' - ', '10:30 - 13:00', ' - ', ' - ', '09:00 - 12:00', ' - '),
('1246', '16116624', '08:00 - 13:00', '12:00 - 14:00', '14:00 - 17:00', '09:00 - 20:00', ' - ', '10:00 - 16:00', ' - '),
('1247', '16116625', '10:00 - 12:00', ' - ', '09:00 - 14:00', ' - ', ' - ', ' - ', '10:00 - 14:00'),
('1248', '16116626', '09:00 - 12:00', ' - ', ' - ', ' - ', ' - ', '10:00 - 13:00', ' - '),
('1249', '16116627', '09:00 - 13:00', ' - ', '14:00 - 17:00', ' - ', '10:00 - 14:00', ' - ', '15:00 - 18:00'),
('1250', '16116628', ' - ', ' - ', ' - ', '13:00 - 17:00', ' - ', '19:00 - 22:00', ' - '),
('1251', '16116629', ' - ', '12:00 - 15:00', ' - ', ' - ', '09:00 - 13:00', ' - ', '14:00 - 18:00'),
('1252', '16116630', ' - ', ' - ', ' - ', '09:00 - 12:00', ' - ', '13:00 - 15:00', ' - '),
('1253', '16116631', ' - ', ' - ', ' - ', ' - ', '08:00 - 13:00', ' - ', '14:00 - 20:00'),
('1254', '16116632', ' - ', '12:00 - 15:00', ' - ', '10:00 - 16:00', ' - ', '16:00 - 20:00', ' - '),
('1255', '16116633', '10:00 - 14:00', ' - ', '09:00 - 14:00', ' - ', '15:00 - 21:00', ' - ', '16:00 - 20:00'),
('1256', '16116634', '09:00 - 13:00', ' - ', ' - ', '18:00 - 22:00', ' - ', '14:00 - 18:00', ' - '),
('1257', '16116635', ' - ', '14:00 - 17:00', ' - ', '09:00 - 14:00', ' - ', ' - ', '15:00 - 18:00'),
('1258', '16116636', '11:00 - 13:00', '09:00 - 12:00', '13:00 - 16:00', ' - ', ' - ', ' - ', ' - '),
('1259', '16116637', '09:00 - 22:00', ' - ', '10:00 - 17:00', ' - ', ' - ', '10:00 - 16:00', ' - '),
('1260', '16116638', '08:00 - 20:00', '08:00 - 20:00', ' - ', '08:00 - 20:00', '08:00 - 20:00', ' - ', '08:00 - 20:00'),
('1261', '16116639', '09:00 - 21:00', ' - ', ' - ', ' - ', ' - ', '09:00 - 20:00', ' - '),
('1262', '16116640', ' - ', ' - ', '09:00 - 21:00', ' - ', ' - ', ' - ', '11:00 - 17:00'),
('1263', '16116641', ' - ', ' - ', ' - ', ' - ', ' - ', '08:00 - 20:00', '09:00 - 17:00'),
('1264', '16116642', ' - ', '10:00 - 19:00', ' - ', '09:00 - 21:00', '08:00 - 21:00', '08:00 - 21:30', ' - ');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id_slide` int(11) NOT NULL,
  `img_slide` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id_slide`, `img_slide`) VALUES
(1, '1.jpg'),
(3, '3.jpg'),
(5, '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE `subs` (
  `id_subs` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`id_subs`, `email`) VALUES
(1, 'rizkyperp08@gmail.com'),
(2, 'rizkyperp@gmail.com'),
(3, 'znbilla4@gmail.com'),
(4, 'adityafame09@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`kdcabang`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `kdcabang` (`kdcabang`);

--
-- Indexes for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  ADD PRIMARY KEY (`kdhubungi`);

--
-- Indexes for table `jadwal_dokter`
--
ALTER TABLE `jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id_slide`);

--
-- Indexes for table `subs`
--
ALTER TABLE `subs`
  ADD PRIMARY KEY (`id_subs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hubungi_kami`
--
ALTER TABLE `hubungi_kami`
  MODIFY `kdhubungi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subs`
--
ALTER TABLE `subs`
  MODIFY `id_subs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`kdcabang`) REFERENCES `cabang` (`kdcabang`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
