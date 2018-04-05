CREATE TABLE users(
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(255) NOT NULL,
    user_email VARCHAR(255) NOT NULL,
    user_pass VARCHAR(255) NOT NULL,
    user_moderator BIT DEFAULT 0,
    user_image BLOB,
    user_firstName VARCHAR(255) ,
    user_lastName VARCHAR(255) ,
    user_gender VARCHAR(10) ,
    user_rating INT(3),
    user_contribution INT(11) DEFAULT 0,
);