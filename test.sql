-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 07:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `jenis` enum('kucing','anjing') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `syarat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`jenis`, `nama`, `umur`, `kondisi`, `syarat`) VALUES
('kucing', 'Milo', '3 bulan', 'sudah divaksin', 'Memiliki fasilitas untuk kucing'),
('kucing', 'Mola', '1 tahun', 'Kesehatan baik', 'Memiliki fasilitas kucing'),
('kucing', 'Mimi', '6 bulan', 'Sangat aktif dan sehat', 'Memiliki fasilitas yang baik'),
('anjing', 'Bruno', '1 tahun', 'Sudah vaksin rabies', 'Berpengalaman merawat anjing'),
('anjing', 'Doggy', '7 bulan', 'Aktif dan sehat', 'Memiliki niat merawat'),
('anjing', 'Chiko', '2 bulan', 'Masih belajar makan', 'Bisa merawat anjing kecil'),
('kucing', 'Mochi', '1 tahun', 'Kesehatan amat baik', 'Memiliki fasilitas yang cukup'),
('anjing', 'Mathew', '3 bulan', 'Kesehatan baik', 'Mau membiayai vaksin');

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `jenis` enum('kucing','anjing','mix') NOT NULL,
  `kapasitas` varchar(10) NOT NULL,
  `ringkasan` varchar(100) NOT NULL,
  `jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shelter`
--

INSERT INTO `shelter` (`nama`, `lokasi`, `jenis`, `kapasitas`, `ringkasan`, `jam`) VALUES
('Dog Shelter', 'Jalan Jenderal Sudirman no 10, Singaraja', 'anjing', '3', 'Shelter sekaligus toko hewan ', '09.00 AM - 10.00 PM'),
('Singaraja Shelter', 'Singaraja', 'mix', '10', 'Shelter terpercaya', '09.00 AM - 10.00 PM'),
('Ichin Shelter', 'Desa Nagasepaha', 'kucing', '5', 'Shelter kucing terbaik', '09.00 AM - 10.00 PM'),
('Mimi Animal Shelter', 'Denpasar, Bali', 'anjing', '5', 'Shelter sekaligus toko', '09.00 AM - 10.00 PM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
