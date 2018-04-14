CREATE TABLE `anime_list` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `rating` DECIMAL(10,1) NULL,
    `status` VARCHAR(15) NULL,
    `description` TEXT NULL,
    `image` MEDIUMBLOB NULL,
    `year` INT NULL DEFAULT '0',
    `popularity` INT NULL DEFAULT '0',
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;