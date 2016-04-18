-- MySQL Script generated by MySQL Workbench
-- 04/16/16 15:11:51
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema logsys
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema logsys
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `logsys` DEFAULT CHARACTER SET utf8 ;
USE `logsys` ;

-- -----------------------------------------------------
-- Table `logsys`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `logsys`.`usuario` (
  `us_cod` INT NOT NULL AUTO_INCREMENT,
  `us_nome` VARCHAR(100) NULL,
  `us_email` VARCHAR(100) NULL,
  `us_sexo` VARCHAR(1) NULL,
  `us_data` DATE NOT NULL,
  `us_hora` TIME NOT NULL,
  `us_ip` VARCHAR(50) NOT NULL,
  `usuariocol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`us_cod`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `logsys`.`senha`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `logsys`.`senha` (
  `us_senha` VARCHAR(50) NOT NULL,
  `usuario_us_cod` INT NOT NULL,
  INDEX `fk_senha_usuario_idx` (`usuario_us_cod` ASC),
  PRIMARY KEY (`usuario_us_cod`),
  CONSTRAINT `fk_senha_usuario`
    FOREIGN KEY (`usuario_us_cod`)
    REFERENCES `logsys`.`usuario` (`us_cod`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;