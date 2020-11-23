create database centroidiomas;
use centroidiomas;

create table estudiante(
	id int(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(40),
    email varchar(40),
	PRIMARY KEY (id)
);
alter table estudiante add ideleccion int;

create table profesor(
	id int(11) NOT NULL AUTO_INCREMENT,
	nombre varchar(40),
    email varchar(40),
	PRIMARY KEY (id)
);
alter table profesor add idioma varchar(40);
alter table profesor add idpleccion int;

create table programacion(
	id int(11) NOT NULL AUTO_INCREMENT,
	inicio varchar(40),
    tipo varchar(40),
	PRIMARY KEY (id)
);
alter table programacion add idp int;

create table leccion(
	id int(11) NOT NULL AUTO_INCREMENT,
    numero int (11),
	estado varchar(40),
    comentarioprof varchar(100),
    comentarioalu varchar(100),
	PRIMARY KEY (id)
);
             
                
                