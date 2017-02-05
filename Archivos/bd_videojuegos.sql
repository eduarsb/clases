#Se crea la base de datos
CREATE DATABASE bd_videojuegos; 
#Se selecciona la base de datos
USE bd_videojuegos;

#Se crean las tablas
CREATE TABLE videojuego (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	titulo  varchar(25) NOT NULL,
	descripcion varchar(255) DEFAULT NULL,
	clasificacion int (1) DEFAULT 0,
	id_tipo int NOT NULL,
	imagen varchar(100) DEFAULT NULL, 
	precio decimal(10,2) DEFAULT
);

CREATE TABLE consola (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(60),
	empresa varchar(60)
);

CREATE TABLE videojuego_consola (
	id_videojuego int NOT NULL,
	id_consola int NOT NULL,
	cantidad int DEFAULT 0
);

CREATE TABLE tipo (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(15) NOT NULL
);


ALTER TABLE videojuego ADD FOREIGN KEY (id_tipo) REFERENCES tipo(id);
ALTER TABLE videojuego_consola ADD FOREIGN KEY (id_videojuego) REFERENCES videojuego(id);
ALTER TABLE videojuego_consola ADD FOREIGN KEY (id_consola) REFERENCES consola(id);

INSERT INTO tipo (nombre) VALUES ('RPG'), ('Shoter'), ('Plataforms');

INSERT INTO consola (nombre, empresa) 
VALUES 
	('PlayStation 3', 'Sony'),
	('PlayStation 4', 'Sony'),
	('Xbox 360', 'Microsoft'), 
	('Xbox One', 'Microsoft'), 
	('Wii U', 'Nintendo'),
	('Switch', 'Nintendo')
;
