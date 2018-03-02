#apocalypse.sql

drop table if exists Adventures;
CREATE TABLE `Adventures` (
  `AdventuresID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
    `Location` varchar(50) DEFAULT NULL,
 `Elevation` int(10),
    `Mileage` varchar(50) DEFAULT NULL,
`Description` text DEFAULT NULL,
  PRIMARY KEY (`AdventuresID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;