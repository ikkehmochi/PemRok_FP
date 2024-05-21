-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 07:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemrok`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL DEFAULT current_timestamp(),
  `Gambar` text DEFAULT NULL,
  `artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `Judul`, `Tanggal`, `Gambar`, `artikel`) VALUES
(1, 'TESTING BERITA 2', '2024-05-21', 'Virtual Background Bangkit 2023.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit fermentum elit, quis mattis arcu porttitor at. Vivamus molestie tristique dolor at pulvinar. Vivamus convallis mauris est, vehicula tincidunt ligula elementum sit amet. Vivamus vehicula eros et est tincidunt tincidunt quis tincidunt ligula. Etiam urna odio, commodo in tincidunt id, bibendum quis lectus. Fusce varius quam ac augue hendrerit porttitor. Mauris vel gravida neque. Phasellus lobortis, ligula ac consequat lacinia, nunc lorem maximus leo, et porta justo tellus malesuada arcu.Vivamus arcu urna, vehicula nec iaculis ut, luctus at nisl. Phasellus ac dictum dolor. Vivamus a euismod massa. Morbi ut neque nec lorem auctor rutrum. Vivamus suscipit venenatis elementum. Curabitur efficitur arcu non dignissim consequat. Etiam quis tristique ipsum. Fusce placerat elementum metus, sit amet pharetra sem mollis a. Phasellus non neque iaculis, finibus est eget, fermentum massa. Nam sollicitudin est quis ante porttitor, nec ullamcorper purus porta. Nam non augue convallis, sollicitudin velit lobortis, ullamcorper lacus. Pellentesque in mi vel orci aliquet rhoncus.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `role` enum('Supplier','Manager','Administrator') NOT NULL,
  `supplier_type` enum('Tetap','TidakTetap') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `nohp`, `role`, `supplier_type`) VALUES
(1, 'Achmad Rozy Priambodo', 'achmadrozy@gmail.com', '+62-899-555-363', 'Supplier', NULL),
(2, 'Farel Tiuraka', 'fareltiuraka@gmail.com', '+62-899-555-365', 'Manager', NULL),
(3, 'Chiristian', 'chiristian@gmail.com', '+62-899-555-366', 'Supplier', 'Tetap'),
(4, 'Hakim', 'hakim@gmail.com', '+62-899-555-367', 'Administrator', NULL),
(6, 'abdurrahman', 'abdurrahman@gmail.com', '+62-899-555-368', 'Supplier', 'Tetap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
