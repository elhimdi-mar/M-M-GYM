CREATE DATABASE GymDatabase;
USE GymDatabase;

CREATE TABLE UserInformation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    region VARCHAR(100) NOT NULL,
    ville VARCHAR(100) NOT NULL,
    salle VARCHAR(100) NOT NULL,
    date_naissance DATE NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
