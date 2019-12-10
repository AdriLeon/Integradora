drop database if exists  calendario;
create database calendario;
use calendario;
drop TABLE if exists tcalendario;
CREATE TABLE `tcalendario` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `fecha` date NOT NULL,
 `evento` varchar(30) NOT NULL,
 PRIMARY KEY (`id`))
