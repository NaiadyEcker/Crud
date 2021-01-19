create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);

ALTER TABLE users ADD telefone varchar(11);

ALTER TABLE `test`.`users` 
CHANGE COLUMN `telefone` `telefone` VARCHAR(15) NULL DEFAULT NULL ;

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `cadastra` int(1) NOT NULL,
  `edita` int(1) NOT NULL,
  `exclui` int(1) NOT NULL,
  PRIMARY KEY (`id`)
);