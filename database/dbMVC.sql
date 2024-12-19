CREATE DATABASE sotkage ;
USE sotkage;

CREATE Table produit (
nom VARCHAR(45) NOT NULL,
description TEXT ,
prix INT 
);

USE sotkage;
ALTER Table produit 
ADD COLUMN id int PRIMARY KEY AUTO_INCREMENT;