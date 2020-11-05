-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.31 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para recode_sergio
CREATE DATABASE IF NOT EXISTS `recode_sergio` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `recode_sergio`;

-- Copiando estrutura para tabela recode_sergio.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `cliente_nome` varchar(100) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `valor_unidade` varchar(16) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `valor_final` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela recode_sergio.pedidos: 0 rows
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

-- Copiando estrutura para tabela recode_sergio.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `categorias` varchar(50) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `valor_final` varchar(20) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela recode_sergio.produtos: 16 rows
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `categorias`, `produto`, `descricao`, `valor`, `valor_final`, `imagem`) VALUES
	(1, 'Relogios', 'Relogio Xii ', 'Relogio Xii Preto', '5.999,00', '5.000,00', 'imagens/Relogio.1.webp'),
	(2, 'Relogios', 'Relogio Xii ', 'Relogio Xii Azulado', '6.999,00', '6.000,00', 'imagens/reloj_azulasdad_1.jpg'),
	(3, 'Relogios', 'Relogio Xii ', 'Relogio Xii Rosa', '7.999,00', '7.000,00', 'imagens/Relogio3.jpg'),
	(4, 'Relogios', 'Relogio Xii ', 'Relogio Xii Azul', '4.999,00', '4.000,00', 'imagens/relogio22..webp'),
	(5, 'Fones', 'Fone', 'Fone Gatinho', '5.999,00', '5.000,00', 'imagens/fone1.jpg'),
	(6, 'Fones', 'Fone', 'fone Viadi', '6.999,00', '6.000,00', 'imagens/fone2.webp'),
	(7, 'Fones', 'Fone', 'fone mic', '7.999,00', '7.000,00', 'imagens/fonecolor.webp'),
	(8, 'Fones', 'Fone', 'Fone Cor De Rosal', '4.999,00', '4.000,00', 'imagens/fonerosa.jpg'),
	(9, 'Cameras', 'Camera', 'Camera Pride', '5.999,00', '5.000,00', 'imagens/cam4.jpg'),
	(10, 'Cameras', 'Camera', 'Camera rosa', '6.999,00', '6.000,00', 'imagens/cam2.webp'),
	(11, 'Cameras', 'Camera', 'Gol Pride', '7.999,00', '7.000,00', 'imagens/Camera-arco-iris.webp'),
	(12, 'Cameras', 'Camera', 'Camera Azul', '4.999,00', '4.000,00', 'imagens/cam3.jpg'),
	(13, 'Celular', 'Celular', 'Celular Futuro', '5.999,00', '5.000,00', 'imagens/cel1edit.png'),
	(14, 'Celular', 'Celular', 'Cleular da Barbie', '6.999,00', '6.000,00', 'imagens/cel2.webp'),
	(15, 'Celular', 'Celular', 'Celular Pô', '7.999,00', '7.000,00', 'imagens/cel3.jpg'),
	(16, 'Celular', 'Celular', 'Celular Moderno', '4.999,00', '4.000,00', 'imagens/cel4.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
