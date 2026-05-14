CREATE DATABASE lampapp;

USE lampapp;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO users(name,email)
VALUES
('Sayali','sayali@gmail.com'),
('Ashutosh','ashu@gmail.com');