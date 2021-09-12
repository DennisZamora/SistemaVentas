create database ventas;
use ventas;

CREATE TABLE  rol (
  id INT NOT NULL AUTO_INCREMENT,
  rol VARCHAR(15) NOT NULL,
  descripcionRol VARCHAR(30) NOT NULL,
  PRIMARY KEY (id));

CREATE TABLE usuario (
  idUsuario INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(30) NOT NULL,
  last_name VARCHAR(30) NOT NULL,
  username VARCHAR(30) NOT NULL,
  email VARCHAR(80) NOT NULL,
  contrasena VARCHAR(40) NOT NULL,
  fecha_registro DATETIME NOT NULL DEFAULT current_timestamp,
  idRol int not null,
  PRIMARY KEY (idUsuario),
  CONSTRAINT FK_Usuario_Rol FOREIGN KEY (idRol) REFERENCES rol (id));

create table alquiler(
id int not null auto_increment,
imagen longblob,
ubicacion varchar(100) not null,
descripcion varchar(200) not null,
precio double not null,
PRIMARY KEY(ID)
);

create table ventas(
idVentas int not null auto_increment,
imagen longblob,
ubicacion varchar(100) not null,
descripcion varchar(200) not null,
precio double not null,
PRIMARY KEY(idVentas)
);

create table lotes(
idLotes int not null auto_increment,
imagen longblob,
ubicacion varchar(100) not null,
descripcion varchar(200) not null,
precio double not null,
PRIMARY KEY(idLotes)
);

insert into rol (idRol,descripcionRol) values 
('admin','Administrador'),
('usuario','Usuario regular');

insert into usuario (nombre,last_name,username,email,contrasena,idRol)values
('Dennis','Zamora','dennis','denniszamora@hotmail.com','dennis123',1);

insert into usuario (nombre,last_name,username,email,contrasena,idRol)values
('Jesus','Vargas','jesus','jesusvargas@hotmail.com','jesus123',2);