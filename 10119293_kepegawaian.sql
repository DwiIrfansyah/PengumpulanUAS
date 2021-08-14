-- MariaDB dump 10.17  Distrib 10.4.8-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: kepegawaian_1
-- ------------------------------------------------------
-- Server version	10.4.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gaji`
--

DROP TABLE IF EXISTS `gaji`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_golongan` int(11) DEFAULT NULL,
  `jumlah_gaji` int(11) DEFAULT NULL,
  `total_gaji` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_gaji`),
  KEY `id_pegawai` (`id_pegawai`),
  KEY `id_golongan` (`id_golongan`),
  CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON UPDATE CASCADE,
  CONSTRAINT `gaji_ibfk_2` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id_golongan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gaji`
--

LOCK TABLES `gaji` WRITE;
/*!40000 ALTER TABLE `gaji` DISABLE KEYS */;
INSERT INTO `gaji` VALUES (1,'2021-08-03',1,4,1100000,5100000),(2,'2021-08-03',2,2,1000000,4500000),(3,'2021-08-13',3,1,1000000,4000000),(4,'2021-08-03',4,4,1100000,5100000);
/*!40000 ALTER TABLE `gaji` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `golongan`
--

DROP TABLE IF EXISTS `golongan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `golongan` (
  `id_golongan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_golongan` varchar(100) DEFAULT NULL,
  `gaji_pokok` int(12) DEFAULT NULL,
  `tunjangan_istri` int(12) DEFAULT NULL,
  `tunjangan_anak` int(12) DEFAULT NULL,
  `tunjangan_transport` int(12) DEFAULT NULL,
  `tunjangan_makan` int(12) DEFAULT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `golongan`
--

LOCK TABLES `golongan` WRITE;
/*!40000 ALTER TABLE `golongan` DISABLE KEYS */;
INSERT INTO `golongan` VALUES (1,'Pembina',1000000,1000000,1000000,500000,500000),(2,'Pembina Tingkat I',1000000,1000000,1000000,1000000,500000),(3,'Pembina Tingkat II',1000000,1000000,1000000,1000000,1000000),(4,'Pembina Tingkat III',1100000,1000000,1000000,1000000,1000000);
/*!40000 ALTER TABLE `golongan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(12) DEFAULT NULL,
  `nik` varchar(12) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis_kelamin` enum('P','L') DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `telepon` varchar(12) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `status_nikah` enum('belum nikah','nikah') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `id_golongan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `id_golongan` (`id_golongan`),
  CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id_golongan`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` VALUES (1,'198609262016','360128080108','Akbar','L','Pandeglang','2001-01-16','083841314910','Islam','belum nikah','Cibenda',4),(2,'198609262017','360128088707','Misna','L','Cilegon','2000-06-21','083841314931','Khatolik','nikah','Anyer',2),(3,'198609262018','360128088751','Kurnia','P','Subang','1990-06-05','083841314876','Islam','nikah','Karawang',1),(4,'198609262090','360128088751','Samadi','L','Pandeglang','1996-06-26','083841315092','Buddha','nikah','kp. Legon',4);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(5) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-14 17:14:02
