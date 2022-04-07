CREATE TABLE `user_info` (
  `id` int(11) auto_increment,
  `name` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `area` varchar(255),
  `address` varchar(255),
  PRIMARY KEY (`id`),
  KEY `UNIQUE` (`email`)
);

CREATE TABLE `car_info` (
  `id` int(11) auto_increment,
  `driver_name` varchar(255),
  `images` varchar(255),
  `car_no` varchar(255),
  `phone` varchar(255),
  `email` varchar(255),
  `role` varchar(255),
  `assigned_area` varchar(255),
  `password` varchar(255),
  `availablity` varchar(255),
  PRIMARY KEY (`id`),
  KEY `UNIQUE` (`email`)
);

CREATE TABLE `complains` (
  `id` int(11) auto_increment,
  `name` varchar(255),
  `car_no` varchar(255),
  `description` varchar(255),
  PRIMARY KEY (`id`)
);

CREATE TABLE `actv_booking` (
  `id` int(11) auto_increment,
  `car_id` int(11),
  `user_id` int(11),
  `order_id` varchar(255),
  `status` varchar(255),
  `str_time` datetime,
  `end_time` datetime,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `user_info`(`id`),
  FOREIGN KEY (`car_id`) REFERENCES `car_info`(`id`),
  KEY `UNIQUE` (`order_id`)
);

CREATE TABLE `sensor1` (
  `id` int(11) auto_increment,
  `usr_id` int(11),
  `dt_tm` datetime,
  `snr_val` varchar(255),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usr_id`) REFERENCES `user_info`(`id`)
);

CREATE TABLE `sensor2` (
  `id` int(11) auto_increment,
  `usr_id` int(11),
  `dt_tm` datetime,
  `snr_val` varchar(255),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usr_id`) REFERENCES `user_info`(`id`)
);

CREATE TABLE `sensor3` (
  `id` int(11) auto_increment,
  `usr_id` int(11),
  `dt_tm` datetime,
  `snr_val` varchar(255),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usr_id`) REFERENCES `user_info`(`id`)
);

CREATE TABLE `sensor4` (
  `id` int(11) auto_increment,
  `usr_id` int(11),
  `dt_tm` datetime,
  `snr_val` varchar(255),
  PRIMARY KEY (`id`),
  FOREIGN KEY (`usr_id`) REFERENCES `user_info`(`id`)
);

