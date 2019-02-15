DROP DATABASE IF EXISTS moviereviewdb;
CREATE DATABASE moviereview CHARACTER SET utf8;

DROP user IF EXISTS 'lamp2user'@'localhost';
DROP user IF EXISTS 'lamp2user'@'127.0.0.1';
DROP user IF EXISTS 'lamp2user'@'::1';

GRANT all privileges ON moviereviewdb.* TO 'lamp2user'@'localhost' IDENTIFIED BY 'Test123!';
GRANT all privileges ON moviereviewdb.* TO 'lamp2user'@'127.0.0.1' IDENTIFIED BY 'Test123!';
GRANT all privileges ON moviereviewdb.* TO 'lamp2user'@'::1' IDENTIFIED BY 'Test123!';


USE moviereviewdb;

DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `path_endPoints`;
DROP TABLE IF EXISTS `path_midPoints`;


CREATE TABLE `path_general`
(
	`path_ID` int(11) not null auto_increment,
	`path_name` varchar(100) not null unique,
	`path_length` float(4,1) not null,
	`description` varchar(255) not null,
	`note` text(65534),
	 primary key (`path_ID`)
);

CREATE TABLE `path_endPoints`
(
	`path_endpt_ID` int(11) not null auto_increment,
	`path_ID` int(11) not null,
	`dist_from_start` float(6,4) not null,
	`grd_height` float(6,4) not null,
	`atn_height` float(6,4) not null,
	primary key(`path_endpt_ID`),
	FOREIGN KEY(`path_ID`) REFERENCES path_general(`path_ID`)
);

CREATE TABLE `path_midPoints`
(
	`path_midpt_ID` int(11) not null auto_increment,
	`path_ID` int(11) not null,
	`dist_from_start` float(6,4) not null,
	`grd_height` float(6,4) not null,
	`trn_type` varchar(50) not null,
	`obstr_height` float(6,4) not null,
	`obstr_type` varchar(50) not null,
	primary key(`path_midpt_ID`),
	FOREIGN KEY(`path_ID`) REFERENCES path_general(`path_ID`)
);
