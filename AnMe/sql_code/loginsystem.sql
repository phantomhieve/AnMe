CREATE TABLE users(
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_pass VARCHAR(255) NOT NULL,
    user_moderator BIT DEFAULT 0,
    user_age INT(3) DEFAULT NULL,
    user_sex BIT DEFAULT NULL
);