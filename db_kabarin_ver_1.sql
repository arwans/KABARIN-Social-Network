-- MySQL dump 10.13  Distrib 5.1.61, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: u851225815_upo
-- ------------------------------------------------------
-- Server version	5.1.61
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `notif`
--

DROP TABLE IF EXISTS `notif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notif` (
  `id_notif` int(5) NOT NULL AUTO_INCREMENT,
  `p_status` varchar(30) NOT NULL,
  `p_tanggapan` varchar(30) NOT NULL,
  `id_status` int(5) NOT NULL,
  `dilihat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `tgl_notif` date NOT NULL,
  `jam_notif` time NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`id_notif`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notif`
--

LOCK TABLES `notif` WRITE;
/*!40000 ALTER TABLE `notif` DISABLE KEYS */;
INSERT INTO `notif` VALUES (1,'admin','joko',1,'Y','2012-06-28','13:55:00','Y'),(2,'joko','wiro',1,'Y','2012-06-28','12:41:00','Y'),(3,'joko','andi',1,'Y','2012-06-28','12:40:00','Y'),(8,'admin','admin',13,'Y','2012-06-30','10:09:50','Y'),(7,'admin','admin',13,'Y','2012-06-30','10:09:10','Y'),(6,'joko','admin',4,'Y','2012-06-30','10:07:28','Y'),(9,'admin','admin',13,'Y','2012-06-30','10:10:51','Y'),(10,'admin','admin',20,'Y','2012-07-05','08:19:12','Y'),(11,'admin','admin',22,'Y','2012-07-05','08:23:23','Y'),(12,'admin','admin',23,'Y','2012-07-09','20:28:37','Y'),(13,'admin','admin',24,'Y','2012-07-18','17:37:00','Y'),(14,'admin','admin',26,'Y','2012-07-18','17:46:48','Y'),(15,'admin','admin',26,'Y','2012-07-18','17:51:25','Y'),(16,'admin','admin',13,'Y','2012-07-18','17:57:27','Y'),(17,'admin','admin',29,'Y','2012-07-18','17:58:58','Y');
/*!40000 ALTER TABLE `notif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id_status` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `isi_s` varchar(175) NOT NULL,
  `tgl_s` date NOT NULL,
  `jam_s` time NOT NULL,
  `publis_s` enum('Y','N') NOT NULL DEFAULT 'Y',
  `ad` varchar(19) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'admin',' Ini  Status  Pertama.   ','2012-06-27','19:45:12','Y','20120627 19:45:12'),(2,'admin',' Ini  status  ke  dua.   ','2012-06-27','19:45:33','Y','20120627 19:45:33'),(3,'joko',' Ini  Status  Ke  Tiga.   ','2012-06-27','19:47:18','Y','20120627 19:47:18'),(4,'joko',' Ini  status  ke  empat.   ','2012-06-27','19:47:35','Y','20120627 19:47:35'),(5,'admin',' Ini  @sebutan  dan  #bahasan.   ','2012-06-27','19:50:40','Y','20120627 19:50:40'),(6,'admin',' @admin   ','2012-06-28','10:21:24','Y','20120628 10:21:24'),(7,'admin',' @admin   ','2012-06-28','10:21:53','Y','20120628 10:21:53'),(8,'admin',' @admin   ','2012-06-28','10:22:49','Y','20120628 10:22:49'),(9,'admin',' a   ','2012-06-29','19:17:02','Y','20120629 19:17:02'),(10,'admin',' adeas   ','2012-06-29','21:45:39','Y','20120629 21:45:39'),(11,'admin',' \nadeasaaaa   ','2012-06-29','21:54:30','Y','20120629 21:54:30'),(12,'admin',' a   ','2012-06-29','22:06:56','Y','20120629 22:06:56'),(13,'admin',' @admin   ','2012-06-29','22:07:16','Y','20120629 22:07:16'),(14,'joko',' @joko   ','2012-06-29','23:38:34','Y','20120629 23:38:34'),(15,'admins',' aaaa   ','2012-06-30','20:34:12','Y','20120630 20:34:12'),(16,'admin',' status   ','2012-07-01','20:34:03','Y','20120701 20:34:03'),(17,'admin',' @admin   ','2012-07-01','20:34:27','N','20120701 20:34:27'),(18,'admin',' test     ','2012-07-03','19:03:10','Y','20120703 19:03:10'),(19,'admin',' test   ','2012-07-03','19:14:43','N','20120703 19:14:43'),(20,'admin',' fgfgfgf   ','2012-07-04','09:26:11','Y','20120704 09:26:11'),(21,'admin',' test   ','2012-07-04','16:30:10','Y','20120704 16:30:10'),(22,'admin',' test   ','2012-07-04','16:30:10','Y','20120704 16:30:10'),(23,'admin',' waw   ','2012-07-06','17:31:22','Y','20120706 17:31:22'),(24,'admin',' Kreatip  min!  keep  up  da  good  work!!!   ','2012-07-14','21:26:36','Y','20120714 21:26:36'),(25,'joko',' test   ','2012-07-17','10:57:03','Y','20120717 10:57:03'),(26,'admin',' simple  tapi  menarik..   ','2012-07-18','17:44:30','Y','20120718 17:44:30'),(27,'admin',' apa  ini?   ','2012-07-18','17:51:42','Y','20120718 17:51:42'),(28,'admin',' @admin  (nyoba  mention)   ','2012-07-18','17:57:54','Y','20120718 17:57:54'),(29,'admin',' google.com   ','2012-07-18','17:58:26','Y','20120718 17:58:26'),(30,'admin',' test   ','2012-07-20','07:37:23','Y','20120720 07:37:23'),(31,'admin',' salam..   ','2012-07-20','21:53:27','Y','20120720 21:53:27'),(32,'admin',' dadsds   ','2012-07-21','16:01:10','Y','20120721 16:01:10');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tanggapan`
--

DROP TABLE IF EXISTS `tanggapan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tanggapan` (
  `id_tanggapan` int(5) NOT NULL AUTO_INCREMENT,
  `id_status` int(5) NOT NULL,
  `username_t` varchar(30) NOT NULL,
  `isi` varchar(175) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `publis` enum('Y','N') NOT NULL DEFAULT 'Y',
  `ad_t` varchar(19) NOT NULL,
  PRIMARY KEY (`id_tanggapan`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tanggapan`
--

LOCK TABLES `tanggapan` WRITE;
/*!40000 ALTER TABLE `tanggapan` DISABLE KEYS */;
INSERT INTO `tanggapan` VALUES (1,1,'joko',' ini  tanggapan  pertama.   ','2012-06-27','19:46:28','Y','20120627 19:46:28'),(2,3,'admin',' Ini  tanggapan  ke  dua.   ','2012-06-27','19:48:12','Y','20120627 19:48:12'),(3,5,'joko',' contoh  @admin  dan  #website   ','2012-06-27','19:51:36','Y','20120627 19:51:36'),(4,1,'admin',' a   ','2012-06-28','17:44:23','Y','20120628 17:44:23'),(5,11,'admin',' a   ','2012-06-29','21:59:04','Y','20120629 21:59:04'),(6,11,'admin',' a   ','2012-06-29','21:59:24','Y','20120629 21:59:24'),(7,12,'admin',' a   ','2012-06-29','22:07:02','Y','20120629 22:07:02'),(8,13,'admin',' a   ','2012-06-29','22:07:27','Y','20120629 22:07:27'),(9,4,'admin',' a   ','2012-06-30','10:04:28','Y','20120630 10:04:28'),(10,4,'admin',' a   ','2012-06-30','10:05:58','Y','20120630 10:05:58'),(11,4,'admin',' a   ','2012-06-30','10:07:28','Y','20120630 10:07:28'),(12,13,'admin',' a   ','2012-06-30','10:09:10','Y','20120630 10:09:10'),(13,13,'admin',' ad   ','2012-06-30','10:09:50','Y','20120630 10:09:50'),(14,13,'admin',' adddd   ','2012-06-30','10:10:51','Y','20120630 10:10:51'),(15,20,'admin',' sss   ','2012-07-05','08:19:12','Y','20120705 08:19:12'),(16,22,'admin',' asasa   ','2012-07-05','08:23:23','Y','20120705 08:23:23'),(17,23,'admin',' a   ','2012-07-09','20:28:37','Y','20120709 20:28:37'),(18,24,'admin',' oke     ','2012-07-18','17:37:00','Y','20120718 17:37:00'),(19,26,'admin',' h   ','2012-07-18','17:46:48','Y','20120718 17:46:48'),(20,26,'admin',' tes  komen   ','2012-07-18','17:51:25','Y','20120718 17:51:25'),(21,13,'admin',' @joko  aleeem   ','2012-07-18','17:57:27','Y','20120718 17:57:27'),(22,29,'admin',' om  gg   ','2012-07-18','17:58:58','Y','20120718 17:58:58');
/*!40000 ALTER TABLE `tanggapan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `biografi` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') COLLATE latin1_general_ci NOT NULL DEFAULT 'laki-laki',
  `aktifitas` varchar(300) COLLATE latin1_general_ci NOT NULL,
  `kelas` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kejuruan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','Somad','sal@gmail.com','08238923848','admin','N','c6dbf19af5d02597995226231c7570ab','1993-10-05','Jl. Jagaraksa no.24 RT.03/RW06 Tamansari, Bogor','','laki-laki','Sekolah-kerja-tidur','III','Multimedia'),('joko','9ba0009aa81e794e628a04b51eaf7d7f','Joko Sembung','joko@detik.com','0895485045958','user','N','ba78656770d839f101aa536451d5784e','1993-10-05','Jl. Jalaharupat No.24 Bogor Pusat','','laki-laki','','I','Teknik Komputer dan Jaringan');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-07-22  3:42:35
