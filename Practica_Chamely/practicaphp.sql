-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: practicaphp
-- ------------------------------------------------------
-- Server version	8.0.31

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
-- Table structure for table `categoria_vh`
--

DROP TABLE IF EXISTS `categoria_vh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria_vh` (
  `id_catg` int NOT NULL AUTO_INCREMENT,
  `nomb_catg` varchar(50) NOT NULL,
  `desc_catg` text,
  `tipo_combustible` varchar(100) NOT NULL,
  PRIMARY KEY (`id_catg`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_vh`
--

LOCK TABLES `categoria_vh` WRITE;
/*!40000 ALTER TABLE `categoria_vh` DISABLE KEYS */;
INSERT INTO `categoria_vh` VALUES (1,'Sedán','Vehículos de tamaño mediano con espacio para pasajeros y maletero amplio.','Gasolina'),(2,'Vehículo eléctrico','Vehículos de tamaño mediano con espacio para pasajeros y maletero amplio.','Gasolina'),(3,'SUV','Vehículos utilitarios deportivos, ideales para terrenos irregulares y con capacidad para carga.','Diesel'),(4,'Hatchback','Vehículos compactos de dos volúmenes, con portón trasero para acceder al maletero.','Gasolina'),(5,'Furgoneta','Vehículos de carga con capacidad para transportar mercancías voluminosas.','Gasolina');
/*!40000 ALTER TABLE `categoria_vh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca_vh`
--

DROP TABLE IF EXISTS `marca_vh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marca_vh` (
  `id_marca` int NOT NULL AUTO_INCREMENT,
  `nom_marca` varchar(40) NOT NULL,
  `estado_marca` varchar(10) NOT NULL DEFAULT 'ACTIVO',
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca_vh`
--

LOCK TABLES `marca_vh` WRITE;
/*!40000 ALTER TABLE `marca_vh` DISABLE KEYS */;
INSERT INTO `marca_vh` VALUES (1,'Toyota','ACTIVO'),(2,'Honda','ACTIVO'),(3,'Ford','INACTIVO'),(4,'Volkswagen','ACTIVO'),(5,'Chevrolet','ACTIVO');
/*!40000 ALTER TABLE `marca_vh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehiculo` (
  `id_vh` int NOT NULL AUTO_INCREMENT,
  `matricula_vh` varchar(15) NOT NULL,
  `año_salida_vh` date NOT NULL,
  `distintivo_vh` text,
  `id_catg` int NOT NULL,
  `estado_vh` varchar(10) NOT NULL DEFAULT 'ACTIVO',
  `id_marca` int NOT NULL,
  PRIMARY KEY (`id_vh`),
  KEY `id_catg` (`id_catg`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`id_catg`) REFERENCES `categoria_vh` (`id_catg`),
  CONSTRAINT `vehiculo_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca_vh` (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculo`
--

LOCK TABLES `vehiculo` WRITE;
/*!40000 ALTER TABLE `vehiculo` DISABLE KEYS */;
INSERT INTO `vehiculo` VALUES (1,'ABC123','2023-01-01','Sedán',4,'ACTIVO',1),(2,'DEF456','2020-05-15',NULL,2,'INACTIVO',2),(3,'GHI789','2022-09-30','Familiar',3,'ACTIVO',3),(4,'ESPECIAL001','2024-04-26','Deportivo',4,'ACTIVO',4),(5,'JKL321','2021-12-10','Utilitario',5,'ACTIVO',5),(14,'qwer689','2024-04-26','',1,'Activo',1);
/*!40000 ALTER TABLE `vehiculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-26 15:08:42
