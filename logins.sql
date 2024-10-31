-- Create the database
CREATE DATABASE IF NOT EXISTS UserLogins;

-- Use the newly created database
USE UserLogins;

-- Create the user logins table
CREATE TABLE IF NOT EXISTS user_logins (
    id INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
