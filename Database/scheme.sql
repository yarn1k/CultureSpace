CREATE TABLE `Events` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(100),
	`type_id` INT NOT NULL,
	`date` DATETIME NOT NULL,
	`address` varchar(50),
	`photo_link` varchar(200),
	`description` TEXT,
	`city_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `EventTypes` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Cities` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`email` varchar(100) NOT NULL,
	`password` varchar(50) NOT NULL,
	`first_name` varchar(100) NOT NULL,
	`surname` varchar(50) NOT NULL,
	`patronymic` varchar(50) NOT NULL,
	`is_organizer` BOOLEAN NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Subscriptions` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(50),
	`event_type` INT(50),
	`city` INT(50),
	`event_name` varchar(100),
	PRIMARY KEY (`id`)
);

CREATE TABLE `Registrations` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`event_id` INT NOT NULL,
	`user_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Events` ADD CONSTRAINT `Events_fk0` FOREIGN KEY (`type_id`) REFERENCES `EventTypes`(`id`);

ALTER TABLE `Events` ADD CONSTRAINT `Events_fk1` FOREIGN KEY (`city_id`) REFERENCES `Cities`(`id`);

ALTER TABLE `Subscriptions` ADD CONSTRAINT `Subscriptions_fk0` FOREIGN KEY (`event_type`) REFERENCES `EventTypes`(`id`);

ALTER TABLE `Subscriptions` ADD CONSTRAINT `Subscriptions_fk1` FOREIGN KEY (`city`) REFERENCES `Cities`(`id`);

ALTER TABLE `Registrations` ADD CONSTRAINT `Registrations_fk0` FOREIGN KEY (`event_id`) REFERENCES `Events`(`id`);

ALTER TABLE `Registrations` ADD CONSTRAINT `Registrations_fk1` FOREIGN KEY (`user_id`) REFERENCES `Users`(`id`);