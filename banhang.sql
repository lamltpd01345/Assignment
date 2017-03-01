-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 05:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `Id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `sdt` text NOT NULL,
  `email` text NOT NULL,
  `diachi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`Id`, `ten`, `sdt`, `email`, `diachi`) VALUES
(1, 'Lê Tùng Lâm', '0905028385', 'minkboy96@gmail.com', '137 nguyenthithap');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon_ct`
--

CREATE TABLE `hoadon_ct` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(120) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `madonhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon_ct`
--

INSERT INTO `hoadon_ct` (`id`, `tensanpham`, `gia`, `soluong`, `madonhang`) VALUES
(1, 'Samsung SFD123', 4000000, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `id` int(11) NOT NULL,
  `sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `URLS` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Birthday` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`, `URLS`, `Name`, `Birthday`, `admin`) VALUES
(1, 'admin', 'tunglam123', 'lamltpd01345@fpt.edu.vn', 'facebook.com', 'lam', '01/01/1996', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `sanpham` text NOT NULL,
  `ten` text NOT NULL,
  `gia` varchar(50) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `sanpham`, `ten`, `gia`, `img`) VALUES
(1, 'Canon 60D', 'Canon 60D', '12.500.000 VND', 'http://localhost/assignment/images/1.jpg'),
(2, 'Samsung SFD123', 'Samsung SFD123', '8.650.000 VND', 'http://localhost/assignment/images/15.png'),
(3, 'Fujifilm FinePix S9800', 'Fujifilm FinePix S9800', '4,650,000 VND', 'http://localhost/assignment/images/18.jpg'),
(4, 'Sony CyberShot DSC-HX90V', 'Sony CyberShot DSC-HX90V', '8,540,000 VND', 'http://localhost/assignment/images/19.jpg'),
(5, 'Canon PowerShot SX720 HS', 'Canon PowerShot SX720 HS', '7,990,000 VND', 'http://localhost/assignment/images/20.jpg'),
(6, 'Pentax Ricoh WG-5 GPS', 'Pentax Ricoh WG-5 GPS', '7,490,000 VND', 'http://localhost/assignment/images/21.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hoadon_ct`
--
ALTER TABLE `hoadon_ct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hoadon_ct`
--
ALTER TABLE `hoadon_ct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
