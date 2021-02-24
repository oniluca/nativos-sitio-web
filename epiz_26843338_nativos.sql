/*
SQLyog Ultimate v8.61 
MySQL - 5.6.15-log : Database - epiz_26843338_nativos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`epiz_26843338_nativos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `epiz_26843338_nativos`;

/*Table structure for table `carrusel` */

DROP TABLE IF EXISTS `carrusel`;

CREATE TABLE `carrusel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `carrusel` */

insert  into `carrusel`(`id`,`ruta`) values (1,'imagenes/carousel/1.jpg'),(2,'imagenes/carousel/2.jpg'),(3,'imagenes/carousel/3.jpg'),(4,'imagenes/carousel/4.jpg');

/*Table structure for table `fechas` */

DROP TABLE IF EXISTS `fechas`;

CREATE TABLE `fechas` (
  `id` int(2) NOT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(35) DEFAULT NULL,
  `descripcion` varchar(140) DEFAULT NULL,
  `imagen` varbinary(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `fechas` */

insert  into `fechas`(`id`,`fecha`,`titulo`,`descripcion`,`imagen`) values (1,'2020-03-23','COVID - 19','Devido a los hechos que acontecen a nivel mundial en relacion a la pandemia de covid - 19, no existen eventos proximos programados','imagenes/fechas/covid2.jpg');

/*Table structure for table `galeria` */

DROP TABLE IF EXISTS `galeria`;

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta_imagen` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `galeria` */

insert  into `galeria`(`id`,`ruta_imagen`) values (1,'imagenes/fotos/nativos_en_vivo_1.jpg'),(2,'imagenes/fotos/nativos_en_vivo_2.jpg'),(3,'imagenes/fotos/nativos_en_vivo_3.jpg'),(4,'imagenes/fotos/nativos_en_vivo_4.jpg'),(5,'imagenes/fotos/nativos_en_vivo_5.jpg'),(6,'imagenes/fotos/nativos_en_vivo_6.jpg'),(7,'imagenes/fotos/nativos_en_vivo_7.jpg'),(8,'imagenes/fotos/nativos_en_vivo_8.jpg'),(9,'imagenes/fotos/nativos_en_vivo_9.jpg'),(10,'imagenes/fotos/nativos_en_vivo_10.jpg'),(11,'imagenes/fotos/nativos_en_vivo_11.jpg'),(12,'imagenes/fotos/nativos_en_vivo_12.jpg'),(13,'imagenes/fotos/nativos_en_vivo_13.jpg'),(14,'imagenes/fotos/nativos_en_vivo_14.jpg'),(15,'imagenes/fotos/nativos_en_vivo_15.jpg'),(16,'imagenes/fotos/nativos_en_vivo_16.jpg'),(17,'imagenes/fotos/nativos_en_vivo_17.jpg'),(18,'imagenes/fotos/nativos_en_vivo_18.jpg'),(19,'imagenes/fotos/nativos_en_vivo_19.jpg'),(20,'imagenes/fotos/nativos_en_vivo_20.jpg'),(21,'imagenes/fotos/nativos_en_vivo_21.jpg');

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(35) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `imagen` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`fecha`,`titulo`,`descripcion`,`imagen`) values (1,'2020-08-30','TIENDAS DIGITALES','a partir de Agosto nos encontramos en todas las plataformas digitales como Spotify, Amazon Music, Deeezer, Itunes, Claro Music, Youtube Music, Facebook, Instagram y demas','imagenes/noticias/1.jpg'),(2,'2020-09-01','YOUTUBE','En nuestro canal de youtube podras encontrar parte de nuestro material, clips de presentaciones en vivo y mucho mas','imagenes/noticias/2.jpg'),(3,'2020-09-10','REDES SOCIALES','Segionos en nuesras redes sociales y enterate de todas las novedades al instante, encontranos en Facebook, Instagram y Youtube','imagenes/noticias/3.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
