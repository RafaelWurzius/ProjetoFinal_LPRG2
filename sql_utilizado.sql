create table cliente(
id integer primary key auto_increment,
nome varchar(50),
matricula varchar(10),
cpf varchar(11)
);

create table alimento(
id integer primary key auto_increment,
nome varchar(50),
preço double
);

create table venda(
id integer primary key auto_increment,
data date,
idCliente integer,
idAlimento integer,
CONSTRAINT idCliente FOREIGN KEY (idCliente) REFERENCES cliente (id),
CONSTRAINT idAlimento FOREIGN KEY (idAlimento) REFERENCES alimento (id)
);