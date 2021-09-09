create database ventas;
use ventas;

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