CREATE DATABASE cadastros;
USE cadastros;

CREATE TABLE carro (
	id int primary key auto_increment,
    marca varchar (100),
    modelo varchar (10),
    placa char (7)
);

CREATE TABLE moto (
	id int primary key auto_increment, 
    marca varchar (100),
    modelo varchar (100),
    placa char (7)
);

CREATE TABLE tipo (
	id_tipo int not null auto_increment,
    tipo varchar (50) not null,
    marca varchar (100) not null,
    modelo varchar (100) not null,
    lugares int unsigned not null,
    primary key (id_tipo)
);

CREATE TABLE usuario (
	id_usuario int primary key auto_increment,
    nome varchar (100) not null,
    cidade varchar (100) not null,
    telefone char (11) not null
);

CREATE TABLE animal(
	id int primary key auto_increment,
    nome varchar (100),
    raca varchar (100),
    cor varchar (100)
);
