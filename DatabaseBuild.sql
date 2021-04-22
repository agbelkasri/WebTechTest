-- ===================================================================
-- Something Something Tickets
-- ===================================================================

-- -------------------------------------------------------------------
-- Save selected MySQL settings
-- -------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -------------------------------------------------------------------
-- Delete and create database
-- -------------------------------------------------------------------
DROP SCHEMA IF EXISTS `dbTickets` ;
CREATE SCHEMA IF NOT EXISTS `dbTickets` DEFAULT CHARACTER SET utf8;

-- -------------------------------------------------------------------
-- Switch to dbTickets database
-- -------------------------------------------------------------------
USE dbTickets;

-- -------------------------------------------------------------------
-- Delete and create table `dbTickets`.`tbTickets`
-- -------------------------------------------------------------------
DROP TABLE IF EXISTS `dbTickets`.`tbTickets` ;
CREATE TABLE IF NOT EXISTS `dbTickets`.`tbTickets` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Event` VARCHAR(60) NOT NULL,
  `EventDate` VARCHAR(20) NOT NULL,
  `Tickets` INT NOT NULL,
  `Total` DECIMAL(15,2) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

-- -------------------------------------------------------------------
-- Insert data into table
-- -------------------------------------------------------------------
INSERT INTO tbTickets (Name, Event, EventDate, Tickets, Total) VALUES 
  ('John Cena',	'The Beatles', '4/20/4020', 3, 120.22),
  ('Ben Dover',	'Linkin Park', '4/21/4020', 2, 80.00),
  ('Seymour Butts',	'Smash Mouth', '4/22/4020', 5, 250.00),
  ('Jack Miov',	'Paramore', '4/23/4020', 1, 10.00),
  ('Ligma',	'Roach', '4/24/4020', 3, 80.00);
SELECT * FROM tbTickets;

-- -----------------------------------------------------
-- Restore saved MySQL settings
-- -----------------------------------------------------
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
