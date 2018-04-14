CREATE TABLE users(
    user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    user_email VARCHAR(50) NOT NULL,
    user_pass TEXT NOT NULL,
    user_moderator BIT DEFAULT 0,
    user_image MEDIUMBLOB,
    user_firstName VARCHAR(15) ,
    user_lastName VARCHAR(15) ,
    user_gender VARCHAR(15) ,
    user_rating DECIMAL(10,1),
    user_contribution INT(11) DEFAULT 0
);