-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema DitLuloServices
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema DitLuloServices
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `DitLuloServices` DEFAULT CHARACTER SET utf8 ;
USE `DitLuloServices` ;

-- -----------------------------------------------------
-- Table `DitLuloServices`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DitLuloServices`.`Usuarios` (
  `Cedula` VARCHAR(20) NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `Correo` VARCHAR(45) NOT NULL,
  `Direccion` VARCHAR(45) NOT NULL,
  `Clave` VARCHAR(20) NOT NULL,
  `Numero` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Cedula`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DitLuloServices`.`Servicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DitLuloServices`.`Servicios` (
  `Id` VARCHAR(20) NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  `Descripcion` VARCHAR(100) NULL,
  `Tipo` VARCHAR(30) NULL,
  `Precio` INT NULL,
  `CedulaUsuario` VARCHAR(20) NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DitLuloServices`.`Solicitudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DitLuloServices`.`Solicitudes` (
  `Id` VARCHAR(20) NOT NULL,
  `Fecha` DATE NULL,
  `Precio` INT NULL,
  `Observacion` VARCHAR(200) NULL,
  `CedulaUsuario` VARCHAR(20) NULL,
  `IdServicios` VARCHAR(20) NULL,
  `Estado` VARCHAR(45) NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
