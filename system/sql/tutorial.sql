CREATE TABLE users (
    Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Age int,
    NIC varchar(20),
    Phone varchar(15),
    Address varchar(255),
    Password varchar(255),
    CV varchar(255) -- Added a column to store the CV file name
);

CREATE TABLE employers (
    Id int PRIMARY KEY AUTO_INCREMENT,
    BusinessName varchar(200),
    Email varchar(200) UNIQUE,
    BusinessRegNo varchar(100),
    Phone varchar(15),
    Password varchar(255),
    Details TEXT
);


