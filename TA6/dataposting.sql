-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 12:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta6`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataposting`
--

CREATE TABLE `dataposting` (
  `id` int(11) NOT NULL,
  `post` longtext NOT NULL,
  `foto` text NOT NULL,
  `nim` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataposting`
--

INSERT INTO `dataposting` (`id`, `post`, `foto`, `nim`) VALUES
(1, 'asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd asd  sad dsa ds ds  sd ss d sd sd sd sds ds d sd s ds d s ds da sd ', 'folder/59e990159c59040c378a6b49131324.jpg', '6701170103'),
(2, 'jlkkajklsdljaisdjafhjsahfsahsahd', 'folder/59e990159c59040c378a6b49131324.jpg', '6666666666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataposting`
--
ALTER TABLE `dataposting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataposting`
--
ALTER TABLE `dataposting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dataposting`
--
ALTER TABLE `dataposting`
  ADD CONSTRAINT `dataposting_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
