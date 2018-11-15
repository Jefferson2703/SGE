-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 15/11/2018 às 14:44
-- Versão do servidor: 10.2.18-MariaDB
-- Versão do PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u499668582_sge`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estudantes`
--

CREATE TABLE `estudantes` (
  `id` int(11) NOT NULL,
  `code` varchar(255) CHARACTER SET latin1 NOT NULL,
  `status` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cpf` varchar(255) CHARACTER SET latin1 NOT NULL,
  `rg` varchar(255) CHARACTER SET latin1 NOT NULL,
  `nascimento` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mae` varchar(255) CHARACTER SET latin1 NOT NULL,
  `pai` varchar(255) CHARACTER SET latin1 NOT NULL,
  `estado` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cidade` varchar(255) CHARACTER SET latin1 NOT NULL,
  `bairro` varchar(255) CHARACTER SET latin1 NOT NULL,
  `endereco` varchar(255) CHARACTER SET latin1 NOT NULL,
  `complemento` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cep` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tel_residencial` varchar(255) CHARACTER SET latin1 NOT NULL,
  `celular` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tel_amigo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `serie` varchar(255) CHARACTER SET latin1 NOT NULL,
  `turno` varchar(255) CHARACTER SET latin1 NOT NULL,
  `atendimento_especial` varchar(255) CHARACTER SET latin1 NOT NULL,
  `mensalidade` varchar(255) CHARACTER SET latin1 NOT NULL,
  `vencimento` varchar(255) CHARACTER SET latin1 NOT NULL,
  `tel_cobranca` varchar(255) CHARACTER SET latin1 NOT NULL,
  `obs` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Fazendo dump de dados para tabela `estudantes`
--

INSERT INTO `estudantes` (`id`, `code`, `status`, `nome`, `cpf`, `rg`, `nascimento`, `mae`, `pai`, `estado`, `cidade`, `bairro`, `endereco`, `complemento`, `cep`, `tel_residencial`, `celular`, `tel_amigo`, `serie`, `turno`, `atendimento_especial`, `mensalidade`, `vencimento`, `tel_cobranca`, `obs`) VALUES
(10, '588168', 'Ativo', 'Matheus', '123', '1231213', '', '', '', '', '', '', '', '', '', '', '', '', 'TADS', 'Manhã', '', '', '', '', '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `estudantes`
--
ALTER TABLE `estudantes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `estudantes`
--
ALTER TABLE `estudantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
