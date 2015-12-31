CREATE DATABASE `Fablab` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Fablab`;


CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `UtilisateurId` int NOT NULL AUTO_INCREMENT,
  `UtilisateurPrenom` varchar(50) NOT NULL,
  `UtilisateurNom` varchar(50) NOT NULL,
  `UtilisateurEmail` varchar(50) NOT NULL,
  `UtilisateurMDP` varchar(50) NOT NULL,
  `UtilisateurTelephone` varchar(50) NOT NULL,
  `UtilisateurStatus` int(1) NOT NULL,
  PRIMARY KEY (`UtilisateurId`)
) ENGINE=Innodb DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `Reservation` (
  `ReservationId` iint NOT NULL AUTO_INCREMENT,
  `ReservationDate` DATE NOT NULL,
  `ReservationTemps` varchar(50) NOT NULL,
  `ReservationUtilisateurId` int(5) NOT NULL,
  PRIMARY KEY (`ReservationId`),
  FOREIGN KEY (`ReservationUtilisateurId`) REFERENCES Utilisateur(`UtilisateurId`)
) ENGINE=Innodb DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `Machine` (
  `MachineId` int NOT NULL AUTO_INCREMENT,
  `MachineNom` varchar(50) NOT NULL,
  `MachineDescription` text NOT NULL,
  `MachinePhoto` LONGBLOB NOT NULL,
  `MachineUtilisateurId` int(5) NOT NULL,
  `MachineReservationId` int(5) NOT NULL,
  PRIMARY KEY (`MachineId`),
  FOREIGN KEY (`MachineUtilisateurId`) REFERENCES Utilisateur(`UtilisateurId`),
  FOREIGN KEY (`MachineReservationId`) REFERENCES Reservation(`ReservationId`)
) ENGINE=Innodb DEFAULT CHARSET=utf8;


INSERT DELAYED IGNORE INTO `user` (`UtilisateurId`,`UtilisateurPrenom`,`UtilisateurNom`,`UtilisateurEmail`,`UtilisateurMDP`,`UtilisateurTelephone`,`UtilisateurStatus`) VALUES
(00001,'Admin','Admin','admin@admin.com','123456','0660053575',0);
INSERT DELAYED IGNORE INTO `user` (`UtilisateurId`,`UtilisateurPrenom`,`UtilisateurNom`,`UtilisateurEmail`,`UtilisateurMDP`,`UtilisateurTelephone`,`UtilisateurStatus`) VALUES
(00002,'Prof','Prof','prof@prof.com','123456','+33660053575',1);
INSERT DELAYED IGNORE INTO `user` (`UtilisateurId`,`UtilisateurPrenom`,`UtilisateurNom`,`UtilisateurEmail`,`UtilisateurMDP`,`UtilisateurTelephone`,`UtilisateurStatus`) VALUES
(00003,'Etudiant','Etudiant','etudiant@etudiant.com','123456','0033660053575',2);
