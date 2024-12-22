-- MySQL dump 10.13  Distrib 9.0.1, for macos14.7 (arm64)
--
-- Host: localhost    Database: cupu_travel
-- ------------------------------------------------------
-- Server version	9.0.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `destinasi`
--

DROP TABLE IF EXISTS `destinasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destinasi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_tempat` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `harga` text CHARACTER SET utf8mb4,
  `deskripsi` text CHARACTER SET utf8mb4,
  `lokasi` text CHARACTER SET utf8mb4,
  `telp` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fax` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `jam_buka` text CHARACTER SET utf8mb4,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thumbnail` text CHARACTER SET utf8mb4,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinasi`
--

LOCK TABLES `destinasi` WRITE;
/*!40000 ALTER TABLE `destinasi` DISABLE KEYS */;
INSERT INTO `destinasi` VALUES (14,'Gembira Loka','Rp 75.000 / orang','Kebun Binatang terbesar di Yogyakarta','Yogyakarta','+62 274 378610','+62 274 378611','info@gembiraloka.com','Senin-Minggu: 08.00-17.00','2024-12-20 14:49:14','2024-12-20 15:01:35','https://media.suara.com/pictures/336x188/2019/12/29/65983-kebun-binatang-gembira-loka-jogja-instagramatglzoojogja.jpg'),(15,'Candi Prambanan','Rp 50.000 / orang','Kompleks Candi Hindu terbesar di Indonesia\', \'Sleman, Yogyakarta','Sleman, Yogyakarta','+62 274 486511','+62 274 486512','info@prambanan.com','Senin-Minggu: 06.00-17.00','2024-12-20 14:49:14','2024-12-20 15:11:44','http://pasmarealty.com/administrator/assets/files/sliders/20230322113248_10_524_Slider.jpg'),(16,'Candi Borobudur','Rp 750.000 / orang','Candi Buddha terbesar di dunia','Magelang, Jawa Tengah','+62 293 788367','+62 293 788367','info@borobudurpark.com','Senin-Minggu: 06.00-17.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://cdn.brilio.net/video/2016/07/19/78888/226x150-6-kisah-di-balik-nama-nama-candi-di-indonesia-1607192.jpg'),(17,'Taman Pintar','Rp 40.000 / orang','Pusat edukasi dan rekreasi anak','Yogyakarta','+62 274 565692','+62 274 565693','humas@tamanpintar.com','Selasa-Minggu: 09.00-16.00, Tutup Senin','2024-12-20 14:39:07','2024-12-20 15:11:19','https://dolanyok.com/wp-content/uploads/2018/11/Taman-Pintar-Yogyakarta-bisniswisata-co-id.jpg'),(18,'Benteng Vredeburg','Rp 15.000 / orang','Museum sejarah perjuangan kemerdekaan','Yogyakarta','+62 274 562893','+62 274 562894','info@bentengvredeburg.com','Selasa-Minggu: 08.00-15.30, Tutup Senin','2024-12-20 14:39:07','2024-12-20 15:11:19','https://media-cdn.tripadvisor.com/media/photo-o/12/e9/74/4c/the-entrance-to-the-fort.jpg'),(19,'Museum Merapi','Rp 5.000 / orang','Museum dokumentasi letusan Gunung Merapi','Sleman, Yogyakarta','+62 274 895749','+62 274 895750','museum.merapi@gmail.com','Senin-Minggu: 08.00-16.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://asset-2.tstatic.net/tribunnewswiki/foto/bank/images/bangunan-museum-gunung-merapi.jpg'),(20,'Keraton Yogya','Rp 20.000 / orang','Istana resmi Kesultanan Yogyakarta','Yogyakarta','+62 274 373721','+62 274 374904','info@kratonjogja.com','Senin-Minggu: 09.00-14.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://cdn.idntimes.com/content-images/community/2020/06/keraton-jogja-099e3d8e50944e24104a5e63651075dd_600x400.jpg'),(21,'Taman Sari','Rp 5.000 / orang','Bekas taman kerajaan Keraton Yogyakarta','Yogyakarta','+62 274 419455','+62 274 419456','tamansari.jogja@gmail.com','Senin-Minggu: 09.00-15.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://i0.wp.com/thetravelauthor.com/wp-content/uploads/2021/08/TamanSariWaterPalace.jpg?resize=600,450&ssl=1'),(22,'Monjali','Rp 10.000 / orang','Museum Monumen Jogja Kembali','Yogyakarta','+62 274 287312','+62 274 287313','monjali.museum@gmail.com','Selasa-Minggu: 08.00-16.00, Tutup Senin','2024-12-20 14:39:07','2024-12-20 15:11:19','https://i2.wp.com/yogyakarta-tours.com/wp-content/uploads/2020/03/Monjali-source-jogjaseni.jpg?w=1080&ssl=1'),(23,'Obelix Suraloka Zoo','Rp 30.000 / orang','Kebun binatang dengan berbagai satwa','Sleman, Yogyakarta','+62 274 895749','+62 274 895750','info@suraloka.com','Senin-Minggu: 09.00-17.00','2024-12-20 14:39:07','2024-12-20 15:14:02','https://cdn.wisata.app/diary/541c51fc-07bb-43e3-82c7-d18349cfeef5_xs.jpg'),(24,'Taman Kaliurang','Rp 25.000 / orang','Objek wisata alam di lereng Merapi','Sleman, Yogyakarta','+62 274 895123','+62 274 895124','tamankaliurang@gmail.com','Senin-Minggu: 07.00-18.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://i0.wp.com/www.itrip.id/wp-content/uploads/2022/01/Alamat-Taman-Wisata-Kaliurang.jpg?resize=708,425&ssl=1'),(25,'Heha Sky View','Rp 40.000 / orang','Destinasi wisata dengan pemandangan kota','Sleman, Yogyakarta','+62 812-3456-7890','+62 274 895125','info@hehaskyview.com','Senin-Minggu: 10.00-22.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://www.javatravel.net/wp-content/uploads/2022/10/Shutterstock-Sejarah-HeHa-Sky-View.webp'),(26,'Bhumi Merapi','Rp 30.000 / orang','Tempat wisata dengan view Gunung Merapi','Sleman, Yogyakarta','+62 813-4567-8901','+62 274 895126','info@bhumimerapi.com','Senin-Minggu: 06.00-18.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://www.yogyes.com/id/yogyakarta-tourism-object/nature-and-outdoor/agrowisata-bhumi-merapi/2.jpg'),(27,'Hutan Pinus','Rp 5.000 / orang','Hutan pinus dengan pemandangan indah','Yogyakarta','+62 274 895127','+62 274 895128','hutanpinus.jogja@gmail.com','Senin-Minggu: 06.00-18.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://assets.kompasiana.com/items/album/2024/05/26/hutan-pinus-mangunan-169-665300f3c925c460a009e1d2.jpeg?t=o&v=770'),(28,'Puncak Becici','Rp 25.000 / orang','Lokasi dengan panorama alam menakjubkan','Yogyakarta','+62 274 895129','+62 274 895130','puncakbecici@gmail.com','Senin-Minggu: 06.00-18.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://awsimages.detik.net.id/community/media/visual/2022/05/10/puncak-becici-2_169.jpeg?w=700&q=90'),(29,'Tebing Breksi','Rp 20.000 / orang','Objek wisata tebing dengan relief batu','Sleman, Yogyakarta','+62 274 895131','+62 274 895132','tebingbreksi@gmail.com','Senin-Minggu: 07.00-18.00','2024-12-20 14:39:07','2024-12-20 15:11:19','https://dolanyok.com/wp-content/uploads/2019/09/nafiza_olshop_solo_71298475_204914633841961_8270583849201258249_n.jpg'),(30,'Bukit Paralayang','Rp 20.000 / orang','Lokasi olahraga paralayang','Yogyakarta','+62 274 895133','+62 274 895134','bukitparalayang@gmail.com','Senin-Minggu: 06.00-18.00','2024-12-20 14:39:07','2024-12-20 15:14:42','https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2022/08/watu-gupit-by-@asaljepret39-696x463.jpg');
/*!40000 ALTER TABLE `destinasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `destinasi_gambar`
--

