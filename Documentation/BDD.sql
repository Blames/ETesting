DROP DATABASE IF EXISTS copain;

CREATE DATABASE copain;
USE copain;

CREATE TABLE copain(
id	int(11) Auto_increment NOT NULL,
name varchar(50) NOT NULL,
surname varchar (50) NOT NULL,
price decimal,
bonobo boolean,

PRIMARY KEY (id)
) ENGINE=InnoDB;

INSERT INTO copain (id, name, surname, price, bonobo) VALUES 
(NULL, 'Baptiste', 'Dinahet', 5, false),
(NULL, 'Maxence', 'Jolly', 5, true);
