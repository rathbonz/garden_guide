DROP TABLE IF EXISTS `user_profile`;
DROP TABLE IF EXISTS `plant_profile`;
DROP TABLE IF EXISTS `user_plant_list`;
DROP TABLE IF EXISTS `month`;
DROP TABLE IF EXISTS `calendar_task`;

-- Create user_profile table

CREATE TABLE `user_profile`(
    `user_profile_id` int(11) AUTO_INCREMENT,
    `first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
    `zip_code` int(11),
    `pin` int(11),
	PRIMARY KEY (`user_profile`)
)ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--Create plant_profile table

CREATE TABLE `plant_profile`(
    `plant_profile_id` int(11) AUTO_INCREMENT,
    `image_location` varchar(255) NOT NULL,
    `plant_name` varchar(255) NOT NULL,
	`gestation` varchar(255) NOT NULL,
    `sun_needs` varchar(255) NOT NULL,
	PRIMARY KEY (`plant_profile_id`)
)ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--Create user_plant_list table

CREATE TABLE `user_plant_list`(
	`user_profile_id` int(11),
	`plant_profile_id` int(11),
	CONSTRAINT fk_upl_user_profile_id FOREIGN KEY (`user_profile_id`) REFERENCES `user_profile`(`user_profile_id`)	ON DELETE CASCADE,
	CONSTRAINT fk_upl_plant_profile_id FOREIGN KEY (`plant_profile_id`)	REFERENCES `plant_profile`(`plant_profile_id`)	ON DELETE CASCADE
);

--Create month table

CREATE TABLE `month`(
    `month_id` int(11) AUTO_INCREMENT,
    `month_name` varchar(255) NOT NULL,
	PRIMARY KEY (`month`)
)ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--Create calendar_task table

CREATE TABLE `calendar_task`(
    `month_id` int(11),
    `plant_profile_id` int(11),
    `task_description` varchar(255) NOT NULL,
	CONSTRAINT fk_ct_month_id FOREIGN KEY (`month_id`) REFERENCES `month`(`month_id`) ON DELETE CASCADE,
    CONSTRAINT fk_ct_plant_profile_id FOREIGN KEY (`plant_profile_id`)	REFERENCES `plant_profile`(`plant_profile_id`)	ON DELETE CASCADE
);

--add items

INSERT INTO `user_profile` (user_profile_id, first_name, last_name, zip_code, pin)
VALUES ("zach", "rathbone", 97006, 2112);

INSERT INTO `plant_profile` (image_location, plant_name, gestation, sun_needs)
VALUES ("carrot.jpg", "carrot", "90 days", "full sun");

INSERT INTO `user_plant_list` (user_profile_id, plant_profile_id)
VALUES ((SELECT user_profile_id FROM user_profile WHERE first_name = "zach"), (SELECT plant_profile_id FROM plant_profile WHERE plant_name = "carrot"));

INSERT INTO `calendar` (month_name)
VALUES ("january"),
        ("february"),
        ("march"),
        ("april"),
        ("may"),
        ("june"),
        ("july"),
        ("august"),
        ("september"),
        ("october"),
        ("november"),
        ("december");

INSERT INTO `calendar_task` (month_id, plant_profile_id, task_description)
VALUES ((SELECT month_id FROM calendar WHERE month_name = "august"), (SELECT plant_profile_id FROM plant_profile WHERE plant_name = "carrot"), "Harvest your carrots as needed, then reseed")
