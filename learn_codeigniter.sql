/*
SQLyog Community v12.5.0 (32 bit)
MySQL - 10.1.31-MariaDB : Database - learn_codeigniter
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`learn_codeigniter` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `learn_codeigniter`;

/*Table structure for table `tbl_barang` */

DROP TABLE IF EXISTS `tbl_barang`;

CREATE TABLE `tbl_barang` (
  `kd_barang` int(11) NOT NULL AUTO_INCREMENT,
  `kd_jns` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `harga` int(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  PRIMARY KEY (`kd_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_barang` */

insert  into `tbl_barang`(`kd_barang`,`kd_jns`,`nama`,`harga`,`jumlah`,`tgl_masuk`) values 
(1,1,'chitose',20000,100,'2021-06-08'),
(2,2,'cocacola',3000,145,'2021-06-07'),
(5,1,'sirup',17000,20,'2021-06-10'),
(11,5,'teh gelas',1000,3,'2021-06-03'),
(12,7,'laptop asus',5000000,60,'2021-06-02');

/*Table structure for table `tbl_jnsbarang` */

DROP TABLE IF EXISTS `tbl_jnsbarang`;

CREATE TABLE `tbl_jnsbarang` (
  `kd_jns` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_jnsbarang` */

insert  into `tbl_jnsbarang`(`kd_jns`,`nama`) values 
(1,'makanan fast food'),
(5,'minuman'),
(7,'elektronik');

/*Table structure for table `tbl_pembelian` */

DROP TABLE IF EXISTS `tbl_pembelian`;

CREATE TABLE `tbl_pembelian` (
  `kd_pembelian` int(11) NOT NULL AUTO_INCREMENT,
  `struk` varchar(30) NOT NULL,
  `kd_barang` int(11) NOT NULL,
  `jml_beli` int(11) NOT NULL,
  `tgl_beli` date NOT NULL,
  PRIMARY KEY (`kd_pembelian`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_pembelian` */

insert  into `tbl_pembelian`(`kd_pembelian`,`struk`,`kd_barang`,`jml_beli`,`tgl_beli`) values 
(2,'a124',2,5,'2021-06-10'),
(5,'re3',13,53,'2021-06-10'),
(6,'023123',2,3,'2021-06-12'),
(8,'8456',12,4,'2021-06-05'),
(9,'10',5,2,'2021-06-29'),
(11,'10',11,2,'2021-06-30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
