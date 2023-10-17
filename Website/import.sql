DROP DATABASE IF EXISTS `bit_fcm`;

CREATE DATABASE `bit_fcm`;

USE `bit_fcm`;

CREATE TABLE `event` ( 
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    event_name VARCHAR(100) NOT NULL, 
    event_date DATE NOT NULL, 
    event_summary TEXT NOT NULL 
);