create database usuario;
CREATE TABLE usuario(
    `id_usuario` int(11) not null primary key AUTO_INCREMENT,
    `nome` varchar(1055) NOT NULL,
    `nasc` date NOT NULL,
    `cep` varchar(9) NOT NULL,
    `num` varchar(5) NOT NULL,
    `email` varchar(150) NOT NULL,
    `fixo` varchar(13),
    `cel` varchar(14),
    `senha` varchar(15) not null,
    `nick` varchar(20) NOT NULL
);
insert into `usuario`(`id_usuario`,`nome`,`nasc`,`cep`,`num`,`email`,`fixo`,`cel`,`senha`,`nick`)
	values (1,'Prima viajante','2005-01-25','12345-678','123','email@dominio.com','(12)3456-7890','(10)98765-4321','key','caos');