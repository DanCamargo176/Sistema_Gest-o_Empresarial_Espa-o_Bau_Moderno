-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jan-2017 às 22:18
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_baumoderno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_administrador`
--

CREATE TABLE IF NOT EXISTS `tb_administrador` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_administrador`
--

INSERT INTO `tb_administrador` (`id`, `nome`, `usuario`, `senha`) VALUES
(2, 'Daniel Campos Camargo', 'Administrador', 'admin'),
(3, 'Elisangela Fernandes', 'Elisangela', 'lybaumoderno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_nasc` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `vip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nome`, `email`, `data_nasc`, `cpf`, `rg`, `tel`, `endereco`, `numero`, `bairro`, `cep`, `cidade`, `estado`, `obs`, `vip`) VALUES
(7, 'Vitória Sarah Camila Nascimento', 'vitoria-sarah95@gm.com', '1991-02-02', '669.644.528-50', '42.522.700-5', '(19) 3905-1986', 'Rua Ângelo Sinotti', '525', 'Jardim Olímpio Felício', '13632-093', 'Pirassununga', 'SP', 'Celular para Contato: (19) 98142-5100;\r\nValor em Aberto: 150R$;\r\n', 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedor`
--

CREATE TABLE IF NOT EXISTS `tb_fornecedor` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `i_e` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `contato` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`id`, `nome`, `usuario`, `senha`) VALUES
(5, 'Daniel Camargo', 'Daniel', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_novidades`
--

CREATE TABLE IF NOT EXISTS `tb_novidades` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
