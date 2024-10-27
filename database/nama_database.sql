SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pilihan_menu` varchar(255) NOT NULL,
  `jumlah_orang` int(11) NOT NULL,
  `catatan` text DEFAULT NULL,
  `waktu_dipesan` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pesanan` (`id_pesanan`, `nama`, `alamat`, `pilihan_menu`, `jumlah_orang`, `catatan`, `waktu_dipesan`, `email`, `telp`, `status`) VALUES
(1, 'imelda', 'botolengket', 'Paket A', 123, '', '2024-05-11 06:01:24', 'imeldadiem@gmail.com', '0812300678', 'Canceled'),
(22, 'Shaunan', 'jl.pare-wates', 'Paket A', 100, '', '2024-05-10 16:59:06', 'shau@gmail.com', '0812345678', 'Confirmed'),
(23, 'imelda', 'botolengket', 'Paket B', 20, '', '2024-05-10 16:59:50', 'imel@gmail.com', '0812300678', 'Confirmed'),
(24, 'shaunan', 'plosoklaten', 'Paket C', 321, '', '2024-05-11 06:04:48', 'shau@gmail.com', '0812345678', 'Canceled'),
(25, 'imelda', 'botolengket', 'Paket B', 555, '', '2024-05-11 06:05:21', 'imeldadiem@gmail.com', '0812300678', 'Confirmed');

ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

GRANT ALL PRIVILEGES ON nama_database.* TO 'username'@'localhost' IDENTIFIED BY 'password';