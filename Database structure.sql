CREATE DATABASE nestbank;

USE nestbank;

CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    balance DECIMAL(10, 2)
);

CREATE TABLE transactions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    from_customer INT,
    to_customer INT,
    amount DECIMAL(10, 2),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
