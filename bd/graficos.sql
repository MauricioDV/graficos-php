create database graficos;
	use graficos;

DROP TABLE IF EXISTS `datos`;

CREATE TABLE `procesos` (
  `gestion` int,
  `cantidad` int,
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*
INSERT INTO `procesos` VALUES 	(2015,1000),
								(2016,1000),
								(2017,1000),
								(2018,1000),
								(2019,1000),
								(2020,1000),
								(2021,1000);


