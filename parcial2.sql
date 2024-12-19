create DATABASE PARCIAL2;

use PARCIAL2;

CREATE TABLE CLIENTE
 (
Idcliente int  primary key,
 Nombre varchar (25),
 puntos int,
 numcompras int
 );
 
 CREATE TABLE compras
 (
idcompras int PRIMARY KEY,
FOREIGN KEY  (Cliente) REFERENCES Cliente (idcliente),
FOREIGN KEY (ALMACEN) REFERENCES Cliente (idalmacen),
totalcompra decimal (5,2)
);

CREATE TABLE almacen
(
idalmacen int PRIMARY KEY,
clientenombretitular varchar (100),
puntaje int,
montominimo decimal (5,2)
);
 
