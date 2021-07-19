-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jul-2021 às 22:43
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_candidatos`
--

CREATE TABLE `tb_candidatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `resumoEntrevista` varchar(500) NOT NULL,
  `logradouro` varchar(100) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `numeroRua` varchar(20) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `cep` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_candidatos`
--

INSERT INTO `tb_candidatos` (`id`, `nome`, `email`, `telefone`, `resumoEntrevista`, `logradouro`, `bairro`, `numeroRua`, `complemento`, `cidade`, `estado`, `cep`) VALUES
(18, 'Luis Alves Braga', 'alvesluis@gmail.com', '119654234', 'ótima.', 'Rua Portal Ecológico', 'Pedreira', '12', '', 'São Paulo', 'SP', '04470094'),
(19, 'Filipe Alves', 'filipealves@gmail.com', '11952762453', 'Ele estava muito nervoso, mas mostrou-se muito interessado e possui alguns conhecimentos básicos para a area', 'Rua Eurico Franco de Siqueira', 'Jardim Bandeirantes', '342', '', 'São Paulo', 'SP', '04470315'),
(21, 'Fernando Gomes', 'gomesfernando@gmail.com', '11952762453', 'Ótimo', 'Rua Eurico Franco de Siqueira', 'Jardim Bandeirantes', '342', '', 'São Paulo', 'SP', '04470315');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_candidatos`
--
ALTER TABLE `tb_candidatos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `telefone` (`telefone`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_candidatos`
--
ALTER TABLE `tb_candidatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
