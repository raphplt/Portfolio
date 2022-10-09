 CREATE DATABASE portfolio CHARACTER SET 'utf8' COLLATE 'utf8_general_ci';

 CREATE TABLE Me (ID INTEGER NOT NULL PRIMARY KEY,
                    Firstname VARCHAR(255) NOT NULL,
                    Lastname VARCHAR(255) NOT NULL,
                    Email VARCHAR(255) NOT NULL,
                    Phone INTEGER(255) NOT NULL,
                    Address VARCHAR(255) NOT NULL,
                    City VARCHAR(255) NOT NULL,
                    Country VARCHAR(255) NOT NULL,
                    Birth_date DATE NOT NULL,
                    Description VARCHAR(255) NOT NULL);

CREATE TABLE Project(ID INTEGER NOT NULL PRIMARY KEY,
                    Title VARCHAR(255) NOT NULL,
                    Description VARCHAR(255) NOT NULL,
                    Picture VARCHAR(255) NOT NULL,
                    Date_created DATE NOT NULL,
                    Date_update DATE NOT NULL,
                    Enabled VARCHAR(255) NOT NULL);


CREATE TABLE Message(ID INTEGER NOT NULL PRIMARY KEY,
                    Subject VARCHAR(255) NOT NULL,
                    Message VARCHAR(255) NOT NULL,
                    From_name VARCHAR(255) NOT NULL,
                    From_email DATE NOT NULL);
                    
CREATE TABLE Users (id INTEGER(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                    username VARCHAR(100) NOT NULL UNIQUE,
                    password VARCHAR(100) NOT NULL,
                    type VARCHAR(100) NOT NULL);

