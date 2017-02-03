#Se crea la base de datos
CREATE DATABASE bd_libros; 
#Se selecciona la base de datos
USE bd_libros;

#Se crean las tablas
CREATE TABLE editorial (
	id_editorial int(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(25) NOT NULL
);

CREATE TABLE libro (
  id_libro int(2) NOT NULL AUTO_INCREMENT,
  titulo varchar(25) NOT NULL,
  genero int(2) DEFAULT NULL,
  editorial int(2) NOT NULL,
  PRIMARY KEY (id_libro),
  FOREIGN KEY (editorial) REFERENCES editorial(id_editorial)
);


CREATE TABLE genero (
  id_genero int(2) NOT NULL,
  genero varchar(15) NOT NULL
);


ALTER TABLE genero ADD PRIMARY KEY (id_genero);
ALTER TABLE libro ADD FOREIGN KEY (genero) REFERENCES genero(id_genero);


INSERT INTO editorial (nombre) VALUES ('salamanca');
INSERT INTO genero (id_genero, genero) VALUES (1,'fantasia');
INSERT INTO libro (titulo, genero, editorial) VALUES ('harry', 1, 1);