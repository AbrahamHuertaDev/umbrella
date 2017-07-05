DROP TABLE adonis_schema;

CREATE TABLE `adonis_schema` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `batch` int(11) DEFAULT NULL,
  `migration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO adonis_schema VALUES("1","1498855622893_users","1","2017-06-30 15:52:18");



DROP TABLE payments;

CREATE TABLE `payments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `trip_id` varchar(255) DEFAULT NULL,
  `description` longtext,
  `ticket` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `hour` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `iva` varchar(255) DEFAULT NULL,
  `tip` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO payments VALUES("2","Mc Donalds","1","Mctrio con papas y refresco","","07-03-2017","02:30","79.00","0","0","MXN","2017-07-03 12:09:43","2017-07-03 12:09:43");
INSERT INTO payments VALUES("3","Mc Donalds","1","Mctrio con papas y refresco","","07-04-2017","02:00","79.00","0.16","10","MXN","2017-07-04 11:28:33","2017-07-04 11:28:33");



DROP TABLE trips;

CREATE TABLE `trips` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date_start` varchar(255) DEFAULT NULL,
  `date_end` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `debt` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `payed` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO trips VALUES("1","1","Viaje a Cordoba","07-03-2017","07-06-2017","activo","0","1400","79","2017-06-30 16:56:44","2017-06-30 16:56:45");



DROP TABLE users;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("1","Abraham Huerta","abrahamhuerta@sivoz.com","4777292071","empleado","activo","$2y$10$m7Qijjkh98W8K1GP.7B2seWW/jmjjOrsI6q9.o65TUlO0do2PqgMG","2017-06-30 16:14:36","2017-07-05 05:43:11");
INSERT INTO users VALUES("2","John Doe","johndoe@sivoz.com","4772654488","admin","activo","$2a$10$KZM/Dk/MuZvTeBTSw.hESu9k0WPZ5VUzIxuKs1kIbyxJzIC81x2Ui","2017-06-30 16:15:07","2017-06-30 16:39:14");



