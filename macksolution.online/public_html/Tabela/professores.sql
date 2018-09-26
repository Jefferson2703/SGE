-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Set-2018 às 19:17
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sge`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `nascimento` varchar(255) NOT NULL,
  `formacao` varchar(255) NOT NULL,
  `graduacao` varchar(255) NOT NULL,
  `pos_graduacao` varchar(255) NOT NULL,
  `mestrado` varchar(255) NOT NULL,
  `doutorado` varchar(255) NOT NULL,
  `salario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `code`, `status`, `nome`, `cpf`, `nascimento`, `formacao`, `graduacao`, `pos_graduacao`, `mestrado`, `doutorado`, `salario`) VALUES
(14, '87415978', 'Ativo', 'Jefferson Guerra de Santana', '888.888.888-88', '12122012', 'Superior Completo', 'Sistemas da InformaÃ§Ã£o', '', '', '', '7000'),
(15, '87416733', 'Ativo', 'Matheus Ferraz', '999.999.999-99', '14142014', 'Ensino MÃ©dio Incompleto', 'HistÃ³ria', '', '', '', '1500'),
(16, '87417489', 'Ativo', 'Breno Vasconcelos ', '777.777.777-77', '15152015', 'Superior Completo', 'CiÃªncias da ComputaÃ§Ã£o ', '', '', '', '7000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
