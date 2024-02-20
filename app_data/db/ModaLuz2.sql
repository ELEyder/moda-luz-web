-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema modaluz
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema modaluz
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `modaluz` DEFAULT CHARACTER SET utf8mb4 ;
USE `modaluz` ;

-- -----------------------------------------------------
-- Table `modaluz`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modaluz`.`categoria` (
  `IdCategoria` INT(5) NOT NULL,
  `NombreCategoria` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`IdCategoria`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;

INSERT INTO `categoria` (`IdCategoria`, `NombreCategoria`) VALUES
(1, 'Polo'),
(2, 'Polera'),
(3, 'Vestido');


-- -----------------------------------------------------
-- Table `modaluz`.`sexo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modaluz`.`sexo` (
  `IdSexo` INT(2) NOT NULL,
  `NombreSexo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdSexo`))
ENGINE = InnoDB;

INSERT INTO `sexo` (`IdSexo`, `NombreSexo`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Unisex');

-- -----------------------------------------------------
-- Table `modaluz`.`prenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modaluz`.`prenda` (
  `IdPrenda` INT(25) NOT NULL,
  `NombrePrenda` VARCHAR(50) NOT NULL,
  `Precio` DOUBLE(10,2) NOT NULL,
  `Descripcion` VARCHAR(250) NULL DEFAULT 'undefined',
  `IdSexo` INT(2) NOT NULL,
  `IdCategoria` INT(5) NOT NULL,
  `Imagen` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`IdPrenda`),
  INDEX `IdSexo_idx` (`IdSexo` ASC),
  INDEX `IdCategoria_idx` (`IdCategoria` ASC),
  CONSTRAINT `IdSexo`
    FOREIGN KEY (`IdSexo`)
    REFERENCES `modaluz`.`sexo` (`IdSexo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `IdCategoria`
    FOREIGN KEY (`IdCategoria`)
    REFERENCES `modaluz`.`categoria` (`IdCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 17
DEFAULT CHARACTER SET = utf8mb4;

INSERT INTO `prenda` (`IdPrenda`, `NombrePrenda`, `Precio`, `Descripcion`, `IdSexo`, `IdCategoria`, `Imagen` ) VALUES
(1, 'Polo Overside', 39.50, 'undefined',3,1,'polo-overside'),
(2, 'Polo One Piece', 39.50, 'undefined',3,1,'polo-one-piece'),
(3, 'Polo Monkey D. Luffy', 39.50, 'undefined',3,1,'polo-monkey-d-luffy'),
(4, 'Polo Roronoa Zoro', 39.50, 'undefined',3,1,'polo-roronoa-zoro'),
(5, 'Polo Nami', 39.50, 'undefined',3,1,'polo-nami'),
(6, 'Polo Mob Psycho', 39.50, 'undefined',3,1,'polo-mob-psycho'),
(7, 'Polera Con Capucha', 49.50, 'undefined',3,2,'polera-con-capucha'),
(8, 'Vestido Con Patrones', 99.50, 'undefined',3,3,'vestido-con-patrones');

-- -----------------------------------------------------
-- Table `modaluz`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modaluz`.`rol` (
  `IdRol` INT(3) NOT NULL,
  `NombreRol` VARCHAR(45) NOT NULL DEFAULT 'usuario',
  PRIMARY KEY (`IdRol`))
ENGINE = InnoDB;

INSERT INTO `rol` (`IdRol`, `NombreRol`) VALUES
(1, 'admin'),
(2, 'user')
-- -----------------------------------------------------
-- Table `modaluz`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modaluz`.`usuario` (
  `IdUsuario` INT(10) NOT NULL AUTO_INCREMENT,
  `IdRol` INT(3) NOT NULL DEFAULT 2,
  `Nombres` VARCHAR(20) NOT NULL,
  `Apellidos` VARCHAR(20) NOT NULL,
  `Correo` VARCHAR(50) NOT NULL,
  `Contrasena` VARCHAR(300) NOT NULL,
  `Telefono` INT(50) NULL,
  PRIMARY KEY (`IdUsuario`),
  INDEX `IdRol_idx` (`IdRol` ASC),
  UNIQUE INDEX `IdUsuario_UNIQUE` (`IdUsuario` ASC),
  UNIQUE INDEX `Correo_UNIQUE` (`Correo` ASC),
  CONSTRAINT `IdRol`
    FOREIGN KEY (`IdRol`)
    REFERENCES `modaluz`.`rol` (`IdRol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;

-- -----------------------------------------------------
-- Table `modaluz`.`carrito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modaluz`.`carrito` (
  `IdCarrito` INT(25) NOT NULL,
  `IdUsuario` INT(25) NOT NULL,
  PRIMARY KEY (`IdCarrito`),
  UNIQUE INDEX `IdCarrito_UNIQUE` (`IdCarrito` ASC),
  INDEX `IdUsuario_idx` (`IdUsuario` ASC),
  CONSTRAINT `IdUsuario`
    FOREIGN KEY (`IdUsuario`)
    REFERENCES `modaluz`.`usuario` (`IdUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `modaluz`.`detallecarrito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `modaluz`.`detallecarrito` (
  `IdDetalle` INT(25) NOT NULL,
  `IdCarrito` INT(25) NOT NULL,
  `IdPrenda` INT(25) NOT NULL,
  PRIMARY KEY (`IdDetalle`),
  INDEX `IdCarrito_idx` (`IdCarrito` ASC),
  INDEX `IdPrenda_idx` (`IdPrenda` ASC),
  CONSTRAINT `IdCarrito`
    FOREIGN KEY (`IdCarrito`)
    REFERENCES `modaluz`.`carrito` (`IdCarrito`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `IdPrenda`
    FOREIGN KEY (`IdPrenda`)
    REFERENCES `modaluz`.`prenda` (`IdPrenda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
