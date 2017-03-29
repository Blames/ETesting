DROP DATABASE IF EXISTS ETesting;

CREATE DATABASE ETesting;

USE ETesting;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Copain
#------------------------------------------------------------

CREATE TABLE Copain(
        id      int (11) Auto_increment  NOT NULL ,
        name    Varchar (15) ,
        surname Varchar (15) ,
        price   Decimal (15) NOT NULL ,
        bonobo  Bool ,
        PRIMARY KEY (id )
)ENGINE=InnoDB;


INSERT INTO Copain (id, name, surname, price, bonobo) VALUES 
(NULL, 'Baptiste', 'Dinahet', 5, false),
(NULL, 'Maxence', 'Jolly', 5, true);
 