DROP TABLE IF EXISTS `destinasi_gambar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `destinasi_gambar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `destinasi_id` int DEFAULT NULL,
  `gambar_url` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `destinasi_id` (`destinasi_id`),
  CONSTRAINT `destinasi_gambar_ibfk_1` FOREIGN KEY (`destinasi_id`) REFERENCES `destinasi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinasi_gambar`
--

LOCK TABLES `destinasi_gambar` WRITE;
/*!40000 ALTER TABLE `destinasi_gambar` DISABLE KEYS */;
INSERT INTO `destinasi_gambar` VALUES (1,16,'https://allthatsinteresting.com/wordpress/wp-content/uploads/2020/04/candi-borobudur.jpg','2024-12-20 14:41:49'),(2,16,'https://lp-cms-production.imgix.net/2019-06/d7ecf43d5c78652daaab5e0256d1bc50-prambanan-temple.jpg?fit=crop&ar=1:1&w=1200&auto=format&q=75','2024-12-20 14:41:49'),(3,16,'https://lp-cms-production.imgix.net/2019-06/f4024c571e5e09ce5e4049bc181500b1-borobudur-temple.jpg?w=1920&h=640&fit=crop&crop=faces,edges&auto=format&q=75','2024-12-20 14:41:49'),(4,17,'https://asset.kompas.com/crops/po9ORxXE7qWTPRdZ4GAKjFuzSqQ=/0x0:3872x2581/1200x800/data/photo/2022/06/21/62b12111655e6.jpg','2024-12-20 14:41:55'),(5,17,'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01j1harh7mqkcszj8r3fkwrdkk.jpg','2024-12-20 14:41:55'),(6,18,'https://alodiatour.com/wp-content/uploads/2018/11/lokasi-museum-benteng-vredeburg.jpg','2024-12-20 14:41:58'),(7,18,'https://balistarisland.com/wp-content/uploads/2016/09/fortvredeburgmuseum3-800x600.jpg','2024-12-20 14:41:58'),(8,19,'https://cdn.forevervacation.com/uploads/attraction/merapi-volcano-museum-2852.jpg?tr=w-1235,h-354','2024-12-20 14:42:14'),(9,19,'https://lh5.googleusercontent.com/p/AF1QipOssfk1ezNOZ8ckfiHFd8gb1cj710KJ7CI6bSLx=w1080-k-no','2024-12-20 14:42:14'),(10,20,'https://salsawisata.com/wp-content/uploads/2021/08/Gapura-Gladag-Pangurakan-Keraton-Jogja.jpg','2024-12-20 14:42:17'),(11,20,'https://asset.kompas.com/crops/FJj2g3cYzOXaqeOQ9SmO64yDt5Y=/59x0:648x393/750x500/data/photo/2020/12/09/5fd0242f25315.jpg','2024-12-20 14:42:17'),(12,21,'https://i0.wp.com/thetravelauthor.com/wp-content/uploads/2021/08/TamanSariJogja.jpg?resize=600,800&ssl=1','2024-12-20 14:42:21'),(13,21,'https://www.yogyes.com/id/yogyakarta-tourism-object/other/tamansari/1.jpg','2024-12-20 14:42:21'),(14,22,'https://i2.wp.com/yogyakarta-tours.com/wp-content/uploads/2020/03/Monjali-source-jogjaseni.jpg?w=1080&ssl=1','2024-12-20 14:42:25'),(15,22,'https://monjali-jogja.com/wp-content/uploads/2021/10/Monjali_07-1024x461.jpg','2024-12-20 14:42:25'),(16,23,'https://salsawisata.com/wp-content/uploads/2022/11/wahana-di-Suraloka-Zoo.jpg','2024-12-20 14:42:28'),(17,23,'https://travelspromo.com/wp-content/uploads/2022/05/Anak-anak-bermain-di-wahana-permainan-Suraloka-Zoo.jpg','2024-12-20 14:42:28'),(18,24,'https://o-cdn-cas.sirclocdn.com/parenting/images/taman-wisata-kaliurang-2.width-800.format-webp.webp','2024-12-20 14:42:30'),(19,24,'https://cdn0-production-images-kly.akamaized.net/riCWgVsWbr7cfM0fWVuu4frcm1g=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2753900/original/097547600_1552887652-iStock-1079231486.jpg','2024-12-20 14:42:30'),(20,30,'https://www.wsrentaljogja.com/wp-content/uploads/2018/11/@ipxcex.jpg','2024-12-20 14:42:40'),(21,30,'https://homestaydijogja.net/wp-content/uploads/2024/02/Bukit-Paralayang-Watugupit-2.jpg','2024-12-20 14:42:40'),(22,14,'https://travelspromo.com/wp-content/uploads/2019/03/ATV-glzoojogja-e1553493212483.jpg','2024-12-20 14:49:25'),(23,14,'https://www.goersapp.com/blog/wp-content/uploads/2024/08/Hewan-di-Gembira-Loka-Zoo.webp','2024-12-20 14:49:25'),(24,14,'https://www.yogyes.com/id/yogyakarta-tourism-object/other/gembira-loka/1.jpg','2024-12-20 14:49:25'),(25,15,'https://lp-cms-production.imgix.net/2019-06/77969c9a8e4e8aa83a5abbf46ad86f1a-borobudur-temple.jpg?fit=crop&ar=1:1&w=1200&auto=format&q=75','2024-12-20 14:49:30'),(26,15,'https://media.gettyimages.com/id/120220241/photo/prambanan.jpg?s=612x612&w=0&k=20&c=jpTQ_CdlFvI1jCk86zz1UprpOrK_XJDkXl2yhNSaQWA=','2024-12-20 14:49:30'),(27,15,'https://lp-cms-production.imgix.net/2019-06/5e667676eff4869feca15dbc8da5e099-sono-budoyo-museum.jpg?fit=crop&ar=1:1&w=1200&auto=format&q=75','2024-12-20 14:49:30');
/*!40000 ALTER TABLE `destinasi_gambar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaksi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `ticket_count` int NOT NULL,
  `selected_date` date NOT NULL,
  `total_payment` decimal(10,2) NOT NULL,
  `payment_method` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `destinasi_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `destinasi_id` (`destinasi_id`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`destinasi_id`) REFERENCES `destinasi` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,'afif','afif@gmail.com','088',3,'2024-12-11',225000.00,'Mandiri',18,'2024-12-20 16:26:30'),(2,'afif','afif@gmail.com','888',4,'2024-12-09',300000.00,'Mandiri',18,'2024-12-20 16:27:01'),(3,'afif','afif@gmail.com','88',8,'2024-12-16',600000.00,'',18,'2024-12-20 16:28:42'),(4,'2','2@gmail.com','3',3,'2024-12-16',225000.00,'',14,'2024-12-20 16:29:44'),(5,'1','1@f.com','1',1,'2024-12-15',75000.00,'GoPay',14,'2024-12-20 16:35:09'),(6,'rahel','rahel@gmail.com','888',12,'2024-12-18',900000.00,'BCA',15,'2024-12-21 03:42:21'),(7,'1','12@g.com','1',1,'2024-12-09',75000.00,'BCA',14,'2024-12-21 03:49:23'),(8,'1','12@g.com','1',1,'2024-12-09',75000.00,'BCA',14,'2024-12-21 03:50:36'),(9,'1','12@g.com','1',1,'2024-12-09',75000.00,'BCA',14,'2024-12-21 03:50:55'),(10,'1','12@g.com','1',1,'2024-12-09',75000.00,'BCA',14,'2024-12-21 03:51:04'),(11,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:52:39'),(12,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:52:52'),(13,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:52:56'),(14,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:53:04'),(15,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:53:20'),(16,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:53:30'),(17,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:53:41'),(18,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:55:17'),(19,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:57:51'),(20,'1','12@g.com','1',1,'2024-12-09',75000.00,'DANA',14,'2024-12-21 03:59:03'),(21,'rahel','rahel@gmail.com','08973738287387',3,'2024-12-02',225000.00,'DANA',14,'2024-12-21 04:07:04'),(22,'rahel','rahel@gmail.com','0873y847y2947928',3,'2024-12-03',225000.00,'DANA',14,'2024-12-21 04:08:31'),(23,'gigi','gigi@gmail.com','734735726526',3,'2024-12-09',225000.00,'DANA',14,'2024-12-21 04:46:00');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'test@gmail.com','test','98','test'),(2,'lagi@gmail.com','lagi',NULL,NULL),(3,'gigi@gmail.com','gigi','0876736374784','rahel');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cupu_travel'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-21 18:43:58
