# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                         127.0.0.1
# Database:                     nacho
# Server version:               5.6.12-log
# Server OS:                    Win64
# Target compatibility:         ANSI SQL
# HeidiSQL version:             4.0
# Date/time:                    20/04/2015 12:45:36 p.m.
# --------------------------------------------------------

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ANSI,NO_BACKSLASH_ESCAPES';*/
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;*/


#
# Database structure for database 'electroweb'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ "electroweb" /*!40100 DEFAULT CHARACTER SET utf8 */;

USE "Electroweb";


#
# Table structure for table 'categorias'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "categorias" (
  "ID" int(11) NOT NULL AUTO_INCREMENT,
  "Nombre" varchar(255) NOT NULL,
  PRIMARY KEY ("ID")
) AUTO_INCREMENT=6;



#
# Dumping data for table 'categorias'
#

LOCK TABLES "categorias" WRITE;
/*!40000 ALTER TABLE "categorias" DISABLE KEYS;*/
REPLACE INTO "categorias" ("ID", "Nombre") VALUES
	(1,'Audio');
REPLACE INTO "categorias" ("ID", "Nombre") VALUES
	(2,'Cocina');
REPLACE INTO "categorias" ("ID", "Nombre") VALUES
	(3,'Jardineria');
REPLACE INTO "categorias" ("ID", "Nombre") VALUES
	(4,'Informatica');
REPLACE INTO "categorias" ("ID", "Nombre") VALUES
	(5,'Oficina');
/*!40000 ALTER TABLE "categorias" ENABLE KEYS;*/
UNLOCK TABLES;


#
# Table structure for table 'productos'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ "productos" (
  "ID" int(11) NOT NULL DEFAULT '0',
  "Nombre" varchar(255) NOT NULL,
  "Origen" varchar(255) DEFAULT NULL,
  "Descripción" varchar(5000) NOT NULL,
  PRIMARY KEY ("ID"),
  KEY "Origen" ("Origen"),
  KEY "Origen_2" ("Origen")
);



#
# Dumping data for table 'productos'
#

LOCK TABLES "productos" WRITE;
/*!40000 ALTER TABLE "productos" DISABLE KEYS;*/
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(1,'Auriculares','India','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(2,'Radio','USA','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(3,'Parlantes','USA','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(4,'Heladera','India','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(5,'Desayunador','India','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(6,'Motosierra','USA','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(7,'Bordeadora','China','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(8,'Cortacésped','China','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(9,'Desmalezadora','USA','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(10,'Notebooks','China','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(11,'Netbooks','China','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(12,'Impresoras','India','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(13,'Mesa','China','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(14,'Mesa teléfono','USA','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(15,'Puff','China','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(16,'Sillón','India','');
REPLACE INTO "productos" ("ID", "Nombre", "Origen", "Descripción") VALUES
	(17,'Sofá','USA','');
/*!40000 ALTER TABLE "productos" ENABLE KEYS;*/
UNLOCK TABLES;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE;*/
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;*/
