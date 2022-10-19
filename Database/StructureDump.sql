-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: banco_empregos_jahu
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `candidatura`
--

DROP TABLE IF EXISTS `candidatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `candidatura` (
  `Id_Pessoa_Fisica` int NOT NULL AUTO_INCREMENT,
  `Id_Vaga` int NOT NULL,
  `Data_Candidatura` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id_Pessoa_Fisica`,`Id_Vaga`),
  KEY `Id_Vaga` (`Id_Vaga`),
  CONSTRAINT `candidatura_ibfk_1` FOREIGN KEY (`Id_Pessoa_Fisica`) REFERENCES `pessoa_fisica` (`Id`),
  CONSTRAINT `candidatura_ibfk_2` FOREIGN KEY (`Id_Vaga`) REFERENCES `vaga` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Id_Pessoa` int NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `CEP` char(8) NOT NULL,
  `Cidade` varchar(255) NOT NULL,
  `Bairro` varchar(255) NOT NULL,
  `Ativo` enum('S','N') NOT NULL DEFAULT 'S',
  `Data_Cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`),
  KEY `Id_Pessoa` (`Id_Pessoa`),
  CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`Id_Pessoa`) REFERENCES `pessoa` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `experiencia`
--

DROP TABLE IF EXISTS `experiencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `experiencia` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Id_Pessoa_Fisica` int NOT NULL,
  `Data_Saida` date DEFAULT NULL,
  `Empresa` varchar(255) NOT NULL,
  `Data_Inicio` date NOT NULL,
  `Cargo` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Pessoa_Fisica` (`Id_Pessoa_Fisica`),
  CONSTRAINT `experiencia_ibfk_1` FOREIGN KEY (`Id_Pessoa_Fisica`) REFERENCES `pessoa_fisica` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Senha` varchar(100) NOT NULL,
  `Ativo` enum('S','N') NOT NULL DEFAULT 'S',
  `Data_Cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pessoa_fisica`
--

DROP TABLE IF EXISTS `pessoa_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa_fisica` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Id_Pessoa` int NOT NULL,
  `CPF` char(11) NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Genero` varchar(255) DEFAULT NULL,
  `Nome` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Pessoa` (`Id_Pessoa`),
  CONSTRAINT `pessoa_fisica_ibfk_1` FOREIGN KEY (`Id_Pessoa`) REFERENCES `pessoa` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pessoa_juridica`
--

DROP TABLE IF EXISTS `pessoa_juridica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa_juridica` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Id_Pessoa` int NOT NULL,
  `Razao_Social` varchar(255) NOT NULL,
  `CNPJ` char(14) NOT NULL,
  `Nome_Fantasia` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Pessoa` (`Id_Pessoa`),
  CONSTRAINT `pessoa_juridica_ibfk_1` FOREIGN KEY (`Id_Pessoa`) REFERENCES `pessoa` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `qualificacao`
--

DROP TABLE IF EXISTS `qualificacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `qualificacao` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Id_Pessoa_Fisica` int NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Institucao` varchar(255) NOT NULL,
  `Curso` varchar(255) NOT NULL,
  `Data_Inicio` date DEFAULT NULL,
  `Data_Termino` date NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id_Pessoa_Fisica` (`Id_Pessoa_Fisica`),
  CONSTRAINT `qualificacao_ibfk_1` FOREIGN KEY (`Id_Pessoa_Fisica`) REFERENCES `pessoa_fisica` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `telefone`
--

DROP TABLE IF EXISTS `telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `telefone` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Id_Pessoa` int NOT NULL,
  `Numero` varchar(11) NOT NULL,
  `WhatsApp` enum('S','N') NOT NULL DEFAULT 'S',
  `Data_Cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Ativo` enum('S','N') NOT NULL DEFAULT 'S',
  PRIMARY KEY (`Id`),
  KEY `Id_Pessoa` (`Id_Pessoa`),
  CONSTRAINT `telefone_ibfk_1` FOREIGN KEY (`Id_Pessoa`) REFERENCES `pessoa` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `vaga`
--

DROP TABLE IF EXISTS `vaga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vaga` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Id_Pessoa` int NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `Salario` double DEFAULT NULL,
  `Data_Abertura` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Data_Fechamento` timestamp NULL DEFAULT NULL,
  `Ativo` enum('S','N') DEFAULT 'S',
  PRIMARY KEY (`Id`),
  KEY `Id_Pessoa` (`Id_Pessoa`),
  CONSTRAINT `vaga_ibfk_1` FOREIGN KEY (`Id_Pessoa`) REFERENCES `pessoa` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-19 12:09:57
