CREATE DATABASE testepratico DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE `usuarios`( 
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`nome` varchar(80) NOT NULL,
		`cep` int(8) NOT NULL,
		`rua` varchar(80) NOT NULL,
		`num` int(4) NOT NULL,
		`compl` varchar(50),
		`bairro` varchar(50) NOT NULL,
		`cidade` varchar(50) NOT NULL,
		`estado` varchar(50) NOT NULL,
		`tele` varchar(12) NOT NULL,
		`tele0` varchar(12),
	PRIMARY KEY (`id`))
	ENGINE=MyISAM DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci  AUTO_INCREMENT=1 ;
			
INSERT INTO `usuarios` (`id`, `nome`, `cep`, `rua`,`num`,`compl`,`bairro`, `cidade`, `estado`,`tele`,`tele0`) VALUES
(1, 'Programa de Paula', '85040100', 'Rua Oscar Bezerra', '123', 'Anexo Empresa', 'Vila Carli', 'Guarapuava', 'PR','4236210000', '42988084884'),
('', 'Teste da Silva', '85010100', 'Rua Senador Pinheiro Machado', '1002', '', 'Centro', 'Guarapuava', 'PR','4236210808','');