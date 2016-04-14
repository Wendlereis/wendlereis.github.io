-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2015 às 15:59
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `cod_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(55) NOT NULL,
  `contato` varchar(15) NOT NULL,
  PRIMARY KEY (`cod_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nome_cliente`, `contato`) VALUES
(1, 'Marco Alexandre', '96212212'),
(2, 'Carlos Castro', '91121312'),
(3, 'Vitor Santos', '96231221'),
(4, 'Manuel Silva', '93545444'),
(5, 'Valter lemos', '93232332'),
(6, 'Pedro Castro', '91234324'),
(7, 'Lurdes Carlos', '96342333'),
(8, 'Leonel Santos', '96234344'),
(9, 'Pedro Rios', '91233232'),
(10, 'Teresa santos', '93343343'),
(11, 'Artur Dias', '91342343');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faleconosco`
--

CREATE TABLE IF NOT EXISTS `faleconosco` (
  `idFaleconosco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensagem` varchar(250) NOT NULL,
  PRIMARY KEY (`idFaleconosco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `faleconosco`
--

INSERT INTO `faleconosco` (`idFaleconosco`, `nome`, `email`, `mensagem`) VALUES
(1, 'wendler', 'teste@teste.com', '0'),
(2, 'dfdgdfg', 'teste@teste.com', '0'),
(3, 'asdfgh', 'teste@teste.com', '0'),
(4, 'asdfgh', 'teste@teste.com', 'dasdasdasdasdasd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE IF NOT EXISTS `funcionarios` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`idFuncionario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idFuncionario`, `nome`, `email`, `senha`) VALUES
(1, 'Wendler', 'teste@teste.com', '123'),
(2, 'Lipi', 'lipi@fiap.com', '123'),
(3, 'Rick', 'rick@fiap.com', '123'),
(4, 'José', 'jose@fiap.com', '123'),
(5, 'Tiago', 'tiago@fiap.com', '123'),
(6, 'Felipe', 'felipe@fiap.com', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `cod_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(21) NOT NULL,
  `categoria` varchar(21) NOT NULL,
  `preco` decimal(5,2) NOT NULL,
  PRIMARY KEY (`cod_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10029 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`cod_produto`, `nome_produto`, `categoria`, `preco`) VALUES
(10001, 'INTEL Celeron D325 25', 'Processador', '76.00'),
(10002, 'INTEL Celeron D330 26', 'Processador', '81.00'),
(10003, 'INTEL Celeron D335 28', 'Processador', '91.00'),
(10004, 'INTEL Celeron D340 29', 'Processador', '100.00'),
(10005, 'INTEL P4 2.8A Ghz FSB', 'Processador', '173.00'),
(10006, 'INTEL P4 3.0E Ghz FSB', 'Processador', '196.00'),
(10007, 'INTEL P4 3.2E Ghz FSB', 'Processador', '229.00'),
(10008, 'INTEL Celeron D 330J ', 'Processador', '82.00'),
(10009, 'INTEL Celeron D 340J ', 'Processador', '102.00'),
(10010, 'INTEL Pentium 4 520 2', 'Processador', '170.00'),
(10011, 'INTEL Pentium 4 531 3', 'Processador', '185.00'),
(10012, 'INTEL Pentium 4 630 3', 'Processador', '187.00'),
(10013, 'INTEL Pentium 4 640 3', 'Processador', '228.00'),
(10014, 'INTEL Pentium 4 650 3', 'Processador', '292.00'),
(10015, 'INTEL Pentium 4 660 3', 'Processador', '424.00'),
(10016, 'ASUS NE-S5', 'Placa M', '105.00'),
(10017, 'ASUS A8', 'Placa M', '85.00'),
(10018, 'ASUS P5', 'Placa M', '105.00'),
(10019, 'AMD SEMPRON 2600+ Soc', 'Processador', '66.00'),
(10020, 'AMD SEMPRON 2800+ Soc', 'Processador', '76.00'),
(10021, 'AMD SEMPRON 3100+ Soc', 'Processador', '106.00'),
(10022, 'AMD ATHLON 64Bit 3000', 'Processador', '161.00'),
(10023, 'AMD ATHLON 64Bit 3200', 'Processador', '205.00'),
(10024, 'AMD ATHLON 64Bit 3400', 'Processador', '204.00'),
(10025, 'AMD ATHLON 64Bit 3000', 'Processador', '161.00'),
(10026, 'AMD ATHLON 64Bit 3200', 'Processador', '208.00'),
(10027, 'AMD ATHLON 64Bit 3500', 'Processador', '234.00'),
(10028, 'AMD ATHLON 64Bit 3800', 'Processador', '418.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE IF NOT EXISTS `vendas` (
  `cod_venda` int(11) NOT NULL,
  `data` date NOT NULL,
  `cod_funcionario` int(11) NOT NULL,
  `cod_produto` int(11) NOT NULL,
  `cod_cliente` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`cod_venda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`cod_venda`, `data`, `cod_funcionario`, `cod_produto`, `cod_cliente`, `quantidade`) VALUES
(1, '2005-12-12', 1, 10001, 2, 3),
(2, '2007-01-13', 2, 10002, 3, 5),
(3, '2005-02-13', 1, 10003, 4, 3),
(4, '2005-12-13', 2, 10004, 4, 4),
(5, '2005-12-14', 3, 10005, 4, 1),
(6, '2005-12-15', 2, 10004, 4, 5),
(7, '2005-12-16', 2, 10007, 5, 6),
(8, '2005-12-17', 3, 10004, 4, 3),
(9, '2005-12-18', 5, 10009, 6, 4),
(10, '2007-02-01', 1, 10010, 2, 5),
(11, '2007-02-02', 4, 10005, 3, 6),
(12, '2007-02-03', 3, 10012, 2, 7),
(13, '2007-02-04', 3, 10013, 2, 8),
(14, '2006-05-12', 3, 10003, 2, 3),
(15, '2006-05-13', 3, 10015, 2, 4),
(16, '2006-05-14', 3, 10002, 2, 5),
(17, '2006-05-15', 4, 10017, 5, 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
