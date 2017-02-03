SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `id390351_reservacion` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `id390351_reservacion` ;

-- -----------------------------------------------------
-- Table `reservacion`.`c_actividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_actividad` (
  `id_actividad` INT(11) NOT NULL AUTO_INCREMENT ,
  `cmpnombreActividad` VARCHAR(25) NULL DEFAULT NULL ,
  `cmptarifa` DOUBLE NULL DEFAULT NULL ,
  `cmpdetalle` VARCHAR(100) NULL DEFAULT NULL ,
  `cmpimg` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_actividad`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `reservacion`.`c_tipousuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_tipousuario` (
  `id_tipoUsuario` INT NOT NULL ,
  `cmptipoUsuario` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_tipoUsuario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `reservacion`.`c_usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT ,
  `cmpcorreo` VARCHAR(30) NULL DEFAULT NULL ,
  `cmpcontrasena` VARCHAR(15) NULL DEFAULT NULL ,
  `cmpnombre` VARCHAR(25) NULL DEFAULT NULL ,
  `cmpapellidoPaterno` VARCHAR(25) NULL DEFAULT NULL ,
  `cmpapellidoMaterno` VARCHAR(25) NULL DEFAULT NULL ,
  `id_tipoUsuario` INT NOT NULL ,
  PRIMARY KEY (`id_usuario`) ,
  INDEX `c_usuario_fki01` (`id_tipoUsuario` ASC) ,
  CONSTRAINT `c_usuario_fk01`
    FOREIGN KEY (`id_tipoUsuario` )
    REFERENCES `id390351_reservacion`.`c_tipousuario` (`id_tipoUsuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `reservacion`.`c_estadoreservacion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_estadoreservacion` (
  `id_estadoReservacion` INT(11) NOT NULL ,
  `estado` VARCHAR(12) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_estadoReservacion`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `reservacion`.`p_reservacion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`p_reservacion` (
  `id_reservacion` VARCHAR(45) NOT NULL ,
  `cmpfechaEntrada` DATE NULL DEFAULT NULL ,
  `cmpfechaSalida` DATE NULL DEFAULT NULL ,
  `cmpnumeroDeActividades` INT(11) NULL DEFAULT NULL ,
  `cmpcantidadPersonas` INT(11) NULL DEFAULT NULL ,
  `cmpcomprobantePago` VARCHAR(45) NULL DEFAULT NULL ,
  `id_usuario` INT(11) NOT NULL ,
  `id_estadoReservacion` INT(11) NOT NULL ,
  PRIMARY KEY (`id_reservacion`) ,
  INDEX `p_reservacion_fki01` (`id_usuario` ASC) ,
  INDEX `p_reservacion_fki02` (`id_estadoReservacion` ASC) ,
  CONSTRAINT `p_reservacion_fk01`
    FOREIGN KEY (`id_usuario` )
    REFERENCES `id390351_reservacion`.`c_usuario` (`id_usuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `p_reservacion_fk02`
    FOREIGN KEY (`id_estadoReservacion` )
    REFERENCES `id390351_reservacion`.`c_estadoreservacion` (`id_estadoReservacion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id390351_reservacion`.`c_cabania`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_cabania` (
  `id_cabania` INT(11) NOT NULL AUTO_INCREMENT ,
  `cmpnombre` VARCHAR(25) NULL DEFAULT NULL ,
  `cmptarifa` DOUBLE NULL DEFAULT NULL ,
  `cmpdescripcion` VARCHAR(100) NULL DEFAULT NULL ,
  `cmpcantidadPersonas` INT NULL ,
  `cmpimg` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_cabania`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `reservacion`.`c_asignacioncabania`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_asignacioncabania` (
  `id_reservacion` VARCHAR(45) NOT NULL ,
  `id_cabania` INT(11) NOT NULL ,
  PRIMARY KEY (`id_reservacion`, `id_cabania`) ,
  INDEX `c_asignacionCabania_fki01` (`id_cabania` ASC) ,
  INDEX `c_asignacionCabania_fki02` (`id_reservacion` ASC) ,
  CONSTRAINT `c_asignacionCabania_fk01`
    FOREIGN KEY (`id_reservacion` )
    REFERENCES `id390351_reservacion`.`p_reservacion` (`id_reservacion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `c_asignacionCabania_fk02`
    FOREIGN KEY (`id_cabania` )
    REFERENCES `id390351_reservacion`.`c_cabania` (`id_cabania` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `id390351_reservacion`.`c_asignacionreservacionactividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_asignacionreservacionactividad` (
  `id_reservacion` VARCHAR(45) NOT NULL ,
  `id_actividad` INT(11) NOT NULL ,
  PRIMARY KEY (`id_reservacion`, `id_actividad`) ,
  INDEX `c_asignacionPaquete_fki01` (`id_actividad` ASC) ,
  INDEX `c_asignacionPaquete_fki02` (`id_reservacion` ASC) ,
  CONSTRAINT `c_asignacionPaquete_fk01`
    FOREIGN KEY (`id_reservacion` )
    REFERENCES `id390351_reservacion`.`p_reservacion` (`id_reservacion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `c_asignacionPaquete_fk02`
    FOREIGN KEY (`id_actividad` )
    REFERENCES `id390351_reservacion`.`c_actividad` (`id_actividad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `reservacion`.`c_paquete`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_paquete` (
  `id_paquete` INT(11) NOT NULL AUTO_INCREMENT ,
  `cmpnombrePaquete` VARCHAR(25) NULL DEFAULT NULL ,
  `cmptarifa` DOUBLE NULL DEFAULT NULL ,
  `cmpdetalle` VARCHAR(100) NULL DEFAULT NULL ,
  `cmpimg` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_paquete`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `reservacion`.`c_asignacionpaqueteactividad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_asignacionpaqueteactividad` (
  `id_paquete` INT(11) NOT NULL ,
  `id_actividad` INT(11) NOT NULL ,
  PRIMARY KEY (`id_paquete`, `id_actividad`) ,
  INDEX `c_asignacionPaqueteActividad_fki01` (`id_actividad` ASC) ,
  INDEX `c_asignacionPaqueteActividad_fki02` (`id_paquete` ASC) ,
  CONSTRAINT `c_asignacionPaqueteActividad_fk01`
    FOREIGN KEY (`id_paquete` )
    REFERENCES `id390351_reservacion`.`c_paquete` (`id_paquete` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `c_asignacionPaqueteActividad_fk02`
    FOREIGN KEY (`id_actividad` )
    REFERENCES `id390351_reservacion`.`c_actividad` (`id_actividad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `reservacion`.`c_turista`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_turista` (
  `id_usuario` INT(11) NOT NULL ,
  `cmpnumeroTelefono` VARCHAR(15) NULL DEFAULT NULL ,
  `cmplugarOrigen` VARCHAR(45) NULL DEFAULT NULL ,
  `cmpfechaNacimiento` DATE NULL DEFAULT NULL ,
  INDEX `c_turista_fki01` (`id_usuario` ASC) ,
  CONSTRAINT `c_turista_fk01`
    FOREIGN KEY (`id_usuario` )
    REFERENCES `id390351_reservacion`.`c_usuario` (`id_usuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `reservacion`.`c_asignacionReservacionPaquete`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `id390351_reservacion`.`c_asignacionReservacionPaquete` (
  `id_reservacion` VARCHAR(45) NOT NULL ,
  `id_paquete` INT(11) NOT NULL ,
  PRIMARY KEY (`id_reservacion`, `id_paquete`) ,
  INDEX `c_asignacionReservacionPaquete_fki01` (`id_paquete` ASC) ,
  INDEX `c_asignacionReservacionPaquete_fki02` (`id_reservacion` ASC) ,
  CONSTRAINT `c_asignacionReservacionPaquete_fk01`
    FOREIGN KEY (`id_reservacion` )
    REFERENCES `id390351_reservacion`.`p_reservacion` (`id_reservacion` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `c_asignacionReservacionPaquete_fk02`
    FOREIGN KEY (`id_paquete` )
    REFERENCES `id390351_reservacion`.`c_paquete` (`id_paquete` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

USE `id390351_reservacion` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
