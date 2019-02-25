DROP DATABASE IF EXISTS moviereviewdb;
CREATE DATABASE moviereviewdb CHARACTER SET utf8;

DROP user IF EXISTS 'movieUser'@'localhost';
DROP user IF EXISTS 'movieUser'@'127.0.0.1';
DROP user IF EXISTS 'movieUser'@'::1';

GRANT all privileges ON moviereviewdb.* TO 'movieUser'@'localhost' IDENTIFIED BY 'Test123!';
GRANT all privileges ON moviereviewdb.* TO 'movieUser'@'127.0.0.1' IDENTIFIED BY 'Test123!';
GRANT all privileges ON moviereviewdb.* TO 'movieUser'@'::1' IDENTIFIED BY 'Test123!';


USE moviereviewdb;

DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `account`;
DROP TABLE IF EXISTS `movie`;
DROP TABLE IF EXISTS `movie_casting`;
DROP TABLE IF EXISTS `actors`;
DROP TABLE IF EXISTS `category`;

create table `account`
(
`account_id` int(4) not null auto_increment,
`first_name` varchar(50) not null,
`last_name` varchar(50) not null,
`email` varchar(50) not null,
primary key(`account_id`)
);

create table user
(
`user_id` int(4) not null auto_increment,
`loginName` varchar(20) not null,
`password` varchar(6) not null,
`rememberMe` bit,
`account_id` int(4) not null,
 'email' varchar (20) not null,
 primary key(`user_id`),
 	FOREIGN KEY(`account_id`) REFERENCES account(`account_id`)
);


create table category(
`category_id` int(4) not null auto_increment,
`category_title` varchar(50),
  primary key(`category_id`)
);

create table movie
(
`movie_id` int(4) not null auto_increment,
`title` varchar(200) not null,
`genre` varchar(200),
`release_year` year,
`country`varchar(50),
`producer`varchar(50),
`runtime` time,
`storyline` text(65534),
`poster` BLOB,
`plot_key_words` varchar(200),
`available_language` varchar(100),
`Director` varchar(255),
`category_id` int(4) not null,
primary key(`movie_id`),
	FOREIGN KEY(`category_id`) REFERENCES category(`category_id`)

);

create table actors
(
`actors_id` int(4) not null auto_increment,
`ActorName` varchar(100) not null,
`ActorPicture` BLOB,
`shortBio` varchar(100),
  primary key(`actors_id`)
);

create table movie_casting
(
`movie_casting_id` int(4) not null auto_increment,
`movie_id` int(4) not null,
`actors_id` int(4) not null,
  primary key(`movie_casting_id`),
	FOREIGN KEY(`movie_id`) REFERENCES movie(`movie_id`),
	FOREIGN KEY(`actors_id`) REFERENCES actors(`actors_id`)
);


create table review
(
`review_id` int(4) not null auto_increment,
`account_id` int(4) not null,
`movie_id` int(4) not null,
`titleReview` varchar(50),
`comment` varchar(255),
`rating` int(1) not null,
  primary key(`review_id`),
	FOREIGN KEY(`account_id`) REFERENCES account(`account_id`),
	FOREIGN KEY(`movie_id`) REFERENCES movie(`movie_id`)
);



