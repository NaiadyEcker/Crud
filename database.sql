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
