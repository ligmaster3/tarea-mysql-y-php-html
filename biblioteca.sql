CREATE DATABASE Biblioteca
USE Biblioteca

create table Libro(
IdLibro int identity not null
primary key,
Titulo nvarchar(100) not null,
Editorial nvarchar(100) not null,
Area nvarchar(100) not null,
)

create table Prestamo(
IdLector int not null Foreign key
(IdLector) References
Estudiante(IdLector),
IdLibro int not null Foreign key
(IdLibro) References Libro(IdLibro),
FechaPrestamo nchar(8),
FechaDevolución nchar(8),
Devuelto nchar(8),)

create table LibAut(
IdAutor int not null foreign key
(IdAutor) References Autor(IdAutor),
IdLibro int foreign key
(IdLibro) References Libro(IdLibro),
)

create table Autor (
IdAutor int identity not null
primary key,
Nombre nvarchar(100) not null,
Nacionalidad nvarchar(30) not null,
)

create table Estudiante(
IdLector int identity not null
primary key,
CI nvarchar(20) not null,
Nombre nvarchar(100) not null,
Direccíon nvarchar(100) not null,
Carrera nvarchar(60) not null,
Edad int not null,
)

