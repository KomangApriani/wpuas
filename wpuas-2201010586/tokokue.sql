--
-- MySQL 5.5.5
-- Tue, 05 Apr 2022 03:43:11 +0000
--

CREATE TABLE `tb_datakaryawan` (
   `Kode_anggota` varchar(15) not null,
   `Nama_anggota` varchar(100),
   `Alamat` text,
   `Nomor_telepon` varchar(15),
   `Username` varchar(20),
   `Password` varchar(30),
   PRIMARY KEY (`Kode_anggota`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_datakaryawan` (`Kode_anggota`, `Nama_anggota`, `Alamat`, `Nomor_telepon`, `Username`, `Password`) VALUES ('2001', 'Apri', 'Gilimanuk', '083115686195', 'Apriani10', 'apriani10');

CREATE TABLE `tb_datakue` (
   `Kode_kue` varchar(10) not null,
   `Ukuran` varchar(10),
   `Tema_kue` varchar(15),
   `Rasa` varchar(15),
   `Jumlah` int(10),
   `Harga` varchar(20),
   `Total_harga` varchar(30),
   `Kode_pesanan` varchar(10),
   PRIMARY KEY (`Kode_kue`),
   KEY `Kode_pesanan` (`Kode_pesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_datakue` (`Kode_kue`, `Ukuran`, `Tema_kue`, `Rasa`, `Jumlah`, `Harga`, `Total_harga`, `Kode_pesanan`) VALUES ('A001', 'Sedang', 'Doraemon', 'coklat', '1', '150.000', '150.000', 'B705');

CREATE TABLE `tb_datapesanan` (
   `Kode_pesanan` varchar(10) not null,
   `Kode_kue` varchar(10),
   `Nama_pemesan` varchar(30),
   `Alamat` text,
   `Nomor_telepon` varchar(15),
   `Kode_pembayaran` varchar(10),
   PRIMARY KEY (`Kode_pesanan`),
   KEY `Kode_kue` (`Kode_kue`),
   KEY `Kode_pembayaran` (`Kode_pembayaran`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_datapesanan` (`Kode_pesanan`, `Kode_kue`, `Nama_pemesan`, `Alamat`, `Nomor_telepon`, `Kode_pembayaran`) VALUES ('B705', 'A001', 'Deviana', 'Negara', '0836361736816', '3427');

CREATE TABLE `tb_pembayaran` (
   `Kode_pembayaran` varchar(10) not null,
   `Kode_kue` varchar(10),
   `Kode_pesanan` varchar(10),
   `Harga` varchar(20),
   `Jumlah` int(5),
   `Total_pembayaran` varchar(30),
   `Tanggal_pembayaran` varchar(30),
   PRIMARY KEY (`Kode_pembayaran`),
   KEY `Kode_pesanan` (`Kode_pesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_pembayaran` (`Kode_pembayaran`, `Kode_kue`, `Kode_pesanan`, `Harga`, `Jumlah`, `Total_pembayaran`, `Tanggal_pembayaran`) VALUES ('3427', 'A001', 'B705', '150.000', '1', '150.000', '20-04-2022');

CREATE TABLE `tb_pembeli` (
   `Kode_pembeli` varchar(30) not null,
   `Nama` varchar(30),
   `Alamat` text,
   `Nomor_telepon` varchar(30),
   `Username` varchar(30),
   `Password` varchar(30),
   PRIMARY KEY (`Kode_pembeli`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_pembeli` (`Kode_pembeli`, `Nama`, `Alamat`, `Nomor_telepon`, `Username`, `Password`) VALUES ('1004', 'Debora', 'Denpasar', '083651736286', 'Debora12', 'debora12');