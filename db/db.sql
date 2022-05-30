SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `ReBurger` DEFAULT CHARACTER SET utf8 ;
USE `ReBurger` ;

-- -----------------------------------------------------
-- Table `ReBurger`.`utente`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `ReBurger`.`utente` (
  `idutente` INT NOT NULL AUTO_INCREMENT UNIQUE,
  `username` VARCHAR(15) NOT NULL UNIQUE,
  `password` VARCHAR(24) NOT NULL,
  `email` VARCHAR(30) NOT NULL UNIQUE,
  `telefono` VARCHAR(13) NULL UNIQUE,
  `matricola` VARCHAR(10),
  `img` VARCHAR(100),
  UNIQUE INDEX `uc_username` (`username` ASC),
  UNIQUE INDEX `uc_telefono` (`telefono` ASC),
  UNIQUE INDEX `uc_email` (`email` ASC),
  PRIMARY KEY (`idutente`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `ReBurger`.`ordine`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `ReBurger`.`ordine` (
  `idordine` INT NOT NULL AUTO_INCREMENT UNIQUE,
  `utente` INT,
  `prezzo` INT DEFAULT 0,
  `data_ordine` DATE DEFAULT current_timestamp(),
  `ora_ordine` TIME DEFAULT current_timestamp(),
  `stato` INT(1) DEFAULT 0, -- diamo qualche valore con una cifra per lo stato dell'ordine, a seconda del valore compare una stringa adeguata.
  `pagamento` INT(1) DEFAULT 1, -- valori da 1 a 3 per determinare se paga in loco, online o coupon ER.G
  PRIMARY KEY (`idordine`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `ReBurger`.`spedizione`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `ReBurger`.`carrello` (
  `idcarrello` INT NOT NULL AUTO_INCREMENT UNIQUE,
  `idordine` INT NOT NULL,
  `nome` VARCHAR(30) NOT NULL,
  `quantita` INT(20) DEFAULT 1)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `ReBurger`.`venditore`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `ReBurger`.`venditore` (
  `idvenditore` INT NOT NULL AUTO_INCREMENT UNIQUE, -- codice venditore formato da 4 cifre diverso dallo stutente/cliente che è 5.
  `utente` INT NOT NULL UNIQUE,
  `indirizzo` VARCHAR(54) NOT NULL,
  `P_IVA` INT (11) NOT NULL,
  `descrizione` VARCHAR(2048) NOT NULL,
  `descrizione1` VARCHAR(2048) NOT NULL,
  `descrizione2` VARCHAR(2048) NOT NULL,
  `descrizione3` VARCHAR(2048) NOT NULL,
  `nome` VARCHAR(20) NOT NULL,
   `img` VARCHAR(30) NOT NULL,
   `logo` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idvenditore`),
  CONSTRAINT `fk_utente_venditore`
    FOREIGN KEY (`utente`)
    REFERENCES `ReBurger`.`utente` (`idutente`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `ReBurger`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ReBurger`.`categoria` (
  `idcategoria` INT NOT NULL AUTO_INCREMENT,
  `nomecategoria` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`idcategoria`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `ReBurger`.`prodotto`
-- -----------------------------------------------------

CREATE TABLE IF NOT EXISTS `ReBurger`.`prodotto` (
  `idprodotto` INT NOT NULL AUTO_INCREMENT UNIQUE,
  `venditore` INT NOT NULL,
  `nome` VARCHAR(20) NOT NULL UNIQUE,
  `descrizione` VARCHAR(512) NOT NULL,
  `categoria` INT NOT NULL,
  `prezzo` INT(3) NOT NULL DEFAULT 0,
	`img` VARCHAR(100),
  PRIMARY KEY (`idprodotto`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `ReBurger`.`referral`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ReBurger`.`referral` (
  `idreferral` INT NOT NULL AUTO_INCREMENT,
  `idinvitato` INT NOT NULL,
  `idinvitante` INT NOT NULL,
  `matinvitato` INT NOT NULL,
  `matinvitante` INT NOT NULL,
  PRIMARY KEY (`idreferral`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `ReBurger`.`notizie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ReBurger`.`notizie` (
  `idnews` INT NOT NULL AUTO_INCREMENT,
  `titolo` VARCHAR(20) NOT NULL,
  `contenuto` VARCHAR(100) NOT NULL,
  `immagine` VARCHAR(20),
  PRIMARY KEY (`idnews`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `ReBurger`.`carte` (
  `idcarta` INT NOT NULL AUTO_INCREMENT,
  `titolare` VARCHAR(20) NOT NULL,
  `numero` VARCHAR(20) NOT NULL,
  `cvc` VARCHAR(20),
  PRIMARY KEY (`idcarta`))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
