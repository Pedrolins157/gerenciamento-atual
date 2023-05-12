/* apaga a base de dados */
drop database crud;
/*https://unsplash.com/pt-br - para imagens gratuitas
/* cria uma base de dados */
CREATE DATABASE crud;

USE crud;

CREATE TABLE usuario(
                        cod int auto_increment primary key,
                        nome varchar(50) not null,
                        email varchar(50) not null,
                        dtnasc date not null,
                        cpf char (14) not null,
                        foto varchar (64),
                        login varchar(30) not null unique,
                        senha char(32) not null,
                        perfil enum('adm','user')

);
CREATE TABLE endereco(
                         codEnd int auto_increment primary key,
                         logradouro varchar (200) not null,
                         numero varchar (10) not null,
                         complemento varchar (30),
                         cep char (9) not null,
                         bairro varchar (40) not null,
                         cidade varchar (40) not null,
                         uf char (2)not null,
                         codUsu int unique,
                         foreign key (codUsu) references usuario(cod)
);

INSERT INTO usuario VALUES (NULL, 'pedro', 'pedro@gmail.com','1998-02-10','123.456.789-01','perfil.png','pedrolins',md5('123'),'adm');
INSERT INTO usuario VALUES (NULL, 'lucas', 'lucas@gmail.com','1996-12-26','123.456.789-02','perfil.svg','lucaslins',md5('abc'),'user');
/* primary key -> não pode ser null, nem repetida; */
CREATE TABLE cliente(
                        cod int auto_increment primary key,
                        nome varchar(50) not null,
                        email varchar(50) not null,
                        cpf char(14) not null,
                        estadocivil varchar(10)

);