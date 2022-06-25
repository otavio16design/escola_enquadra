# SQL Manager 2007 Lite for MySQL 4.4.2.1
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : db200049


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `db200049`
    CHARACTER SET 'latin1'
    COLLATE 'latin1_swedish_ci';

USE `db200049`;

#
# Structure for the `tb_aluno` table : 
#

CREATE TABLE `tb_aluno` (
  `alu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `alu_nome` varchar(120) DEFAULT NULL,
  `alu_data_nascimento` date DEFAULT NULL,
  `alu_sexo` char(20) DEFAULT NULL,
  `alu_cep` int(8) DEFAULT NULL,
  `alu_logradouro` varchar(128) DEFAULT NULL,
  `alu_numero` varchar(10) DEFAULT NULL,
  `alu_complemento` varchar(255) DEFAULT NULL,
  `alu_cidade` varchar(38) DEFAULT NULL,
  `alu_estado` char(2) DEFAULT NULL,
  `alu_email` varchar(180) DEFAULT NULL,
  `alu_telefone` int(14) DEFAULT NULL,
  `alu_celular` varchar(15) DEFAULT NULL,
  `alu_escolaridade` varchar(120) DEFAULT NULL,
  `alu_serie` varchar(10) DEFAULT NULL,
  `alu_ano_conclusao` date DEFAULT NULL,
  `alu_escola` varchar(60) DEFAULT NULL,
  `alu_objetivo` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`alu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_login` table : 
#

CREATE TABLE `tb_login` (
  `log_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `log_nome` varchar(20) DEFAULT NULL,
  `log_login` varchar(20) DEFAULT NULL,
  `log_senha` varchar(30) DEFAULT NULL,
  `log_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `field5` int(11) DEFAULT NULL,
  PRIMARY KEY (`log_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_projetos` table : 
#

CREATE TABLE `tb_projetos` (
  `pro_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pro_descricao` varchar(200) DEFAULT NULL,
  `pro_foto` varchar(250) DEFAULT NULL,
  `pro_status` char(1) DEFAULT NULL,
  `pro_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pro_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_servicos` table : 
#

CREATE TABLE `tb_servicos` (
  `ser_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ser_titulo` varchar(100) DEFAULT NULL,
  `ser_descricao` varchar(160) DEFAULT NULL,
  `ser_icone` varchar(50) DEFAULT NULL,
  `ser_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ser_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Structure for the `tb_skill` table : 
#

CREATE TABLE `tb_skill` (
  `ski_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ski_descricao` varchar(150) DEFAULT NULL,
  `ski_porcentagem` int(11) DEFAULT NULL,
  `ski_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ski_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for the `tb_aluno` table  (LIMIT 0,500)
#

INSERT INTO `tb_aluno` (`alu_codigo`, `alu_nome`, `alu_data_nascimento`, `alu_sexo`, `alu_cep`, `alu_logradouro`, `alu_numero`, `alu_complemento`, `alu_cidade`, `alu_estado`, `alu_email`, `alu_telefone`, `alu_celular`, `alu_escolaridade`, `alu_serie`, `alu_ano_conclusao`, `alu_escola`, `alu_objetivo`) VALUES 
  (5,'Otávio Montalvão','2005-02-22','M',13458584,'Eneide Bocatto de Barros, Jd. Vista Alegre','34','','SBO','SP','om16design@gmail.com',34541500,'19988171316','Ensino Médio + Técnico em Informática','2º','0000-00-00','Politec','Social Media');
COMMIT;

#
# Data for the `tb_login` table  (LIMIT 0,500)
#

INSERT INTO `tb_login` (`log_codigo`, `log_nome`, `log_login`, `log_senha`, `log_data_cadastro`, `field5`) VALUES 
  (3,'otavio','otavio','123','2021-11-12 20:30:42',NULL);
COMMIT;

#
# Data for the `tb_projetos` table  (LIMIT 0,500)
#

INSERT INTO `tb_projetos` (`pro_codigo`, `pro_descricao`, `pro_foto`, `pro_status`, `pro_data_cadastro`) VALUES 
  (4,'Instagram DecorCOmics','fotos/1637361264.png','A','2021-11-19 19:34:24'),
  (5,'Black Friday','fotos/1637361282.png','A','2021-11-19 19:34:42'),
  (6,'Harry Potter','fotos/1637361297.png','A','2021-11-19 19:34:57');
COMMIT;

#
# Data for the `tb_servicos` table  (LIMIT 0,500)
#

INSERT INTO `tb_servicos` (`ser_codigo`, `ser_titulo`, `ser_descricao`, `ser_icone`, `ser_data_cadastro`) VALUES 
  (5,'Designer Gráfico','Design gráfico é um segmento que se projeta soluções funcionais e estética para peças gráficas.','fotos/1637361199.png','2021-11-19 19:33:19'),
  (6,'Social Media','Social media é o segmento que faz a gestão dos perfis de uma empresa nas redes sociais.','fotos/1637361219.png','2021-11-19 19:33:39'),
  (7,'Web Design','Web designer é profissional que desenvolve a parte estética de sites, blogs, sistemas e aplicativos web.','fotos/1637361238.png','2021-11-19 19:33:58');
COMMIT;

#
# Data for the `tb_skill` table  (LIMIT 0,500)
#

INSERT INTO `tb_skill` (`ski_codigo`, `ski_descricao`, `ski_porcentagem`, `ski_data_cadastro`) VALUES 
  (10,'CorelDraw',80,'2021-11-19 19:30:58'),
  (11,'Sony Vegas',50,'2021-11-19 19:31:26'),
  (12,'Photoshop',35,'2021-11-19 19:31:36'),
  (13,'Illustrator',20,'2021-11-19 19:31:49');
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;