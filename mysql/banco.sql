create database cardapio;
 
use cardapio;

create table cardapio(
id int not null AUTO_INCREMENT PRIMARY KEY,
dia date not null,
tipo varchar (15)
);

create table refeicao(
id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
nome varchar(100) not null,
data_refeicao date not null,
tipo_refeicao int not null, 
id_ingredientes json NOT NULL
);

create table ingredientes(
id int not null AUTO_INCREMENT PRIMARY KEY,
nome varchar(100) not null,
calorias int not null
);

create table nutricionista(
id int not null AUTO_INCREMENT PRIMARY KEY,
nome varchar(100),
crn varchar(50),
usuario varchar(100) not null,
senha varchar(100) not null
);

create table usuario(
id int not null AUTO_INCREMENT PRIMARY KEY,
nome varchar(100),
email varchar(100) not null,
senha varchar(100) not null
);



ALTER TABLE refeicao ADD CONSTRAINT FK_RefeicaoIngrediente FOREIGN KEY (id_ingredientes) REFERENCES ingredientes (id);

