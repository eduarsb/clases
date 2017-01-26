#Se crea la base de datos
CREATE DATABASE bd_libros; 
#Se selecciona la base de datos
USE bd_libros;

#Se crean las tablas
CREATE TABLE libro (
  id_libro int(2) NOT NULL AUTO_INCREMENT,
  titulo varchar(25) NOT NULL,
  genero varchar(25) DEFAULT NULL,
  editorial varchar(25) NOT NULL,
  PRIMARY KEY (id_libro)
);



INSERT INTO libro () VALUES (1, '', '', '', '');



ALTER TABLE nombreTabla ADD PRIMARY KEY (id);
ALTER TABLE nombreTabla ADD FOREIGN KEY (id) REFERENCES nombreTabla2 (id2);